<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speakers;

class SpeakersSeeder extends Seeder
{
    public function run(): void
    {
        Speakers::factory()->count(10)->create();

        Speakers::create([
            'nama_speaker' => 'Reza Asriandi Ekaputra, Ph.D',
            'asal_instansi' => 'Higher College of Technology',
            'topic' => 'Greening Transportation Through Smart Mobility and Solar Integration',
            'summary' => 'Dr. Reza A. Ekaputra menyampaikan presentasi tentang bagaimana mengkombinasikan konsep transportasi hijau, smart mobility, dan energi surya untuk mencapai mobilitas berkelanjutan. Ia memulai dengan mendefinisikan transportasi hijau sebagai sistem mobilitas ramah lingkungan yang mengurangi emisi dan mendukung ekonomi hijau. Selanjutnya, ia menjelaskan smart mobility sebagai penerapan teknologi cerdas (seperti IoT, AI, dan data analytics) dalam manajemen transportasi untuk meningkatkan efisiensi dan aksesibilitas. Dr. Ekaputra menekankan bahwa integrasi energi surya pada infrastruktur transportasi – misalnya stasiun pengisian EV bertenaga surya – dapat menambah nilai ekonomi dan menurunkan emisi, serta mereduksi beban puncak jaringan listrik. Ia menggarisbawahi bahwa perpaduan smart mobility dan solar integration memperkuat upaya greening transportation.
            
            Dalam diskusi, Dr. Ekaputra menyoroti tren global seperti kemajuan kendaraan listrik, sistem transportasi otonom, serta penggunaan big data untuk mitigasi kemacetan. Ia juga mengulas kebijakan pendukung (misalnya peraturan kendaraan listrik dan strategi mobilitas ASI) serta tantangan seperti pendanaan infrastruktur dan kebutuhan regulasi. Ringkasnya, presentasi ini menyimpulkan bahwa pengembangan transportasi berkelanjutan menuntut sinergi antara inovasi teknologi, dukungan kebijakan, dan kesadaran publik. Integrasi smart mobility dan energi terbarukan dinilai kunci untuk menjadikan sistem transportasi masa depan lebih hijau dan efisien.',
            'foto' => 'speakers/reza.jpg',
        ]);

        Speakers::create([
            'nama_speaker' => 'Dr. Djoen San Santoso',
            'asal_instansi' => 'Asian Institute of Technology',
            'topic' => 'The Dynamics of Sustainable Procurement: Challenges and Drivers',
            'summary' => 'Pengadaan berkelanjutan (sustainable procurement) adalah proses pengadaan barang/jasa yang mengintegrasikan pertimbangan lingkungan, sosial, dan tata kelola (ESG) ke dalam setiap keputusan pengadaan. Konsep ini sejalan dengan triple bottom line (3P: People, Planet, Profit), di mana organisasi tidak hanya mengejar keuntungan finansial, tetapi juga menciptakan nilai sosial dan meminimalkan dampak lingkungan. Dalam pengertian ini, setiap tahapan proses pengadaan—mulai dari perencanaan kebutuhan hingga evaluasi pemasok—harus melibatkan kriteria keberlanjutan, sehingga manfaat ekonomi dapat tercapai tanpa mengorbankan kepentingan generasi mendatang.
            
            Implementasi pengadaan berkelanjutan didorong oleh berbagai faktor. Regulator pemerintah kini memasukkan ketentuan keberlanjutan dalam kebijakan publik—misalnya Perpres No.16/2018 di Indonesia yang mendorong efisiensi anggaran melalui pengadaan hijau. Selain itu, tekanan pasar dan persaingan industri membuat perusahaan menyadari manfaat reputasi dan daya saing dari praktik ramah lingkungan. Tekanan pemangku kepentingan (konsumen, investor, masyarakat) dan tujuan CSR/SDGs juga memacu adopsi keberlanjutan dalam rantai pasok, karena praktik ini dapat mengurangi risiko gangguan pasokan dan memicu inovasi produk serta proses.
            
            Meski menguntungkan, pengadaan berkelanjutan menghadapi tantangan serius. Pada sektor publik, birokrasi dan politik menjadi hambatan utama: keputusan pengadaan publik melibatkan banyak pihak (politikus, birokrat, masyarakat) sehingga sering terjadi tekanan internal dan tujuan jangka pendek yang bertabrakan. Seringkali pejabat pengadaan sulit menerapkan kriteria keberlanjutan karena hirarki anggaran dan kepentingan departemen lain yang dominan. Di sisi lain, keterbatasan sumber daya juga menjadi kendala: tim pengadaan menganggap produk ramah lingkungan lebih mahal, sedangkan pengetahuan dan keterampilan mengenai keberlanjutan masih rendah. Hal ini terlihat dari banyaknya manajer dan pemangku kepentingan yang belum mengetahui cara menilai keberlanjutan pemasok atau menghitung total cost of ownership (TCO) yang mempertimbangkan faktor lingkungan. Tantangan tambahan adalah dukungan terbatas dari pemasok: beberapa pemasok belum siap memenuhi kriteria hijau sehingga perlu waktu untuk melatih dan berkolaborasi dengan mereka. Singkatnya, kendala kebijakan, pembiayaan, budaya organisasi, dan kompetensi SDM di institusi publik maupun swasta menjadi faktor kritis yang menghambat pengadaan berkelanjutan.
            
            Untuk mengatasi tantangan tersebut, pembicara menekankan perlunya strategi terpadu. Pertama, penguatan kebijakan dan tata kelola: pemerintah dan pimpinan organisasi harus merumuskan strategi nasional/korporat yang jelas, misalnya dengan mengembangkan standar pengadaan hijau dan mewajibkan audit dampak lingkungan sosial. Reformasi struktural (penyederhanaan prosedur anggaran, akuntabilitas transparan) akan membuat kebijakan tersebut lebih efektif. Kedua, peningkatan kapasitas internal: program pelatihan dan edukasi karyawan perlu ditingkatkan agar seluruh tim pengadaan memahami pentingnya keberlanjutan dan mampu menggunakan alat penilaian yang relevan. Ketiga, kolaborasi lintas sektor: penyedia dan pemangku kepentingan lain harus dilibatkan sejak dini. Misalnya, menerapkan klausul kontrak berkelanjutan (ESG) untuk memastikan pemasok mematuhi standar ramah lingkungan dan sosial. Keempat, pemanfaatan teknologi dan data: platform digital dan analitik rantai pasok memungkinkan pelacakan emisi serta evaluasi kinerja keberlanjutan secara real-time. Dengan menetapkan indikator kinerja (KPI) ESG serta insentif bagi pencapaian target hijau, implementasi pengadaan berkelanjutan dapat dijalankan secara sistematis dan terukur. Pendekatan ini tidak hanya menjaga efisiensi jangka panjang, tetapi juga membantu perusahaan dan instansi publik selaras dengan tujuan pembangunan berkelanjutan global.',
            'foto' => 'speakers/santoso.jpg',
        ]);
    }
}
