<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->count(50)->create();

        // Pesquisa 10 usuários no banco para inserir no campo created_by do projeto que irá ser criado
        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $u) { 
                $project = Project::factory()->create(['created_by' => $u->id]);

                Proposal::factory()->count(random_int(4,45))->create(['project_id' => $project->id]);
        });
    }
}
