<?php

namespace Database\Seeders;
use App\Models\trener;
use Illuminate\Database\Seeder;
use DB;

class PevacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('pevacs')->insert([
            ['ime'=>'Zdravko',
            'prezime'=>'Markovic',
            'vrsta_muzike'=>'folk',
            'prateci_vokali'=>'dvoje'],
  		['ime'=>'Bane',
            'prezime'=>'Mojicevic',
            'vrsta_muzike'=>'rock',
            'prateci_vokali'=>'nema']

        ]);
    }
}
