<?php

namespace Database\Seeders;

use App\Models\ProjectTask;
use Illuminate\Database\Seeder;

class ProjectTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProjectTask::truncate();
        ProjectTask::create([
            'project_id'=>1,
            'number'=>1,
            'phase'=>'Analysis',
            'task'=>'',
            'sub_task'=>'',
            'description'=>'',
            'per_day_hours'=> 6,
            'total_days'=>3,
            'total_hours'=>18,
            'per_hours_cost'=> 200,
            'total'=>3600
        ]);
        ProjectTask::create([
            'project_id'=>1,
            'number'=>1.1,
            'phase'=>'',
            'task'=>'Analysis and design stage and gather data',
            'sub_task'=>'Analysis related software',
            'description'=>'',
            'per_day_hours'=>6,
            'total_days'=>2,
            'total_hours'=>12,
            'per_hours_cost'=> 550,
            'total'=>7000
        ]);
        ProjectTask::create([
            'project_id'=>1,
            'number'=>1.2,
            'phase'=>'',
            'task'=>'Architechture Design',
            'sub_task'=>'decide fonted technologies',
            'description'=>'',
            'per_day_hours'=>6,
            'total_days'=>1,
            'total_hours'=>6,
            'per_hours_cost'=>500,
            'total'=>3000
        ]);

    }
}
