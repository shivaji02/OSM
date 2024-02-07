<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends BaseController
{
    public function store($action, Request $request)
    {
        if($this->modules && !in_array('to_doss',$this->modules))

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

                $todo = Todo::find($request->id);



                if($todo)
                {
                    if($request->status === 'Completed')
                    {
                        $todo->completed = 1;
                    }
                    else{
                        $todo->completed = 0;
                    }

                    $todo->save();
                }

                break;
        }
    }
}
