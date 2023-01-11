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
            'director' => 'Harry Bradbeer',
            'release_date' => date('2022-10-27'),
            'img_url' => 'enola_holmes2.jpg',
            'background_url' => 'enola_holmes2.jpg',
        ]);

        Movie::create([
            'id' => 3,
            'title' => 'Uncharted',
            'description' => "Street-smart Nathan Drake (Tom Holland) is recruited by seasoned treasure hunter Victor 'Sully' Sullivan (Mark Wahlberg) to recover a fortune amassed by Ferdinand Magellan and lost 500 years ago by the House of Moncada. What starts as a heist job for the duo becomes a globe-trotting, white-knuckle race to reach the prize before the ruthless Santiago Moncada (Antonio Banderas), who believes he and his family are the rightful heirs. If Nate and Sully can decipher the clues and solve one of the world's oldest mysteries, they stand to find $5 billion in treasure and perhaps even Nate's long-lost brother...but only if they can learn to work together.",
            'director' => 'Ruben Fleischer',
            'release_date' => date('2022-02-16'),
            'img_url' => 'uncharted.jpg',
            'background_url' => 'uncharted.jpg',
        ]);

        Movie::create([
            'id' => 4,
            'title' => 'Spider-Man: Homecoming',
            'description' => "Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the second Spider-Man film reboot and the 16th film in the Marvel Cinematic Universe (MCU). The film was directed by Jon Watts, from a screenplay by the writing teams of Jonathan Goldstein and John Francis Daley, Watts and Christopher Ford, and Chris McKenna and Erik Sommers. Tom Holland stars as Peter Parker / Spider-Man, alongside Michael Keaton, Jon Favreau, Gwyneth Paltrow, Zendaya, Donald Glover, Jacob Batalon, Laura Harrier, Tony Revolori, Bokeem Woodbine, Tyne Daly, Marisa Tomei, and Robert Downey Jr. In the film, Peter Parker tries to balance high school life with being Spider-Man while facing the Vulture (Keaton).

            In February 2015, Marvel Studios and Sony reached a deal to share the film rights for Spider-Man, integrating the character into the established MCU. The following June, Holland was cast as the title character, and Watts was hired to direct. This was followed shortly by the hiring of Daley and Goldstein. In April 2016, the film's title was revealed, along with additional cast, including Downey in his MCU role of Tony Stark / Iron Man. Principal photography began in June 2016 at Pinewood Atlanta Studios in Fayette County, Georgia, and continued in Atlanta, Los Angeles, and New York City. The other screenwriters were revealed during filming, which concluded in Berlin in October 2016. The production team made efforts to differentiate the film from previous Spider-Man films.

            Spider-Man: Homecoming premiered in Hollywood on June 28, 2017, and was released in the United States on July 7, as part of Phase Three of the MCU. Homecoming grossed over $880 million worldwide, becoming the second-most-successful Spider-Man film and the sixth-highest-grossing film of 2017. It received praise for the light tone, its focus on Parker's high school life, and the performances, particularly of Holland and Keaton. Two sequels have been released: Spider-Man: Far From Home (2019) and Spider-Man: No Way Home (2021). A new trilogy of live-action films from Sony and Marvel Studios is in development.",
            'director' => 'Jon Watts',
            'release_date' => date('2017-06-28'),
            'img_url' => 'spiderman_homecoming.jpg',
            'background_url' => 'spiderman_homecoming.jpg',
        ]);

        Movie::create([
            'id' => 5,
            'title' => 'Spider-Man: No Way Home',
            'description' => "Spider-Man: No Way Home is a 2021 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios and distributed by Sony Pictures Releasing. It is the sequel to Spider-Man: Homecoming (2017) and Spider-Man: Far From Home (2019), and the 27th film in the Marvel Cinematic Universe (MCU). The film was directed by Jon Watts and written by Chris McKenna and Erik Sommers. It stars Tom Holland as Peter Parker / Spider-Man alongside Zendaya, Benedict Cumberbatch, Jacob Batalon, Jon Favreau, Jamie Foxx, Willem Dafoe, Alfred Molina, Benedict Wong, Tony Revolori, Marisa Tomei, Andrew Garfield, and Tobey Maguire. In the film, Parker asks Dr. Stephen Strange (Cumberbatch) to use magic to make his identity as Spider-Man a secret again following its public revelation at the end of Far From Home. When the spell goes wrong because of Parker's actions, the multiverse is broken open, which allows visitors from alternate realities to enter Parker's universe.

            A third MCU Spider-Man film was planned during the production of Homecoming in 2017. Negotiations between Sony and Marvel Studios to alter their deal—in which they produce the Spider-Man films together—ended with Marvel Studios leaving the project in August 2019, but a negative fan reaction led to a new deal between the companies a month later. Watts, McKenna, Sommers, and Holland were set to return, and filming took place from October 2020 to March 2021 in New York City and Atlanta. No Way Home features several actors reprising their roles from non-MCU Spider-Man films directed by Sam Raimi and Marc Webb, including previous Spider-Man actors Maguire and Garfield. The involvement of both actors was the subject of wide speculation and numerous leaks despite the efforts of Sony, Marvel, and the cast to conceal their involvement.

            Spider-Man: No Way Home premiered at the Fox Village Theatre in Los Angeles on December 13, 2021, and was theatrically released in the United States on December 17, as part of Phase Four of the MCU. It received praise from critics for its story, direction, action sequences, emotional weight, the performances of Holland, Maguire, Garfield, Dafoe, and Molina, and the cast's chemistry. The film grossed $1.916 billion worldwide, surpassing its predecessor as the highest-grossing film released by Sony Pictures. It became the highest-grossing film of 2021, the sixth-highest-grossing film of all time, the highest grossing Spider-Man film, and set several other box office records, including those for films released during the COVID-19 pandemic. The film received a nomination for Best Visual Effects at the 94th Academy Awards, among numerous other accolades. An extended version of the film, subtitled The More Fun Stuff Version, was theatrically released globally in September 2022, while a sequel is in development.",
            'director' => 'Jon Watts',
            'release_date' => date('2021-12-13'),
            'img_url' => 'spiderman_nowayhome.jpg',
            'background_url' => 'spiderman_nowayhome.jpg',
        ]);

        Movie::create([
            'id' => 6,
            'title' => 'Space Sweepers',
            'description' => "After snatching a crashed space shuttle in the latest debris chase, Spaceship Victory's crew members find a 7-year-old girl inside. They realise that she's the humanlike robot wanted by UTS Space Guards, and decide to demand a ransom in exchange.",
            'director' => 'Jo Sung-hee',
            'release_date' => date('2021-2-5'),
            'img_url' => 'space_sweepers.jpg',
            'background_url' => 'space_sweepers.jpg',
        ]);

        Movie::create([
            'id' => 7,
            'title' => 'Cek Toko Sebelah 2',
            'description' => "Cek Toko Sebelah 2 adalah film drama komedi Indonesia tahun 2022 yang ditulis dan disutradarai oleh Ernest Prakasa. Film ini merupakan sekuel dari film tahun 2016 Cek Toko Sebelah.",
            'director' => 'Ernest Prakasa',
            'release_date' => date('2022-12-22'),
            'img_url' => '01ghwrkct1wcj1h2c4h0n17aqk.jpg',
            'background_url' => '01ghwrkct1wcj1h2c4h0n17aqk.jpg',
        ]);

        Movie::create([
            'id' => 8,
            'title' => 'Cek Toko Sebelah',
            'description' => "Cek Toko Sebelah (bahasa Inggris: Check the Store Next Door) adalah film komedi Indonesia produksi Starvision Plus yang dirilis pada 28 Desember 2016 dan disutradarai oleh Ernest Prakasa. Ide cerita film ini dibuat berdasarkan pada realitas etnis Tionghoa saat anak beranjak dewasa, kuliah yang tinggi, mirisnya ujung-ujungnya bekerja di toko orang tuanya sendiri. Film ini ditulis oleh Ernest Prakasa dan Jenny Jusuf dengan pengembangan cerita dari Meira Anastasia.[1]

            Cek Toko Sebelah mendapatkan reaksi yang sangat positif dari penonton dan kritikus film, terutama untuk skenario film. Dalam Festival Film Indonesia 2017, film ini mendapatkan sembilan nominasi, termasuk Film Terbaik serta Sutradara Terbaik dan Aktor Terbaik untuk Ernest Prakasa, memenangkan satu untuk Skenario Asli Terbaik. Cek Toko Sebelah lebih berhasil pada ajang Festival Film Bandung 2017 di mana film ini memenangkan dua penghargaan (Film Terpuji dan Aktor Terpuji).",
            'director' => 'Ernest Prakasa',
            'release_date' => date('2016-12-28'),
            'img_url' => 'Cek_Toko_Sebelah.jpg',
            'background_url' => 'Cek_Toko_Sebelah.jpg',
        ]);
    }
}
