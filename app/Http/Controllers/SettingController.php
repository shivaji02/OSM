<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Setting;
use App\Models\SubscriptionPlan;
use App\Models\User;
use App\Models\Workspace;
use Doctrine\Inflector\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class SettingController extends BaseController
{
    //
    public function settings(Request $request)
    {
        $available_languages = User::$available_languages;
        $workspace = Workspace::find($this->user->workspace_id);
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('settings.settings',[
            'selected_navigation' => 'settings',
            'workspace' => $workspace,
            'total_goals' => $total_goals,
            'available_languages' => $available_languages,



        ]);
    }

    public function settingsPost(Request $request)
    {


        $request->validate([
            'workspace_name'=>'required|max:150',
            'logo' => 'nullable|file|mimes:jpg,png',
            "favicon" => "nullable|file|mimes:jpg,png",
            'currency' => 'nullable|string|size:3'

        ]);

        $workspace = Workspace::find($this->user->workspace_id);

        $workspace->name = $request->workspace_name;
        $workspace->save();

        Setting::updateSettings($this->workspace->id,'currency',$request->currency);
        Setting::updateSettings($this->workspace->id,'language',$request->language);
        Setting::updateSettings($this->workspace->id,'landingpage',$request->landingpage);
        Setting::updateSettings($this->workspace->id,'custom_script',$request->custom_script);
        Setting::updateSettings($this->workspace->id,'meta_description',$request->meta_description);Setting::updateSettings($this->workspace->id,'custom_script',$request->custom_script);
        Setting::updateSettings($this->workspace->id,'meta_description',$request->meta_description);

        if($request->rtl)
        {
            Setting::updateSettings($this->workspace->id,'rtl',1);
        }
        else{
            Setting::removeSettings($this->workspace->id,'rtl');
        }

        Setting::updateSettings($this->workspace->id,'ui',$request->ui);

        if($request->logo)
        {
            $path = $request->file('logo')->store('media', 'uploads');
            Setting::updateSettings($this->workspace->id,'logo',$path);
        }
        if($request->favicon)
        {
            $path = $request->file('favicon')->store('media', 'uploads');
            Setting::updateSettings($this->workspace->id,'favicon',$path);
        }



        if($this->user->super_admin)
        {
            $free_trial_days = $request->free_trial_days ?? 0;
            Setting::updateSettings($this->workspace->id,'free_trial_days',$free_trial_days);
            return redirect('/super-admin-setting');
        }


        return redirect('/settings');

    }

    public function saveTheme(Request $request)
    {
        $request->validate([
            'theme' => 'required|string'
        ]);
        Setting::updateSettings($this->workspace->id,'theme',$request->theme);
    }

    public function activateLicensePost(Request $request)
    {
        $request->validate([
            'purchase_code' => 'required'
        ]);

        Setting::updateSettings($this->workspace->id,'purchase_code',$request->purchase_code);


        $purchase_code = $request->purchase_code;
        $response = Http::withOptions([
            'verify' => false,
        ])
            ->post('https://app.stackpie.com/v4/verify-envato-purchase/1/1767534b-a674-4925-a316-2305050198e7',[
                'purchase_code' => $purchase_code,
                'app_url' => config('app.url'),
                'item_id' => '36660668',
                'client_ip' => getClientIP(),
            ])
            ->json();

        if(empty($response))
        {
            return redirect('/activate')->with('error','An error occurred while trying to verify your purchase code. Please try again later, or contact support if the problem persists.');
        }

        if(!empty($response['success']))
        {
            $license_data = $response['license_data'];
            foreach ($license_data as $key => $value)
            {
                Setting::updateSettings($this->workspace->id,$key,$value);
            }

            return redirect(config('app.url').'/super-admin/dashboard')->with('success','Your license has been activated successfully.');
        }

        if(!empty($response['errors']))
        {
            return redirect('/activate')->withErrors($response['errors']);
        }

        return redirect("/activate");
    }

    public function billing()
    {   $plans= SubscriptionPlan::all();

        $workspace = Workspace::find($this->user->workspace_id);

        $plan = null;

        if($workspace->plan_id)
        {
            $plan = SubscriptionPlan::find($workspace->plan_id);
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('settings.billing',[

            'selected_navigation' => 'billing',
            'plans'=> $plans,
            'workspace' => $workspace,
            'plan' => $plan,
            'total_goals' => $total_goals,
        ]);
    }

    public function settingsStore(Request $request, $action)
    {
        switch ($action) {
            case "save-twilio-config":
                $request->validate([
                    "twilio_account_sid" => "required|string",
                    "twilio_api_key" => "required|string",
                    "twilio_api_secret" => "required|string",
                ]);

                Setting::updateSettings(
                    $this->workspace->id,
                    "twilio_account_sid",
                    $request->twilio_account_sid
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "twilio_api_key",
                    $request->twilio_api_key
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "twilio_api_secret",
                    $request->twilio_api_secret
                );

                return redirect("/settings");

                break;
            case "save-recaptcha-config":
                $request->validate([
                    "recaptcha_api_key" => "required|string",
                    "recaptcha_api_secret" => "required|string",
                    "config_recaptcha_in_user_login" => "nullable|boolean",
                ]);

                $config_recaptcha_in_user_login = $request->config_recaptcha_in_user_login ? 1 : 0;
                $config_recaptcha_in_admin_login = $request->config_recaptcha_in_admin_login ? 1 : 0;
                $config_recaptcha_in_user_signup = $request->config_recaptcha_in_user_signup ? 1 : 0;

                Setting::updateSettings(
                    $this->workspace->id,
                    "recaptcha_api_key",
                    $request->recaptcha_api_key
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "recaptcha_api_secret",
                    $request->recaptcha_api_secret
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "config_recaptcha_in_user_login",
                    $config_recaptcha_in_user_login
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "config_recaptcha_in_admin_login",
                    $config_recaptcha_in_admin_login
                );
                Setting::updateSettings(
                    $this->workspace->id,
                    "config_recaptcha_in_user_signup",
                    $config_recaptcha_in_user_signup
                );

                return redirect('/super-admin-setting');

                break;

            case "save-openai-config":
                $request->validate([
                    "openai_api_key" => "nullable|string",
                ]);

                Setting::updateSettings(
                    $this->workspace->id,
                    "openai_api_key",
                    $request->openai_api_key
                );


                return redirect('/super-admin-setting');

                break;


        }
    }


}
