<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\User;
use App\Models\Workspace;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends BaseController
{
    //

    public function profile( Request $request)

    {

        $available_languages = User::$available_languages;
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('profile.profile',[
            'selected_navigation' => 'profile',
            'available_languages' => $available_languages,
            'total_goals' =>  $total_goals,
        ]);


    }


    public function profilePost(Request $request)
    {
        $request->validate([

            'first_name'=>'nullable|string|max:100',
            'last_name'=>'nullable|string|max:100',
            'photo' => 'nullable|file|mimes:jpg,png',

        ]);

        if(config('app.env') === 'demo')
        {
            return redirect()->back()->with('error',__('This action is not allowed in demo mode.'));
        }

        $user  = $this->user;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->language = $request->language;
        $path = false;
        if($request->photo)
        {
            $path = $request->file('photo')->store('media', 'uploads');


        }
        if (!empty($path)) {
            $user->photo = $path;
        }


        $user->phone_number = $request->phone_number;

        if($request->timezone)
        {
            $user->timezone = $request->timezone;
            $user->save();
        }

        $user->save();

        if($this->user->super_admin)
        {
            return redirect('/super-admin-profile');
        }

        return redirect('/profile');
    }


    public function staff()
    {

        $staffs = User::where('workspace_id',$this->user->workspace_id)
            ->get();

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('profile.staff',[
            'selected_navigation' => 'team',
            'staffs' => $staffs,
            'total_goals' =>  $total_goals,
        ]);

    }


    public function newUser(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',
        ]);
        $countries = countries();

        $selected_user = false;

        if($request->id)
        {
            $selected_user = User::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('profile.new-user',[
            'selected_navigation' => 'team',
            'selected_user'=> $selected_user,
            'countries'=> $countries,
            'total_goals' =>  $total_goals,

        ]);

    }

    public function userPost(Request $request)
    {
        $request->validate([
            "first_name" => "required|string|max:100",
            "last_name" => "required|string|max:100",
            "email" => "required|email",
            "phone" => "nullable|string|max:50",
            "password" => "nullable|string|max:255",
            "id" => "nullable|integer",
        ]);




        $user = false;

        if ($request->id) {

            if($this->user->super_admin)
            {
                $user = User::find($request->id);
            }
            else{
                $user = User::where("workspace_id", $this->user->workspace_id)
                    ->where("id", $request->id)
                    ->first();
            }

            if($user)
            {
                if($user->email !== $request->email)
                {
                    $exist = User::where('email',$request->email)->first();
                    if($exist)
                    {
                        return redirect()->back()->with([
                            'errors' => [
                                'user_exist' => __('User already exist with this email id.')
                            ]
                        ]);
                    }
                }
            }

        }


        if (!$user) {
            $user = new User();
            $user->workspace_id = $this->user->workspace_id;
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

        if($request->input('password'))
        {
            $user->password = Hash::make($request->input('password'));
        }

        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->mobile_number = $request->mobile_number;
        $user->twitter = $request->twitter;
        $user->facebook = $request->facebook;
        $user->linkedin = $request->linkedin;
        $user->address_1 = $request->address_1;
        $user->address_2 = $request->address_2;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->language = $request->language;
        $user->zip = $request->zip;
        $user->save();



        if ($this->user->super_admin) {
            return redirect("/users");
        }

        return redirect("/staff");
    }



    public function userEdit(Request $request, $id)
    {
        $selected_user = User::find($id);
        $countries = countries();

        if ($selected_user){

            if($this->user->super_admin)
            {
                return \view('super-admin.add-new-user',[
                    'selected_user'=> $selected_user,
                    'countries'=> $countries,

                ]);
            }

            return \view('profile.new-user',[
                'selected_user'=> $selected_user,
                'countries'=> $countries,


            ]);

        }

    }


    public function userChangePasswordPost(Request $request)
    {

        $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        $user = $this->user;

        if (!Hash::check($request->password, $user->password)) {
            return redirect("/profile")->withErrors([
                "password" => "Incorrect old password.",
            ]);
        }

        if (config("app.environment") !== "demo") {
            $user->password = Hash::make($request->new_password);
            $user->save();
        }



//        if(config('app.env') === 'demo')
//        {
//            $user->password = Hash::make($request->new_password);
//            $user->save();
//        }




        return redirect('/profile');
    }
}
