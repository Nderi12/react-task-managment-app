<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();

        $tasks = [];

        foreach ($projects as $project) {
            for ($i = 1; $i <= 10; $i++) {

                Task::create([
                    'project_id' => $project->id,
                    'priority' => $project->id,
                    'title' => "Task " . $project->name,
                    'description' => "Description for Task " . $project->name,
                ]);
            }
        }

    }
}
