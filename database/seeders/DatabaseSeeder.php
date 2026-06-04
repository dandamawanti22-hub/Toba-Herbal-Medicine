<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Herbal;
use App\Models\Penyakit;
use App\Models\Bahan;
use App\Models\Resep;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // USER LOGIN
        // =========================
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        // =========================
        // 1. HERBAL
        // =========================
        Herbal::insert([
            ['id'=>1,'nama_herbal'=>"Jahe",'khasiat'=>"Membantu menghangatkan tubuh, meredakan mual, meningkatkan daya tahan tubuh, serta membantu mengurangi gejala masuk angin dan batuk.\nManfaat Jahe bagi Kesehatan Tubuh\n1. Meredakan Pusing\nPusing bisa membuat Anda kehilangan keseimbangan, penglihatan seperti berkunang-kunang, dan mungkin disertai oleh mual. Gejala pusing yang diikuti mual diduga bisa diredakan dengan mengonsumsi jahe. Jahe juga bisa digunakan sebagai obat sakit kepala alami maupun cara menyembuhkan pusing dan sakit kepala karena maag dan asam lambung.\n2. Mengurangi nyeri menstruasi\nBeberapa penelitian menunjukkan bahwa mengonsumsi jahe bisa membantu mengurangi gejala nyeri menstruasi. Khasiat jahe sepertinya dapat disamakan dengan obat ibuprofen dan asam mefenamat . Bagi wanita yang sering merasa nyeri saat menstruasi, bisa coba mengonsumsi ekstrak jahe sebanyak kurang lebih 500 -  2000 mg, selama tiga hari di awal menstruasi.\n3. Mencegah morning sickness\nKondisi mual dan muntah akibat morning sickness kerap dialami oleh wanita di awal masa kehamilan. Untungnya, mual dapat dikurangi dengan mengonsumsi jahe. Namun ingat, ibu hamil tidak boleh sembarang mengonsumsi obat, termasuk herba dan obat-obatan tradisional. Oleh karena itu, konsultasikan terlebih dahulu kepada dokter sebelum mengonsumsi jahe.\n4. Osteoarthritis\nOsteoarthritis adalah kondisi nyeri sendi atau kekakuan sendi yang disebabkan oleh cedera, obesitas, dan penuaan sendi. Menurut sejumlah penelitian, rasa sakit akibat kondisi ini dapat diatasi dengan mengonsumsi ekstrak jahe. Tidak hanya melalui mulut, pijat menggunakan minyak terapi yang mengandung jahe dan jeruk juga dapat mengurangi kekakuan sendi dan nyeri akibat osteoarthritis atau dengan kata lain dapat digunakan sebagai obat rematik alami.\n5. Mengurangi rasa mual dan muntah usai operasi\nMengonsumsi jahe satu jam sebelum operasi diduga bisa mengurangi rasa mual dan muntah selama 24 jam pasca operasi. Selain dikonsumsi melalui mulut, mengoleskan minyak jahe juga diduga bisa mencegah mualTapi sayangnya efektivitas jahe dalam mengatasi mabuk darat dan laut belum dibuktikan kebenarannya secara medis, sama seperti klaim jahe untuk obat herbal hernia maupun pengobatan alami asma bronkial. Masih dibutuhkan penelitian lebih lanjut untuk memastikan khasiatnya. Begitu pula dengan klaim manfaat jahe yang berkaitan dengan penurunan berat badan.Selain berbagai manfaat di atas, jahe juga disebut dapat menurunkan kolesterol dan trigliserida. Oleh karena itu, tumbuhan ini bisa dikonsumsi sebagai herbal untuk kolesterol. Jahe juga dapat dijadikan sebagai obat masuk angin alami.Perlu diperhatikan, ada beberapa kalangan yang harus berhati-hati atau sebaiknya tidak mengonsumsi jahe. Mereka adalah ibu hamil dan menyusui, penderita diabetes, penderita sakit jantung, serta orang yang memiliki gangguan pembekuan darah.

            Meski jahe diduga aman untuk dikonsumsi oleh kebanyakan orang, namun tetap ada efek samping ringan yang dapat ditimbulkan, seperti diare, rasa tidak nyaman di perut, dan nyeri ulu hati. Jika dioleskan pada kulit, kemungkinan jahe bisa menyebabkan iritasi.

            Dari segi medis, manfaat jahe memang belum ada yang benar-benar terbukti efektif. Ada baiknya untuk mengonsultasikan terlebih dahulu kepada dokter sebelum mengonsumsi zat apa pun yang ditujukan untuk pengobatan, maupun sebagai pendamping pengobatan.",'gambar'=>'jahe.png'],
            ['id'=>2,'nama_herbal'=>"Temulawak",'khasiat'=>"Temulawak merupakan tanaman herbal yang banyak digunakan dalam pengobatan tradisional Indonesia. Bagian rimpang temulawak mengandung senyawa aktif seperti kurkumin yang dikenal memiliki sifat antioksidan dan banyak dimanfaatkan untuk membantu menjaga kesehatan tubuh. Temulawak sering dikonsumsi dalam bentuk jamu, minuman herbal, maupun ekstrak alami.\n\nManfaat Temulawak bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan sistem pencernaan\nTemulawak dikenal dapat membantu menjaga kesehatan lambung dan saluran pencernaan. Kandungan alami di dalamnya dapat membantu mengurangi rasa tidak nyaman pada perut serta membantu proses pencernaan makanan agar berjalan lebih baik.\n\n2. Membantu meningkatkan nafsu makan\nSalah satu manfaat temulawak yang paling dikenal adalah membantu meningkatkan nafsu makan. Karena manfaat tersebut, temulawak sering digunakan sebagai bahan herbal untuk membantu orang yang sedang mengalami penurunan nafsu makan atau masa pemulihan setelah sakit.\n\n3. Membantu menjaga kesehatan hati\nKandungan kurkumin pada temulawak dipercaya dapat membantu mendukung fungsi hati dalam menjalankan proses metabolisme tubuh. Hati memiliki peran penting dalam mengolah nutrisi dan membantu membersihkan zat yang tidak diperlukan tubuh.\n\n4. Membantu mengurangi peradangan\nTemulawak memiliki kandungan senyawa alami yang dapat membantu mengurangi reaksi peradangan ringan pada tubuh. Oleh karena itu tanaman ini sering digunakan sebagai pendukung kesehatan sendi dan tubuh secara umum.\n\n5. Membantu meningkatkan daya tahan tubuh\nAntioksidan pada temulawak membantu tubuh melawan pengaruh buruk radikal bebas. Dengan daya tahan tubuh yang baik, tubuh dapat lebih kuat menghadapi berbagai gangguan kesehatan.\n\n6. Membantu menjaga kesehatan kulit\nSenyawa antioksidan dalam temulawak dapat membantu menjaga kesehatan kulit dari dalam dengan membantu melawan kerusakan sel akibat radikal bebas.\n\n7. Membantu menjaga metabolisme tubuh\nTemulawak dapat membantu mendukung proses metabolisme sehingga tubuh dapat mengolah energi dengan lebih baik dan membantu mengurangi rasa mudah lelah.\n\n8. Membantu menjaga kesehatan empedu\nTemulawak secara tradisional digunakan untuk membantu mendukung produksi cairan empedu yang berperan dalam proses pencernaan lemak.\n\n9. Membantu tubuh tetap segar\nMinuman herbal berbahan temulawak sering digunakan untuk membantu tubuh terasa lebih segar terutama setelah aktivitas berat.\n\nWalaupun temulawak merupakan bahan alami, penggunaannya tetap perlu diperhatikan. Orang dengan kondisi kesehatan tertentu, ibu hamil, ibu menyusui, atau orang yang sedang menjalani pengobatan sebaiknya berkonsultasi terlebih dahulu sebelum mengonsumsi temulawak secara rutin.",'gambar'=>"temulawak.png"],
            ['id'=>3,'nama_herbal'=>"Kumis Kucing",
            'khasiat'=>"Kumis kucing merupakan tanaman herbal yang banyak ditemukan di Indonesia dan dikenal sebagai tanaman obat tradisional untuk membantu menjaga kesehatan ginjal serta saluran kemih. Tanaman ini mengandung berbagai senyawa alami seperti flavonoid dan antioksidan yang bermanfaat bagi tubuh.\n\nManfaat Kumis Kucing bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan ginjal\nKumis kucing dipercaya membantu mendukung fungsi ginjal dalam menyaring zat sisa metabolisme dari tubuh sehingga kesehatan ginjal tetap terjaga.\n\n2. Membantu melancarkan buang air kecil\nTanaman ini memiliki sifat diuretik alami yang dapat membantu meningkatkan produksi urine dan membantu tubuh membuang kelebihan cairan.\n\n3. Membantu menjaga kesehatan saluran kemih\nKumis kucing sering digunakan sebagai herbal untuk membantu menjaga kebersihan dan kesehatan saluran kemih.\n\n4. Membantu mengurangi risiko pembentukan batu ginjal\nDengan membantu proses pembuangan cairan tubuh, kumis kucing dipercaya dapat membantu mengurangi penumpukan mineral tertentu pada saluran kemih.\n\n5. Membantu mengurangi peradangan ringan\nKandungan alami dalam kumis kucing memiliki sifat antioksidan yang membantu tubuh menghadapi peradangan.\n\n6. Membantu menjaga tekanan darah\nKarena membantu pengeluaran cairan tubuh, kumis kucing dapat mendukung keseimbangan cairan yang berkaitan dengan tekanan darah.\n\n7. Membantu proses detoksifikasi alami tubuh\nKumis kucing membantu tubuh membuang zat yang tidak diperlukan melalui urine.\n\nPenggunaan kumis kucing sebaiknya tetap dilakukan secara wajar dan tidak digunakan sebagai pengganti obat dokter pada penyakit ginjal serius.",
            'gambar'=>"kumis kucing.png"],

            ['id'=>4,'nama_herbal'=>"Keji Beling",
            'khasiat'=>"Keji beling merupakan tanaman herbal yang sejak lama digunakan dalam pengobatan tradisional. Daunnya mengandung berbagai senyawa alami yang dipercaya dapat membantu menjaga kesehatan tubuh terutama bagian ginjal dan saluran kemih.\n\nManfaat Keji Beling bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan ginjal\nKeji beling dipercaya dapat membantu mendukung kerja ginjal dalam menyaring dan membuang zat sisa dari tubuh.\n\n2. Membantu meluruhkan batu ginjal\nSecara tradisional tanaman ini sering digunakan untuk membantu proses pengeluaran endapan mineral kecil yang terbentuk pada saluran kemih.\n\n3. Membantu melancarkan saluran kemih\nKeji beling dapat membantu meningkatkan proses pengeluaran urine sehingga membantu menjaga kebersihan saluran kemih.\n\n4. Membantu mengurangi peradangan\nKandungan senyawa aktif dalam tanaman ini dapat membantu mengurangi reaksi peradangan ringan pada tubuh.\n\n5. Mengandung antioksidan alami\nAntioksidan pada keji beling membantu melindungi sel tubuh dari kerusakan akibat radikal bebas.\n\n6. Membantu menjaga metabolisme tubuh\nDengan membantu proses pembuangan zat sisa, tubuh dapat menjalankan metabolisme dengan lebih baik.\n\n7. Membantu menjaga kesehatan tubuh secara umum\nKeji beling sering digunakan sebagai minuman herbal pendukung kesehatan.\n\nWalaupun berasal dari bahan alami, penggunaan keji beling tetap perlu diperhatikan terutama bagi penderita penyakit ginjal tertentu.",
            'gambar'=>"keji beling.png"],

            ['id'=>5,'nama_herbal'=>"Kencur",
            'khasiat'=>"Kencur merupakan tanaman herbal yang banyak digunakan dalam pengobatan tradisional Indonesia. Bagian rimpang kencur memiliki aroma khas dan mengandung berbagai senyawa alami seperti minyak atsiri yang sering dimanfaatkan untuk menjaga kesehatan tubuh, terutama sistem pernapasan dan pencernaan.\n\nManfaat Kencur bagi Kesehatan Tubuh\n\n1. Membantu meredakan batuk\nKencur sering digunakan sebagai bahan ramuan herbal untuk membantu meredakan batuk. Kandungan alami pada kencur dapat membantu memberikan rasa nyaman pada tenggorokan dan membantu mengurangi gangguan akibat iritasi ringan.\n\n2. Membantu melegakan tenggorokan\nSensasi hangat dari kencur dapat membantu membuat tenggorokan terasa lebih lega. Karena itu, kencur sering dicampurkan dalam minuman herbal saat mengalami gangguan tenggorokan.\n\n3. Membantu menghangatkan tubuh\nKencur memiliki efek hangat alami yang dapat membantu tubuh terasa lebih nyaman terutama saat masuk angin atau kondisi badan kurang sehat.\n\n4. Membantu menjaga kesehatan sistem pencernaan\nKencur dipercaya dapat membantu mengurangi rasa tidak nyaman pada perut, membantu mengatasi perut kembung, serta mendukung proses pencernaan.\n\n5. Membantu meningkatkan daya tahan tubuh\nKandungan antioksidan dalam kencur dapat membantu tubuh melawan radikal bebas sehingga kesehatan tubuh lebih terjaga.\n\n6. Membantu mengurangi rasa lelah\nMinuman herbal berbahan kencur sering digunakan secara tradisional untuk membantu tubuh kembali segar setelah melakukan aktivitas berat.\n\n7. Membantu mengurangi peradangan ringan\nSenyawa alami pada kencur dipercaya memiliki sifat antiinflamasi yang dapat membantu mengurangi peradangan ringan pada tubuh.\n\n8. Membantu menjaga kesehatan pernapasan\nKencur banyak digunakan sebagai bahan alami untuk membantu memberikan rasa lega pada sistem pernapasan.\n\nMeskipun kencur termasuk bahan alami, penggunaannya tetap harus dalam jumlah wajar terutama bagi orang yang memiliki kondisi kesehatan tertentu.",
            'gambar'=>"kencur.png"],



            ['id'=>6,'nama_herbal'=>"Cengkeh",
            'khasiat'=>"Cengkeh merupakan salah satu rempah yang memiliki aroma khas dan telah lama digunakan sebagai bahan herbal tradisional. Cengkeh mengandung senyawa aktif seperti eugenol yang dikenal memiliki sifat antioksidan dan dapat membantu menjaga kesehatan tubuh.\n\nManfaat Cengkeh bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan mulut dan gigi\nCengkeh sering digunakan secara tradisional untuk membantu mengurangi rasa tidak nyaman pada gigi dan menjaga kesehatan mulut karena kandungan eugenol di dalamnya.\n\n2. Membantu melegakan pernapasan\nAroma khas dari cengkeh dapat memberikan rasa lega pada saluran pernapasan sehingga sering digunakan sebagai campuran minuman herbal.\n\n3. Membantu mengurangi peradangan\nKandungan alami pada cengkeh memiliki sifat antiinflamasi yang dapat membantu tubuh mengurangi reaksi peradangan ringan.\n\n4. Membantu menjaga sistem pencernaan\nCengkeh dipercaya dapat membantu mengurangi rasa kembung dan mendukung proses pencernaan makanan.\n\n5. Mengandung antioksidan tinggi\nAntioksidan pada cengkeh membantu melindungi sel tubuh dari kerusakan akibat radikal bebas.\n\n6. Membantu menjaga daya tahan tubuh\nDengan kandungan senyawa aktifnya, cengkeh dapat membantu mendukung sistem pertahanan tubuh agar tetap sehat.\n\n7. Membantu menghangatkan tubuh\nCengkeh sering digunakan dalam minuman tradisional karena memberikan efek hangat dan nyaman bagi tubuh.\n\n8. Membantu menjaga kesehatan metabolisme\nKandungan alami dalam cengkeh membantu tubuh menjalankan proses metabolisme dengan lebih baik.\n\nPenggunaan cengkeh sebagai herbal sebaiknya tetap dilakukan secara bijak dan tidak digunakan secara berlebihan.",
            'gambar'=>"cengkeh.png"],



            ['id'=>7,'nama_herbal'=>"Kulit Manis",
            'khasiat'=>"Kulit manis atau kayu manis merupakan rempah herbal yang berasal dari kulit batang tanaman Cinnamomum. Rempah ini dikenal memiliki aroma harum dan banyak digunakan sebagai bahan makanan maupun minuman herbal karena kandungan antioksidannya.\n\nManfaat Kulit Manis bagi Kesehatan Tubuh\n\n1. Membantu menjaga kadar gula darah\nKulit manis dipercaya dapat membantu menjaga keseimbangan kadar gula darah apabila dikombinasikan dengan pola makan sehat dan gaya hidup yang baik.\n\n2. Membantu menjaga kesehatan jantung\nKandungan alami pada kulit manis dapat membantu mendukung kesehatan pembuluh darah dan metabolisme lemak dalam tubuh.\n\n3. Mengandung antioksidan alami\nAntioksidan dalam kulit manis membantu melindungi tubuh dari kerusakan akibat radikal bebas.\n\n4. Membantu menghangatkan tubuh\nKulit manis memberikan sensasi hangat sehingga sering digunakan sebagai campuran minuman herbal.\n\n5. Membantu menjaga sistem pencernaan\nKulit manis dipercaya dapat membantu mengurangi rasa tidak nyaman pada perut dan membantu proses pencernaan.\n\n6. Membantu mengurangi peradangan ringan\nSenyawa aktif dalam kulit manis dapat membantu tubuh mengurangi peradangan.\n\n7. Membantu menjaga daya tahan tubuh\nKandungan nutrisi dan senyawa alami kulit manis dapat membantu menjaga kesehatan tubuh secara umum.\n\n8. Membantu memberikan rasa rileks\nAroma khas kulit manis sering memberikan efek nyaman dan menenangkan.\n\nWalaupun memiliki manfaat, konsumsi kulit manis tetap harus diperhatikan terutama bagi orang dengan kondisi kesehatan tertentu.",
            'gambar'=>"kulit manis.png"],



            ['id'=>8,'nama_herbal'=>"Daun Alpukat",
            'khasiat'=>"Daun alpukat merupakan bagian dari tanaman alpukat yang sering digunakan sebagai bahan herbal tradisional. Daun ini mengandung berbagai senyawa alami seperti flavonoid dan antioksidan yang dipercaya dapat membantu menjaga kesehatan tubuh.\n\nManfaat Daun Alpukat bagi Kesehatan Tubuh\n\n1. Membantu menjaga kadar gula darah\nDaun alpukat sering dimanfaatkan secara tradisional untuk membantu menjaga keseimbangan kadar gula darah dalam tubuh.\n\n2. Membantu menjaga kesehatan ginjal\nKandungan alami dalam daun alpukat dipercaya dapat membantu mendukung fungsi ginjal dalam proses penyaringan zat sisa tubuh.\n\n3. Membantu menjaga tekanan darah\nDaun alpukat digunakan sebagai herbal pendukung untuk membantu menjaga tekanan darah tetap seimbang.\n\n4. Membantu mengurangi peradangan\nKandungan antioksidan pada daun alpukat dapat membantu tubuh melawan peradangan ringan.\n\n5. Membantu menjaga sistem pencernaan\nDaun alpukat dipercaya dapat membantu mengatasi rasa tidak nyaman pada pencernaan.\n\n6. Membantu melindungi tubuh dari radikal bebas\nAntioksidan dalam daun alpukat membantu menjaga kesehatan sel tubuh.\n\n7. Membantu menjaga metabolisme tubuh\nDaun alpukat dapat mendukung proses metabolisme agar tubuh tetap bekerja dengan baik.\n\n8. Membantu menjaga kesehatan secara umum\nSecara tradisional daun alpukat digunakan sebagai minuman herbal pendukung kesehatan tubuh.\n\nPenggunaan daun alpukat tetap perlu diperhatikan terutama apabila sedang menggunakan obat atau memiliki penyakit tertentu.",
            'gambar'=>"daun alpukat.png"],

            ['id'=>9,'nama_herbal'=>"Bawang Putih",
            'khasiat'=>"Bawang putih merupakan salah satu tanaman herbal yang banyak digunakan sebagai bumbu makanan sekaligus bahan pengobatan tradisional. Bawang putih mengandung berbagai senyawa aktif seperti allicin, vitamin, mineral, dan antioksidan yang dipercaya dapat membantu menjaga kesehatan tubuh.\n\nManfaat Bawang Putih bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan jantung\nBawang putih dikenal dapat membantu menjaga kesehatan jantung dengan mendukung kesehatan pembuluh darah dan membantu menjaga sirkulasi darah agar tetap baik.\n\n2. Membantu menjaga kadar kolesterol\nKandungan senyawa alami pada bawang putih dipercaya dapat membantu menjaga keseimbangan kadar kolesterol dalam tubuh apabila disertai pola makan sehat.\n\n3. Membantu meningkatkan daya tahan tubuh\nBawang putih mengandung antioksidan yang membantu tubuh melawan radikal bebas dan mendukung sistem imun agar tubuh tidak mudah mengalami gangguan kesehatan.\n\n4. Membantu menjaga tekanan darah\nBeberapa kandungan alami dalam bawang putih dipercaya dapat membantu menjaga tekanan darah agar tetap stabil dengan mendukung kesehatan pembuluh darah.\n\n5. Membantu melawan radikal bebas\nAntioksidan pada bawang putih membantu melindungi sel tubuh dari kerusakan yang dapat disebabkan oleh paparan radikal bebas.\n\n6. Membantu menjaga kesehatan pencernaan\nBawang putih dapat membantu menjaga keseimbangan bakteri baik dalam sistem pencernaan sehingga proses pencernaan dapat berjalan lebih optimal.\n\n7. Membantu mengurangi peradangan ringan\nSenyawa aktif pada bawang putih memiliki sifat antiinflamasi yang dapat membantu mengurangi reaksi peradangan ringan dalam tubuh.\n\n8. Membantu menjaga metabolisme tubuh\nBawang putih dapat membantu mendukung proses metabolisme sehingga tubuh dapat menggunakan energi dengan lebih baik.\n\nMeskipun bawang putih memiliki banyak manfaat, konsumsi secara berlebihan dapat menyebabkan rasa tidak nyaman pada lambung. Orang dengan gangguan tertentu sebaiknya memperhatikan jumlah penggunaannya.",
            'gambar'=>"bawang putih.png"],



            ['id'=>10,'nama_herbal'=>"Ketumbar",
            'khasiat'=>"Ketumbar merupakan tanaman rempah yang bijinya sering digunakan sebagai bumbu dapur dan bahan herbal tradisional. Ketumbar mengandung serat, mineral, serta senyawa antioksidan yang dipercaya dapat memberikan manfaat bagi kesehatan tubuh.\n\nManfaat Ketumbar bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan pencernaan\nKetumbar sering digunakan untuk membantu mengurangi rasa tidak nyaman pada perut seperti kembung serta membantu proses pencernaan makanan.\n\n2. Membantu menjaga kadar kolesterol\nKandungan alami dalam ketumbar dipercaya dapat membantu menjaga keseimbangan kadar kolesterol dalam tubuh jika didukung pola hidup sehat.\n\n3. Membantu menjaga kadar gula darah\nKetumbar secara tradisional digunakan untuk membantu mendukung pengaturan kadar gula darah agar tetap seimbang.\n\n4. Mengandung antioksidan alami\nAntioksidan dalam ketumbar membantu tubuh melawan kerusakan sel akibat radikal bebas yang berasal dari lingkungan maupun proses metabolisme tubuh.\n\n5. Membantu menjaga kesehatan jantung\nDengan membantu menjaga kolesterol dan metabolisme tubuh, ketumbar dapat mendukung kesehatan jantung secara umum.\n\n6. Membantu mengurangi peradangan ringan\nSenyawa alami dalam ketumbar dipercaya memiliki sifat yang dapat membantu tubuh mengurangi peradangan ringan.\n\n7. Membantu menjaga daya tahan tubuh\nKandungan vitamin dan mineral dalam ketumbar dapat membantu tubuh tetap sehat dan mendukung sistem kekebalan tubuh.\n\n8. Membantu proses detoksifikasi alami tubuh\nKetumbar dipercaya dapat membantu tubuh dalam proses pembuangan zat yang tidak diperlukan melalui sistem metabolisme alami.\n\nPenggunaan ketumbar sebagai herbal tetap perlu dilakukan secara wajar dan tidak menggantikan pengobatan medis yang diperlukan.",
            'gambar'=>"ketumbar.png"],



            ['id'=>11,'nama_herbal'=>"Daun Sirsak",
            'khasiat'=>"Daun sirsak merupakan tanaman herbal yang sudah lama digunakan dalam pengobatan tradisional. Daun ini memiliki kandungan senyawa alami seperti flavonoid, tanin, dan antioksidan yang dipercaya dapat membantu menjaga kesehatan tubuh.\n\nManfaat Daun Sirsak bagi Kesehatan Tubuh\n\n1. Membantu meningkatkan daya tahan tubuh\nKandungan antioksidan dalam daun sirsak membantu tubuh menghadapi radikal bebas sehingga sistem kekebalan tubuh dapat bekerja lebih baik.\n\n2. Membantu melawan radikal bebas\nAntioksidan pada daun sirsak berperan membantu melindungi sel tubuh dari kerusakan akibat pengaruh lingkungan dan pola hidup tidak sehat.\n\n3. Membantu mengurangi peradangan\nDaun sirsak dipercaya memiliki kandungan alami yang dapat membantu mengurangi peradangan ringan dalam tubuh.\n\n4. Membantu menjaga kesehatan pencernaan\nSecara tradisional daun sirsak digunakan untuk membantu menjaga kondisi saluran pencernaan agar tetap sehat.\n\n5. Membantu menjaga metabolisme tubuh\nKandungan senyawa aktif pada daun sirsak dapat membantu mendukung proses metabolisme tubuh.\n\n6. Membantu menjaga kesehatan kulit\nAntioksidan dalam daun sirsak dapat membantu menjaga kesehatan kulit dengan melindungi sel dari kerusakan.\n\n7. Membantu tubuh tetap segar\nMinuman herbal daun sirsak sering digunakan sebagai pendukung kesehatan dan membantu tubuh terasa lebih nyaman.\n\n8. Digunakan sebagai pendamping herbal tradisional\nDaun sirsak banyak dimanfaatkan sebagai bahan alami pendukung kesehatan tubuh secara umum.\n\nWalaupun dikenal sebagai tanaman herbal, daun sirsak tidak boleh digunakan sebagai pengganti pengobatan medis untuk penyakit tertentu.",
            'gambar'=>"daun sirsak.png"],



            ['id'=>12,'nama_herbal'=>"Temu Putih",
            'khasiat'=>"Temu putih merupakan tanaman herbal dari keluarga rimpang yang masih berhubungan dengan kunyit dan temulawak. Tanaman ini mengandung senyawa alami seperti kurkuminoid dan minyak atsiri yang sering digunakan dalam ramuan tradisional.\n\nManfaat Temu Putih bagi Kesehatan Tubuh\n\n1. Membantu mengurangi peradangan\nTemu putih memiliki kandungan senyawa alami yang dipercaya dapat membantu mengurangi peradangan ringan pada tubuh.\n\n2. Membantu menjaga daya tahan tubuh\nKandungan antioksidan pada temu putih dapat membantu tubuh melawan radikal bebas sehingga kesehatan tubuh tetap terjaga.\n\n3. Membantu menjaga sistem pencernaan\nTemu putih secara tradisional digunakan untuk membantu menjaga kesehatan lambung dan pencernaan.\n\n4. Membantu menjaga kesehatan hati\nKandungan alami pada temu putih dipercaya dapat membantu mendukung fungsi hati dalam proses metabolisme tubuh.\n\n5. Membantu menjaga kesehatan sel tubuh\nAntioksidan dalam temu putih membantu melindungi sel tubuh dari kerusakan akibat radikal bebas.\n\n6. Membantu tubuh dalam proses pemulihan\nTemu putih sering digunakan sebagai bahan herbal untuk membantu tubuh tetap kuat setelah kondisi kurang sehat.\n\n7. Membantu menjaga metabolisme tubuh\nSenyawa aktif dalam temu putih dapat mendukung proses metabolisme agar berjalan dengan baik.\n\n8. Membantu menjaga kesehatan secara umum\nTemu putih banyak digunakan sebagai bahan herbal pendukung untuk menjaga keseimbangan kondisi tubuh.\n\nPenggunaan temu putih tetap harus diperhatikan terutama bagi ibu hamil, ibu menyusui, atau orang yang sedang menjalani pengobatan tertentu.",
            'gambar'=>"temu putih.png"],

            ['id'=>13,'nama_herbal'=>"Jeruk Nipis",
            'khasiat'=>"Jeruk nipis merupakan buah herbal yang banyak digunakan dalam kehidupan sehari-hari sebagai bahan makanan, minuman, maupun ramuan tradisional. Jeruk nipis memiliki kandungan vitamin C, flavonoid, mineral, serta antioksidan yang dapat membantu menjaga kesehatan tubuh.\n\nManfaat Jeruk Nipis bagi Kesehatan Tubuh\n\n1. Membantu meredakan batuk\nJeruk nipis sering digunakan sebagai bahan alami untuk membantu meredakan batuk. Kandungan vitamin C dan rasa segarnya dapat membantu memberikan kenyamanan pada tenggorokan.\n\n2. Membantu meningkatkan daya tahan tubuh\nVitamin C pada jeruk nipis berperan membantu mendukung sistem kekebalan tubuh sehingga tubuh lebih siap melawan gangguan kesehatan.\n\n3. Membantu menjaga kesehatan tenggorokan\nJeruk nipis dapat memberikan efek segar dan membantu mengurangi rasa tidak nyaman pada tenggorokan akibat iritasi ringan.\n\n4. Membantu melawan radikal bebas\nKandungan antioksidan pada jeruk nipis membantu melindungi sel tubuh dari kerusakan akibat radikal bebas.\n\n5. Membantu menjaga kesehatan kulit\nVitamin C pada jeruk nipis membantu mendukung pembentukan kolagen yang berperan penting dalam menjaga kesehatan dan elastisitas kulit.\n\n6. Membantu menjaga sistem pencernaan\nJeruk nipis dipercaya dapat membantu merangsang sistem pencernaan sehingga proses pencernaan makanan berjalan lebih baik.\n\n7. Membantu menjaga metabolisme tubuh\nKandungan nutrisi dalam jeruk nipis dapat membantu tubuh dalam proses metabolisme dan menjaga keseimbangan tubuh.\n\n8. Membantu tubuh terasa lebih segar\nMinuman berbahan jeruk nipis sering dikonsumsi untuk membantu memberikan rasa segar dan mengurangi rasa lelah.\n\nWalaupun memiliki banyak manfaat, konsumsi jeruk nipis secara berlebihan dapat menyebabkan rasa tidak nyaman pada lambung terutama bagi penderita asam lambung.",
            'gambar'=>"jeruk nipis.png"],



            ['id'=>14,'nama_herbal'=>"Madu",
            'khasiat'=>"Madu merupakan bahan alami yang dihasilkan oleh lebah dan sudah lama digunakan sebagai makanan sekaligus bahan herbal tradisional. Madu mengandung gula alami, vitamin, mineral, enzim, dan antioksidan yang dapat memberikan berbagai manfaat bagi kesehatan tubuh.\n\nManfaat Madu bagi Kesehatan Tubuh\n\n1. Membantu meningkatkan daya tahan tubuh\nKandungan antioksidan dalam madu membantu tubuh menghadapi radikal bebas dan mendukung sistem imun agar tetap bekerja dengan baik.\n\n2. Membantu meredakan batuk\nMadu sering digunakan sebagai bahan alami untuk membantu mengurangi batuk dan memberikan rasa nyaman pada tenggorokan.\n\n3. Membantu menjaga kesehatan tenggorokan\nTekstur madu yang lembut dapat membantu melapisi tenggorokan sehingga terasa lebih nyaman ketika mengalami gangguan ringan.\n\n4. Sebagai sumber energi alami\nKandungan gula alami dalam madu dapat menjadi sumber energi cepat bagi tubuh ketika merasa lelah atau membutuhkan tambahan tenaga.\n\n5. Membantu menjaga kesehatan pencernaan\nMadu dipercaya dapat membantu menjaga keseimbangan bakteri baik dalam saluran pencernaan.\n\n6. Membantu proses penyembuhan luka\nSecara tradisional madu sering digunakan untuk membantu proses perawatan luka karena memiliki sifat alami tertentu.\n\n7. Membantu menjaga kesehatan kulit\nKandungan nutrisi dalam madu dapat membantu menjaga kelembapan dan kesehatan kulit.\n\n8. Membantu tubuh tetap segar\nMengonsumsi madu dalam jumlah yang sesuai dapat membantu tubuh terasa lebih bertenaga dan mendukung kesehatan secara umum.\n\nWalaupun madu merupakan bahan alami, konsumsi tetap perlu diperhatikan terutama bagi penderita diabetes karena madu mengandung gula alami.",
            'gambar'=>"madu.png"],



            ['id'=>15,'nama_herbal'=>"Daun Salam",
            'khasiat'=>"Daun salam merupakan tanaman herbal yang banyak digunakan sebagai bumbu masakan dan bahan pengobatan tradisional. Daun salam mengandung berbagai senyawa alami seperti flavonoid, tanin, serta antioksidan yang dipercaya dapat membantu menjaga kesehatan tubuh.\n\nManfaat Daun Salam bagi Kesehatan Tubuh\n\n1. Membantu menjaga kadar gula darah\nDaun salam secara tradisional digunakan untuk membantu menjaga keseimbangan kadar gula darah apabila dikombinasikan dengan pola hidup sehat.\n\n2. Membantu menjaga kadar kolesterol\nKandungan alami daun salam dipercaya dapat membantu menjaga metabolisme lemak dan keseimbangan kolesterol tubuh.\n\n3. Membantu menjaga kesehatan jantung\nDengan membantu menjaga metabolisme tubuh, daun salam dapat mendukung kesehatan jantung dan pembuluh darah.\n\n4. Membantu melancarkan pencernaan\nDaun salam sering digunakan untuk membantu mengurangi rasa tidak nyaman pada perut serta mendukung sistem pencernaan.\n\n5. Mengandung antioksidan alami\nAntioksidan dalam daun salam membantu melindungi tubuh dari kerusakan akibat radikal bebas.\n\n6. Membantu mengurangi peradangan ringan\nSenyawa alami daun salam dapat membantu tubuh menghadapi peradangan ringan.\n\n7. Membantu menjaga metabolisme tubuh\nDaun salam dapat membantu tubuh dalam mengolah nutrisi dan menjaga keseimbangan energi.\n\n8. Membantu menjaga kesehatan tubuh secara umum\nSebagai tanaman herbal, daun salam sering digunakan untuk membantu menjaga kondisi tubuh tetap sehat.\n\nPenggunaan daun salam tetap perlu dilakukan secara wajar terutama jika memiliki kondisi kesehatan tertentu.",
            'gambar'=>"daun salam.png"],
            ['id'=>16,'nama_herbal'=>"Kunyit",
            'khasiat'=>"Kunyit merupakan salah satu tanaman herbal yang sangat dikenal dalam pengobatan tradisional. Bagian yang sering digunakan adalah rimpangnya yang memiliki warna kuning khas karena mengandung senyawa aktif bernama kurkumin. Kunyit banyak dimanfaatkan sebagai bahan makanan, minuman herbal, dan ramuan alami untuk membantu menjaga kesehatan tubuh.\n\nManfaat Kunyit bagi Kesehatan Tubuh\n\n1. Membantu menjaga kesehatan sistem pencernaan\nKunyit dipercaya dapat membantu menjaga kesehatan saluran pencernaan. Kandungan kurkumin pada kunyit dapat membantu mengurangi rasa tidak nyaman pada lambung serta membantu proses pencernaan makanan agar berjalan lebih baik.\n\n2. Membantu mengurangi peradangan\nSalah satu manfaat kunyit yang paling dikenal adalah sifat antiinflamasi alaminya. Kandungan kurkumin dapat membantu tubuh mengurangi reaksi peradangan ringan yang terjadi akibat aktivitas sehari-hari atau kondisi tertentu.\n\n3. Membantu menjaga kesehatan lambung\nKunyit sering digunakan sebagai bahan herbal untuk membantu mengurangi keluhan pada lambung seperti rasa tidak nyaman, begah, atau gangguan pencernaan ringan.\n\n4. Membantu meningkatkan daya tahan tubuh\nKandungan antioksidan pada kunyit membantu tubuh melawan radikal bebas yang dapat merusak sel. Dengan perlindungan tersebut, tubuh dapat lebih kuat dalam menjaga kesehatannya.\n\n5. Membantu menjaga kesehatan hati\nKunyit dipercaya dapat membantu mendukung kerja hati dalam menjalankan fungsi metabolisme serta membantu tubuh dalam mengolah berbagai zat yang masuk.\n\n6. Membantu menjaga kesehatan kulit\nKandungan antioksidan dan senyawa alami dalam kunyit dapat membantu menjaga kesehatan kulit dari dalam serta membantu melindungi kulit dari pengaruh buruk lingkungan.\n\n7. Membantu menjaga kesehatan sendi\nKarena memiliki sifat antiinflamasi, kunyit sering digunakan sebagai pendukung untuk membantu mengurangi rasa tidak nyaman pada sendi dan membantu menjaga kelenturan tubuh.\n\n8. Membantu menjaga metabolisme tubuh\nKunyit dapat membantu mendukung proses metabolisme sehingga tubuh mampu mengolah nutrisi dan menghasilkan energi dengan lebih baik.\n\n9. Membantu menjaga kesehatan jantung\nKandungan alami pada kunyit dapat membantu mendukung kesehatan pembuluh darah dan menjaga fungsi tubuh secara keseluruhan.\n\n10. Membantu tubuh tetap segar\nMinuman herbal berbahan kunyit sering dikonsumsi untuk membantu menjaga kondisi tubuh agar tetap bugar dan tidak mudah lelah.\n\nWalaupun kunyit merupakan bahan alami yang memiliki banyak manfaat, penggunaannya tetap perlu diperhatikan. Ibu hamil, ibu menyusui, orang dengan gangguan empedu, atau seseorang yang sedang mengonsumsi obat tertentu sebaiknya berkonsultasi terlebih dahulu sebelum menggunakan kunyit sebagai herbal secara rutin.",
            'gambar'=>"kunyit.png"],



            ['id'=>17,'nama_herbal'=>"Teh Hijau",
            'khasiat'=>"Teh hijau merupakan minuman herbal yang berasal dari daun tanaman Camellia sinensis. Teh hijau dikenal memiliki kandungan antioksidan tinggi seperti katekin dan polifenol yang dipercaya dapat membantu menjaga kesehatan tubuh. Berbeda dengan beberapa jenis teh lainnya, proses pengolahan teh hijau membuat kandungan senyawa alaminya tetap terjaga dengan baik.\n\nManfaat Teh Hijau bagi Kesehatan Tubuh\n\n1. Membantu melawan radikal bebas\nTeh hijau memiliki kandungan antioksidan tinggi yang dapat membantu tubuh melawan radikal bebas. Radikal bebas dapat menyebabkan kerusakan sel sehingga tubuh membutuhkan antioksidan untuk membantu menjaga kesehatan.\n\n2. Membantu menjaga kesehatan jantung\nKandungan katekin dalam teh hijau dipercaya dapat membantu menjaga kesehatan jantung dengan mendukung kesehatan pembuluh darah dan metabolisme tubuh.\n\n3. Membantu menjaga kadar kolesterol\nTeh hijau sering dikaitkan dengan kemampuannya membantu menjaga keseimbangan kadar kolesterol apabila dikombinasikan dengan pola makan sehat dan olahraga teratur.\n\n4. Membantu meningkatkan konsentrasi\nTeh hijau memiliki kandungan kafein alami dalam jumlah tertentu yang dapat membantu meningkatkan fokus, konsentrasi, dan membuat tubuh terasa lebih segar.\n\n5. Membantu menjaga metabolisme tubuh\nSenyawa alami dalam teh hijau dapat membantu mendukung proses metabolisme sehingga tubuh dapat menggunakan energi dengan lebih optimal.\n\n6. Membantu menjaga kesehatan kulit\nAntioksidan pada teh hijau dapat membantu melindungi kulit dari kerusakan akibat radikal bebas serta membantu menjaga kesehatan kulit dari dalam.\n\n7. Membantu menjaga daya tahan tubuh\nKandungan nutrisi dan senyawa alami dalam teh hijau membantu mendukung sistem kekebalan tubuh agar tetap bekerja dengan baik.\n\n8. Membantu menjaga fungsi otak\nKandungan alami pada teh hijau dipercaya dapat membantu menjaga fungsi otak, meningkatkan kewaspadaan, dan mendukung aktivitas sehari-hari.\n\n9. Membantu menjaga berat badan sehat\nTeh hijau sering digunakan sebagai pendukung pola hidup sehat karena dapat membantu proses metabolisme energi jika disertai olahraga dan pola makan seimbang.\n\n10. Membantu tubuh terasa lebih rileks\nKandungan L-theanine dalam teh hijau dapat memberikan efek nyaman dan membantu tubuh terasa lebih tenang.\n\nMeskipun teh hijau memiliki berbagai manfaat, konsumsi berlebihan dapat menyebabkan efek samping karena kandungan kafeinnya. Orang yang sensitif terhadap kafein, ibu hamil, atau orang dengan kondisi kesehatan tertentu perlu memperhatikan jumlah konsumsi teh hijau.",
            'gambar'=>"teh hijau.png"],

            ['id'=>18,'nama_herbal'=>"Serai",'khasiat'=>"Serai merupakan tanaman herbal yang sering digunakan dalam ramuan tradisional untuk membantu menghangatkan tubuh, mengurangi perut kembung, membantu melancarkan pencernaan, serta memberikan efek nyaman pada tubuh. Serai juga memiliki aroma khas dari minyak atsiri yang dapat membantu tubuh terasa lebih rileks.",'gambar'=>"serai.png"],

            ['id'=>19,'nama_herbal'=>"Daun Jambu Biji",'khasiat'=>"Daun jambu biji merupakan tanaman herbal yang sering digunakan secara tradisional untuk membantu mengatasi diare. Kandungan tanin, flavonoid, dan antioksidan pada daun jambu biji dipercaya dapat membantu mengurangi cairan berlebih di usus, membuat feses lebih padat, serta membantu melawan bakteri penyebab gangguan pencernaan.",'gambar'=>"daun jambu biji.png"],

            ['id'=>20,'nama_herbal'=>"Bunga Chamomile",'khasiat'=>"Bunga chamomile merupakan herbal yang dikenal dapat membantu menenangkan tubuh dan pikiran. Kandungan apigenin pada chamomile dipercaya dapat membantu tubuh lebih rileks, mengurangi kecemasan, serta membantu meningkatkan kualitas tidur pada penderita insomnia.",'gambar'=>"chamomile.png"],

            ['id'=>21,'nama_herbal'=>"Minyak Kelapa",'khasiat'=>"Minyak kelapa merupakan bahan alami yang sering digunakan untuk membantu menjaga kelembapan kulit dan jaringan mulut. Pada sariawan, minyak kelapa dapat membantu melembapkan area luka dan memberikan rasa nyaman ketika digunakan bersama madu.",'gambar'=>"minyak kelapa.png"],

            ]);


        // =========================
        // 2. PENYAKIT
        // Urutan penyakit dibuat sama dengan urutan resep.
        // =========================
        Penyakit::insert([
            [
                'id'=>1,
                'nama_penyakit'=>'Asam Lambung',
                'deskripsi'=>'Asam lambung adalah kondisi ketika asam dari lambung naik ke kerongkongan sehingga menimbulkan rasa tidak nyaman pada dada dan perut. Penyakit ini sering muncul akibat pola makan yang tidak teratur, stres, serta kebiasaan mengonsumsi makanan pedas atau asam secara berlebihan. Jika dibiarkan terlalu lama, asam lambung dapat menyebabkan iritasi pada lambung dan tenggorokan.',
                'gejala'=>"Perut terasa perih terutama saat terlambat makan\nDada terasa panas atau terbakar\nMual dan muntah\nPerut kembung\nSering bersendawa\nMulut terasa asam",
                'penyebab'=>"Pola makan tidak teratur\nKonsumsi makanan pedas dan asam berlebihan\nStres dan kelelahan\nSering minum kopi atau minuman bersoda\nTidur setelah makan",
                'pengobatan'=>"Istirahat cukup\nMengonsumsi makanan sehat dan teratur\nMinum air hangat\nMenghindari makanan pedas dan asam\nMengonsumsi ramuan herbal alami",
                'pencegahan'=>"Makan tepat waktu\nKurangi makanan pedas dan asam\nHindari stres berlebihan\nPerbanyak minum air putih\nJangan langsung tidur setelah makan",
                'gambar'=>'asam lambung.png'
            ],
            [
                'id'=>2,
                'nama_penyakit'=>'Ginjal',
                'deskripsi'=>'Penyakit ginjal adalah gangguan pada organ ginjal yang menyebabkan proses penyaringan zat sisa di dalam tubuh menjadi tidak optimal. Penyakit ini dapat terjadi akibat kurang minum air, pola hidup tidak sehat, atau penyakit tertentu seperti tekanan darah tinggi dan diabetes. Jika tidak ditangani dengan baik, gangguan ginjal dapat memengaruhi kesehatan tubuh secara keseluruhan.',
                'gejala'=>"Nyeri pada pinggang\nTubuh mudah lelah\nSering buang air kecil\nPembengkakan pada kaki\nMual\nNafsu makan menurun",
                'penyebab'=>"Kurang minum air putih\nTekanan darah tinggi\nDiabetes\nInfeksi saluran kemih\nTerlalu sering menahan buang air kecil",
                'pengobatan'=>"Perbanyak minum air putih\nIstirahat cukup\nMengurangi makanan tinggi garam\nMengonsumsi herbal alami\nMelakukan pemeriksaan kesehatan rutin",
                'pencegahan'=>"Minum air putih yang cukup\nJangan menahan buang air kecil\nKurangi makanan asin\nOlahraga secara rutin\nMenjaga pola hidup sehat",
                'gambar'=>'ginjal.png'
            ],
            [
                'id'=>3,
                'nama_penyakit'=>'Sesak Nafas (Asma)',
                'deskripsi'=>'Asma adalah penyakit pada saluran pernapasan yang menyebabkan penyempitan saluran napas sehingga penderita sulit bernapas. Penyakit ini dapat kambuh ketika terkena debu, udara dingin, asap rokok, atau kelelahan. Asma dapat dialami oleh anak-anak maupun orang dewasa dan perlu dijaga agar tidak sering kambuh.',
                'gejala'=>"Sesak napas\nNapas berbunyi mengi\nBatuk terutama malam hari\nDada terasa berat\nMudah lelah",
                'penyebab'=>"Debu dan asap rokok\nUdara dingin\nAlergi tertentu\nKelelahan\nInfeksi saluran pernapasan",
                'pengobatan'=>"Istirahat cukup\nMenghindari pemicu asma\nMengonsumsi minuman hangat\nMenggunakan obat inhaler bila diperlukan\nMengonsumsi ramuan herbal alami",
                'pencegahan'=>"Menghindari debu dan asap\nGunakan masker saat udara dingin\nJaga kebersihan lingkungan\nOlahraga ringan secara rutin\nHindari kelelahan berlebihan",
                'gambar'=>'asma.png'
            ],
            [
                'id'=>4,
                'nama_penyakit'=>'Diabetes',
                'deskripsi'=>'Diabetes adalah penyakit yang terjadi akibat kadar gula dalam darah terlalu tinggi. Penyakit ini biasanya disebabkan oleh pola makan yang kurang sehat, kurang olahraga, atau faktor keturunan. Jika tidak dikontrol dengan baik, diabetes dapat menyebabkan gangguan pada mata, ginjal, dan organ tubuh lainnya.',
                'gejala'=>"Sering haus\nSering buang air kecil\nTubuh mudah lelah\nBerat badan menurun\nLuka sulit sembuh",
                'penyebab'=>"Terlalu banyak konsumsi gula\nKurang olahraga\nFaktor keturunan\nObesitas\nPola hidup tidak sehat",
                'pengobatan'=>"Mengurangi makanan manis\nOlahraga rutin\nMengontrol kadar gula darah\nMengonsumsi makanan sehat\nMengonsumsi herbal alami",
                'pencegahan'=>"Kurangi konsumsi gula\nRajin olahraga\nMenjaga berat badan ideal\nPerbanyak makan sayur\nPemeriksaan kesehatan rutin",
                'gambar'=>'diabetes.png'
            ],
            [
                'id'=>5,
                'nama_penyakit'=>'Kolesterol',
                'deskripsi'=>'Kolesterol adalah kondisi meningkatnya kadar lemak di dalam darah yang dapat menghambat aliran darah. Penyakit ini sering disebabkan oleh pola makan tinggi lemak dan kurang olahraga. Jika kadar kolesterol terlalu tinggi, dapat meningkatkan risiko penyakit jantung dan stroke.',
                'gejala'=>"Pusing\nCepat lelah\nNyeri di tengkuk\nKesemutan\nNyeri dada",
                'penyebab'=>"Makanan berlemak tinggi\nKurang olahraga\nMerokok\nObesitas\nPola hidup tidak sehat",
                'pengobatan'=>"Mengurangi makanan berlemak\nOlahraga rutin\nPerbanyak makan sayur dan buah\nMengonsumsi herbal alami\nIstirahat cukup",
                'pencegahan'=>"Kurangi gorengan\nPerbanyak olahraga\nJaga berat badan\nHindari merokok\nPola makan sehat",
                'gambar'=>'kolesterol.png'
            ],
            [
                'id'=>6,
                'nama_penyakit'=>'Kanker Rahim',
                'deskripsi'=>'Kanker rahim adalah pertumbuhan sel abnormal pada bagian rahim wanita yang dapat berkembang menjadi penyakit serius. Penyakit ini dapat disebabkan oleh infeksi tertentu, faktor hormonal, maupun pola hidup yang kurang sehat. Pemeriksaan kesehatan secara rutin sangat penting untuk mendeteksi penyakit ini sejak dini.',
                'gejala'=>"Nyeri pada panggul\nPerdarahan tidak normal\nNyeri saat buang air kecil\nTubuh mudah lelah\nNyeri pada bagian bawah perut",
                'penyebab'=>"Infeksi virus tertentu\nFaktor hormonal\nPola hidup tidak sehat\nMerokok\nKurangnya pemeriksaan kesehatan",
                'pengobatan'=>"Pemeriksaan medis rutin\nMengonsumsi makanan sehat\nIstirahat cukup\nTerapi sesuai anjuran dokter\nMengonsumsi herbal pendamping",
                'pencegahan'=>"Menjaga kebersihan tubuh\nPola hidup sehat\nMenghindari rokok\nPemeriksaan kesehatan rutin\nMengonsumsi makanan bergizi",
                'gambar'=>'kanker rahim.png'
            ],

            [
                'id'=>7,
                'nama_penyakit'=>'Tekanan Darah Tinggi (Hipertensi)',
                'deskripsi'=>'Tekanan darah tinggi atau hipertensi adalah kondisi ketika tekanan darah meningkat melebihi batas normal secara terus-menerus. Hipertensi sering disebut silent disease karena banyak penderita tidak merasakan gejala hingga kondisi menjadi parah. Jika tidak dikontrol, hipertensi dapat menyebabkan stroke, penyakit jantung, dan gangguan ginjal.',
                'gejala'=>"Sakit kepala\nTengkuk terasa berat\nPusing\nPenglihatan kabur\nJantung berdebar\nTubuh mudah lelah",
                'penyebab'=>"Konsumsi garam berlebihan\nKurang olahraga\nStres berkepanjangan\nMerokok\nObesitas\nKurang tidur",
                'pengobatan'=>"Mengurangi konsumsi garam\nOlahraga teratur\nIstirahat cukup\nMenghindari stres\nMengonsumsi ramuan herbal alami",
                'pencegahan'=>"Pola makan sehat\nOlahraga rutin\nKurangi makanan asin\nTidur cukup\nHindari rokok dan alkohol",
                'gambar'=>'hipertensi.png'
            ],
            
            [
                'id'=>8,
                'nama_penyakit'=>'Sakit Kuning',

                'deskripsi'=>'Sakit kuning adalah kondisi ketika kulit, bagian putih mata, dan selaput lendir tubuh berubah menjadi berwarna kuning. Kondisi ini terjadi karena meningkatnya kadar bilirubin dalam darah. Bilirubin adalah zat berwarna kuning yang terbentuk dari proses pemecahan sel darah merah di dalam tubuh. Sakit kuning dapat berkaitan dengan gangguan hati, saluran empedu, atau proses pemecahan sel darah merah yang tidak normal.',

                'gejala'=>"Kulit berubah warna kuning\nBagian putih mata menguning\nAir kencing berwarna gelap seperti teh pekat\nTinja berwarna pucat\nPerut terasa tidak nyaman terutama bagian kanan atas\nMual dan muntah\nDemam\nNafsu makan menurun\nTubuh lemas dan mudah lelah",

                'penyebab'=>"Hepatitis atau peradangan hati akibat virus\nSirosis hati akibat alkohol atau penyakit kronis\nBatu empedu yang menyumbat saluran empedu\nInfeksi seperti malaria, tifus, atau leptospirosis\nAnemia hemolitik karena sel darah merah pecah terlalu cepat\nKanker hati atau pankreas\nEfek samping obat-obatan tertentu\nBayi baru lahir yang belum mampu memproses bilirubin dengan sempurna",

                'pengobatan'=>"Melakukan pemeriksaan medis untuk mengetahui penyebab utama\nMengonsumsi makanan sehat dan bergizi\nIstirahat yang cukup\nMinum air putih yang cukup\nMenghindari alkohol dan obat sembarangan\nMengonsumsi ramuan herbal pendamping seperti temulawak",

                'pencegahan'=>"Menjaga kesehatan hati\nMenghindari konsumsi alkohol\nTidak menggunakan obat sembarangan\nMenjaga kebersihan makanan dan minuman\nMelakukan vaksin hepatitis jika diperlukan\nMenjaga pola makan sehat\nSegera periksa ke dokter jika kulit dan mata mulai menguning",

                'gambar'=>'sakit kuning.png'
            ],

            [
                'id'=>9,
                'nama_penyakit'=>'Maag',

                'deskripsi'=>'Maag adalah kondisi ketika terjadi peningkatan produksi asam lambung atau iritasi pada dinding lambung yang menyebabkan rasa nyeri atau perih di bagian ulu hati. Secara medis, maag sering disebut gastritis. Lambung memiliki lapisan pelindung yang berfungsi melindungi dinding lambung dari asam lambung. Namun, jika lapisan ini rusak atau asam lambung diproduksi berlebihan, dinding lambung dapat mengalami peradangan. Maag dapat bersifat akut, yaitu terjadi tiba-tiba dan sementara, atau kronis, yaitu berlangsung lama dan sering kambuh. Jika tidak ditangani dengan baik, maag dapat berkembang menjadi luka pada lambung atau tukak lambung.',

                'gejala'=>"Nyeri atau perih di ulu hati\nPerut terasa kembung\nMual dan muntah\nSering bersendawa\nRasa panas di dada\nNafsu makan menurun\nPerut terasa cepat penuh\nNyeri memburuk saat perut kosong\nTinja berwarna hitam jika sudah terjadi pendarahan lambung",

                'penyebab'=>"Pola makan tidak teratur\nSering terlambat makan\nInfeksi bakteri Helicobacter pylori\nKonsumsi obat pereda nyeri berlebihan\nStres dan tekanan pikiran\nMakanan pedas\nMakanan asam\nMakanan berlemak dan berminyak\nKopi dan minuman berkafein\nAlkohol\nMerokok\nMakan berlebihan\nBerbaring setelah makan\nKurang istirahat",

                'pengobatan'=>"Makan secara teratur\nMenghindari makanan pedas, asam, dan berminyak\nMengurangi konsumsi kopi dan minuman berkafein\nIstirahat cukup\nMengelola stres\nMinum air hangat\nMengonsumsi ramuan herbal alami seperti kunyit dan madu",

                'pencegahan'=>"Tidak terlambat makan\nMengurangi makanan pedas dan asam\nMenghindari minuman berkafein berlebihan\nTidak langsung berbaring setelah makan\nMenghindari rokok dan alkohol\nMengelola stres dengan baik\nMenjaga pola tidur dan istirahat yang cukup",

                'gambar'=>'maag.png'
            ],

            [
                'id'=>10,
                'nama_penyakit'=>'Penyakit Jantung',

                'deskripsi'=>'Penyakit jantung adalah kondisi yang berkaitan dengan gangguan fungsi jantung dan pembuluh darah, seperti penyumbatan pembuluh darah, gangguan irama jantung, lemahnya otot jantung, atau kerusakan pada katup jantung. Penyakit ini termasuk penyakit kronis yang dapat berkembang dalam jangka panjang dan dapat meningkatkan risiko serangan jantung maupun stroke. Penyakit jantung sering terjadi akibat pola hidup tidak sehat, seperti konsumsi makanan tinggi lemak, kurang olahraga, merokok, stres, dan tekanan darah tinggi. Jika tidak ditangani dengan baik, penyakit jantung dapat menyebabkan komplikasi serius bahkan kematian.',

                'gejala'=>"Nyeri dada atau dada terasa tertekan\nSesak napas\nJantung berdebar tidak teratur\nTubuh mudah lelah\nPusing atau kepala terasa ringan\nKeringat dingin\nNyeri menjalar ke lengan, leher, rahang, atau punggung\nPembengkakan pada kaki akibat gangguan sirkulasi darah\nSulit tidur karena sesak napas\nMudah lelah saat beraktivitas ringan",

                'penyebab'=>"Penyumbatan pembuluh darah akibat kolesterol\nTekanan darah tinggi\nDiabetes\nMerokok\nKurang olahraga\nPola makan tinggi lemak dan garam\nObesitas\nStres berkepanjangan\nKonsumsi alkohol berlebihan\nFaktor keturunan\nUsia lanjut\nKurang istirahat",

                'pengobatan'=>"Mengatur pola makan sehat\nMengurangi makanan berlemak dan tinggi kolesterol\nOlahraga secara rutin\nMenghindari rokok dan alkohol\nMengontrol tekanan darah dan gula darah\nIstirahat cukup\nMengurangi stres\nMengonsumsi ramuan herbal pendamping yang membantu menjaga kesehatan jantung",

                'pencegahan'=>"Menjaga pola makan sehat\nRajin berolahraga\nMenghindari rokok dan alkohol\nMengontrol berat badan\nMengurangi makanan tinggi kolesterol\nMenghindari stres berlebihan\nTidur cukup\nRutin memeriksa kesehatan jantung",

                'gambar'=>'jantung.png'
            ],

            [
                'id'=>11,
                'nama_penyakit'=>'Diare',
                'deskripsi'=>'Diare adalah gangguan pada sistem pencernaan yang ditandai dengan meningkatnya frekuensi buang air besar disertai feses yang cair atau sangat lembek. Jika tidak ditangani dengan baik, diare dapat menyebabkan dehidrasi terutama pada anak-anak dan lansia.',
                'gejala'=>"BAB cair lebih sering\nNyeri atau kram perut\nMual dan muntah\nTubuh lemas\nSering haus\nNafsu makan menurun\nDemam pada kasus infeksi",
                'penyebab'=>"Infeksi bakteri\nInfeksi virus\nMakanan atau minuman tidak higienis\nKeracunan makanan\nAlergi atau intoleransi makanan\nKurang menjaga kebersihan",
                'pengobatan'=>"Minum air putih yang cukup\nMengonsumsi oralit jika diperlukan\nIstirahat cukup\nMengonsumsi rebusan daun jambu biji\nMengonsumsi makanan lembut\nSegera ke dokter jika diare berat",
                'pencegahan'=>"Cuci tangan sebelum makan\nMinum air matang\nKonsumsi makanan bersih\nJaga kebersihan alat makan\nHindari makanan basi",
                'gambar'=>'diare.png'
            ],

            [
                'id'=>12,
                'nama_penyakit'=>'Flu',
                'deskripsi'=>'Flu atau influenza adalah infeksi saluran pernapasan yang disebabkan oleh virus influenza. Penyakit ini mudah menular melalui percikan air liur saat batuk, bersin, atau berbicara. Flu biasanya menyerang hidung, tenggorokan, dan paru-paru.',
                'gejala'=>"Demam\nHidung tersumbat atau berair\nBatuk\nSakit tenggorokan\nBadan pegal\nSakit kepala\nTubuh lemas",
                'penyebab'=>"Infeksi virus influenza\nDaya tahan tubuh menurun\nKurang istirahat\nPerubahan cuaca\nKontak dengan penderita flu\nLingkungan kurang bersih",
                'pengobatan'=>"Istirahat cukup\nMinum air hangat\nMengonsumsi ramuan jahe, serai, dan madu\nMakan makanan bergizi\nMenjaga tubuh tetap hangat",
                'pencegahan'=>"Rajin mencuci tangan\nMenggunakan masker saat sakit\nMenjaga daya tahan tubuh\nTidur cukup\nMenghindari kontak dekat dengan penderita flu",
                'gambar'=>'flu.png'
            ],

            [
                'id'=>13,
                'nama_penyakit'=>'Batuk',
                'deskripsi'=>'Batuk adalah refleks alami tubuh untuk membersihkan saluran pernapasan dari debu, lendir, kuman, atau zat asing. Batuk dapat berupa batuk kering atau berdahak dan sering muncul saat tubuh mengalami flu atau daya tahan tubuh menurun.',
                'gejala'=>"Tenggorokan gatal\nBatuk kering atau berdahak\nSuara serak\nHidung tersumbat\nDemam ringan\nTubuh lemas",
                'penyebab'=>"Infeksi virus\nInfeksi bakteri\nDebu dan asap\nUdara dingin\nAlergi\nAsam lambung naik\nKurang minum",
                'pengobatan'=>"Minum air hangat\nIstirahat cukup\nMengonsumsi ramuan jahe, jeruk nipis, dan madu\nMenghindari asap rokok\nMenjaga tenggorokan tetap lembap",
                'pencegahan'=>"Gunakan masker di tempat berdebu\nMinum air putih cukup\nHindari asap rokok\nJaga daya tahan tubuh\nIstirahat cukup",
                'gambar'=>'batuk.png'
            ],

            [
                'id'=>14,
                'nama_penyakit'=>'Asam Urat',
                'deskripsi'=>'Asam urat adalah kondisi ketika kadar asam urat dalam darah meningkat dan membentuk kristal di persendian. Kondisi ini dapat menyebabkan nyeri sendi, bengkak, kemerahan, dan sulit bergerak terutama pada jari kaki, lutut, atau pergelangan.',
                'gejala'=>"Nyeri sendi mendadak\nSendi bengkak\nSendi terasa panas\nKemerahan pada area sendi\nSulit menggerakkan sendi\nNyeri sering kambuh",
                'penyebab'=>"Konsumsi makanan tinggi purin\nKurang minum air putih\nObesitas\nGangguan ginjal\nKonsumsi alkohol\nFaktor keturunan",
                'pengobatan'=>"Perbanyak minum air putih\nMenghindari makanan tinggi purin\nIstirahat saat nyeri kambuh\nMengonsumsi ramuan daun salam, jahe, dan serai\nOlahraga ringan secara teratur",
                'pencegahan'=>"Hindari jeroan dan seafood berlebihan\nPerbanyak minum air putih\nJaga berat badan ideal\nOlahraga ringan\nKurangi minuman manis dan alkohol",
                'gambar'=>'asam urat.png'
            ],

            [
                'id'=>15,
                'nama_penyakit'=>'Masuk Angin',
                'deskripsi'=>'Masuk angin adalah istilah umum yang digunakan masyarakat Indonesia untuk menggambarkan kondisi tubuh yang sedang tidak fit. Kondisi ini biasanya ditandai dengan perut kembung, meriang, badan pegal-pegal, sering bersendawa, mual, dan tubuh terasa lemas.',
                'gejala'=>"Perut kembung\nTubuh meriang\nBadan pegal-pegal\nSering bersendawa\nMual\nLemas\nNafsu makan menurun",
                'penyebab'=>"Terlalu lama terkena angin\nUdara dingin\nKelelahan\nKurang istirahat\nPola makan tidak teratur\nPerubahan cuaca",
                'pengobatan'=>"Istirahat cukup\nMinum air hangat\nMengonsumsi ramuan jahe, serai, dan madu\nMakan makanan hangat\nMenghindari udara dingin",
                'pencegahan'=>"Gunakan jaket saat udara dingin\nJangan telat makan\nCukup tidur\nHindari kelelahan\nJaga daya tahan tubuh",
                'gambar'=>'masuk angin.png'
            ],

            [
                'id'=>16,
                'nama_penyakit'=>'Insomnia',
                'deskripsi'=>'Insomnia adalah gangguan tidur yang membuat seseorang sulit memulai tidur, sering terbangun di malam hari, atau merasa tidur tidak nyenyak. Jika berlangsung lama, insomnia dapat mengganggu konsentrasi, aktivitas harian, dan kesehatan tubuh.',
                'gejala'=>"Sulit tidur\nSering terbangun malam hari\nBangun terlalu pagi\nTidur tidak menyegarkan\nMengantuk di siang hari\nSulit berkonsentrasi\nMudah cemas",
                'penyebab'=>"Stres\nKecemasan\nKebiasaan bermain gadget sebelum tidur\nKonsumsi kafein berlebihan\nJadwal tidur tidak teratur\nLingkungan tidur tidak nyaman",
                'pengobatan'=>"Mengatur jam tidur\nMengurangi penggunaan gadget sebelum tidur\nMinum ramuan chamomile dan madu\nRelaksasi sebelum tidur\nMenghindari kafein malam hari",
                'pencegahan'=>"Tidur dan bangun di jam yang sama\nKurangi kafein\nBuat kamar nyaman\nHindari makan berat sebelum tidur\nKelola stres",
                'gambar'=>'insomnia.png'
            ],

            [
                'id'=>17,
                'nama_penyakit'=>'Sariawan',
                'deskripsi'=>'Sariawan adalah luka kecil di area mulut seperti bibir bagian dalam, lidah, atau gusi. Kondisi ini menyebabkan rasa perih saat makan, minum, atau berbicara, tetapi biasanya dapat membaik dengan perawatan sederhana.',
                'gejala'=>"Luka kecil di mulut\nRasa perih\nNyeri saat makan\nMulut terasa tidak nyaman\nSulit makan makanan pedas atau asam",
                'penyebab'=>"Kurang vitamin\nLuka akibat tergigit\nKebersihan mulut kurang terjaga\nStres\nMakanan terlalu pedas atau asam",
                'pengobatan'=>"Menjaga kebersihan mulut\nMenghindari makanan pedas\nMengoleskan madu dan minyak kelapa\nMinum air putih cukup\nMengonsumsi makanan bergizi",
                'pencegahan'=>"Rajin membersihkan mulut\nCukup vitamin\nHindari menggigit bibir\nKurangi makanan pedas\nJaga daya tahan tubuh",
                'gambar'=>'sariawan.png'
            ],

        ]);

        // =========================
        // 3. BAHAN & ALAT
        // =========================
        Bahan::insert([
            ['id'=>1,'nama_bahan'=>'Jahe','tipe'=>'bahan','gambar'=>'jahe.png'],
            ['id'=>2,'nama_bahan'=>'Temulawak','tipe'=>'bahan','gambar'=>'temulawak.png'],
            ['id'=>3,'nama_bahan'=>'Temu Hitam','tipe'=>'bahan','gambar'=>'temu hitam.png'],
            ['id'=>4,'nama_bahan'=>'Daun Pandan','tipe'=>'bahan','gambar'=>'daun pandan.png'],
            ['id'=>5,'nama_bahan'=>'Gula Merah','tipe'=>'bahan','gambar'=>'gula merah.png'],
            ['id'=>6,'nama_bahan'=>'Kumis Kucing','tipe'=>'bahan','gambar'=>'kumis kucing.png'],
            ['id'=>7,'nama_bahan'=>'Daun Keji Beling','tipe'=>'bahan','gambar'=>'keji beling.png'],
            ['id'=>8,'nama_bahan'=>'Daun Salam','tipe'=>'bahan','gambar'=>'daun salam.png'],
            ['id'=>9,'nama_bahan'=>'Kencur','tipe'=>'bahan','gambar'=>'kencur.png'],
            ['id'=>10,'nama_bahan'=>'Cengkeh','tipe'=>'bahan','gambar'=>'cengkeh.png'],
            ['id'=>11,'nama_bahan'=>'Kulit Manis','tipe'=>'bahan','gambar'=>'kulit manis.png'],
            ['id'=>12,'nama_bahan'=>'Gula Batu','tipe'=>'bahan','gambar'=>'gula batu.png'],
            ['id'=>13,'nama_bahan'=>'Jahe Merah','tipe'=>'bahan','gambar'=>'jahe merah.png'],
            ['id'=>14,'nama_bahan'=>'Daun Alpukat','tipe'=>'bahan','gambar'=>'daun alpukat.png'],
            ['id'=>15,'nama_bahan'=>'Bawang Putih','tipe'=>'bahan','gambar'=>'bawang putih.png'],
            ['id'=>16,'nama_bahan'=>'Ketumbar','tipe'=>'bahan','gambar'=>'ketumbar.png'],
            ['id'=>17,'nama_bahan'=>'Daun Sirsak','tipe'=>'bahan','gambar'=>'daun sirsak.png'],
            ['id'=>18,'nama_bahan'=>'Temu Putih','tipe'=>'bahan','gambar'=>'temu putih.png'],
            ['id'=>19,'nama_bahan'=>'Jeruk Nipis','tipe'=>'bahan','gambar'=>'jeruk nipis.png'],
            ['id'=>20,'nama_bahan'=>'Madu','tipe'=>'bahan','gambar'=>'madu.png'],
            ['id'=>21,'nama_bahan'=>'Air','tipe'=>'bahan','gambar'=>'air.png'],
            ['id'=>22,'nama_bahan'=>'Serai','tipe'=>'bahan','gambar'=>'serai.png'],
            ['id'=>23,'nama_bahan'=>'Panci','tipe'=>'alat','gambar'=>'panci.png'],
            ['id'=>24,'nama_bahan'=>'Gelas','tipe'=>'alat','gambar'=>'gelas.png'],
            ['id'=>25,'nama_bahan'=>'Sendok','tipe'=>'alat','gambar'=>'sendok.png'],
            ['id'=>26,'nama_bahan'=>'Saringan','tipe'=>'alat','gambar'=>'saringan.png'],
            ['id'=>27,'nama_bahan'=>'Pisau','tipe'=>'alat','gambar'=>'pisau.png'],
            ['id'=>28,'nama_bahan'=>'Ulekan','tipe'=>'alat','gambar'=>'ulekan.png'],
            ['id'=>29,'nama_bahan'=>'Air Hangat','tipe'=>'bahan','gambar'=>'air_hangat.png'],
            ['id'=>30,'nama_bahan'=>'Kunyit','tipe'=>'bahan','gambar'=>'kunyit.png'],
            ['id'=>31,'nama_bahan'=>'Teh Hijau','tipe'=>'bahan','gambar'=>'teh_hijau.png'],
            ['id'=>32,'nama_bahan'=>'Daun Jambu Biji','tipe'=>'bahan','gambar'=>'daun jambu biji.png'],
            ['id'=>33,'nama_bahan'=>'Bunga Chamomile','tipe'=>'bahan','gambar'=>'chamomile.png'],
            ['id'=>34,'nama_bahan'=>'Minyak Kelapa','tipe'=>'bahan','gambar'=>'minyak kelapa.png'],
            ['id'=>35,'nama_bahan'=>'Wadah Bersih','tipe'=>'alat','gambar'=>'wadah.png'],
        
            ]);

        // =========================
        // 4. RESEP
        // Urutan resep dibuat sama dengan urutan penyakit.
        // =========================
        Resep::insert([
            [
                'id'=>1,
                'herbal_id'=>2,
                'penyakit_id'=>1,
                'nama_resep'=>'Resep Herbal Asam Lambung',
                'gambar'=>'ramuan asam lambung.png',
                'alat_bahan'=>'Temulawak, Temu Hitam, Gula Merah, Daun Pandan',
                'cara_pembuatan'=>"Cuci temulawak dan temu hitam hingga bersih.\nKupas tipis temulawak dan temu hitam, lalu iris kecil-kecil.\nMasukkan temulawak, temu hitam, daun pandan, dan gula merah ke dalam panci.\nTambahkan air sebanyak ± 500 ml.\nRebus selama 15–20 menit hingga air berubah warna dan aroma herbal keluar.\nAduk sesekali agar sari herbal tercampur merata.\nSetelah matang, angkat lalu saring air rebusan ke dalam gelas.\nDiamkan beberapa menit hingga hangat sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi sebanyak 1 gelas, 2 kali sehari pagi dan malam.\nMinum secara rutin selama gejala asam lambung masih terasa.\nHindari makanan pedas, asam, dan berminyak berlebihan.",
            ],
            [
                'id'=>2,
                'herbal_id'=>3,
                'penyakit_id'=>2,
                'nama_resep'=>'Resep Herbal Ginjal',
                'gambar'=>'ramuan ginjal.png',
                'alat_bahan'=>'Kumis Kucing, Daun Keji Beling, Daun Salam',
                'cara_pembuatan'=>"Cuci kumis kucing, daun keji beling, dan daun salam hingga bersih.\nPotong kecil daun keji beling agar sari daun mudah keluar.\nMasukkan semua bahan ke dalam panci.\nTambahkan air sebanyak ± 600 ml.\nRebus selama 15–20 menit hingga air rebusan berubah warna.\nAduk sesekali agar sari herbal tercampur rata.\nSetelah matang, angkat dan saring air rebusan ke dalam gelas.\nDiamkan beberapa menit hingga hangat sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi sebanyak 1 gelas, 2 kali sehari pagi dan malam.\nMinum secara rutin untuk membantu menjaga kesehatan ginjal.\nPerbanyak minum air putih dan kurangi makanan terlalu asin.",
            ],
            [
                'id'=>3,
                'herbal_id'=>5,
                'penyakit_id'=>3,
                'nama_resep'=>'Resep Herbal Sesak Nafas',
                'gambar'=>'ramuan asma.png',
                'alat_bahan'=>'Kencur, Cengkeh, Kulit Manis, Gula Batu, Jahe Merah',
                'cara_pembuatan'=>"Cuci kencur dan jahe merah hingga bersih.\nKupas tipis kencur dan jahe merah, lalu iris kecil-kecil.\nMasukkan kencur, jahe merah, cengkeh, kulit manis, dan gula batu ke dalam panci.\nTambahkan air sebanyak ± 600 ml.\nRebus selama 15–20 menit hingga aroma rempah keluar.\nAduk perlahan agar sari rempah tercampur rata.\nSetelah matang, angkat lalu saring air rebusan ke dalam gelas.\nDiamkan beberapa menit hingga hangat sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi sebanyak 1 gelas, 3 kali sehari pagi, siang, dan malam.\nMinum secara rutin selama gejala sesak napas masih terasa.\nHindari udara dingin, asap rokok, dan debu berlebihan.",
            ],
            [
                'id'=>4,
                'herbal_id'=>8,
                'penyakit_id'=>4,
                'nama_resep'=>'Resep Herbal Diabetes',
                'gambar'=>'ramuan diabetes.png',
                'alat_bahan'=>'Daun Alpukat, Jahe, Bawang Putih',
                'cara_pembuatan'=>"Cuci daun alpukat hingga bersih.\nKupas jahe dan bawang putih lalu iris tipis.\nMasukkan daun alpukat, jahe, dan bawang putih ke dalam panci.\nTambahkan air sebanyak ± 700 ml.\nRebus selama 15–20 menit hingga air rebusan berubah warna.\nAduk sesekali agar sari herbal tercampur merata.\nSetelah matang, angkat lalu saring air rebusan ke dalam gelas.\nDiamkan beberapa menit hingga hangat sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi sebanyak ½ gelas, 3 kali sehari pagi, siang, dan malam.\nMinum secara rutin disertai pola makan sehat.\nRamuan ini sebagai pendamping, bukan pengganti obat dokter.",
            ],
            [
                'id'=>5,
                'herbal_id'=>1,
                'penyakit_id'=>5,
                'nama_resep'=>'Resep Herbal Kolesterol',
                'gambar'=>'ramuan kolestrol.png',
                'alat_bahan'=>'Jahe, Bawang Putih, Ketumbar',
                'cara_pembuatan'=>"Cuci jahe hingga bersih lalu iris tipis.\nKupas bawang putih kemudian memarkan sedikit.\nMasukkan jahe, bawang putih, dan ketumbar ke dalam gelas atau wadah.\nTuangkan air panas sebanyak ± 500 ml.\nTutup wadah lalu rendam selama semalaman.\nKeesokan harinya, saring air rendaman sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan sebanyak 1 gelas.\nKonsumsi sebanyak 3 kali sehari pagi, siang, dan malam.\nDisarankan diminum sebelum makan.\nKurangi makanan berminyak dan tinggi lemak.",
            ],
            [
                'id'=>6,
                'herbal_id'=>11,
                'penyakit_id'=>6,
                'nama_resep'=>'Resep Herbal Kanker Rahim',
                'gambar'=>'ramuan kanker rahim.png',
                'alat_bahan'=>'Daun Sirsak, Temu Putih',
                'cara_pembuatan'=>"Cuci daun sirsak dan temu putih hingga bersih.\nKupas tipis temu putih lalu iris kecil-kecil.\nMasukkan daun sirsak dan temu putih ke dalam panci.\nTambahkan air sebanyak ± 700 ml.\nRebus selama 15–20 menit hingga air rebusan berubah warna.\nAduk sesekali agar sari herbal tercampur merata.\nSetelah matang, angkat lalu saring air rebusan ke dalam gelas.\nDiamkan beberapa menit hingga hangat sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan sebanyak ½ gelas dalam keadaan hangat.\nKonsumsi sebanyak 3 kali sehari pagi, siang, dan malam.\nRamuan ini digunakan sebagai pendamping kesehatan tubuh.\nTetap lakukan pemeriksaan medis secara rutin.",
            ],

            [
                'id'=>7,
                'herbal_id'=>9,
                'penyakit_id'=>7,
                'nama_resep'=>'Ramuan Herbal Hipertensi',
                'gambar'=>'ramuan hipertensi.png',
                'alat_bahan'=>'Bawang Putih, Air Hangat',
                'cara_pembuatan'=>"Siapkan 2 siung bawang putih segar.\nKupas kulit bawang putih hingga bersih.\nCuci bawang putih menggunakan air bersih.\nTumbuk bawang putih menggunakan ulekan hingga halus.\nMasukkan bawang putih ke dalam gelas.\nTuangkan air hangat sekitar 200 ml.\nAduk hingga tercampur rata.\nDiamkan selama 5 menit sebelum diminum.",
                'cara_penggunaan'=>"Minum ramuan 1 kali sehari pada pagi hari sebelum makan.\nKonsumsi secara rutin setiap hari.\nRamuan bawang putih membantu melancarkan aliran darah dan membantu menjaga tekanan darah tetap stabil."
            ],

            [
                'id'=>8,
                'herbal_id'=>2,
                'penyakit_id'=>8,

                'nama_resep'=>'Ramuan Temulawak untuk Sakit Kuning',
                'gambar'=>'ramuan sakit kuning.png',

                'alat_bahan'=>'Temulawak, Air, Madu',

                'cara_pembuatan'=>"Cuci bersih rimpang temulawak menggunakan air mengalir.\nKupas kulit temulawak hingga bersih.\nIris temulawak tipis-tipis agar sari temulawak mudah keluar saat direbus.\nMasukkan irisan temulawak ke dalam panci.\nTambahkan air sebanyak 600 ml ke dalam panci.\nRebus temulawak dengan api sedang hingga air tersisa sekitar 300 ml.\nSetelah matang, angkat rebusan dari kompor.\nSaring air rebusan ke dalam gelas.\nBiarkan hingga agak hangat.\nTambahkan madu jika ingin rasa ramuan lebih enak.",

                'cara_penggunaan'=>"Minum ramuan temulawak dalam keadaan hangat.\nKonsumsi sebanyak 2 kali sehari, yaitu pagi dan sore.\nMinum secara rutin selama beberapa hari untuk membantu menjaga fungsi hati.\nRamuan ini digunakan sebagai pendamping dan bukan pengganti pemeriksaan atau pengobatan medis."
            ],

            [
                'id'=>9,
                'herbal_id'=>16,
                'penyakit_id'=>9,

                'nama_resep'=>'Ramuan Kunyit untuk Maag',
                'gambar'=>'ramuan maag.png',

                'alat_bahan'=>'Kunyit, Air, Madu',

                'cara_pembuatan'=>"Pilih kunyit yang segar, berwarna cerah, dan tidak busuk.\nKupas kulit kunyit hingga bersih.\nCuci kunyit menggunakan air mengalir agar kotoran yang menempel hilang.\nParut atau tumbuk kunyit hingga halus agar sari alaminya mudah keluar.\nMasukkan kunyit yang sudah halus ke dalam panci.\nTambahkan 1 gelas air ke dalam panci.\nRebus menggunakan api sedang hingga mendidih.\nLanjutkan merebus selama kurang lebih 10–15 menit.\nSetelah air berubah warna menjadi kekuningan dan aroma kunyit keluar, matikan kompor.\nDiamkan beberapa menit hingga air rebusan menjadi hangat.\nSaring air rebusan untuk memisahkan ampas kunyit.\nTambahkan 1 sendok makan madu, lalu aduk hingga merata.\nRamuan siap diminum dalam keadaan hangat.",

                'cara_penggunaan'=>"Minum ramuan kunyit dalam keadaan hangat.\nKonsumsi 1 kali sehari, sebaiknya setelah makan agar lebih nyaman di lambung.\nMinum secara rutin selama keluhan maag masih terasa.\nHindari makanan pedas, asam, berminyak, kopi, dan minuman berkafein agar maag tidak mudah kambuh.\nRamuan ini digunakan sebagai pendamping dan bukan pengganti pengobatan medis."
            ],

            [
                'id'=>10,
                'herbal_id'=>17,
                'penyakit_id'=>10,

                'nama_resep'=>'Ramuan Herbal untuk Kesehatan Jantung',
                'gambar'=>'ramuan jantung.png',

                'alat_bahan'=>'Bawang Putih, Teh Hijau, Kunyit, Air',

                'cara_pembuatan'=>"Kupas bawang putih hingga bersih lalu memarkan atau haluskan agar sari alaminya mudah keluar.\nCuci kunyit menggunakan air bersih hingga tidak ada kotoran yang menempel.\nIris tipis atau parut kunyit agar sari kunyit mudah larut saat direbus.\nDidihkan 1 gelas air di dalam panci kecil.\nMasukkan bawang putih dan kunyit ke dalam air mendidih.\nRebus menggunakan api sedang selama kurang lebih 10 hingga 15 menit.\nSetelah proses perebusan selesai, matikan api.\nMasukkan teh hijau ke dalam air rebusan yang masih panas.\nDiamkan selama sekitar 5 menit agar teh hijau terseduh dengan sempurna.\nSaring air rebusan untuk memisahkan ampas bawang putih, kunyit, dan teh hijau.\nBiarkan ramuan hingga hangat sebelum diminum.",

                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat sebanyak 1 kali sehari.\nRamuan dapat diminum pada pagi atau malam hari.\nKonsumsi secara rutin untuk membantu menjaga kesehatan jantung dan pembuluh darah.\nBawang putih membantu menurunkan tekanan darah dan kadar kolesterol karena mengandung senyawa allicin.\nKunyit mengandung kurkumin yang bersifat antiinflamasi dan membantu menjaga kesehatan pembuluh darah.\nTeh hijau mengandung antioksidan katekin yang membantu melindungi jantung dari kerusakan akibat radikal bebas.\nRamuan ini digunakan sebagai pendamping dan bukan pengganti pengobatan medis."
            ],

            [
                'id'=>11,
                'herbal_id'=>19,
                'penyakit_id'=>11,
                'nama_resep'=>'Ramuan Daun Jambu Biji untuk Diare',
                'gambar'=>'ramuan diare.png',
                'alat_bahan'=>'Daun Jambu Biji, Air, Panci, Gelas, Saringan',
                'cara_pembuatan'=>"Pilih 7 lembar daun jambu biji yang masih muda dan segar.\nCuci daun menggunakan air mengalir hingga bersih.\nMasukkan daun jambu biji ke dalam panci.\nTambahkan 2 gelas air bersih.\nRebus dengan api sedang selama kurang lebih 15 menit hingga air tersisa sekitar 1 gelas.\nMatikan api lalu diamkan hingga sedikit hangat.\nSaring air rebusan ke dalam gelas.\nRamuan siap diminum.",
                'cara_penggunaan'=>"Minum air rebusan daun jambu biji sebanyak 2 kali sehari pagi dan sore.\nMinum dalam keadaan hangat agar lebih nyaman di perut.\nKonsumsi sampai gejala diare berkurang.\nJika diare berat atau disertai darah, segera periksa ke dokter."
                ],

            [
                'id'=>12,
                'herbal_id'=>1,
                'penyakit_id'=>12,
                'nama_resep'=>'Ramuan Jahe Serai untuk Flu',
                'gambar'=>'ramuan flu.png',
                'alat_bahan'=>'Jahe, Serai, Madu, Air, Panci, Gelas, Saringan',
                'cara_pembuatan'=>"Cuci jahe dan serai hingga bersih.\nMemarkan jahe dan serai agar sari herbal mudah keluar.\nMasukkan jahe dan serai ke dalam panci.\nTambahkan 600 ml air.\nRebus selama 10–15 menit hingga aroma herbal keluar.\nSaring air rebusan ke dalam gelas.\nTambahkan madu lalu aduk hingga merata.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi 1–2 kali sehari saat gejala flu terasa.\nGunakan sebagai pendamping istirahat cukup dan konsumsi makanan bergizi."
            ],

            [
                'id'=>13,
                'herbal_id'=>1,
                'penyakit_id'=>13,
                'nama_resep'=>'Ramuan Jahe Jeruk Nipis untuk Batuk',
                'gambar'=>'ramuan batuk.png',
                'alat_bahan'=>'Jahe, Jeruk Nipis, Madu, Air, Panci, Gelas, Sendok, Saringan',
                'cara_pembuatan'=>"Cuci jahe hingga bersih lalu memarkan menggunakan ulekan.\nMasukkan jahe ke dalam panci kecil.\nTambahkan 1 gelas air.\nRebus selama sekitar 10 menit hingga aroma jahe keluar.\nSaring air rebusan ke dalam gelas.\nPeras jeruk nipis lalu campurkan ke dalam air jahe.\nTambahkan madu dan aduk sampai rata.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi 2 kali sehari, pagi dan malam.\nMinum secara rutin sampai gejala batuk berkurang."
            ],

            [
                'id'=>14,
                'herbal_id'=>15,
                'penyakit_id'=>14,
                'nama_resep'=>'Ramuan Daun Salam Jahe untuk Asam Urat',
                'gambar'=>'ramuan asam urat.png',
                'alat_bahan'=>'Daun Salam, Jahe, Serai, Madu, Air, Panci, Gelas, Saringan',
                'cara_pembuatan'=>"Cuci daun salam, jahe, dan serai hingga bersih.\nMemarkan jahe dan serai.\nMasukkan daun salam, jahe, dan serai ke dalam panci.\nTambahkan 600 ml air.\nRebus selama 15–20 menit hingga air berubah warna dan aroma herbal keluar.\nSaring air rebusan ke dalam gelas.\nTambahkan madu jika ingin rasa lebih enak.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi 1–2 kali sehari.\nHindari makanan tinggi purin seperti jeroan, seafood berlebihan, dan daging merah berlebihan."
            ],

            [
                'id'=>15,
                'herbal_id'=>18,
                'penyakit_id'=>15,
                'nama_resep'=>'Ramuan Serai Jahe untuk Masuk Angin',
                'gambar'=>'ramuan masuk angin.png',
                'alat_bahan'=>'Serai, Jahe, Madu, Air, Panci, Gelas, Sendok, Saringan',
                'cara_pembuatan'=>"Cuci serai dan jahe hingga bersih.\nMemarkan serai dan jahe agar sari herbal mudah keluar.\nMasukkan serai dan jahe ke dalam panci.\nTambahkan 2 gelas air.\nRebus selama 10–15 menit hingga air tersisa sekitar 1 gelas.\nSaring air rebusan ke dalam gelas.\nTambahkan madu lalu aduk hingga merata.",
                'cara_penggunaan'=>"Minum ramuan dalam keadaan hangat.\nKonsumsi 1–2 kali sehari, misalnya pagi dan malam.\nMinum secara rutin selama gejala masih dirasakan."
            ],

            [
                'id'=>16,
                'herbal_id'=>20,
                'penyakit_id'=>16,
                'nama_resep'=>'Ramuan Chamomile untuk Insomnia',
                'gambar'=>'ramuan insomnia.png',
                'alat_bahan'=>'Bunga Chamomile, Air Panas, Madu, Gelas, Sendok, Saringan',
                'cara_pembuatan'=>"Masukkan 1 sendok makan bunga chamomile kering ke dalam gelas.\nTuangkan 1 gelas air panas sekitar 200 ml.\nTutup gelas dan diamkan selama 5–10 menit agar sari chamomile keluar.\nSaring air seduhan jika diperlukan.\nTambahkan madu lalu aduk hingga rata.",
                'cara_penggunaan'=>"Minum ramuan 30–60 menit sebelum tidur.\nKonsumsi 1 kali sehari pada malam hari.\nHindari penggunaan gadget dan kafein sebelum tidur agar hasil lebih baik."
                ],

            [
                'id'=>17,
                'herbal_id'=>14,
                'penyakit_id'=>17,
                'nama_resep'=>'Ramuan Madu Minyak Kelapa untuk Sariawan',
                'gambar'=>'ramuan sariawan.png',
                'alat_bahan'=>'Madu, Minyak Kelapa, Wadah Bersih, Sendok',
                'cara_pembuatan'=>"Siapkan madu dan minyak kelapa dalam wadah bersih.\nCampurkan 1 sendok teh madu dengan beberapa tetes minyak kelapa.\nAduk hingga kedua bahan tercampur merata.\nRamuan siap digunakan.",
                'cara_penggunaan'=>"Oleskan ramuan pada bagian sariawan sebanyak 2 kali sehari.\nGunakan setelah mulut dibersihkan.\nHindari makanan pedas dan asam selama sariawan masih terasa."
            ],
        ]);

        // =========================
        // 5. RELASI RESEP_BAHAN
        // Hanya sampai resep_id 6 karena resep yang dibuat hanya 6.
        // =========================
        DB::table('resep_bahan')->insert([
            ['resep_id'=>1,'bahan_id'=>2,'jumlah'=>'150 gram'],
            ['resep_id'=>1,'bahan_id'=>3,'jumlah'=>'100 gram'],
            ['resep_id'=>1,'bahan_id'=>5,'jumlah'=>'50 gram'],
            ['resep_id'=>1,'bahan_id'=>4,'jumlah'=>'30 gram'],
            ['resep_id'=>1,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>1,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>1,'bahan_id'=>26,'jumlah'=>'1 buah'],
            ['resep_id'=>1,'bahan_id'=>27,'jumlah'=>'1 buah'],

            ['resep_id'=>2,'bahan_id'=>6,'jumlah'=>'40 gram'],
            ['resep_id'=>2,'bahan_id'=>7,'jumlah'=>'35 gram'],
            ['resep_id'=>2,'bahan_id'=>8,'jumlah'=>'10 gram'],
            ['resep_id'=>2,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>2,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>2,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>3,'bahan_id'=>9,'jumlah'=>'50 gram'],
            ['resep_id'=>3,'bahan_id'=>10,'jumlah'=>'10 gram'],
            ['resep_id'=>3,'bahan_id'=>11,'jumlah'=>'15 gram'],
            ['resep_id'=>3,'bahan_id'=>12,'jumlah'=>'20 gram'],
            ['resep_id'=>3,'bahan_id'=>13,'jumlah'=>'40 gram'],
            ['resep_id'=>3,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>3,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>3,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>4,'bahan_id'=>14,'jumlah'=>'30 gram'],
            ['resep_id'=>4,'bahan_id'=>1,'jumlah'=>'40 gram'],
            ['resep_id'=>4,'bahan_id'=>15,'jumlah'=>'15 gram'],
            ['resep_id'=>4,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>4,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>4,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>5,'bahan_id'=>1,'jumlah'=>'35 gram'],
            ['resep_id'=>5,'bahan_id'=>15,'jumlah'=>'12 gram'],
            ['resep_id'=>5,'bahan_id'=>16,'jumlah'=>'10 gram'],
            ['resep_id'=>5,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>5,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>5,'bahan_id'=>25,'jumlah'=>'1 buah'],

            ['resep_id'=>6,'bahan_id'=>17,'jumlah'=>'25 gram'],
            ['resep_id'=>6,'bahan_id'=>18,'jumlah'=>'40 gram'],
            ['resep_id'=>6,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>6,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>6,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>7,'bahan_id'=>15,'jumlah'=>'10 gram'],
            ['resep_id'=>7,'bahan_id'=>29,'jumlah'=>'200 ml'],
            ['resep_id'=>7,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>7,'bahan_id'=>28,'jumlah'=>'1 buah'],

            ['resep_id'=>8,'bahan_id'=>2,'jumlah'=>'150 gram'],
            ['resep_id'=>8,'bahan_id'=>21,'jumlah'=>'600 ml'],
            ['resep_id'=>8,'bahan_id'=>20,'jumlah'=>'15 ml'],
            ['resep_id'=>8,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>8,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>8,'bahan_id'=>26,'jumlah'=>'1 buah'],
            ['resep_id'=>8,'bahan_id'=>27,'jumlah'=>'1 buah'],

            ['resep_id'=>9,'bahan_id'=>30,'jumlah'=>'20 gram'],
            ['resep_id'=>9,'bahan_id'=>21,'jumlah'=>'200 ml'],
            ['resep_id'=>9,'bahan_id'=>20,'jumlah'=>'15 ml'],
            ['resep_id'=>9,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>9,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>9,'bahan_id'=>25,'jumlah'=>'1 buah'],
            ['resep_id'=>9,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>10,'bahan_id'=>15,'jumlah'=>'5 gram'],
            ['resep_id'=>10,'bahan_id'=>31,'jumlah'=>'1 kantong'],
            ['resep_id'=>10,'bahan_id'=>30,'jumlah'=>'20 gram'],
            ['resep_id'=>10,'bahan_id'=>21,'jumlah'=>'200 ml'],
            ['resep_id'=>10,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>10,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>10,'bahan_id'=>25,'jumlah'=>'1 buah'],
            ['resep_id'=>10,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>11,'bahan_id'=>32,'jumlah'=>'7 lembar'],
            ['resep_id'=>11,'bahan_id'=>21,'jumlah'=>'2 gelas'],
            ['resep_id'=>11,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>11,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>11,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>12,'bahan_id'=>1,'jumlah'=>'2 cm'],
            ['resep_id'=>12,'bahan_id'=>22,'jumlah'=>'1 batang'],
            ['resep_id'=>12,'bahan_id'=>20,'jumlah'=>'1 sendok makan'],
            ['resep_id'=>12,'bahan_id'=>21,'jumlah'=>'600 ml'],
            ['resep_id'=>12,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>12,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>12,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>13,'bahan_id'=>1,'jumlah'=>'2 cm'],
            ['resep_id'=>13,'bahan_id'=>19,'jumlah'=>'1 buah'],
            ['resep_id'=>13,'bahan_id'=>20,'jumlah'=>'1 sendok makan'],
            ['resep_id'=>13,'bahan_id'=>21,'jumlah'=>'1 gelas'],
            ['resep_id'=>13,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>13,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>13,'bahan_id'=>25,'jumlah'=>'1 buah'],
            ['resep_id'=>13,'bahan_id'=>26,'jumlah'=>'1 buah'],
            ['resep_id'=>13,'bahan_id'=>28,'jumlah'=>'1 buah'],

            ['resep_id'=>14,'bahan_id'=>8,'jumlah'=>'5 lembar'],
            ['resep_id'=>14,'bahan_id'=>1,'jumlah'=>'2 ruas'],
            ['resep_id'=>14,'bahan_id'=>22,'jumlah'=>'1 batang'],
            ['resep_id'=>14,'bahan_id'=>20,'jumlah'=>'1 sendok makan'],
            ['resep_id'=>14,'bahan_id'=>21,'jumlah'=>'600 ml'],
            ['resep_id'=>14,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>14,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>14,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>15,'bahan_id'=>22,'jumlah'=>'2 batang'],
            ['resep_id'=>15,'bahan_id'=>1,'jumlah'=>'2 cm'],
            ['resep_id'=>15,'bahan_id'=>21,'jumlah'=>'2 gelas'],
            ['resep_id'=>15,'bahan_id'=>20,'jumlah'=>'1 sendok makan'],
            ['resep_id'=>15,'bahan_id'=>23,'jumlah'=>'1 buah'],
            ['resep_id'=>15,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>15,'bahan_id'=>25,'jumlah'=>'1 buah'],
            ['resep_id'=>15,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>16,'bahan_id'=>33,'jumlah'=>'1 sendok makan'],
            ['resep_id'=>16,'bahan_id'=>29,'jumlah'=>'200 ml'],
            ['resep_id'=>16,'bahan_id'=>20,'jumlah'=>'1 sendok teh'],
            ['resep_id'=>16,'bahan_id'=>24,'jumlah'=>'1 buah'],
            ['resep_id'=>16,'bahan_id'=>25,'jumlah'=>'1 buah'],
            ['resep_id'=>16,'bahan_id'=>26,'jumlah'=>'1 buah'],

            ['resep_id'=>17,'bahan_id'=>20,'jumlah'=>'1 sendok teh'],
            ['resep_id'=>17,'bahan_id'=>34,'jumlah'=>'beberapa tetes'],
            ['resep_id'=>17,'bahan_id'=>35,'jumlah'=>'1 buah'],
            ['resep_id'=>17,'bahan_id'=>25,'jumlah'=>'1 buah'],
        ]);
    }
}
