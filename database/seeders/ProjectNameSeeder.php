<?php

namespace Database\Seeders;

use App\Models\ProjectName;
use Illuminate\Database\Seeder;

class ProjectNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProjectName::truncate();
        ProjectName::create([
            'title'=>'project task'
        ]);
        ProjectName::create([
            'title'=>'project Detils'
        ]);
    }
}
