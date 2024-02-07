<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Project;
use App\Models\Projects;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends BaseController
{
    //
    public function projects()
    {

        if($this->modules && !in_array('projects',$this->modules))
        {
        abort(401);
        }


        $projects= Projects::where('workspace_id',$this->user->workspace_id)->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('projects.projects',[

            'selected_navigation' => 'projects',
            'projects'=> $projects,
            'total_goals'=> $total_goals,
        ]);
    }
    public function createProject(Request $request)
    {
        $project = false;

        if($request->id)
        {
            $project = Projects::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('projects.create-project',[

            'selected_navigation' => 'projects',
            'project'=> $project,
            'total_goals'=> $total_goals,
        ]);
    }

    public function projectView(Request $request)
    {

        if($this->modules && !in_array('projects',$this->modules))

       {
        abort(401);
       }

        $project = false;

        if($request->id)
        {
            $project = Projects::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $todos_projects = Todo::where('related_to', 'project')
            ->where('workspace_id',$this->user->workspace_id)
            ->where('related_id', $project->id)
            ->orderBy('id', 'DESC')
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('projects.view-project',[

            'selected_navigation' => 'projects',
            'project'=> $project,
            'todos_projects'=> $todos_projects,
            'total_goals'=> $total_goals,
        ]);
    }



    public function projectPost(Request $request)
    {
        $request->validate([

            'title'=>'required|max:150',
            'id'=>'nullable|integer',

        ]);

        $project = false;

        if($request->id){

            $project = Projects::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }

        if(!$project ){

            $project  = new Projects();
            $project ->uuid = Str::uuid();
            $project->workspace_id = $this->user->workspace_id;
        }

        $project ->title = $request->title;

        $project ->start_date = $request->start_date;
        $project ->end_date = $request->end_date;
        $project ->summary = $request->summary;
        $project ->status = $request->status;
        $project ->description = $request->description;
        $project ->save();

        return redirect('/projects');


    }
}
