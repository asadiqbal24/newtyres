<?php

namespace App\Http\Controllers;

use App\Models\ReminderTemplates;
use Illuminate\Http\Request;

class ReminderTemplatesController extends Controller
{

    public function reminders()
    {
        $page_title = 'Reminder';
        return view('admin.reminder.index',compact('page_title'));
    }

    public function all_reminders()
    {
        $page_title = 'All Reminder';
        return view('admin.reminder.list',compact('page_title'));
    }
    public function reminder_templates()
    {
       dd("test");
    }

}
