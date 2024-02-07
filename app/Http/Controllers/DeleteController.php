<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\BrainStorm;
use App\Models\BusinessPlan;
use App\Models\Calendar;
use App\Models\Contact;
use App\Models\Document;
use App\Models\EmailCampaign;
use App\Models\FiveMinuteJournal;
use App\Models\Goal;
use App\Models\GoalPlan;
use App\Models\Image;
use App\Models\LeadCaptureForm;
use App\Models\Newsletter;
use App\Models\Note;
use App\Models\Projects;
use App\Models\Quote;
use App\Models\SmsCampaign;
use App\Models\SmsProvider;
use App\Models\EmailProvider;
use App\Models\SubscriptionPlan;
use App\Models\Todo;
use App\Models\ToLearn;
use App\Models\User;
use App\Models\VisionCategory;
use App\Models\WeeklyPlan;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends BaseController
{
    //
    public function delete($action,$id)
    {
        switch ($action){


            case 'today-todo':

                $todo = Todo::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();

                if ($todo){

                    $redirect_url = '/add-task';

                    if($todo->related_to === 'project')
                    {
                        $redirect_url = 'add-task?for=project';
                    }

                    if($todo->related_to === 'goal')
                    {
                        $redirect_url = 'add-task?for=goal';
                    }

                    $todo->delete();


                    return redirect($redirect_url);
                }

                break;

            case 'event':

                $event = Calendar::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($event){

                    $event->delete();
                    return redirect('/calendar');
                }

                break;



            case 'goal':

                $goal = Goal::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($goal){

                    $goal->delete();
                    return redirect('/goals');
                }

                break;
            case 'goal-plan':

                $plan = GoalPlan::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($plan){

                    $plan->delete();
                    return redirect('/plans');
                }

                break;

            case 'to-learn':

                $to_learn = ToLearn::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($to_learn){

                    $to_learn->delete();
                    return redirect('/tolearn');
                }

                break;
            case 'note':

                $note = Note::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($note){

                    $note->delete();
                    return redirect('/notes');
                }

                break;


            case 'project':

                $project = Projects::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($project){

                    $project->delete();
                    return redirect('/projects');
                }

                break;

            case 'journal':

                $journal = FiveMinuteJournal::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($journal){

                    $journal->delete();
                    return redirect('/gratitude');
                }

                break;

            case 'image':

                $image = Image::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();

                if ($image){

                    $image->delete();
                    return redirect('/new-vision-board');
                }

                break;

            case 'weekly-plan':

                $plan = WeeklyPlan::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($plan){

                    $plan->delete();
                    return redirect('/weekly-plans');
                }

                break;

            case 'staff':

                $staff = User::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();

                if ($staff){

                    if($staff->id === $this->user->id)
                    {
                        abort(401);
                    }

                $staff->delete();

                    return redirect('/staff');
                }

                break;

            case 'document':

                $document = Document::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($document){

                    if(Storage::exists('public/'.$document->path))
                    {
                        Storage::delete('public/'.$document->path);
                    }

                    $document->delete();


                    return redirect('/documents');
                }

                break;



            case 'subscription-plan':

                $plan = SubscriptionPlan::find($id);

                if ($plan){

                    $plan->delete();
                    return redirect('/subscription-plans');
                }

                break;

            case 'newsletter-email':

                $email = Newsletter::find($id);

                if ($email){

                    $email->delete();
                    return redirect('/emails');
                }

                break;



            case 'business-plan':

                $plan = BusinessPlan::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($plan){

                    $plan->delete();
                    return redirect('/business-plans');
                }

                break;

            case 'quote':

                $quote = Quote::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($quote){

                    $quote->delete();
                    return redirect('/quotes');
                }

                break;

            case 'vision-category':

                $category = VisionCategory::where('workspace_id',$this->user->workspace_id)
                    ->where('id',$id)
                    ->first();
                if ($category){

                    $category->delete();
                    return redirect('/vision-categories');
                }

                break;

            case "canvas":
                $canvas = BrainStorm::where(
                    "workspace_id",
                    $this->user->workspace_id
                )
                    ->where("id", $id)
                    ->first();
                if ($canvas) {
                    $canvas->delete();
                    return redirect("/brainstorming-list");
                }

                break;

        }
    }
}
