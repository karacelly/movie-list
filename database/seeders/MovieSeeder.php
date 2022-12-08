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

        Movie::create([
            'id' => 2,
            'title' => 'Enola Holmes 2',
            'description' => "Enola Holmes 2 is a 2022 mystery film and the sequel to the 2020 film Enola Holmes, both which star Millie Bobby Brown as the title character, the teenage sister of the already-famous Victorian-era detective Sherlock Holmes. The film is directed by Harry Bradbeer from a screenplay by Jack Thorne that adapts the book series The Enola Holmes Mysteries by Nancy Springer. Unlike its predecessor, the film does not adapt one of Springer's novels, and instead takes real-life inspiration from the 1888 matchgirls' strike. In addition to Brown, Henry Cavill, Louis Partridge, Susie Wokoma, Adeel Akhtar, and Helena Bonham Carter reprise their supporting roles, while David Thewlis and Sharon Duncan-Brewster join the cast.

            Filming began in Autumn 2021 and ended in January 2022. Enola Holmes 2 was released on November 4, 2022, by Netflix. The film received positive reviews from critics and topped Netflix's viewership charts in 93 countries.",
            'genre' => 'Mystery/Crime',
            'director' => 'Harry Bradbeer',
            'release_date' => date('2022-10-27'),
            'img_url' => 'enola_holmes2.jpg',
            'background_url' => 'enola_holmes2.png',
        ]);
    }
}
