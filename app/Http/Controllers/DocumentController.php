<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Goal;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DocumentController extends BaseController
{
    //

    public function documents()
    {

        if($this->modules && !in_array('documents',$this->modules))
        {
            abort(401);
        }

        $documents = Document::where('workspace_id',$this->user->workspace_id)->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('documents',[
            'selected_navigation' => 'documents',
            'documents'=>$documents,
            'total_goals'=> $total_goals,
        ]);
    }

    public function documentPost(Request $request)
    {

        if($this->modules && !in_array('documents',$this->modules))
        {
            abort(401);
        }

        if(config('app.env') === 'demo')
        {

            return;

        }

        $request->validate([
            'file'=>'required|mimes:jpeg,bmp,png,gif,svg,pdf'
        ]);
        $path = false;
        if($request->file)
        {

            $path = $request->file('file')->store('public');
            $path = str_replace('public/','',$path);


        }

          $document = new Document();
          $document->uuid = Str::uuid();
          $document->workspace_id = $this->user->workspace_id;
          $document->name= $path;
          $document->path= $path;
          $document->name = $request->file('file')->getClientOriginalName();
          $document->save();

    }
}
