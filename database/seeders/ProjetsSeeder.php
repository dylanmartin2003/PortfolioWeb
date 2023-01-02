<?php

namespace Database\Seeders;

use App\Models\Projets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projets::truncate();

        $csvFile = fopen(base_path("database/data/projets.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000000, ";")) !== FALSE) {
            if (!$firstline) {
                Projets::create([
                    'titre' => $data[0],
                    'desc' => $data[1],
                    'tag1' => $data[2],
                    'tag3' => $data[3],
                    'tag2' => $data[4],
                    'img1' => "images/projets/".$data[5],
                    'img2' => "images/projets/".$data[6],
                    'img3' => "images/projets/".$data[7],
                    'img4' => "images/projets/".$data[8],
                    'lien' => $data[9],
                ]);
            }
            $firstline = false;
        }
    }
}
