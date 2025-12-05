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
            'key' => 'fee', 
            'text' => [
                'id' => 'Harga Masuk', 
                'en' => 'Entrance Fee']
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
            'group' => 'landing_page', 
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
            'group' => 'blogs', 
            'key' => 'title_accent', 
            'text' => [
                'id' => 'Jelajahi', 
                'en' => 'Discover More']
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
                'id' => 'Harga Mulai Dari', 
                'en' => 'Starting Price']
        ]);
        //// Common
    }
}