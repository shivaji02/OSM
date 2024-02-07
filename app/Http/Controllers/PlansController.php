<?php

namespace App\Http\Controllers;

use App\Models\BrainStorm;
use App\Models\BusinessPlan;
use App\Models\Calendar;
use App\Models\Goal;
use App\Models\GoalPlan;
use App\Models\ToLearn;
use App\Models\User;
use App\Models\WeeklyPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlansController extends BaseController
{
    //
    public function plans()
    {

        if($this->modules && !in_array('plans',$this->modules))

        {
        abort(401);
        }

        $plans= GoalPlan::where('workspace_id',$this->user->workspace_id)
            ->get();
        $goals = Goal::where('workspace_id',$this->user->workspace_id)
            ->get()->keyBy("id")
            ->all();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.plans',[

            'selected_navigation' => 'plans',
            'plans'=> $plans,
            'goals'=> $goals,
            'total_goals'=>  $total_goals,

        ]);
    }

    public function planView(Request $request)
    {  $plan = false;

        if($request->id)
        {
            $plan = GoalPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $goals = Goal::where('workspace_id',$this->user->workspace_id)
            ->get()->keyBy("id")
            ->all();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.view-plan',[

            'selected_navigation' => 'plans',
            'plan'=> $plan,
            'goals'=> $goals,
            'total_goals'=> $total_goals,

        ]);
    }
    public function weeklyPlans()
    {    $plans= WeeklyPlan::where('workspace_id',$this->user->workspace_id)
        ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.weekly-planner',[

            'selected_navigation' => 'weekly-plans',
            'plans'=>  $plans,
            'total_goals'=>  $total_goals,
        ]);
    }

    public function weeklyPlan(Request $request)
    {

        $plan = false;

        if($request->id)
        {
            $plan = WeeklyPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.weekly-plan',[

            'selected_navigation' => 'weekly-plans',
            'plan'=> $plan,
            'total_goals'=>  $total_goals,
        ]);
    }

    public function viewWeeklyPlans(Request $request)
    {  $plan = false;

        if($request->id)
        {
            $plan = WeeklyPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $goals = Goal::where('workspace_id',$this->user->workspace_id)
            ->get()->keyBy("id")
            ->all();

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();



        return \view('plans.view-weekly-plan',[

            'selected_navigation' => 'weekly-plans',
            'plan'=> $plan,
            'goals'=> $goals,
            'total_goals'=> $total_goals,

        ]);
    }

    public function weeklyPlanPost(Request $request)
    {
        if($this->modules && !in_array('weekly_plans',$this->modules))

        {
            abort(401);
        }



        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $plan = false;

        if($request->id){

            $plan = WeeklyPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$plan){

            $plan = new WeeklyPlan();
            $plan->uuid = Str::uuid();
            $plan->workspace_id = $this->user->workspace_id;
        }

        $plan->title = $request->title;

        $plan->from_date = $request->from_date;
        $plan->to_date = $request->to_date;
        $plan->saturday = clean($request->saturday);
        $plan->sunday = clean($request->sunday);
        $plan->monday = clean($request->monday);
        $plan->tuesday = clean($request->tuesday);
        $plan->wednesday = clean($request->wednesday);
        $plan->thursday = clean($request->thursday);
        $plan->friday = clean($request->friday);
        $plan->notes = clean($request->notes);
        $plan->save();

        return redirect('/weekly-plans');


    }


    public function goalPlans(Request $request)
    {

        if($this->modules && !in_array('plans',$this->modules))

        {
            abort(401);
        }
        $goals= Goal::where('workspace_id',$this->user->workspace_id)
            ->get()->keyBy("id")
            ->all();;

        $plan = false;

        if($request->id)
        {
            $plan = GoalPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.goal-plan',[

            'selected_navigation' => 'plans',
            'plan'=> $plan,
            'goals'=> $goals,
            'total_goals'=> $total_goals,
        ]);
    }

    public function goalPlanPost(Request $request)
    {
        if($this->modules && !in_array('plans',$this->modules))

        {
            abort(401);
        }
        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $plan = false;

        if($request->id){

            $plan = GoalPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$plan){

            $plan = new GoalPlan();
            $plan->uuid = Str::uuid();
            $plan->workspace_id = $this->user->workspace_id;


        }

        $plan->title = $request->title;
        $plan->goal_id = $request->goal_id;
        $plan->date = $request->date;
        $plan->description = clean($request->description);


        $plan->save();

        return redirect('/plans');

    }

    public function calendarAction(Request $request,$action = '')
    {
        if($this->modules && !in_array('calendar',$this->modules))

        {
            abort(401);
        }

        switch ($action)
        {
            case '':
                $events = Calendar::where('workspace_id',$this->user->workspace_id)
                    ->get();
                $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

                return \view('plans.calendar',[

                    'selected_navigation' => 'calendar',
                    'events'=> $events,
                    'total_goals'=> $total_goals,
                ]);
                break;

            case 'event':

                $request->validate([
                    'id' => 'nullable|integer',
                ]);

                $event = false;

                if($request->id)
                {
                    $event = Calendar::where('workspace_id',$this->user->workspace_id)
                        ->where('id',$request->id)
                        ->first();
                }



                if($event)
                {
                    $date = $event->start_date;
                }
                else{
                    $date = $request->date ?? date('Y-m-d');
                }

                $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();



                return \view('plans.event',[

                    'selected_navigation' => 'calendar',
                    'event' => $event,
                    'date' => $date,
                    'total_goals' => $total_goals,

                ]);
                break;

        }

    }


    public function eventPost(Request $request)
    {

        if($this->modules && !in_array('calendar',$this->modules))

        {
            abort(401);
        }
        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $event = false;

        if($request->id){

            $event = Calendar::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$event){

            $event = new Calendar();
            $event->uuid = Str::uuid();
            $event->workspace_id = $this->user->workspace_id;
        }

        $event->title = $request->title;

        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->description = $request->description;
        $event->save();

        return redirect('/calendar');


    }


    public function businessPlans()

    {
        if($this->modules && !in_array('business_plan',$this->modules))

        {
            abort(401);
        }

        $plans= BusinessPlan::where('workspace_id',$this->user->workspace_id)
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();



        return \view('plans.business-plans',[

            'selected_navigation' => 'business-plans',
            'plans'=> $plans,
            'total_goals'=> $total_goals,

        ]);
    }
    public function writeBusinessPlans(Request $request)
    {
        if($this->modules && !in_array('business_plan',$this->modules))

        {
            abort(401);
        }

        $plan = false;

        if($request->id)
        {
            $plan = BusinessPlan::where('workspace_id',$this->user->workspace_id)
            ->where('id',$request->id)
            ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.write-business-plan',[

            'selected_navigation' => 'business-plans',
            'plan'=> $plan,
            'total_goals'=> $total_goals,
        ]);
    }

    public function viewBusinessPlan(Request $request)
    {

        if($this->modules && !in_array('business_plan',$this->modules))
        {
        abort(401);
        }

        $plan = false;

        if($request->id)
        {
            $plan = BusinessPlan::where('workspace_id',$this->user->workspace_id)
            ->where('id',$request->id)
            ->first();
        }

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('plans.view-business-plan',[

            'selected_navigation' => 'business-plans',
            'plan'=> $plan,
            'total_goals'=> $total_goals,

        ]);
    }

    public function businessPlanPost(Request $request)
    {
        $request->validate([

            'name'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $plan = false;

        if($request->id){

            $plan = BusinessPlan::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$plan){

            $plan = new BusinessPlan();
            $plan->uuid = Str::uuid();
            $plan->workspace_id = $this->user->workspace_id;
        }

        $plan->name = $request->name;

        $plan->date = $request->date;
        $plan->email = $request->email;
        $plan->phone = $request->phone;
        $plan->website = $request->website;
        $plan->company_name = $request->company_name;
        $plan->ex_summary = clean($request->ex_summary);
        $plan->description = clean($request->description);
        $plan->m_analysis = clean($request->m_analysis);
        $plan->management = clean($request->management);
        $plan->product = clean($request->product);
        $plan->marketing = clean($request->marketing);
        $plan->budget = $request->budget;
        $plan->investment = clean($request->investment);
        $plan->finance = clean($request->finance);
        $plan->appendix = clean($request->appendix);
        $plan->save();

        return redirect('/business-plans');


    }





    public function brainStorm(Request $request)
    {
        if ($this->modules && !in_array("brainstorm", $this->modules)) {
            abort(401);
        }

        $canvas = false;

        if ($request->id) {
            $canvas = BrainStorm::where(
                "workspace_id",
                $this->user->workspace_id
            )
                ->where("id", $request->id)
                ->first();
        }

        return \view("plans.brainstorm", [
            "selected_navigation" => "brainstorm",
            "canvas" => $canvas,
        ]);
    }


    public function brainStormList(Request $request)
    {
        if ($this->modules && !in_array("brainstorm", $this->modules)) {
            abort(401);
        }

        $users = User::all()
            ->keyBy("id")
            ->all();




        $canvases = BrainStorm::where(
            "workspace_id",
            $this->user->workspace_id
        )->get();



        return \view("plans.brainstorm-list", [
            "selected_navigation" => "brainstorm",
            "canvases" => $canvases,
            "users" => $users,
        ]);
    }



    public function saveCanvas(Request $request)
    {
        if ($this->modules && !in_array("brainstorm", $this->modules)) {
            abort(401);
        }
        $request->validate([
            "title" => "required|max:150",
            "id" => "nullable|integer",
        ]);

        $canvas = false;

        if ($request->id) {
            $canvas = BrainStorm::where("workspace_id", $this->user->workspace_id)
                ->where("id", $request->id)
                ->first();
        }

        if (! $canvas) {
            $uuid = Str::uuid();
            $canvas = new BrainStorm();
            $canvas->uuid = $uuid;
            $canvas->workspace_id = $this->user->workspace_id;
        }
        else{
            $uuid = $canvas->uuid;
        }
//        $cover_path = null;
//
//        if ($request->cover_photo) {
//            $cover_path = $request
//                ->file("cover_photo")
//                ->store("media", "uploads");
//        }
//
//        if (!empty($cover_path)) {
//            $note->cover_photo = $cover_path;
//        }

        ray($request->input('image'));

        if($request->input('image'))
        {
            try{
                $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->input('image')));
                file_put_contents(public_path() . "/uploads/brainstorming/$uuid.png",$data);
            }catch (\Exception $e)
            {
                ray($e->getMessage());
            }
        }


        $canvas->title = $request->title;
        $canvas->admin_id = $this->user->id;
        $canvas->src = $request->src;
        $canvas->save();

        return [
            'url' => '/brainstorming?id='.$canvas->id,
        ];
    }






}
