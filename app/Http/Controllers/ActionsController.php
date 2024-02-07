<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Note;
use App\Models\Projects;
use App\Models\Todo;
use App\Models\ToLearn;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActionsController extends BaseController
{



    public function notes()
    {

        if($this->modules && !in_array('notes',$this->modules))

        {
        abort(401);
        }


        $notes = Note::where('workspace_id',$this->user->workspace_id)
        ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('actions.notes',[

            'selected_navigation' => 'notes',
            'notes'=> $notes,
            'total_goals'=> $total_goals,
        ]);
    }

    public function viewTodo(Request $request)
    {
        if($this->modules && !in_array('to_dos',$this->modules))

    {
        abort(401);
    }

        $todo = false;

        if($request->id)
        {
            $todo = Todo::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('actions.view-todo',[

            'selected_navigation' => 'todos',
            'todo'=> $todo,
            'total_goals'=> $total_goals,
        ]);
    }

    public function todos()
    {

        if($this->modules && !in_array('to_dos',$this->modules))

        {
        abort(401);
        }

        $project_todos = Todo::where('related_to', 'project')
            ->where('workspace_id',$this->user->workspace_id)
            ->count();
        $goal_todos = Todo::where('related_to', 'goal')
            ->where('workspace_id',$this->user->workspace_id)
            ->count();
        $todays_todos = Todo::where('related_id', 0)
            ->where('workspace_id',$this->user->workspace_id)
            ->count();
        $todos= Todo::where('related_id', 0)
            ->where('workspace_id',$this->user->workspace_id)
            ->orderBy('id', 'DESC')
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('actions.todos',[

            'selected_navigation' => 'todos',
            'todos'=> $todos,
            'project_todos'=> $project_todos,
            'goal_todos'=> $goal_todos,
            'todays_todos'=> $todays_todos,
            'total_goals'=> $total_goals,
        ]);
    }

    public function addTask(Request $request)
    {


        if($this->modules && !in_array('to_dos',$this->modules))

        {
        abort(401);
        }

        $for = $request->for;

        $todo = false;

        if($request->id)
        {
            $todo = Todo::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
            if($todo)
            {
                if($todo->related_to === 'project'){
                    $for = 'project';
                }

                if($todo->related_to === 'goal'){
                    $for = 'goal';
                }

            }
        }



        $projects = [];
        $goals = [];

        if($for === 'project')
        {
            $projects = Projects::where('workspace_id',$this->user->workspace_id)

                ->get();
        }
        elseif ($for === 'goal')
        {
            $goals = Goal::where('workspace_id',$this->user->workspace_id)

                ->get();
        }


        $todos_projects = Todo::where('related_to', 'project')
            ->where('workspace_id',$this->user->workspace_id)
            ->orderBy('id', 'DESC')
            ->get();
        $todos_goals = Todo::where('related_to', 'goal')
            ->where('workspace_id',$this->user->workspace_id)
            ->orderBy('id', 'DESC')
            ->get();
        $todos= Todo::where('related_id', 0)
            ->where('workspace_id',$this->user->workspace_id)
            ->orderBy('id', 'DESC')
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('actions.add-task',[

            'selected_navigation' => 'todos',
            'todo'=> $todo,
            'todos'=> $todos,
            'for' => $for,
            'projects' => $projects,
            'goals' => $goals,
            'todos_projects'=> $todos_projects,
            'todos_goals'=>$todos_goals,
            'total_goals'=> $total_goals,

        ]);
    }

    public function todoPost(Request $request)
    {

        if($this->modules && !in_array('to_dos',$this->modules))

        {
            abort(401);
        }

        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',
            'project_id' => 'nullable|integer',
            'goal_id' => 'nullable|integer',

        ]);

        $todo = false;

        if($request->id){

            $todo  = Todo::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(! $todo ){

            $todo  = new Todo();
            $todo->workspace_id = $this->user->workspace_id;

        }

        $todo->title = $request->title;
        $todo->date = $request->date;
        $todo->description= clean($request->description);

        if($request->project_id)
        {
            $todo->related_to = 'project';
            $todo->related_id = $request->project_id;
        }
        elseif ($request->goal_id)
        {
            $todo->related_to = 'goal';
            $todo->related_id = $request->goal_id;
        }

        $todo->save();


        if($request->project_id)
        {
            return redirect('/add-task?for=project');
        }
        elseif ($request->goal_id)
        {
            return redirect('/add-task?for=goal');
        }


        return redirect('/add-task');


    }



    public function tolearn()
    {

        if($this->modules && !in_array('to_learns',$this->modules))

        {
            abort(401);
        }



        $to_learns = ToLearn::where('workspace_id',$this->user->workspace_id)->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();


        return \view('actions.tolearn',[

            'selected_navigation' => 'tolearn',
            'to_learns'=> $to_learns,
            'total_goals'=> $total_goals,

        ]);
    }


    public function addtoLearn(Request $request)
    {
        if($this->modules && !in_array('to_learns',$this->modules))

        {
            abort(401);
        }


        $to_learn = false;


        if($request->id)
        {
            $to_learn = ToLearn::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('actions.add-tolearn',[

            'selected_navigation' => 'tolearn',
            'to_learn'=> $to_learn,
            'total_goals'=> $total_goals,
        ]);
    }
    public function toLearnPost(Request $request)
    {
        if($this->modules && !in_array('to_learns',$this->modules))

        {
            abort(401);
        }


        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $to_learn = false;

        if($request->id){

            $to_learn = ToLearn::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$to_learn){

            $to_learn = new ToLearn();
            $to_learn->uuid = Str::uuid();
            $to_learn->workspace_id = $this->user->workspace_id;
        }

        $to_learn->title = $request->title;

        $to_learn->start_date = $request->start_date;
        $to_learn->end_date = $request->end_date;
        $to_learn->description = clean($request->description);
        $to_learn->save();

        return redirect('/tolearn');


    }





    public function addNote(Request $request)
    {


        if($this->modules && !in_array('notes',$this->modules))

        {
        abort(401);
        }

        $note = false;

        if($request->id)
        {
            $note = Note::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();



        return \view('actions.add-note',[

            'selected_navigation' => 'notes',
            'note'=> $note,
            'total_goals'=>  $total_goals,

        ]);
    }


    public function viewNote(Request $request)
    {
        if($this->modules && !in_array('notes',$this->modules))

        {
        abort(401);
        }



        $note = false;

        if($request->id)
        {
            $note = Note::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }


        return \view('actions.view-note',[

            'selected_navigation' => 'notes',
            'note'=> $note
        ]);
    }
    public function viewToLearn(Request $request)
    {
        if($this->modules && !in_array('to_learns',$this->modules))

        {
            abort(401);
        }



        $tolearn = false;

        if($request->id)
        {
            $tolearn = ToLearn::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }


        return \view('actions.view-tolearn',[

            'selected_navigation' => 'tolearn',
            'tolearn'=> $tolearn,
        ]);
    }
    public function notePost(Request $request)

    {
        if($this->modules && !in_array('notes',$this->modules))

        {
            abort(401);
        }
        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

      $note = false;

        if($request->id){

            $note = Note::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$note){

            $note = new Note();
            $note->uuid = Str::uuid();
            $note->workspace_id = $this->user->workspace_id;
        }

        $note->title = $request->title;
        $note->topic = $request->topic;


        $note->notes = $request->notes;
        $note->save();

        return redirect('/notes');


    }


    public function promoClock(Request $request)
    {




        $note = false;

        if($request->id)
        {
            $note = Note::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();



        return \view('clock.promo',[

            'selected_navigation' => 'clock',
            'note'=> $note,
            'total_goals'=>  $total_goals,

        ]);
    }






}
