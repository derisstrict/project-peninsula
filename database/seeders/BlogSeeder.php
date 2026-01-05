<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'id_user' => '1',
            'isi_blog' => "The Nusa Dua, October 27, 2025 - A festive atmosphere filled The Nusa Dua Festival (NDF) 2025, themed \"Beauty Harmony,\" in The Nusa Dua area, Bali. A total of 18,825 people enjoyed the music, art, and cultural offerings amidst the beautiful coastal landscape of Peninsula Island on October 25-26, 2025. Organized by InJourney Tourism Development Corporation (ITDC), a member of the InJourney Group, the festival demonstrated the resurgence of this iconic event, a long-standing source of Balinese pride.

            From afternoon until evening, thousands of visitors filled the Peninsula Island area of ​​The Nusa Dua to enjoy performances by national and local musicians, Balinese cultural attractions, body painting, and a variety of culinary delights, specially curated products from local MSMEs, and The Nusa Dua tenants. The warm and lively atmosphere reflected the harmony between community, art, and nature in one of Indonesia's top tourism destinations.

            The successful performances of Bunga Citra Lestari (BCL) and Kahitna on the main stage were followed by stunning performances by local musicians such as Tika Pagraky, Navicula, and Astera. This collaboration between national and local musicians brought a positive energy that immersed all attendees in the festival's excitement.

            ITDC's Director of Operations, Troy Warokka, expressed his appreciation for the high level of public enthusiasm for this year's festival. \"We are very grateful to see the extraordinary response from the public. A total of 18,825 visitors attended, demonstrating that the Nusa Dua Festival remains a proud icon and is eagerly awaited every year. This festival is not only an entertainment event, but also a platform to showcase the harmony between culture, music, and the beauty of the Nusa Dua area,\" said Troy.

            The Nusa Dua Festival 2025 is a concrete manifestation of ITDC's commitment to bringing back this iconic event, known since 1996 as the Nusa Dua Fiesta. \"We are committed to continuing to present activities that have a positive impact on the community, MSMEs, and the national tourism industry. Through this festival, we want to strengthen The Nusa Dua's position as a world-class destination that remains close to the community,\" he added.

            The two-day festival, October 25-26, 2025, successfully presented a variety of engaging performances and captivating cross-genre collaborations, leaving a lasting impression on visitors until the closing night.",
            'judul_blog' => '18,000 Visitors Flocked to the Nusa Dua Festival 2025 on Peninsula Island',
            'slug' => 'the-nusa-dua-festival-2025',
            'gambar_blog' => 'blogs/nusa_dua_festival.webp',
            'alt_gambar' => 'The Image of 2025 The Nusa Dua Festival Parade'
        ]);

        Blog::create([
            'id_user' => '1',
            'isi_blog' => "The Nusa Dua Festival 2025 was held on Peninsula Island, Nusa Dua, Badung, on Saturday (October 25-26, 2025). This festival featured a new concept of collaboration between the local community and the private sector.
            This event is considered to have a significant impact, not only on the development of the Nusa Dua tourism area, but also on the socio-cultural aspects and the economic revival of the community.
            \"Perhaps, if you look at it, there are no foreign brands coming here, but we are providing this Nusa Dua Festival as a showcase, a showcase for cultural and economic revival, especially for MSMEs, and also community participation,\" said ITDC Operations Director Troy Reza Warokka to the media on Saturday (October 25, 2025).

            This year's festival was attended by 30 F&B tenants, 17 hotel and facility tenants, and four ITDC-assisted MSMEs spanning the culinary, craft, jewelry, and community sectors.

            In addition to showcasing various local products, the festival also featured collaborations between hotels and the village community in a cultural parade. A total of 13 contingents, consisting of representatives from hotels and traditional village banjars, took part in the cultural parade.

            \"Almost all the banjars participated, collaborating with the private sector. These private sectors are ITDC tenants, especially in Nusa Dua. Various hotels were involved, and of course, community leaders. We saw many community leaders in attendance,\" he explained.

            Themed \"Beauty Harmony,\" this year's festival emphasized the importance of harmony and collaboration between banjars and hotels. He aimed to demonstrate ITDC's inclusive approach to the surrounding community.

            \"So, we want to show that Nusa Dua may be considered exclusive, but it's actually very inclusive. So, everyone can join, everyone can collaborate, and everyone can benefit from the rules we set,\" added I Made Agus Dwiatmika, General Manager of ITDC The Nusa Dua.

            The event, formerly known as the Nusa Dua Fiesta, involved 1,866 people. From parade participants to elementary school children dancing the pendet dance, MSMEs and community groups, local competition participants, and even the Pecalang (traditional Balinese dance group) from three traditional villages who maintained security, the festival featured a variety of activities, including a penjor competition, photography and clay mask contests, body painting, and various cultural performances showcasing the creativity of the Balinese people.

            The highlight of the entertainment was a number of renowned Indonesian artists, including Bunga Citra Lestari (BCL) and Tika Pagraky on the opening night, and Kahitna, Navicula, and Astera, who capped off the event with a festive atmosphere on the closing night.",
            'judul_blog' => 'Banjar and Hotel Collaboration Colors the Cultural Parade of The Nusa Dua Festival 2025',
            'slug' => 'parade-budaya-the-nusa-dua-festival-2025',
            'gambar_blog' => 'blogs/parade.jpg',
            'alt_gambar' => 'The Image of 2025 The Nusa Dua Festival Parade'
        ]);
    }
}
