<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\CookiePolicy;
use App\Models\LandingPage;
use App\Models\Newsletter;
use App\Models\PricingPage;
use App\Models\PrivacyPolicy;
use App\Models\Setting;
use App\Models\SubscriptionPlan;
use App\Models\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    protected $super_settings;
    public function __construct()
    {
        parent::__construct();

        $this->middleware(function ($request, $next) {
            $super_settings = [];
            $super_settings_data = Setting::where('workspace_id',1)->get();
            foreach ($super_settings_data as $super_setting)
            {
                $super_settings[$super_setting->key] = $super_setting->value;
            }
            $this->super_settings = $super_settings;
            View::share('super_settings',$super_settings);

            $language = $super_settings['language'] ?? 'en';
            \App::setLocale($language);

            return $next($request);
        });
    }



    public function home()
    {

        $landingpage = LandingPage::first();


        if(($this->super_settings['landingpage'] ?? null) === 'Default'){

            return \view('frontend.home',[

                'landingpage' =>  $landingpage,

            ]);
        }

        return \view('auth.login',[

            'landingpage' =>  $landingpage,

        ]);


    }
    public function emailSave(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',


        ]);

        $landingpage = LandingPage::first();

        $contact = null;

        if($request->id)
        {
            $contact = Newsletter::find($request->id);
        }

        if(! $contact)
        {
            $contact = new Newsletter();

        }
        $contact->email = $request->email;

        $contact->save();
        return response([
            'success' => true,
        ]);

//        return \view('frontend.home',[
//
//            'landingpage' =>  $landingpage,
//            'success' => true,
//
//        ]);
    }


    public function contact()
    {
        $plans = SubscriptionPlan::all();
        $landingpage = PricingPage::first();
        $contact= ContactPage::first();

        return \view('frontend.contact',
            [
                'plans'=> $plans,
                'landingpage'=> $landingpage,
                'contact'=> $contact,
            ]);
    }


    public function pricing()
    {
        $plans = SubscriptionPlan::all();
        $landingpage = PricingPage::first();


        return \view('frontend.pricing',[
            'plans'=> $plans,
            'landingpage'=> $landingpage,
        ]);

    }

    public function privacy()
    {
        $plans = SubscriptionPlan::all();
        $privacy = PrivacyPolicy::first();

        return \view('frontend.privacy',[
            'plans'=> $plans,
            'privacy'=> $privacy,

        ]);
    }

    public function termsCondition()
    {
        $plans = SubscriptionPlan::all();
        $term = Terms::first();

        return \view('frontend.terms',[
            'plans'=> $plans,
            'term'=> $term,

        ]);
    }
    public function cookiePolicy()
    {
        $plans = SubscriptionPlan::all();
        $term = CookiePolicy::first();

        return \view('frontend.cookie',[
            'plans'=> $plans,
            'term'=> $term,

        ]);
    }

}
