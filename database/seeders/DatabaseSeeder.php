<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Vince',
            'email' => 'vince@vince.com',
            'password' => '12345678'
        ]);

        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed",
            'ac_url' => '/image/ac1',
            'ac_title' => "Assassin's Creed",
            'ac_text' => "Assassin's Creed is a 2007 sandbox style action-adventure-stealth video game developed by Ubisoft Montreal and published by Ubisoft. The game was released for the Xbox 360 and PlayStation 3 in November 2007 and for PC in April 2008. The game centers around the use of a machine dubbed the Animus, which allows its user to view the genetic memories of their ancestors, centering around the protagonist, a bartender named Desmond Miles. As Desmond relives the memories of one of his ancestors, the Assassin Altaïr Ibn-La'Ahad who lived in the Holy Land during the Third Crusade, details of a battle between two ancient sects – the Knights Templar and the Assassin Order – emerge as both scour for an artifact known only as a Piece of Eden. ",
            'ac_image_path' => '/ac1.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed 2",
            'ac_url' => '/image/ac2',
            'ac_title' => "Assassin's Creed 2",
            'ac_text' => "Assassin's Creed II is a 2009 video game developed by Ubisoft Montreal and published by Ubisoft. It was released on 17 November 2009 (US), 19 November 2009 (AU) and 20 November 2009 (worldwide) on PlayStation 3 and Xbox 360. The PC version was released on 6 March 2010 (UK) and 9 March 2010 (US). A direct sequel to Assassin's Creed, the game focuses again on Desmond Miles after he escapes from Abstergo Industries with the help of employee Lucy Stillman. In an attempt to thwart Abstergo and the modern-day Templars, Desmond uses a new Animus to relive the genetic memories of his ancestor, Ezio Auditore da Firenze, who lived in Italy during the Renaissance. The player controls Desmond to a degree, but primarily Ezio, who becomes an Assassin after his family is betrayed. While controlling Ezio, the player can explore renditions of major Italian regions and cities through a mixture of action, stealth, and economic gameplay. On 16 November 2010, a follow-up in the form of Assassin's Creed: Brotherhood was released, expanding on both Ezio's life and the modern day storyline. ",
            'ac_image_path' => '/ac2.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Brotherhood",
            'ac_url' => '/image/acb',
            'ac_title' => "Assassin's Creed Brotherhood",
            'ac_text' => "Assassin's Creed Brotherhood is a 2010 video game and the direct sequel of 2009's Assassin's Creed II, picking up right after the conclusion of the previous game. The story once again features Ezio Auditore da Firenze, now a legendary Master Assassin, as he strives to rebuild the Assassin Brotherhood in Rome, by bringing down the tyrannical Templar family, the Borgia, and bringing the city into the true wealth and wonder of the Renaissance. A sequel for Brotherhood was announced in May 2011, entitled Assassin's Creed: Revelations, and was released in November of the same year. ",
            'ac_image_path' => '/acb.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Revelation",
            'ac_url' => '/image/acre',
            'ac_title' => "Assassin's Creed Revelation",
            'ac_text' => "Assassin's Creed Revelations is a 2011 video game published by Ubisoft and was developed by its subsidiary, Ubisoft Montreal. A direct sequel and follow-up to 2010's Assassin's Creed: Brotherhood, Revelations is the fourth main installment of the series. Revelations continues the story of Desmond Miles, who has fallen into a coma due to the events of the previous game. In order for him to awaken again, Desmond must relive the last significant memories of his ancestor, the Assassin Mentor Ezio Auditore da Firenze, who sought out the secret library of the Mentor of the Levantine Assassins, Altaïr Ibn-La'Ahad, in 1511. A sequel to Revelations was announced in March 2012, entitled Assassin's Creed III, and was released in October of the same year.",
            'ac_image_path' => '/acre.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed 3",
            'ac_url' => '/image/ac3',
            'ac_title' => "Assassin's Creed 3",
            'ac_text' => "Assassin's Creed III is a 2012 sandbox style action-adventure video game that is developed by Ubisoft Montreal and published by Ubisoft. It is the fifth main title in the Assassin's Creed series, and is a direct sequel to Assassin's Creed: Revelations. The game tells the stories of Haytham Kenway and Ratonhnhaké:ton, set in the American Northeast from 1754 - 1783, during the Seven Years' War and American Revolutionary Wars. It also concludes the modern-day story of their descendant Desmond Miles. Assassin's Creed III was released for Xbox 360 and PS3 on 30 October in the United States and 31 October in Europe and Australia, while the PC version was released on 20 November for the United States and 23 November in Europe. The game was also released for the Wii U in North America on 18 November. On 28 February 2013, Ubisoft announced the game's sequel, titled Assassin's Creed IV: Black Flag. It was released on 29 October 2013.",
            'ac_image_path' => '/ac3.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Black Flag",
            'ac_url' => '/image/ac4',
            'ac_title' => "Assassin's Creed Black Flag",
            'ac_text' => "Assassin's Creed IV Black Flag is a 2013 action-adventure game, and the sixth main installment in the Assassin's Creed series. A sequel to 2012's Assassin's Creed III, the game has the player take on the role of an Abstergo Entertainment research analyst as they explore the story of Edward Kenway—father to Haytham Kenway, grandfather to Ratonhnhaké:ton, and an ancestor of Desmond Miles. Assassin's Creed IV: Black Flag is set primarily on and around the islands in the Caribbean Sea during the Golden Age of Piracy in the early 18th century, with the three major cities consisting of Havana, Nassau, and Kingston.",
            'ac_image_path' => '/ac4.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Unity",
            'ac_url' => '/image/acu',
            'ac_title' => "Assassin's Creed Unity",
            'ac_text' => "Assassin's Creed Unity is a 2014 sandbox action adventure game, and a sequel to 2013's Assassin's Creed IV: Black Flag, the game has the player take on the role of an Initiate as they explore the story of Arno Dorian, who joins the Assassins to investigate the murder of his adoptive father on behalf of his adoptive sister Élise de la Serre, a member of the Templars. The game was released on 11 November 2014 in North America, 13 November in Europe and 14 November in the UK. It is available for PlayStation 4, Xbox One, and PC. Assassin's Creed: Unity is set primarily in Paris during the French Revolution in the late 18th century, with two additional areas in Versailles and Saint-Denis.",
            'ac_image_path' => '/acu.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Rogue",
            'ac_url' => '/image/acro',
            'ac_title' => "Assassin's Creed Rogue",
            'ac_text' => "Assassin's Creed Rogue is a 2014 open-world action adventure game that is developed by Ubisoft Sofia and published by Ubisoft. It is the seventh main installment in the Assassin's Creed series. The game follows the story of the Assassin-turned-Templar Shay Cormac, taking place during the Seven Years' War from 1752–1760, and is the closing chapter in the Kenway family's saga. The game was released for the PlayStation 3 and Xbox 360 on November 11, 2014 in the United States, November 13, 2014 in Europe, November 14, 2014 in the United Kingdom, and March 10, 2015 for the PC. A remastered version of the game was later released globally for the Xbox One and PlayStation 4 on March 20, 2018.",
            'ac_image_path' => '/acro.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Syndicate",
            'ac_url' => '/image/acs',
            'ac_title' => "Assassin's Creed Syndicate",
            'ac_text' => "Assassin's Creed Syndicate is the ninth main installment in the Assassin's Creed series. The conceptual title and screenshots of the game were first leaked on 2 December 2014, following which Ubisoft acknowledged the leaked assets then code-named Assassin's Creed: Victory as being genuine. The game was released on 23 October 2015 worldwide on PlayStation 4 and Xbox One, while the PC version released on 19 November 2015. The game has the player take on the role of an Initiate as they explore the story of the twin protagonists, Jacob and Evie Frye, both of whom are playable. The two arrive in London in 1868, as the Industrial Revolution reaches its climax, bringing its lot of inequality and poverty in a city controlled by the Templars. To stop their rule, the Fryes will take over the organized crime in an effort to gather an army and free London. Assassin's Creed: Syndicate is set primarily in 19th century London, during the Victorian era.",
            'ac_image_path' => '/acs.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Origins",
            'ac_url' => '/image/acor',
            'ac_title' => "Assassin's Creed Origins",
            'ac_text' => "Assassin's Creed: Origins is the tenth main installment in the Assassin's Creed series developed by Ubisoft. The game was released worldwide on October 27, 2017.",
            'ac_image_path' => '/acor.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Odyssey",
            'ac_url' => '/image/acod',
            'ac_title' => "Assassin's Creed Odyssey",
            'ac_text' => "Assassin's Creed: Odyssey is the eleventh main installment in the Assassin's Creed series developed by Ubisoft. ",
            'ac_image_path' => '/acod.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Valhalla",
            'ac_url' => '/image/acv',
            'ac_title' => "Assassin's Creed Valhalla",
            'ac_text' => "Assassin's Creed: Valhalla is the twelfth main installment in the Assassin's Creed series developed by Ubisoft. In the game, the player takes control of Eivor Varinsdottir, a Viking from Norway who participated in the Norse invasion of England during the 9th century.",
            'ac_image_path' => '/acv.jpg'
        ]);
        \App\Models\AcDatabase::factory()->create([
            'ac_name' => "Assassin's Creed Mirage",
            'ac_url' => '/image/acm',
            'ac_title' => "Assassin's Creed Mirage",
            'ac_text' => "Assassin's Creed Mirage is the thirteenth main installment in the Assassin's Creed series developed by Ubisoft. In the game, players take control of a younger version of Basim Ibn Ishaq, a central character from the 2020 video game Assassin's Creed Valhalla, and explore his life during the 9th century in the Abbasid Caliphate's capital city of Baghdad.",
            'ac_image_path' => '/acm.jpg'
        ]);
    }
}
