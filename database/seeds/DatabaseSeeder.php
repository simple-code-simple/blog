<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
//use Carbon\Carbon;
use App\Models\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('TestsTableSeeder');

        Model::reguard();
    }
}

class TestsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tests')->delete();

        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 10; $i++) {
            Test::create([
                'text' => $faker->paragraph(),
            ]);
        }
    }
}