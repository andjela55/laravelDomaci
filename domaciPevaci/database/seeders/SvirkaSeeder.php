<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\pevac;


class SvirkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i = 0; $i < 10; $i++) {
            $pevac_id = rand(1, 2);
            DB::table('svirkas')->insert([
                'dan' => Str::random(5),
                'vreme' => rand(17,23) . 'h',
                'tip' => Str::random(5),
                'pevac_id' => $pevac_id
            ]);
           
        }
    }
}
