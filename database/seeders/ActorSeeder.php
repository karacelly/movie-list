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
    }
}
