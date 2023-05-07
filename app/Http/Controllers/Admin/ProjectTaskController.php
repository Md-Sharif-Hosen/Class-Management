<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectTask;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    //
    public function create()
    {
        //function_body

        return view('admin.project task.create', ['project_id' => 1]);
    }
    public function store(request $request)
    {
        $data = [
            "row1" => [
                "number" => '',
                "phase" => '',
                "task" => '',
            ]
        ];
        ProjectTask::insert($request->task_row);
        // dd(request()->all());
        //function_body
        // $taskstore = new ProjectTask();
        // $taskstore->number = request()->number;
        // $taskstore->phase = request()->phase;
        // $taskstore->task = request()->task;
        // $taskstore->sub_task = request()->sub_task;
        // $taskstore->description = request()->description;
        // $taskstore->per_day_hours = request()->per_day_hours;
        // $taskstore->total_days = request()->total_days;
        // $taskstore->total_hours = request()->total_hours;
        // $taskstore->per_hours_cost = request()->per_hours_cost;
        // $taskstore->total = request()->total;
        // $taskstore->save();
        // return redirect()->route('admin.projecttask.index');
    }
    public function index()
    {
        //function_body
        return view('admin.project task.index');
    }
}
