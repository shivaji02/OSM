<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Image;
use App\Models\Todo;
use App\Models\VisionCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GoalsController extends BaseController
{
    //
    public function goals()
    {
        if($this->modules && !in_array('goals',$this->modules))

        {
            abort(401);
        }


        $goals= Goal::where('workspace_id',$this->user->workspace_id)
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('goals.goals',[

            'selected_navigation' => 'goals',
            'goals'=> $goals,
            'total_goals'=> $total_goals,
        ]);
    }


    public function goalView(Request $request)
    {

        $goal = false;

        if($request->id)
        {
            $goal = Goal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        $todos_goals = Todo::where('related_to', 'goal')
            ->where('workspace_id',$this->user->workspace_id)
            ->where('related_id', $goal->id)
            ->orderBy('id', 'DESC')
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('goals.view-goal',[

            'selected_navigation' => 'goals',
            'goal'=> $goal,
            'todos_goals'=> $todos_goals,
            'total_goals'=> $total_goals,

        ]);
    }
    public function setGoal(Request $request)
    {
        if($this->modules && !in_array('goals',$this->modules))

        {
            abort(401);
        }


        $goal = false;

        if($request->id)
        {
            $goal = Goal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('goals.set-goal',[

            'selected_navigation' => 'goals',
            'goal'=>  $goal,
            'total_goals'=>  $total_goals,

        ]);
    }

    public function goalPost(Request $request)
    {


        if($this->modules && !in_array('goals',$this->modules))

        {
        abort(401);
        }


        $request->validate([

            'name'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $goal = false;

        if($request->id){

            $goal = Goal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }



        if(!$goal){

            $goal = new Goal();
            $goal->uuid = Str::uuid();
            $goal->workspace_id = $this->user->workspace_id;
        }

        $goal->name = $request->name;
        $goal->date = $request->date;
        $goal->description = clean($request->description);


        $goal->save();

        return redirect('/goals');


    }
    public function goalEdit(Request $request)
    {
        if($this->modules && !in_array('goals',$this->modules))

        {
            abort(401);
        }


        $goal = Goal::where('workspace_id',$this->user->workspace_id)
            ->where('id',$request->id)
            ->first();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        if ($goal){



            return \view('goals.set-goal',[

                'selected_navigation' => 'goals',
                'total_goals' => $total_goals,


            ]);

        }
    }

    public function visionBoard(Request $request)
    {

        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }
        $request->validate([
            'category_id' => 'nullable|integer',
        ]);

        $categories = VisionCategory::where('workspace_id',$this->user->workspace_id)
            ->get()
            ->keyBy("id")
            ->all();

        $images = new Image();


        if($request->category_id){
            $images =  $images->where('category_id',$request->category_id)
                ->where('workspace_id',$this->user->workspace_id);
        }

        $images = $images->where('workspace_id',$this->user->workspace_id)->get();

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('goals.vision-board',[

            'selected_navigation' => 'vision-board',
            'images'=> $images,
            'total_goals' => $total_goals,
            'categories' =>  $categories,
        ]);
    }
    public function newBoard(Request $request)
    {

        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }
        $request->validate([
            'category_id' => 'nullable|integer',
        ]);

        $categories = VisionCategory::where('workspace_id',$this->user->workspace_id)
            ->get()
            ->keyBy("id")
            ->all();

        $images = new Image();

        if($request->category_id){
            $images =  $images->where('category_id',$request->category_id);
        }



        $images= Image::where('workspace_id',$this->user->workspace_id)
            ->get();


        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('goals.new-board',[

            'selected_navigation' => 'vision-board',
            'images'=> $images,
            'total_goals' => $total_goals,
            'categories' =>  $categories,
        ]);
    }
    public function visionCategories()
    {

        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }

//        $users = User::all();
        $categories = VisionCategory::orderBy('id', 'DESC')
            ->where('workspace_id',$this->user->workspace_id)
            ->get();



        return \view('goals.vision-categories', [
            'selected_navigation' => 'vision-board',
//            'users' => $users,
            'categories' => $categories,


        ]);

    }


    public function categoryPost(Request $request)
    {
        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }

        $request->validate([

            'name'=>'required|max:150',
            'category_id' => 'nullable|integer',

        ]);

        $category = false;

        if($request->category_id)
        {
            $category = VisionCategory::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->category_id)
                ->first();
        }

        if(!$category)
        {
            $category = new VisionCategory();

        }




        $category->name = $request->name;
        $category->workspace_id = $this->user->workspace_id;

        $category->save();


        return redirect()->back();



    }
    public function categoryEdit(Request $request)
    {
        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }

        $request->validate([
            'id' => 'required|integer',
        ]);

        $category = VisionCategory::where('workspace_id',$this->user->workspace_id)
            ->where('id',$request->id)
            ->first();

        if($category)
        {
            return response($category);
        }


    }


    public function imagePost(Request $request)
    {

        if($this->modules && !in_array('vision_board',$this->modules))

        {
            abort(401);
        }
        if(config('app.environment') === 'demo')
        {

            return;

        }
        $request->validate([
            'file'=>'required|image'
        ]);
        $path = false;
        if($request->file)
        {

            $path = $request->file('file')->store('media', 'uploads');


        }



        $image = new Image();
        $image->uuid = Str::uuid();
        $image->workspace_id = $this->user->workspace_id;
        $image->category_id = $request->category_id;
        $image->name= $path;
        $image->path= $path;
        $image->name = $request->file('file')->getClientOriginalName();
        $image->save();
    }


}
