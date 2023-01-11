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
            'biography' => "Dwayne Douglas Johnson, also known as The Rock, was born on May 2, 1972 in Hayward, California. He is the son of Ata Johnson (born Feagaimaleata Fitisemanu Maivia) and professional wrestler Rocky Johnson (born Wayde Douglas Bowles). His father, from Amherst, Nova Scotia, Canada, is black (of Black Nova Scotian descent), and his mother is of Samoan background (her own father was Peter Fanene Maivia, also a professional wrestler). While growing up, Dwayne traveled around a lot with his parents and watched his father perform in the ring. During his high school years, Dwayne began playing football and he soon received a full scholarship from the University of Miami, where he had tremendous success as a football player. In 1995, Dwayne suffered a back injury which cost him a place in the NFL. He then signed a three-year deal with the Canadian League but left after a year to pursue a career in wrestling.

            He made his wrestling debut in the USWA under the name Flex Kavanah where he won the tag team championship with Brett Sawyer. In 1996, Dwayne joined the WWE and became Rocky Maivia where he joined a group known as 'The Nation of Domination' and turned heel. Rocky eventually took over leadership of the 'Nation' and began taking the persona of The Rock. After the 'Nation' split, The Rock joined another elite group of wrestlers known as the 'Corporation' and began a memorable feud with Steve Austin. Soon the Rock was kicked out of the 'Corporation'. He turned face and became known as 'The Peoples Champion'. In 2000, the Rock took time off from WWE to film his appearance in The Mummy Returns (2001). He returned in 2001 during the WCW/ECW invasion where he joined a team of WWE wrestlers at The Scorpion King (2002), a prequel to The Mummy Returns (2001).

            Dwayne has a daughter, Simone Alexandra Johnson, born in 2001, with his ex-wife Dany Garcia, and daughters, Jasmine, born in 2015, and Tiana Gia, born in 2018, with his wife, singer and songwriter Lauren Hashian.",
            'dob' => date("1972-5-2"),
            'birthplace' => 'Hayward, California',
            'img_url' => 'Dwayne_Johnson.jpg',
            'popularity' => 4.0,
        ]);

        Actor::create([
            'id' => 2,
            'name' => 'Henry Cavill',
            'gender' => 'Male',
            'biography' => "Henry William Dalgliesh Cavill was born on the Bailiwick of Jersey, a British Crown dependency in the Channel Islands. His mother, Marianne (Dalgliesh), a housewife, was also born on Jersey, and is of Irish, Scottish and English ancestry. Henry's father, Colin Richard Cavill, a stockbroker, is of English origin (born in Chester, England). Henry is the second youngest son, with four brothers. He was privately educated at St. Michael's Preparatory School in Saint Saviour, Jersey before attending Stowe School in Buckinghamshire, England.

            His interest in acting started at an early age with school play renditions of Shakespeare's 'A Midsummer Night's Dream', and Sonny LaTierri in 'Grease'. He also starred and directed Shakespeare's 'Hamlet' in the BBC documentary '40 Minutes'. It was at age 17 when Henry was discovered by casting directors at school who were looking for a young boy to play Albert Mondego in The Count of Monte Cristo (2002). He went on to star in Vendetta (2001), appear in BBC's The Inspector Lynley Mysteries (2001), the television film Goodbye, Mr. Chips (2002), and the television series Midsomer Murders (1997).

            When Henry was 20 years old, he gained starring roles in I Capture the Castle (2003), Hellraiser: Hellworld (2005), Red Riding Hood (2006) and Tristan + Isolde (2006). He also had a minor role in the fantasy-adventure epic Stardust (2007) alongside Sienna Miller and Ben Barnes. During 2007-2010, Henry had a leading role on the television series The Tudors (2007) as Charles Brandon, 1st Duke of Suffolk. The series was a success and was nominated for a Golden Globe Award in 2007 and won an Emmy Award in 2008. Entertainment Weekly named him 'Most Dashing Duke'.

            He also starred in Blood Creek (2006) and Woody Allen's comedy film Whatever Works (2009). On January 30, 2011, it was announced that Henry Cavill had been cast as the next Superman in Man of Steel (2013), making him the first non-American actor to play Superman. The movie was directed by Zach Snyder, produced by Christopher Nolan, and scripted by David S. Goyer. On November 7, 2011, Henry starred in Tarsem Singh's fantasy-adventure epic Immortals (2011) alongside Mickey Rourke, Freida Pinto and Luke Evans. On September 7, 2012, Henry starred in the action-thriller Cold Light of Day (2003) alongside Bruce Willis and Sigourney Weaver.

            On June 10, 2013, Man of Steel (2013) kicked off its world premiere in New York City followed by London, Bailiwick of Jersey, Sicily, Madrid, Shanghai, Sydney and Tokyo. The movie became the highest-grossing Superman film to date, and the second-highest-grossing reboot of all time behind The Amazing Spider-Man (2012). Glamour magazine ranked him the #1 'Sexiest Man'. In August 2014, Henry became the Ambassador for Durrell Wildlife Park and created a website and social media called #CavillConservation to help raise funds and awareness for his love of animals and conservation. On November 3, 2014, it was announced that Cavill, his brother Charlie, and London-based producer Rex Glensy, have formed their own British production company, Promethean Productions.

            On August 7, 2015, The Man from U.N.C.L.E. (2015) began its premiere tour with a people's premiere at the famous Somerset House in London, followed by its world premiere in New York City, then Toronto, and Rio de Janeiro. Cavill reprised his role as Superman in Batman v Superman: Dawn of Justice (2016) and Justice League (2017).",
            'dob' => date("1983-5-5"),
            'birthplace' => 'Saint Helier, Jersey',
            'img_url' => 'Henry_Cavill.jpg',
            'popularity' => 3.5,
        ]);

        Actor::create([
            'id' => 3,
            'name' => 'Song Joong-ki',
            'gender' => 'Male',
            'biography' => "Song Joong-ki (Korean: 송중기; born September 19, 1985) is a South Korean actor. He rose to fame in the historical coming-of-age drama Sungkyunkwan Scandal (2010) and the variety show Running Man (2010–2011) as one of the original cast members. Since then, he has played a diverse spectrum of roles in the television series The Innocent Man (2012), Descendants of the Sun (2016), Arthdal Chronicles (2019), Vincenzo (2021), and Reborn Rich (2022), as well as the hit films A Werewolf Boy (2012), The Battleship Island (2017), and Space Sweepers (2021).

            Song was Gallup Korea's Television Actor of the Year in 2012[1] and in 2017. He was first included in the Forbes Korea Power Celebrity list in 2013 placing seventh, and subsequently ranking second in 2017, and seventh in 2018. The success of his TV series and film works internationally established him as a top Hallyu star in the Korean entertainment industry.",
            'dob' => date("1985-9-19"),
            'birthplace' => 'Dong District, Daejeon, South Korea',
            'img_url' => 'Song_Joongki.jpg',
            'popularity' => 4.3,
        ]);

        Actor::create([
            'id' => 4,
            'name' => 'Ernest Prakasa',
            'gender' => 'Male',
            'biography' => "Ernest Prakasa (born in Jakarta, Indonesia, January 29, 1982) is an Indonesian comedian, stand up performer, writer, and actor. He became popular after receiving third place in Stand Up Comedy Indonesia (SUCI) in 2011. He is known as a Chinese-Indonesian comedian who often uses his ethnic background as a standup comedy subject. Ernest obtained his degree from Padjadjaran University, majoring in International Relations.",
            'dob' => date("1982-1-29"),
            'birthplace' => 'Jakarta, Indonesia',
            'img_url' => 'Ernest.jpg',
            'popularity' => 3.8,
        ]);

        Actor::create([
            'id' => 5,
            'name' => 'Laura Basuki',
            'gender' => 'Female',
            'biography' => "Laura Basuki (lahir 9 Januari 1988) adalah seorang model dan pemeran berkebangsaan Indonesia keturunan Jawa, Tionghoa dan Vietnam. Ia memulai kariernya dengan menjadi seorang model. Laura melakukan debut aktingnya pada tahun 2008 melalui film Gara-Gara Bola yang mengantarkannya pada penghargaan Aktris Pendatang Baru Terbaik serta Terfavorit pada Indonesian Movie Awards 2009.

            Laura meraih Silver Bear untuk Best Supporting Performance pada Festival Film Internasional Berlin 2022 atas penampilannya dalam film Nana. Ia merupakan salah satu aktris yang memenangkan Piala Citra kategori Pemeran Utama Wanita Terbaik bersamaan dengan pemeran utama pria dalam film yang sama – yakni bersama Reza Rahadian pada tahun 2010 untuk film 3 Hati Dua Dunia, Satu Cinta.[2] Laura memenangkan Piala Citra keduanya sepuluh tahun kemudian atas perannya sebagai Susi Susanti dalam Susi Susanti: Love All.",
            'dob' => date("1988-1-9"),
            'birthplace' => 'Berlin Barat, Jerman Barat',
            'img_url' => 'Laura_Basuki.jpg',
            'popularity' => 3.5,
        ]);

        Actor::create([
            'id' => 6,
            'name' => 'Dion Wiyoko',
            'gender' => 'Male',
            'biography' => "Dion Wiyoko (born in Surabaya, May 3, 1984) is an Indonesian actor of Chinese descent who started his career as a model.",
            'dob' => date("1984-5-3"),
            'birthplace' => 'Surabaya, East Java, Indonesia',
            'img_url' => 'dion_wiyoko.jpg',
            'popularity' => 4,
        ]);

        Actor::create([
            'id' => 7,
            'name' => 'Zendaya',
            'gender' => 'Female',
            'biography' => "Zendaya Maree Stoermer Coleman[2] (/zənˈdeɪ.ə/ zən-DAY-ə;[3] born September 1, 1996),[4][5] professionally known by the mononym Zendaya, is an American actress and singer. She has received various accolades, including a Golden Globe Award and two Primetime Emmy Awards. Time magazine named her one of the 100 most influential people in the world on its annual list in 2022.

            Born and raised in Oakland, California, Zendaya began her career as a child model and backup dancer. She made her television debut as Rocky Blue on the Disney Channel sitcom Shake It Up (2010–2013) and starred as the titular character in the sitcom K.C. Undercover (2015–2018), for the channel. Her feature film debut came in 2017 with the superhero film Spider-Man: Homecoming, and she later starred in its sequels. Zendaya's role as Rue Bennett, a struggling drug addicted teenager, in the HBO teen drama series Euphoria (2019–present) made her the youngest recipient of two Primetime Emmy Awards for Outstanding Lead Actress in a Drama Series. Her film roles include the musical The Greatest Showman (2017), the romantic drama Malcolm & Marie (2021), and the science fiction epic Dune (2021).

            In addition to her acting career, Zendaya has ventured into music. In 2011, she released the singles 'Swag It Out' and 'Watch Me', the latter a collaboration with Bella Thorne. She signed with Hollywood Records in 2012. Her eponymous debut studio album (2013) was released to moderate success. The album's lead single, 'Replay', reached the top 40 on the U.S. Billboard Hot 100 chart. Zendaya's biggest commercial success as a musician came with her Zac Efron collaboration, 'Rewrite the Stars', from The Greatest Showman soundtrack in 2017. The single reached within the top 20 of several record charts and has received multi-platinum sales certifications globally.",
            'dob' => date("1996-9-1"),
            'birthplace' => 'Oakland, California, U.S.',
            'img_url' => 'zendaya.jpg',
            'popularity' => 4,
        ]);

        Actor::create([
            'id' => 8,
            'name' => 'Tom Holland',
            'gender' => 'Male',
            'biography' => "Thomas Stanley Holland (born 1 June 1996) is an English actor. His accolades include a British Academy Film Award, three Saturn Awards, a Guinness World Record and an appearance on the Forbes 30 Under 30 Europe list. Some publications have called him one of the most popular actors of his generation.

            Holland's career began at age nine when he enrolled in a dancing class, where a choreographer noticed him and arranged for him to audition for a role in Billy Elliot the Musical at London's Victoria Palace Theatre. After two years of training, he secured a supporting part in 2008 and was upgraded to the title role that year, which he played until 2010. Holland made his film debut in the disaster drama The Impossible (2012) as a teenage tourist trapped in a tsunami, for which he received a London Film Critics Circle Award for Young British Performer of the Year. After this, Holland decided to pursue acting as a full-time career, appearing in How I Live Now (2013) and playing historical figures in the film In the Heart of the Sea (2015) and the miniseries Wolf Hall (2015).

            Holland achieved international recognition playing Spider-Man/Peter Parker in six Marvel Cinematic Universe (MCU) superhero films, beginning with Captain America: Civil War (2016). The following year, Holland received the BAFTA Rising Star Award and later became the youngest actor to play a title role in an MCU film in Spider-Man: Homecoming. The sequels Far From Home (2019) and No Way Home (2021) each grossed more than $1 billion worldwide, and the latter became the highest-grossing film of the year. During this period, Holland gained recognition for playing darker roles in the crime dramas The Devil All the Time (2020) and Cherry (2021). Holland has additionally directed the short film Tweet (2015) and voiced roles in computer-animated features, including Onward (2020).",
            'dob' => date("1996-6-1"),
            'birthplace' => 'London, England',
            'img_url' => 'Tom_Holland.jpg',
            'popularity' => 4.7,
        ]);
    }
}
