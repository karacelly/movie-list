<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::create([
            'id' => 1,
            'name' => 'Dwayne Johnson',
            'gender' => 'Male',
            'biography' => "Dwayne Douglas Johnson, also known by his ring name The Rock, is an American actor and former professional wrestler. Widely regarded as one of the greatest professional wrestlers of all time,he was integral to the development and success of the WWE during the Attitude Era, an industry boom period in the late 1990s and early 2000s. Johnson wrestled for WWF/E for eight years prior to pursuing an acting career. His films have grossed over $3.5 billion in North America and over $10.5 billion worldwide, making him one of the world's highest-grossing and highest-paid actors.",
            'dob' => date("1972-5-2"),
            'birthplace' => 'Hayward, California',
            'img_url' => 'Dwayne_Johnson.jpg',
            'popularity' => 4.0,
        ]);

        Actor::create([
            'id' => 2,
            'name' => 'Henry Cavill',
            'gender' => 'Male',
            'biography' => "Henry William Dalgliesh Cavill is a British actor. He is known for his portrayal of Charles Brandon in Showtime's The Tudors, DC Comics character Superman in the DC Extended Universe, Geralt of Rivia in the Netflix fantasy series The Witcher, and Sherlock Holmes in the Netflix film Enola Holmes and its 2022 sequel.",
            'dob' => date("1983-5-5"),
            'birthplace' => 'Saint Helier, Jersey',
            'img_url' => 'Henry_Cavill.jpg',
            'popularity' => 3.5,
        ]);
    }
}
