<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'Solat',
            'description'=>'Solat 5 waktu',
            'user_id'=> '1',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
