<?php

use Illuminate\Database\Seeder;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('_SQL_dumps\trucks_trucks.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
