<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Job;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($job = 0; $job < 10; $job++) {

            $company = Company::factory()->create();

            Job::factory()
            ->for($company)
            ->create();
        }
    }
}
