<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin - Tim Konseling',
            'username' => 'konselingrb',
            'email' => 'konselingrb@mail.com',
            'password' => Hash::make('admin123'),
            'role' => '1',
            'no_telp' => '08718718181',
            'jk' => 'L',
            'tgl_lahir' => '27/09/2001'
        ]);

        Artikel::create([
            'user_id' => '1',
            'judul' => 'Menjaga Kesehatan Mental Orang Tua dalam Membangun Pola Asuh yang Sehat',
            'isi' => '<p>Kesehatan mental merupakan kondisi dari kesejahteraan yang disadari individu, yang di dalamnya terdapat kemampuan-kemampuan untuk mengelola stres kehidupan yang wajar, untuk bekerja secara produktif dan menghasilkan karya serta ikut berperan di komunitasnya. Keluarga merupakan bagian mikro ekosistem dari tatanan tumbuh kembang anak. Keluarga nantinya mengajarkan bagaimana anak merasakan empati dan beradaptasi dengan masyarakat yang merupakan makro ekosistem.</p>
            <p>Pertumbuhan dan perkembangan anak dapat dipengaruhi oleh pola asuh orang tua, baik ayah maupun ibu yang memiliki peran penting dalam praktik pengasuhan sehingga terjalin bonding atau kemelekatan yang berdampak pada kesehatan mental anak-anak.</p>
            <p>Dalam mengatur pola asuh, salah satu strategi dalam membangun interaksi adalah dengan melakukan permainan. Orang tua bisa berpartisipasi aktif dalam permainan, sehingga anak bisa merasakan kasih sayang, kenyamanan dan rasa aman sehingga kondisi tersebut bisa meningkatkan kualitas kesehatan mental anak.</p>
            <p>Orang tua berkewajiban dalam memberikan pengasuhan yang positif serta bisa membimbing dan mengarahkan anak-anak untuk menjadi manusia yang kompeten. 2Dalam membangun suatu hubungan yang baik antara orang tua dan anak tentu saja sangat membutuhkan kesehatan mental yang baik untuk meningkatkan kualitas hubungan.</p>
            <p>Makna kesehatan mental mempunyai sifat-sifat yang harmonis (serasi) dan memperlihatkan semua segi-segi dalam penghidupan manusia dan dalam hubungannya dengan manusia lain.</p>
            <p>Makin hari di Indonesia ini, di tahun 2020 ini makin begitu besarnya orang tua menitipkan harapan kepada anak-anak mereka. Apakah salah? Tentu saja tidak, yang kurang tepat adalah ketika semua harapan tanpa sadar menjadi suatu paksaan.</p>
            <p>Semakin merasa menjadi orang tua, semakin besar ego yang harus diredam. Semakin merasa menjadi orang tua seharusnya semakin sering self talk dilakukan. Seberapa banyak orang tua yang berani melihat ke dalam diri. Seberapa banyak orang tua yang berani mengakui kesalahan dan meminta maaf kepada anaknya yang masih balita. Seberapa banyak orang tua yang berkaca dan bercermin serta bertanya ke diri sendiri, siapakah saya?</p>
            <p>Luka-luka batin masa kecil yang akhirnya tanpa sadar terbawa hingga menjadi orang tua, kembali menjadi rangkaian melingkar dalam pola asuh. Pengetahuan dan informasi yang amat sangat minim tentang kesehatan mental di Indonesia salah satu penyebab banyaknya masyarakat yang tidak peduli dengan kesehatan mental dirinya.</p>
            <p>Pola pengasuhan jika dimulai dengan orang tua yang menyadari diri tentang mentalnya yang baik, jiwanya yang sehat akan menjadikan pola asuh menjadi menyenangkan, saling menghargai, saling bisa menjadi pendukung yang baik. Anak-anak tidak akan selamanya menjadi anak kecil karena mereka akan berkembang dan bertumbuh seiring usianya. Orang tua pun harus siap mendampingi pertumbuhannya, selayaknya sedang merawat bibit tanaman, diberi pupuk yang baik, disiram setiap hari, terkena sinar matahari demi pertumbuhan yang baik.</p>
            <p>Anak yang sehat secara mental adalah anak yang mampu menghadapi permasalahan-permasalahan di dalam hidupnya. Selain itu, anak dengan kesehatan mental yang baik akan tumbuh menjadi pribadi yang memiliki integritas, selaras dengan jati diri, dan mampu menjalin hubungan yang sehat dengan orang lain.</p>
            <p>Terutama dalam masa pandemi saat ini, peran orang tua sangat diperlukan untuk mengatasi dan mengelola emosinya dalam mendampingi anak di masa pembelajaran jarak jauh. Sistem belajar secara daring tersebut mengakibatkan terbatasnya ruang sosialisasi sehingga berpotensi menimbulkan kejenuhan. Dalam mengatasi kesehatan mental orang tua harus bisa menangani stres melalui manajemen stres atau perawatan diri. Jika perlu, dapat melakukan kunjungan pada ahli atau profesional yang mampu menangani hal tersebut.</p>
            <p>Masyarakat juga berperan penting dalam mendukung manajemen stres dengan menghapus stigma negatif bahwa berkonsultasi ke psikolog bukan berarti hal yang memalukan.5 Masih banyak yang menganggap bahwa orang yang berkonsultasi ke psikolog termasuk orang dengan gangguan jiwa, sehingga hal tersebut berdampak kepada mereka yang memang betul-betul butuh pertolongan. Menganggap remeh permasalahan kesehatan mental sehingga kesulitan dalam melakukan perawatan diri dan manajemen stres.</p>
            <p>Sebagaimana orang tua yang dihadapkan oleh banyak sekali pekerjaan dan tuntutan, setidaknya luangkanlah waktu sejenak untuk kembali melihat ke dalam diri, kenali gejala-gejala lelah secara psikis, jangan sampai berakibat mengganggu kejiwaan dan aktivitas sehari-hari. Beberapa gejala yang bisa dikenali antara lain adalah merasa sedih, bingung dan hilangnya konsentrasi, ketakutan dan khawatir yang berlebihan, perasaan bersalah yang ekstrim, perubahan suasana yang ekstrim, kelelahan yang parah, mengalami masalah tidur, perubahan besar dalam kebiasaan makan serta masih ada beberapa gejala lainnya.</p>
            <p>Setiap keluarga merawat bibitnya masing-masing, artinya bahwa setiap anak itu berbeda di mana hal ini sebaiknya ditanamkan pada pola pikir para orang tua. Semakin orang tua sadar bahwa kesehatan mental sama pentingnya dengan kesehatan fisik, maka kerentanan anak untuk menjadi anak yang sehat mentalnya semakin terbuka lebar. Semakin pola asuh memperhatikan kesehatan mental dalam setiap polanya, maka kesempatan anak bertumbuh dan berkembang secara sehat fisik dan sehat psikis pun akan semakin besar.</p>
            <p>Konsentrasi terhadap kesehatan mental orang tua saat ini menjadi penting, semakin banyak informasi yang diberikan kepada orang tua, semoga semakin orang tua faham bahwa mental yang sehat akan menjadikan pola asuh yang sehat pula. Semakin terjaga kesehatan fisik dan mental, maka akan semakin kuat proses tumbuh dan berkembang bersama. Tidak hanya orang tua tapi juga anak-anak.</p>
            <p>Kesimpulannya adalah bahwa orang tua tidak melulu benar dan orang tua tidak melulu salah, orang tua bukanlah seorang penguasa terhadap jiwa-jiwa anaknya. Berikanlah jiwa dan mental kita sebagai orang tua untuk hening sejenak dari psikis yang tergerus oleh lelahnya pencarian-pencarian yang kadang adalah merupakan ekspektasi orang lain. Belajarlah untuk membahagiakan diri sendiri sebagai orang tua.</p>',
            'poster' => 'poster-artikel/pola-asuh-anak.jpg'
        ]);

        Artikel::create([
            'user_id' => '1',
            'judul' => 'Kenali Karakteristik Codependent dalam Toxic Relationship',
            'isi' => '<p>Pada zaman sekarang, sudah cukup banyak masyarakat yang mulai menyadari akan adanya toxic relationship. Biasanya, toxic relationship dimulai dengan adanya gaslighting. Menurut American Psychological Association (APA), gaslight merupakan tindakan memanipulasi orang lain agar mereka meragukan persepsi, pengalaman, atau pemahamannya tentang suatu peristiwa. Selain gaslight, yang seringkali dijumpai dalam toxic relationship adalah tindakan yang abusive atau tindakan kekerasan, baik secara mental maupun fisik. Berada di dalam hubungan yang tidak sehat tentunya memiliki dampak untuk kesehatan mental, mulai dari merasa kehilangan harga diri, cemas berlebih, gangguan kepercayaan, hilangnya rasa kebahagiaan, dan lain-lain. Terdapat karakteristik lain di dalam hubungan yang tidak sehat atau toxic relationship, yaitu codependent atau codependency.</p>
            <p>Apakah Itu “Codependent”?</p>
            <p>Menjalani hubungan yang tidak bahagia tentunya akan membuat kita tertekan dan membuat kesehatan mental terganggu. Akan tetapi, ada suatu kebahagiaan yang timbul dari hubungan tidak sehat dikenal dengan codependent atau codependency. Menurut American Psychological Association, Codependency memiliki definisi pola hubungan yang disfungsional di mana seseorang secara psikologis bergantung pada (atau dikendalikan oleh) seseorang yang memiliki kecanduan patologis. Codependent sendiri merupakan kata yang bersifat adjective atau kata sifat. Arti secara singkat dari codependent yaitu perasaan memiliki tanggung jawab akan suatu hal yang dimiliki oleh orang lain. Salah satunya, mereka memiliki rasa tanggung jawab akan kebahagiaan orang lain. Hubungan dengan sifat codependent akan cenderung terjalin tidak seimbang atau berat sebelah, karena akan ada satu orang yang memberikan energinya secara ekstra untuk membahagiakan pasangannya.</p>',
            'poster' => 'poster-artikel/kenali-codependent.jpg'
        ]);

        Artikel::create([
            'user_id' => '1',
            'judul' => 'Lingkungan, Konflik Orangtua-Anak, dan Masalah Emosional sebagai Penyebab Permasalahan Mental pada Anak',
            'isi' => '<p>Pertumbuhan dan perkembangan adalah fase penting dalam kehidupan individu yang mulai berlangsung sejak dari lahir. Anak-anak tumbuh dengan sangat cepat dan secara konsisten mengalami perubahan pada kemampuan sosial, emosional, dan mental. Dalam proses pertumbuhan ini, terdapat periode sensitif, yaitu waktu di mana anak dengan mudah terpengaruh oleh hal positif atau negatif dari lingkungan. Tanpa pengasuhan yang konsisten, anak akan mengembangkan permasalahan dalam aspek kepercayaan dengan orang lain sehingga jika hal ini tidak diperbaiki, anak akan mengembangkan permasalahan mental yang akan berlanjut hingga dewasa. Tanpa kasih sayang dan pengasuhan yang tepat, anak akan tumbuh dewasa dengan membawa luka dari masa kecil mereka.</p>
            <p>Terdapat beberapa permasalahan mental yang terjadi pada anak, salah satu penyebabnya adalah permasalahan lingkungan yaitu kemiskinan, pelecehan anak, penelantaran anak, dan kekerasan pada anak. Kemiskinan dan permasalahan mental pada anak saling berhubungan. Di usia 5 tahun, anak dengan kondisi ekonomi menengah ke bawah cenderung memiliki IQ yang lebih rendah dan menunjukkan tingkat kecemasan, ketidakbahagiaan, dan ketakutan yang tinggi. Anak yang tinggal di lingkungan tidak layak huni, kemungkinan berisiko mengalami kelaparan, permasalahan perilaku, keterlambatan perkembangan, keterlambatan bicara, gangguan tidur, gangguan atensi, penarikan diri, agresi, permasalahan dalam interaksi sosial dan interaksi dengan teman sebayanya. Umumnya, bantuan yang dapat diberikan adalah dengan memahami kondisi anak beserta keluarga mereka, melakukan komunikasi yang baik, dan tidak bersikap menghakimi (non judgemental). Secara spesifik, para penyedia layanan kesehatan mental yang menangani klien dengan kemiskinan dapat melakukan terapi sebagai berikut:</p>
            <p>Penyedia layanan mampu memahami anak tuna wisma mengenai kondisi dan perasaan mereka. Penyedia layanan juga memberikan sikap positif, berkomunikasi dengan baik dan menghormati para anak.',
            'poster' => 'poster-artikel/konflik-ortu-anak.jpg'
        ]);
    }
}