<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    public static function availableModules()
    {
        return [
            'five_minutes_journal' => __('Five Minute Journals'),
            'goals' => __('Goals'),
            'vision_board' => __('Vision Board'),
            'plans' => __('Plans'),
            'weekly_plans' => __('Weekly Plans'),
            'calendar' => __('Calendar'),
            'business_plan' => __('Business Plan'),
            'projects' => __('Projects'),
            'to_dos' => __('To-Dos'),
            'to_learns' => __('To-Learns'),
            'notes' => __('Notes'),
            'documents' => __('Documents'),
            'quotes' => __('Quotes'),
        ];
    }
}
