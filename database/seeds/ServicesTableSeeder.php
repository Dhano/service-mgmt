<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Print',
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'name' => 'Scan',
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'name' => 'Yet another service',
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
