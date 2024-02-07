<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalStatusController extends BaseController
{
    //

    public function store($action, Request $request)
    {
        if($this->modules && !in_array('goals',$this->modules))

        {
            abort(401);
        }

        switch ($action)
        {
            case 'change-status':

                $request->validate([
                    'id' => 'required|integer',
                    'status' => 'required|string',
                ]);

                $goal = Goal::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$request->id)
                    ->first();



                if( $goal)
                {
                    if($request->status === 'Completed')
                    {
                        $goal->completed = 1;
                    }
                    else{
                        $goal->completed = 0;
                    }

                    $goal->save();
                }

                break;
        }

    }
}
