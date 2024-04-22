<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;

class taskManager extends Controller
{
    //
    public function store(Request $request){
        $task = new task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->priority = $request->input('prority');
        $task->save();
    }

}
