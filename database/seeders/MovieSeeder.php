<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'id' => 1,
            'title' => 'Black Adam',
            'description' => 'In ancient Kahndaq, Teth Adam was bestowed the almighty powers of the gods. After using these powers for vengeance, he was imprisoned, becoming Black Adam. Nearly 5,000 years have passed, and Black Adam has gone from man to myth to legend. Now free, his unique form of justice, born out of rage, is challenged by modern-day heroes who form the Justice Society: Hawkman, Dr. Fate, Atom Smasher and Cyclone.',
            'genre' => 'Action',
            'director' => 'Jaume Collet-Serra',
            'release_date' => date('2022-10-19'),
            'img_url' => 'black_adam.jpg',
            'background_url' => 'black_adam.png',
        ]);
    }
}
