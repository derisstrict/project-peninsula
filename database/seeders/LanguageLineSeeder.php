<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Landing Page
        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'description', 
            'text' => [
                'id' => 'Taman pantai yang indah yang terkenal dengan pepohonan hijau subur, patung-patung budaya, dan pemandangan laut yang dramatis, terbuka untuk umum dan cocok untuk jalan-jalan santai atau menghadiri berbagai acara.', 
                'en' => 'A scenic coastal park known for its lush greenery, cultural statues, and dramatic ocean views, open to the public and perfect for peaceful walks or events.']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'open', 
            'text' => [
                'id' => 'Jam Operasional', 
                'en' => 'Open Hours']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'open_description', 
            'text' => [
                'id' => 'Setiap hari | 06.00 AM - 10.00 PM', 
                'en' => 'Every day | 06.00 AM - 10.00 PM']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'fee', 
            'text' => [
                'id' => 'Harga Masuk', 
                'en' => 'Entrance Fee']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'fee_description', 
            'text' => [
                'id' => 'IDR 5000', 
                'en' => 'IDR 5000']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'event', 
            'text' => [
                'id' => 'Acara hari ini', 
                'en' => 'Today\'s event']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'maps', 
            'text' => [
                'id' => 'Map kami', 
                'en' => 'Our maps']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'scroll', 
            'text' => [
                'id' => 'Geser ke bawah', 
                'en' => 'Scroll more']
        ]);

        LanguageLine::create([
            'group' => 'landing_page', 
            'key' => 'links', 
            'text' => [
                'id' => 'Akses cepat', 
                'en' => 'Quick links']
        ]);
        //// Landing Page

        // Video
        LanguageLine::create([
            'group' => 'video', 
            'key' => 'play', 
            'text' => [
                'id' => 'Putar/Stop', 
                'en' => 'Play/Pause']
        ]);
        //// Video

        // Gallery
        LanguageLine::create([
            'group' => 'gallery', 
            'key' => 'title', 
            'text' => [
                'id' => 'Nikmati :accent di Nusa Dua', 
                'en' => 'Enjoy the :accent of Nusa Dua']
        ]);
        
        LanguageLine::create([
            'group' => 'gallery', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Udara Segar', 
                'en' => 'Fresh Air']
        ]);

        LanguageLine::create([
            'group' => 'gallery', 
            'key' => 'description', 
            'text' => [
                'id' => 'Jelajahi Pulau Peninsula baik Anda ingin melihat matahari terbenam, piknik, atau jogging pagi.', 
                'en' => 'Explore The Peninsula Island whether you want to view the sunsets, picnics or morning jogging.']
        ]);

        LanguageLine::create([
            'group' => 'gallery', 
            'key' => 'collections', 
            'text' => [
                'id' => 'Jelajahi koleksi gambar dari kami', 
                'en' => 'Explore our image collections']
        ]);

        LanguageLine::create([
            'group' => 'gallery', 
            'key' => 'explore', 
            'text' => [
                'id' => 'Jelajahi', 
                'en' => 'Explore']
        ]);
        //// Gallery

        // Maps
        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'title_1', 
            'text' => [
                'id' => ':accent Apa yang Ada di Dalam', 
                'en' => ':accent What\'s Inside']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'title_accent_1', 
            'text' => [
                'id' => 'Jelajahi', 
                'en' => 'Explore']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'title_2', 
            'text' => [
                'id' => 'Dimana :accent', 
                'en' => 'Where\'s :accent']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'title_accent_2', 
            'text' => [
                'id' => 'Lokasinya', 
                'en' => 'The Location']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'description', 
            'text' => [
                'id' => 'Pulau Peninsula terletak di Nusa Dua, di pesisir tenggara Bali, Indonesia. Pulau ini berada di dalam kompleks ITDC (Indonesia Tourism Development Corporation), sebuah kawasan resor berpagar yang terkenal dengan hotel-hotel mewah dan pantai-pantainya yang asri.', 
                'en' => 'Peninsula Island is located in Nusa Dua, on the southeastern coast of Bali, Indonesia. It sits within the ITDC (Indonesia Tourism Development Corporation) complex, a gated resort area known for its luxury hotels and pristine beaches.']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'button', 
            'text' => [
                'id' => 'Lihat di Google Maps', 
                'en' => 'Take me to Google Maps']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'see_more', 
            'text' => [
                'id' => 'Lihat Selengkapnya', 
                'en' => 'See More']
        ]);

        LanguageLine::create([
            'group' => 'maps', 
            'key' => 'about_place', 
            'text' => [
                'id' => 'Tentang Tempat', 
                'en' => 'About Place']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_1', 
            'text' => [
                'id' => 'Pura Bias Tugel', 
                'en' => 'Bias Tugel Temple']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_1', 
            'text' => [
                'id' => 'Pura Bias Tugel, simbol spiritual dengan panorama laut.', 
                'en' => 'Bias Tugel Temple, a spiritual symbol with a panoramic view of the sea.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_1', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_1', 
            'text' => [
                'id' => 'Pura Bias Tugel adalah tempat suci umat Hindu yang berlokasi di kawasan Peninsula Island dan menghadap langsung ke laut. Pura ini dikenal dengan suasana yang tenang, nilai spiritual yang kuat, serta keindahan alam sekitarnya, sehingga menjadi salah satu titik penting bagi wisatawan yang ingin mengenal budaya dan spiritualitas Bali.', 
                'en' => 'Bias Tugel Temple is a sacred place for Hindus located on Peninsula Island, facing the sea. This temple is known for its peaceful atmosphere, strong spiritual values, and natural beauty, making it an important destination for tourists who want to learn about Balinese culture and spirituality.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_2', 
            'text' => [
                'id' => 'Helipad', 
                'en' => 'Helipad']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_2', 
            'text' => [
                'id' => 'Helipad Peninsula Island merupakan area terbuka yang menawarkan pemandangan laut lepas secara langsung.', 
                'en' => 'Helipad Peninsula Island is an open area offering direct views of the open sea.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_2', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_2', 
            'text' => [
                'id' => 'Helipad Peninsula Island merupakan area terbuka yang berlokasi di tepi tebing, menawarkan panorama laut lepas dengan sudut pandang luas. Spot ini sering menjadi pilihan wisatawan untuk menikmati pemandangan, berfoto, serta menyaksikan matahari terbit maupun terbenam dalam suasana yang tenang.', 
                'en' => 'Helipad Peninsula Island is an open area located on the edge of a cliff, offering panoramic views of the open sea. This spot is often chosen by tourists to enjoy the scenery, take photos, and watch the sunrise or sunset in a peaceful atmosphere.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_3', 
            'text' => [
                'id' => 'Patung Arjuna dan Kresna', 
                'en' => 'Arjuna dan Kresna Statue']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_3', 
            'text' => [
                'id' => 'Patung Arjuna dan Krisna, simbol persahabatan dan kebijaksanaan.', 
                'en' => 'The statues of Arjuna and Krishna, symbols of friendship and wisdom.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_3', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_3', 
            'text' => [
                'id' => 'Patung Arjuna dan Krisna di Peninsula Island menggambarkan tokoh penting dalam kisah Mahabharata yang melambangkan kebijaksanaan, keberanian, dan persahabatan. Keberadaan patung ini menjadi daya tarik budaya sekaligus sarana edukasi bagi wisatawan untuk mengenal nilai-nilai filosofi yang terkandung dalam tradisi Hindu.', 
                'en' => 'The statues of Arjuna and Krishna on Peninsula Island depict important figures in the Mahabharata story who symbolize wisdom, courage, and friendship. These statues are a cultural attraction and an educational tool for tourists to learn about the philosophical values contained in Hindu tradition.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_4', 
            'text' => [
                'id' => 'Tari Kecak dan Barong', 
                'en' => 'Kecak and Barong Dance']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_4', 
            'text' => [
                'id' => 'Kecak and Tarian Barong, pertunjukan seni tradisional Bali.', 
                'en' => 'Kecak and Barong Dance, traditional Balinese art performances.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_4', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_4', 
            'text' => [
                'id' => 'Kecak and Barong Dance di Peninsula Island merupakan pertunjukan seni tradisional Bali yang menampilkan perpaduan gerak tari, irama vokal, dan kisah budaya yang sarat makna. Pertunjukan ini menjadi daya tarik bagi wisatawan untuk menyaksikan secara langsung kekayaan seni dan tradisi Bali dalam suasana yang autentik.', 
                'en' => 'Kecak and Barong Dance on Peninsula Island is a traditional Balinese art performance that features a combination of dance movements, vocal rhythms, and cultural stories rich in meaning. This performance attracts tourists who want to witness firsthand the richness of Balinese art and tradition in an authentic atmosphere.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_5', 
            'text' => [
                'id' => 'Pantai Suryodaya', 
                'en' => 'Suryodaya Beach']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_5', 
            'text' => [
                'id' => 'Pantai Suryodaya, spot pantai dengan nuansa menenangkan.', 
                'en' => 'Suryodaya Beach, a beach spot with a calming atmosphere.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_5', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_5', 
            'text' => [
                'id' => 'Pantai Suryodaya merupakan kawasan pantai di Peninsula Island yang menawarkan suasana tenang dengan hamparan pasir dan pemandangan laut yang alami. Pantai ini cocok bagi wisatawan yang ingin menikmati keindahan alam, bersantai, serta merasakan suasana pantai yang lebih privat dan nyaman.', 
                'en' => 'Suryodaya Beach is a beach area on Peninsula Island that offers a tranquil atmosphere with stretches of sand and natural sea views. This beach is suitable for tourists who want to enjoy natural beauty, relax, and experience a more private and comfortable beach atmosphere.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_6', 
            'text' => [
                'id' => 'Taman Harapan', 
                'en' => 'Garden of Hope']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_6', 
            'text' => [
                'id' => 'Taman Harapan, area taman untuk bersantai dan menikmati alam.', 
                'en' => 'Garden Of Hope, a park area for relaxing and enjoying nature.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_6', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_6', 
            'text' => [
                'id' => 'Taman Harapan atau Garden of Hope merupakan ruang terbuka hijau di kawasan Peninsula Island yang dirancang sebagai area bersantai dengan suasana tenang dan asri. Taman ini menjadi tempat yang nyaman bagi wisatawan untuk beristirahat, berjalan santai, serta menikmati keindahan alam di sekitarnya.', 
                'en' => 'Taman Harapan or Garden of Hope is a green open space on Peninsula Island designed as a relaxing area with a calm and beautiful atmosphere. This park is a comfortable place for tourists to rest, take a leisurely stroll, and enjoy the natural beauty of the surrounding area.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_7', 
            'text' => [
                'id' => 'Taman Bunga', 
                'en' => 'Garden of Flowers']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_7', 
            'text' => [
                'id' => 'Taman Bunga, area taman dengan beragam tanaman hias.', 
                'en' => 'Flower Garden, a garden area with a variety of ornamental plants.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_7', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_7', 
            'text' => [
                'id' => 'Taman Bunga di Peninsula Island merupakan area taman yang menampilkan berbagai jenis tanaman hias dengan penataan yang rapi dan menarik. Taman ini menjadi salah satu spot yang nyaman bagi wisatawan untuk berjalan santai, berfoto, serta menikmati suasana alam yang segar.', 
                'en' => 'The Flower Garden on Peninsula Island is a park area that displays various types of ornamental plants in a neat and attractive arrangement. This park is a comfortable spot for tourists to take a leisurely stroll, take photos, and enjoy the fresh natural atmosphere.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_8', 
            'text' => [
                'id' => 'Monumen Persaudaraan', 
                'en' => 'Brothership Monument']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_8', 
            'text' => [
                'id' => 'Monumen Persaudaraan, simbol kebersamaan dan persatuan.', 
                'en' => 'Monument of Brotherhood, a symbol of togetherness and unity.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_8', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_8', 
            'text' => [
                'id' => 'Monumen Persaudaraan di Peninsula Island merupakan simbol kebersamaan dan persatuan yang mencerminkan nilai-nilai harmoni. Monumen ini menjadi salah satu titik refleksi bagi wisatawan untuk memahami makna persaudaraan dalam keberagaman, sekaligus menikmati suasana kawasan sekitarnya.', 
                'en' => 'The Brotherhood Monument on Peninsula Island is a symbol of togetherness and unity that reflects the values of harmony. This monument is a place of reflection for tourists to understand the meaning of brotherhood in diversity, while enjoying the atmosphere of the surrounding area.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_9', 
            'text' => [
                'id' => 'Waterblow', 
                'en' => 'Waterblow']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_9', 
            'text' => [
                'id' => 'Waterblow, spot alam dengan semburan ombak alami.', 
                'en' => 'Waterblow, a natural spot with natural wave bursts.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_9', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_9', 
            'text' => [
                'id' => 'Waterblow di Peninsula Island merupakan fenomena alam yang terjadi akibat hempasan ombak besar yang menghantam celah batuan karang, sehingga menghasilkan semburan air laut ke udara. Spot ini menjadi salah satu daya tarik utama bagi wisatawan untuk menyaksikan kekuatan alam secara langsung dengan tetap memperhatikan aspek keselamatan.', 
                'en' => 'Waterblow on Peninsula Island is a natural phenomenon that occurs when large waves crash against the crevices of coral rocks, causing seawater to spray into the air. This spot is one of the main attractions for tourists who want to witness the power of nature firsthand while still paying attention to safety.']
        ]);
        
        // baru
        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_10', 
            'text' => [
                'id' => 'Toilet', 
                'en' => 'Toilet']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_10', 
            'text' => [
                'id' => 'Fasilitas toilet disediakan untuk mendukung kenyamanan wisatawan.', 
                'en' => 'Toilet facilities are provided for the convenience of tourists.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_10', 
            'text' => [
                'id' => 'bjir tong sampah ada 3 warna', 
                'en' => 'Sheesh There are three colors of Rubbish bin ']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_10', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_11', 
            'text' => [
                'id' => 'Toilet', 
                'en' => 'Toilet']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_11', 
            'text' => [
                'id' => 'Fasilitas toilet disediakan untuk mendukung kenyamanan wisatawan.', 
                'en' => 'Toilet facilities are provided for the convenience of tourists.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_11', 
            'text' => [
                'id' => 'bjir tong sampah ada 3 warna', 
                'en' => 'Sheesh There are three colors of Rubbish bin ']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_11', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_12', 
            'text' => [
                'id' => 'Mesin Penjual Otomatis', 
                'en' => 'Vending Machine']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_12', 
            'text' => [
                'id' => 'Vending machine tersedia untuk kebutuhan minuman dan camilan.', 
                'en' => 'Vending machines are available for beverages and snacks.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_12', 
            'text' => [
                'id' => 'bjir tong sampah ada 3 warna', 
                'en' => 'Sheesh There are three colors of Rubbish bin ']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_12', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_13', 
            'text' => [
                'id' => 'Balebengong', 
                'en' => 'Balebengong']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_13', 
            'text' => [
                'id' => 'Balé Bengong, area istirahat terbuka bagi pengunjung.', 
                'en' => 'Balé Bengong, an open rest area for visitors.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_13', 
            'text' => [
                'id' => 'bjir tong sampah ada 3 warna', 
                'en' => 'Sheesh There are three colors of Rubbish bin ']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_13', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_14', 
            'text' => [
                'id' => 'Gapura', 
                'en' => 'Gateway']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_14', 
            'text' => [
                'id' => 'Gapura Peninsula menjadi pintu masuk ikonik yang menyambut wisatawan menuju keindahan.', 
                'en' => 'The Gapura Peninsula is an iconic gateway that welcomes tourists to beauty.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_14', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_14', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);

         LanguageLine::create([
            'group' => 'spots', 
            'key' => 'title_spot_15', 
            'text' => [
                'id' => 'Wastafel', 
                'en' => 'Sink']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'teaser_spot_15', 
            'text' => [
                'id' => 'Area wastafel tersedia untuk menjaga kebersihan dan kenyamanan selama berkunjung.', 
                'en' => 'A sink area is available to maintain cleanliness and comfort during your visit.']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'note_spot_15', 
            'text' => [
                'id' => 'Untuk memasuki area ini, pengunjung wajib mengenakan pakaian adat atau pakaian yang rapi.', 
                'en' => 'Visitors must wear appropriate clothing or balinese attire (sarong and sash).']
        ]);

        LanguageLine::create([
            'group' => 'spots', 
            'key' => 'description_spot_15', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.', 
                'en' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae itaque iste pariatur nobis sint voluptatibus eveniet inventore qui nesciunt adipisci, rem exercitationem necessitatibus dolorem quisquam! Corrupti laudantium dignissimos aliquid officiis, dolorum sapiente laborum laboriosam sed.']
        ]);
        //// Maps
        
        // Things to do
        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'title', 
            'text' => [
                'id' => ':accent yang Dapat Kamu Lakukan', 
                'en' => ':accent You Can Do']
        ]);
        
        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Hal-Hal', 
                'en' => 'Things']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'description', 
            'text' => [
                'id' => 'Yuk, jadikan waktu luangmu lebih bermakna! Berikut enam ide aktivitas mudah yang bisa kamu lakukan sendiri atau bersama orang-orang terkasih untuk menyegarkan diri dan meningkatkan kualitas hidupmu.', 
                'en' => 'Let\'s make your free time more meaningful! Here are six easy activity ideas you can do alone or with loved ones to recharge your batteries and improve your quality of life. ']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_1', 
            'text' => [
                'id' => 'Jogging', 
                'en' => 'Jogging']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_1', 
            'text' => [
                'id' => 'Tingkatkan kesehatan jantung dan daya tahan tubuh Anda dengan joging pagi. Rutinitas joging harian tidak hanya membantu membakar kalori dan menjaga berat badan yang sehat, tetapi juga merupakan cara yang sangat efektif untuk memulai hari dengan energi tinggi, menjernihkan pikiran, dan meningkatkan fokus mental.', 
                'en' => 'Improve your heart health and endurance with morning jogging. Daily jogging routine not only helps burn calories and maintain a healthy weight, but it\'s also a highly effective way to start the day with high energy, clear your mind, and improve mental focus.']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_2', 
            'text' => [
                'id' => 'Berjemur', 
                'en' => 'Sunbathing']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_2', 
            'text' => [
                'id' => 'Manfaatkan sinar matahari pagi untuk merangsang produksi Vitamin D, nutrisi penting yang mendukung fungsi kekebalan tubuh dan menjaga kepadatan tulang. Paparan sinar matahari yang lembut dalam waktu singkat juga terbukti dapat meningkatkan suasana hati Anda secara keseluruhan dan mengurangi risiko depresi.', 
                'en' => 'Take advantage of morning sunlight to stimulate the production of Vitamin D, an essential nutrient that supports immune function and maintains bone density. A brief exposure to gentle sunlight has also been shown to improve your overall mood and reduce the risk of depression.']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_3', 
            'text' => [
                'id' => 'Bersepeda', 
                'en' => 'Cycling']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_3', 
            'text' => [
                'id' => 'Rasakan kebebasan bersepeda melintasi jalur hijau dan lingkungan sekitar. Bersepeda adalah olahraga berdampak rendah yang sangat baik untuk membangun kekuatan kaki, meningkatkan kapasitas paru-paru, dan merupakan cara yang menyenangkan untuk menjelajahi area baru.', 
                'en' => 'Experience the freedom of pedaling through green paths and surrounding neighborhoods. Cycling is an excellent low-impact exercise for building leg strength, increasing lung capacity, and is a fun way to explore new areas.']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_4', 
            'text' => [
                'id' => 'Piknik Keluarga', 
                'en' => 'Family Picnic']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_4', 
            'text' => [
                'id' => 'Singkirkan gadget Anda dan habiskan waktu tak terlupakan bersama orang-orang terkasih. Siapkan makanan favorit Anda dan nikmati hidangan lezat di taman atau tepi danau, jadikan ini kesempatan sempurna untuk menjalin keakraban dengan keluarga sambil menghirup udara segar.', 
                'en' => 'Put your gadgets aside and spend unforgettable time with your loved ones. Prepare your favorite food and enjoy a delicious meal in the park or by the lake, making it the perfect opportunity to bond with your family while breathing in the fresh air.']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_5', 
            'text' => [
                'id' => 'Yoga', 
                'en' => 'Yoga']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_5', 
            'text' => [
                'id' => 'Fokuskan perhatian Anda pada harmonisasi pernapasan dengan gerakan tubuh yang lembut namun terarah. Latihan yoga yang teratur sangat ideal untuk meningkatkan fleksibilitas sendi dan otot, meredakan ketegangan fisik akibat stres, dan mencapai ketenangan mental yang mendalam.', 
                'en' => 'Focus your attention on harmonizing your breathing with gentle but purposeful body movements. Regular yoga practice is ideal for increasing joint and muscle flexibility, relieving physical tension caused by stress, and achieving a state of deep mental calm.']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_title_6', 
            'text' => [
                'id' => 'Permainan Anak-Anak', 
                'en' => 'Children Games']
        ]);

        LanguageLine::create([
            'group' => 'things_to_do', 
            'key' => 'box_description_6', 
            'text' => [
                'id' => 'Bebaskan energi anak Anda dengan petualangan lari yang seru di hamparan hijau Pulau Peninsula yang luas dan aman. Di sini, dikelilingi pemandangan laut yang menakjubkan, setiap permainan menjadi kenangan indah.', 
                'en' => 'Unleash your child\'s energy with a fun, running adventure on Peninsula Island\'s vast, safe green expanse. Here, surrounded by stunning ocean views, every game becomes a beautiful memory.']
        ]);
        //// Things to do

        // Navbar
        LanguageLine::create([
            'group' => 'navbar', 
            'key' => 'navlink_1', 
            'text' => [
                'id' => 'Home', 
                'en' => 'Home']
        ]);

        LanguageLine::create([
            'group' => 'navbar', 
            'key' => 'navlink_2', 
            'text' => [
                'id' => 'Events', 
                'en' => 'Events']
        ]);

        LanguageLine::create([
            'group' => 'navbar', 
            'key' => 'navlink_3', 
            'text' => [
                'id' => 'Blogs', 
                'en' => 'Blogs']
        ]);
        //// Navbar

        // Footer
        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'description', 
            'text' => [
                'id' => 'Lorem ipsum dolor sit amet.', 
                'en' => 'Lorem ipsum dolor sit amet.']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'social', 
            'text' => [
                'id' => 'Media Sosial', 
                'en' => 'Social Media']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'menu', 
            'text' => [
                'id' => 'Menu', 
                'en' => 'Menu']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'menu_list_1', 
            'text' => [
                'id' => 'Home', 
                'en' => 'Home']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'menu_list_2', 
            'text' => [
                'id' => 'Event', 
                'en' => 'Event']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'menu_list_3', 
            'text' => [
                'id' => 'Blogs', 
                'en' => 'Blogs']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'language', 
            'text' => [
                'id' => 'Bahasa', 
                'en' => 'Language']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'report_description', 
            'text' => [
                'id' => 'Jika kamu menemukan fasilitas umum yang rusak, beritahu kami!', 
                'en' => 'If you\'ve encountered a broken public facility let us know!']
        ]);

        LanguageLine::create([
            'group' => 'footer', 
            'key' => 'report_link', 
            'text' => [
                'id' => 'Buat laporan', 
                'en' => 'Make a report']
        ]);
        //// Footer

        // Events
        LanguageLine::create([
            'group' => 'events', 
            'key' => 'title', 
            'text' => [
                'id' => ':accent Kami', 
                'en' => ':accent Events']
        ]);

        LanguageLine::create([
            'group' => 'events', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Acara', 
                'en' => 'Our']
        ]);

        LanguageLine::create([
            'group' => 'events', 
            'key' => 'ongoing', 
            'text' => [
                'id' => 'Acara yang Sedang Berlangsung', 
                'en' => 'Ongoing Event']
        ]);
        //// Events

        // Blogs
        LanguageLine::create([
            'group' => 'blogs', 
            'key' => 'title', 
            'text' => [
                'id' => ':accent Lebih Lanjut', 
                'en' => ':accent About This Place']
        ]);

        LanguageLine::create([
            'group' => 'blogs', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Jelajahi', 
                'en' => 'Discover More']
        ]);
        //// Blogs

        // Event's Detail
        LanguageLine::create([
            'group' => 'events_detail', 
            'key' => 'timeline', 
            'text' => [
                'id' => 'Waktu Acara', 
                'en' => 'Event Timeline']
        ]);
        //// Event's Detail

        // Blog's Detail
        LanguageLine::create([
            'group' => 'blogs_detail', 
            'key' => 'title', 
            'text' => [
                'id' => 'Artikel :accent', 
                'en' => 'More :accent']
        ]);

        LanguageLine::create([
            'group' => 'blogs_detail', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Lain', 
                'en' => 'Articles']
        ]);

        LanguageLine::create([
            'group' => 'blogs_detail', 
            'key' => 'more', 
            'text' => [
                'id' => 'Lihat artikel lainnya', 
                'en' => 'Check out more articles']
        ]);
        //// Blog's Detail

        // Report
        LanguageLine::create([
            'group' => 'report', 
            'key' => 'title', 
            'text' => [
                'id' => ':accent Kerusakan Fasilitas', 
                'en' => ':accent Report']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Pelaporan', 
                'en' => 'Broken Facility']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'description', 
            'text' => [
                'id' => 'Jika kamu menemukan fasilitas umum yang rusak, tolong untuk dilaporkan sehingga dapat segera diperbaiki.', 
                'en' => 'If you\'ve seen a broken public facility it\'ll be appreciated if you can file us a report!']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'box_title', 
            'text' => [
                'id' => 'Catatan', 
                'en' => 'Note']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'box_description', 
            'text' => [
                'id' => 'Pastikan untuk melampirkan gambar yang jernih dan berikan laporan yang detail.', 
                'en' => 'Be sure to attach a good enough image and provide a detailed report.']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'form_title', 
            'text' => [
                'id' => 'Form Pelaporan', 
                'en' => 'Report Form']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'name', 
            'text' => [
                'id' => 'Nama', 
                'en' => 'Name']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'email', 
            'text' => [
                'id' => 'Email', 
                'en' => 'Email']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'report', 
            'text' => [
                'id' => 'Laporan', 
                'en' => 'Report']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'attachments', 
            'text' => [
                'id' => 'Lampirkan gambar', 
                'en' => 'Attach images']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'attachments_note', 
            'text' => [
                'id' => 'Ukuran file maks. 12MB, 5 file', 
                'en' => 'max file size 12MB, 5 files.']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'submit', 
            'text' => [
                'id' => 'Serahkan', 
                'en' => 'Submit']
        ]);

        LanguageLine::create([
            'group' => 'report', 
            'key' => 'fu_note', 
            'text' => [
                'id' => 'Maksimal gambar berukuran 11MB, 6 gambar.', 
                'en' => 'Maximum image size 11MB, 6 images']
        ]);
        //// Report

        // Components
        LanguageLine::create([
            'group' => 'search_bar', 
            'key' => 'search', 
            'text' => [
                'id' => 'Cari', 
                'en' => 'Search']
        ]);

        LanguageLine::create([
            'group' => 'blogs_card', 
            'key' => 'more', 
            'text' => [
                'id' => 'Lihat selengkapnya', 
                'en' => 'Read more']
        ]);
        //// Components

        // Common
        LanguageLine::create([
            'group' => 'common', 
            'key' => 'back', 
            'text' => [
                'id' => 'Kembali', 
                'en' => 'Back']
        ]);

        LanguageLine::create([
            'group' => 'common', 
            'key' => 'by', 
            'text' => [
                'id' => 'oleh', 
                'en' => 'by']
        ]);

        LanguageLine::create([
            'group' => 'common', 
            'key' => 'price', 
            'text' => [
                'id' => 'Harga mulai dari', 
                'en' => 'Starting price']
        ]);
        LanguageLine::create([
            'group' => 'common', 
            'key' => 'note', 
            'text' => [
                'id' => 'Catatan', 
                'en' => 'Note']
        ]);
        //// Common

        // Pagination
        LanguageLine::create([
            'group' => 'pagination', 
            'key' => 'showing', 
            'text' => [
                'id' => 'Menampilkan', 
                'en' => 'Showing']
        ]);

        LanguageLine::create([
            'group' => 'pagination', 
            'key' => 'to', 
            'text' => [
                'id' => 'sampai', 
                'en' => 'to']
        ]);

        LanguageLine::create([
            'group' => 'pagination', 
            'key' => 'of', 
            'text' => [
                'id' => 'dari', 
                'en' => 'of']
        ]);

        LanguageLine::create([
            'group' => 'pagination', 
            'key' => 'results', 
            'text' => [
                'id' => 'hasil', 
                'en' => 'results']
        ]);
        //// Pagination

        // Miscellaneous
        //// Miscellaneous
    }
}