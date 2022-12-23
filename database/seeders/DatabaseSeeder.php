<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\Counselor;
use App\Models\ProfessionalCounseling;
use App\Models\Psytalk;
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
            'isi' => '<p>Kesehatan mental merupakan kondisi dari kesejahteraan yang disadari individu, yang di dalamnya terdapat kemampuan-kemampuan untuk mengelola stres kehidupan yang wajar, untuk bekerja secara produktif dan menghasilkan karya serta ikut berperan di komunitasnya. Keluarga merupakan bagian mikro ekosistem dari tatanan tumbuh kembang anak. Keluarga nantinya mengajarkan bagaimana anak merasakan empati dan beradaptasi dengan masyarakat yang merupakan makro ekosistem.
            Pertumbuhan dan perkembangan anak dapat dipengaruhi oleh pola asuh orang tua, baik ayah maupun ibu yang memiliki peran penting dalam praktik pengasuhan sehingga terjalin bonding atau kemelekatan yang berdampak pada kesehatan mental anak-anak.
            Dalam mengatur pola asuh, salah satu strategi dalam membangun interaksi adalah dengan melakukan permainan. Orang tua bisa berpartisipasi aktif dalam permainan, sehingga anak bisa merasakan kasih sayang, kenyamanan dan rasa aman sehingga kondisi tersebut bisa meningkatkan kualitas kesehatan mental anak.</p>',
            'poster' => 'poster-artikel/pola-asuh-anak.jpg'
        ]);

        Artikel::create([
            'user_id' => '1',
            'judul' => 'Kenali Karakteristik Codependent dalam Toxic Relationship',
            'isi' => '<p>Pada zaman sekarang, sudah cukup banyak masyarakat yang mulai menyadari akan adanya toxic relationship. Biasanya, toxic relationship dimulai dengan adanya gaslighting. Menurut American Psychological Association (APA), gaslight merupakan tindakan memanipulasi orang lain agar mereka meragukan persepsi, pengalaman, atau pemahamannya tentang suatu peristiwa. Selain gaslight, yang seringkali dijumpai dalam toxic relationship adalah tindakan yang abusive atau tindakan kekerasan, baik secara mental maupun fisik. Berada di dalam hubungan yang tidak sehat tentunya memiliki dampak untuk kesehatan mental, mulai dari merasa kehilangan harga diri, cemas berlebih, gangguan kepercayaan, hilangnya rasa kebahagiaan, dan lain-lain. Terdapat karakteristik lain di dalam hubungan yang tidak sehat atau toxic relationship, yaitu codependent atau codependency.
            Apakah Itu “Codependent”?
            Menjalani hubungan yang tidak bahagia tentunya akan membuat kita tertekan dan membuat kesehatan mental terganggu. Akan tetapi, ada suatu kebahagiaan yang timbul dari hubungan tidak sehat dikenal dengan codependent atau codependency. Menurut American Psychological Association, Codependency memiliki definisi pola hubungan yang disfungsional di mana seseorang secara psikologis bergantung pada (atau dikendalikan oleh) seseorang yang memiliki kecanduan patologis. Codependent sendiri merupakan kata yang bersifat adjective atau kata sifat. Arti secara singkat dari codependent yaitu perasaan memiliki tanggung jawab akan suatu hal yang dimiliki oleh orang lain. Salah satunya, mereka memiliki rasa tanggung jawab akan kebahagiaan orang lain. Hubungan dengan sifat codependent akan cenderung terjalin tidak seimbang atau berat sebelah, karena akan ada satu orang yang memberikan energinya secara ekstra untuk membahagiakan pasangannya.</p>',
            'poster' => 'poster-artikel/kenali-codependent.jpg'
        ]);

        Artikel::create([
            'user_id' => '1',
            'judul' => 'Lingkungan, Konflik Orangtua-Anak, dan Masalah Emosional sebagai Penyebab Permasalahan Mental pada Anak',
            'isi' => '<p>Pertumbuhan dan perkembangan adalah fase penting dalam kehidupan individu yang mulai berlangsung sejak dari lahir. Anak-anak tumbuh dengan sangat cepat dan secara konsisten mengalami perubahan pada kemampuan sosial, emosional, dan mental. Dalam proses pertumbuhan ini, terdapat periode sensitif, yaitu waktu di mana anak dengan mudah terpengaruh oleh hal positif atau negatif dari lingkungan. Tanpa pengasuhan yang konsisten, anak akan mengembangkan permasalahan dalam aspek kepercayaan dengan orang lain sehingga jika hal ini tidak diperbaiki, anak akan mengembangkan permasalahan mental yang akan berlanjut hingga dewasa. Tanpa kasih sayang dan pengasuhan yang tepat, anak akan tumbuh dewasa dengan membawa luka dari masa kecil mereka.
            Terdapat beberapa permasalahan mental yang terjadi pada anak, salah satu penyebabnya adalah permasalahan lingkungan yaitu kemiskinan, pelecehan anak, penelantaran anak, dan kekerasan pada anak. Kemiskinan dan permasalahan mental pada anak saling berhubungan. Di usia 5 tahun, anak dengan kondisi ekonomi menengah ke bawah cenderung memiliki IQ yang lebih rendah dan menunjukkan tingkat kecemasan, ketidakbahagiaan, dan ketakutan yang tinggi. Anak yang tinggal di lingkungan tidak layak huni, kemungkinan berisiko mengalami kelaparan, permasalahan perilaku, keterlambatan perkembangan, keterlambatan bicara, gangguan tidur, gangguan atensi, penarikan diri, agresi, permasalahan dalam interaksi sosial dan interaksi dengan teman sebayanya. Umumnya, bantuan yang dapat diberikan adalah dengan memahami kondisi anak beserta keluarga mereka, melakukan komunikasi yang baik, dan tidak bersikap menghakimi (non judgemental). Secara spesifik, para penyedia layanan kesehatan mental yang menangani klien dengan kemiskinan dapat melakukan terapi sebagai berikut:
            Penyedia layanan mampu memahami anak tuna wisma mengenai kondisi dan perasaan mereka. Penyedia layanan juga memberikan sikap positif, berkomunikasi dengan baik dan menghormati para anak.</p>',
            'poster' => 'poster-artikel/konflik-ortu-anak.jpg'
        ]);

        Psytalk::create([
            'topik' => 'Baby Blues Syndrom: Mengenal dan Upaya Menangani',
            'pembicara' => 'Ariyanto Yanwar, M.Psi., Psikolog',
            'tanggal' => 'Jumat, 22 Desember 2022',
            'waktu' => '19.00 - 21.00',
            'biaya' => '25.000',
            'poster' => 'poster-psytalk/psytalk64.jpeg',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);

        Psytalk::create([
            'topik' => 'Memahami Bahasa Cinta dalam Keluarga',
            'pembicara' => 'Yohana Sondang Activa Hutabarat, M.Psi., Psikolog',
            'tanggal' => 'Sabtu, 23 Desember 2022',
            'waktu' => '10.00 - 11.00',
            'biaya' => '10.000',
            'poster' => 'poster-psytalk/psytalk66.jpeg',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);

        Psytalk::create([
            'topik' => 'Get to Know About Helicopter Parenting',
            'pembicara' => 'Diandra Ayu, M.Psi., Psikolog',
            'tanggal' => 'Sabtu, 27 Desember 2022',
            'waktu' => '19.00 - 21.00',
            'biaya' => '15.000',
            'poster' => 'poster-psytalk/psytalk74.png',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);

        Counselor::create([
            'nama' => 'Laurentia Wahyu Prastiti, M.Psi., Psikolog',
            'jk' => 'P',
            'bidang_keahlian' => 'Kecemasan, tumbuh kembang anak, pengembangan diri',
            'link_linkedin' => 'https://www.linkedin.com/in/laurentia-wahyu-prastiti-9a4808129',
            'foto' => 'konselor/laurentia.jpg'
        ]);

        Counselor::create([
            'nama' => 'Rininta Meyftanoria, S.Psi, M.Psi, Psikolog',
            'jk' => 'P',
            'bidang_keahlian' => 'Depresi, perkembangan anak dan remaja, anxiety',
            'link_linkedin' => 'https://www.linkedin.com/in/rininta-meyftanoria-59385231',
            'foto' => 'konselor/rininta.jpg'
        ]);

        Counselor::create([
            'nama' => 'Ariyanto Yanwar, M.Psi., Psikolog',
            'jk' => 'L',
            'bidang_keahlian' => 'Kesehatan Mental anak, Psikoedukasi Orangtua',
            'link_linkedin' => 'https://www.linkedin.com/in/ariyantoyanwarpsikolog',
            'foto' => 'konselor/ariyanto.png'
        ]);

        ProfessionalCounseling::create([
            'counselor_id' => '1',
            'biaya' => '100.000',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);

        ProfessionalCounseling::create([
            'counselor_id' => '2',
            'biaya' => '100.000',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);

        ProfessionalCounseling::create([
            'counselor_id' => '3',
            'biaya' => '100.000',
            'link_event' => 'https://meet.google.com/nnv-bjpx-cgd'
        ]);
    }
}