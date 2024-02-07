<?php

namespace App\Http\Controllers;

use App\Models\FiveMinuteJournal;
use App\Models\Goal;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GratitudeController extends BaseController
{
    //

    public function gratitude()
    {

        if($this->modules && !in_array('five_minutes_journal',$this->modules))

        {
        abort(401);
        }



        $journals= FiveMinuteJournal::where('workspace_id',$this->user->workspace_id)
        ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('gratitude.gratitude',[

            'selected_navigation' => 'gratitude',
            'journals'=> $journals,
            'total_goals'=> $total_goals,
        ]);
    }

    public function viewJournal(Request $request)
    {

        if($this->modules && !in_array('five_minutes_journal',$this->modules))

        {
            abort(401);
        }


        $journal = false;

        if($request->id)
        {
            $journal = FiveMinuteJournal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('gratitude.view-journal',[

            'selected_navigation' => 'diary',
            'journal'=> $journal,
            'total_goals'=> $total_goals,
        ]);
    }

    public function fiveMinuteJournal(Request $request)
    {

        if($this->modules && !in_array('five_minutes_journal',$this->modules))

        {
            abort(401);
        }
        $journal = false;

        if($request->id)
        {
            $journal = FiveMinuteJournal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();

        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();
        return \view('gratitude.five-min-journal',[

            'selected_navigation' => 'gratitude',
            'journal'=> $journal,
            'total_goals'=> $total_goals,
        ]);
    }

    public function fiveJournalPost(Request $request)
    {
        if($this->modules && !in_array('five_minutes_journal',$this->modules))

        {
            abort(401);
        }
        $request->validate([


            'id'=>'nullable|integer',
            'date'=>'nullable'

        ]);

        $journal = false;

        if($request->id){

            $journal = FiveMinuteJournal::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }



        if(!$journal){

            $journal = new FiveMinuteJournal();
            $journal->uuid = Str::uuid();
            $journal->workspace_id = $this->user->workspace_id;
        }

        $journal->date = $request->date;
        $journal->grateful = clean($request->grateful);
        $journal->habit = clean($request->habit);
        $journal->dream = clean($request->dream);
        $journal->tasks = clean($request->tasks);
        $journal->affirmations = clean($request->affirmations);
        $journal->feeling = clean($request->feeling);
        $journal->dont_waste = clean($request->dont_waste);
        $journal->fav_things = clean($request->fav_things);
        $journal->must_accomplish = clean($request->must_accomplish);
        $journal->notes = clean($request->notes);


        $journal->save();

        return redirect('/gratitude');


    }

    public function quoteList()
    {

        if($this->modules && !in_array('quotes',$this->modules))

        {
            abort(401);
        }



        $quotes= Quote::where('workspace_id',$this->user->workspace_id)
            ->get();
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();

        return \view('gratitude.quotes',[

            'selected_navigation' => 'quotes',
            'quotes'=> $quotes,
            'total_goals'=> $total_goals,
        ]);
    }

    public function quoteSave(Request $request)
    {
        if($this->modules && !in_array('quotes',$this->modules))

        {
            abort(401);
        }
        $request->validate([


            'id'=>'nullable|integer',


        ]);

        $quote = false;

        if($request->id){

            $quote = Quote::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }


        if(!$quote){

            $quote = new Quote();
            $quote->uuid = Str::uuid();
            $quote->workspace_id = $this->user->workspace_id;
        }


        $quote->topic = $request->topic;
        $quote->quotes = clean($request->quotes);

        $quote->save();

        return redirect('/quotes');

    }

    public function addQuote(Request $request)
    {

        if($this->modules && !in_array('quotes',$this->modules))

        {
            abort(401);
        }
        $quote = false;

        if($request->id)
        {
            $quote = Quote::where('workspace_id',$this->user->workspace_id)
                ->where('id',$request->id)
                ->first();
        }
        $total_goals = Goal::where('workspace_id',$this->user->workspace_id)->count();
        return \view('gratitude.add-quote',[

            'selected_navigation' => 'quotes',
            'quote'=> $quote,
            'total_goals'=> $total_goals,
        ]);
    }

}
