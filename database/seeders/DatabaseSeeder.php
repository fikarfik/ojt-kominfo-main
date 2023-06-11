<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         User::create([
            'name' => 'Kecamatan Belimbing',
            'username' => 'belimbing',
            'email' => 'kecamtan.belimbing@admin.com',
            'password' => bcrypt('kelurahan.jodipan')
        ]);

         User::create([
            'name' => 'Kelurahan Arjosari',
            'username' => 'arjosari',
            'email' => 'kelurahan.arjosari@admin.com',
            'password' => bcrypt('kelurahan.arjosari')
        ]);

         User::create([
            'name' => 'Kelurahan Balearjosari',
            'username' => 'balearjosari',
            'email' => 'kelurahan.balearjosari@admin.com',
            'password' => bcrypt('kelurahan.balearjosari')
        ]);

         User::create([
            'name' => 'Kelurahan Belimbing',
            'username' => 'belimbing',
            'email' => 'kelurahan.belimbing@admin.com',
            'password' => bcrypt('kelurahan.belimbing')
        ]);

         User::create([
            'name' => 'Kelurahan Bunulrejo',
            'username' => 'bunulrejo',
            'email' => 'kelurahan.bunulrejo@admin.com',
            'password' => bcrypt('kelurahan.bunulrejo')
        ]);

         User::create([
            'name' => 'Kelurahan Jodipan',
            'username' => 'jodipan',
            'email' => 'kelurahan.jodipan@admin.com',
            'password' => bcrypt('kelurahan.jodipan')
        ]);

         User::create([
            'name' => 'Kelurahan Kesatrian',
            'username' => 'kesatrian',
            'email' => 'kelurahan.kesatrian@admin.com',
            'password' => bcrypt('kelurahan.kesatrian')
        ]);

         User::create([
            'name' => 'Kelurahan Pandanwangi',
            'username' => 'pandanwangi',
            'email' => 'kelurahan.pandanwangi@admin.com',
            'password' => bcrypt('kelurahan.pandanwangi')
        ]);

         User::create([
            'name' => 'Kelurahan Polehan',
            'username' => 'polehan',
            'email' => 'kelurahan.polehan@admin.com',
            'password' => bcrypt('kelurahan.polehan')
        ]);

         User::create([
            'name' => 'Kelurahan Polowijen',
            'username' => 'polowijen',
            'email' => 'kelurahan.polowijen@admin.com',
            'password' => bcrypt('kelurahan.polowijen')
        ]);

         User::create([
            'name' => 'Kelurahan Purwantoro',
            'username' => 'purwantoro',
            'email' => 'kelurahan.purwantoro@admin.com',
            'password' => bcrypt('kelurahan.purwantoro')
        ]);

         User::create([
            'name' => 'Kelurahan Purwodadi',
            'username' => 'purwodadi',
            'email' => 'kelurahan.purwodadi@admin.com',
            'password' => bcrypt('kelurahan.purwodadi')
        ]);

         User::create([
            'name' => 'Kecamatan Kedungkandang',
            'username' => 'kedungkandang',
            'email' => 'kecamatan.kedungkandang@admin.com',
            'password' => bcrypt('kecamatan.kedungkandang')
        ]);

         User::create([
            'name' => 'Kelurahan Arjowinangun',
            'username' => 'arjowinangun',
            'email' => 'kelurahan.arjowinangun@admin.com',
            'password' => bcrypt('kelurahan.arjowinangun')
        ]);

         User::create([
            'name' => 'Kelurahan Bumiayu',
            'username' => 'bumiayu',
            'email' => 'kelurahan.bumiayu@admin.com',
            'password' => bcrypt('kelurahan.bumiayu')
        ]);

         User::create([
            'name' => 'Kelurahan Buring',
            'username' => 'buring',
            'email' => 'kelurahan.buring@admin.com',
            'password' => bcrypt('kelurahan.buring')
        ]);

         User::create([
            'name' => 'Kelurahan Cemorokandang',
            'username' => 'cemorokandang',
            'email' => 'kelurahan.cemorokandang@admin.com',
            'password' => bcrypt('kelurahan.cemorokandang')
        ]);

         User::create([
            'name' => 'Kelurahan Kedungkandang',
            'username' => 'kedungkandang',
            'email' => 'kelurahan.kedungkandang@admin.com',
            'password' => bcrypt('kelurahan.kedungkandang')
        ]);

         User::create([
            'name' => 'Kelurahan Kotalama',
            'username' => 'kotalama',
            'email' => 'kelurahan.kotalama@admin.com',
            'password' => bcrypt('kelurahan.kotalama')
        ]);

         User::create([
            'name' => 'Kelurahan Lesanpuro',
            'username' => 'lesanpuro',
            'email' => 'kelurahan.lesanpuro@admin.com',
            'password' => bcrypt('kelurahan.lesanpuro')
        ]);

         User::create([
            'name' => 'Kelurahan Madyopuro',
            'username' => 'madyopuro',
            'email' => 'kelurahan.madyopuro@admin.com',
            'password' => bcrypt('kelurahan.madyopuro')
        ]);

         User::create([
            'name' => 'Kelurahan Mergosono',
            'username' => 'mergosono',
            'email' => 'kelurahan.mergosono@admin.com',
            'password' => bcrypt('kelurahan.mergosono')
        ]);

         User::create([
            'name' => 'Kelurahan Sawojajar',
            'username' => 'sawojajar',
            'email' => 'kelurahan.sawojajar@admin.com',
            'password' => bcrypt('kelurahan.sawojajar')
        ]);

         User::create([
            'name' => 'Kelurahan Tlogowaru',
            'username' => 'tlogowaru',
            'email' => 'kelurahan.tlogowaru@admin.com',
            'password' => bcrypt('kelurahan.tlogowaru')
        ]);

         User::create([
            'name' => 'Kelurahan Wonokoyo',
            'username' => 'wonokoyo',
            'email' => 'kelurahan.wonokoyo@admin.com',
            'password' => bcrypt('kelurahan.wonokoyo')
        ]);

         User::create([
            'name' => 'Kecamatan Klojen',
            'username' => 'klojen',
            'email' => 'kecamatan.klojen@admin.com',
            'password' => bcrypt('kecamatan.klojen')
        ]);

         User::create([
            'name' => 'Kelurahan Bareng',
            'username' => 'bareng',
            'email' => 'kelurahan.bareng@admin.com',
            'password' => bcrypt('kelurahan.bareng')
        ]);

         User::create([
            'name' => 'Kelurahan Gadingsari',
            'username' => 'gadingsari',
            'email' => 'kelurahan.gadingsari@admin.com',
            'password' => bcrypt('kelurahan.gadingsari')
        ]);

         User::create([
            'name' => 'Kelurahan Kasin Kauman',
            'username' => 'kasin kauman',
            'email' => 'kelurahan.kasin kauman@admin.com',
            'password' => bcrypt('kelurahan.kasin kauman')
        ]);

         User::create([
            'name' => 'Kelurahan Kiduldalem',
            'username' => 'kiduldalem',
            'email' => 'kelurahan.kiduldalem@admin.com',
            'password' => bcrypt('kelurahan.kiduldalem')
        ]);

         User::create([
            'name' => 'Kelurahan Klojen',
            'username' => 'klojen',
            'email' => 'kelurahan.klojen@admin.com',
            'password' => bcrypt('kelurahan.klojen')
        ]);

         User::create([
            'name' => 'Kelurahan Oro-Oro Dowo',
            'username' => 'oro-oro dowo',
            'email' => 'kelurahan.oro-orodowo@admin.com',
            'password' => bcrypt('kelurahan.oro-orodowo')
        ]);

         User::create([
            'name' => 'Kelurahan Penanggungan',
            'username' => 'penanggungan',
            'email' => 'kelurahan.penanggungan@admin.com',
            'password' => bcrypt('kelurahan.penanggungan')
        ]);

         User::create([
            'name' => 'Kelurahan Rampal Celaket',
            'username' => 'rampal celaket',
            'email' => 'kelurahan.rampalcelaket@admin.com',
            'password' => bcrypt('kelurahan.rampalcelaket')
        ]);

         User::create([
            'name' => 'Kelurahan Samaan',
            'username' => 'samaan',
            'email' => 'kelurahan.samaan@admin.com',
            'password' => bcrypt('kelurahan.samaan')
        ]);

         User::create([
            'name' => 'Kelurahan Sukoharjo',
            'username' => 'sukoharjo',
            'email' => 'kelurahan.sukoharjo@admin.com',
            'password' => bcrypt('kelurahan.sukoharjo')
        ]);

         User::create([
            'name' => 'Kelcamatan Lowokwaru',
            'username' => 'lowokwaru',
            'email' => 'kecamatan.lowokwaru@admin.com',
            'password' => bcrypt('kecamatan.lowokwaru')
        ]);

         User::create([
            'name' => 'Kelurahan Dinoyo',
            'username' => 'Dinoyo',
            'email' => 'kelurahan.dinoyo@admin.com',
            'password' => bcrypt('kelurahan.dinoyo')
        ]);


         User::create([
            'name' => 'Kelurahan Jatimulyo',
            'username' => 'jatimulyo',
            'email' => 'kelurahan.jatimulyo@admin.com',
            'password' => bcrypt('kelurahan.jatimulyo')
        ]);

         User::create([
            'name' => 'Kelurahan Ketawanggede ',
            'username' => 'ketawanggede',
            'email' => 'kelurahan.ketawanggede@admin.com',
            'password' => bcrypt('kelurahan.ketawanggede')
        ]);

         User::create([
            'name' => 'Kelurahan Lowokwaru',
            'username' => 'lowokwaru',
            'email' => 'kelurahan.lowokwaru@admin.com',
            'password' => bcrypt('kelurahan.lowokwaru')
        ]);

         User::create([
            'name' => 'Kelurahan Merjosari',
            'username' => 'merjosari',
            'email' => 'kelurahan.merjosari@admin.com',
            'password' => bcrypt('kelurahan.merjosari')
        ]);

         User::create([
            'name' => 'Kelurahan Mojolangu',
            'username' => 'mojolangu',
            'email' => 'kelurahan.mojolangu@admin.com',
            'password' => bcrypt('kelurahan.mojolangu')
        ]);

         User::create([
            'name' => 'Kelurahan Sumbersari',
            'username' => 'sumbersari',
            'email' => 'kelurahan.sumbersari@admin.com',
            'password' => bcrypt('kelurahan.sumbersari')
        ]);

         User::create([
            'name' => 'Kelurahan Tasikmadu',
            'username' => 'tasikmadu',
            'email' => 'kelurahan.tasikmadu@admin.com',
            'password' => bcrypt('kelurahan.tasikmadu')
        ]);

         User::create([
            'name' => 'Kelurahan Tlogomas',
            'username' => 'tlogomas',
            'email' => 'kelurahan.tlogomas@admin.com',
            'password' => bcrypt('kelurahan.tlogomas')
        ]);

         User::create([
            'name' => 'Kelurahan Tulusrejo',
            'username' => 'tulusrejo',
            'email' => 'kelurahan.tulusrejo@admin.com',
            'password' => bcrypt('kelurahan.tulusrejo')
        ]);

         User::create([
            'name' => 'Kelurahan Tunggulwulung',
            'username' => 'Tunggulwulung',
            'email' => 'kelurahan.tunggulwulung@admin.com',
            'password' => bcrypt('kelurahan.tunggulwulung')
        ]);

         User::create([
            'name' => 'Kelurahan Tunjungsekar',
            'username' => 'tunjungsekar',
            'email' => 'kelurahan.tunjungsekar@admin.com',
            'password' => bcrypt('kelurahan.tunjungsekar')
        ]);

         User::create([
            'name' => 'Kecamatan Sukun',
            'username' => 'sukun',
            'email' => 'kecamatan.sukun@admin.com',
            'password' => bcrypt('kecamatan.sukun')
        ]);

         User::create([
            'name' => 'Kelurahan Bakalankrajan',
            'username' => 'bakalankrajan',
            'email' => 'kelurahan.bakalankrajan@admin.com',
            'password' => bcrypt('kelurahan.bakalankrajan')
        ]);

         User::create([
            'name' => 'Kelurahan Bandulan',
            'username' => 'bandulan',
            'email' => 'kelurahan.bandulan@admin.com',
            'password' => bcrypt('kelurahan.bandulan')
        ]);

         User::create([
            'name' => 'Kelurahan Bandungrejosari',
            'username' => 'bandungrejosari',
            'email' => 'kelurahan.bandungrejosari@admin.com',
            'password' => bcrypt('kelurahan.bandungrejosari')
        ]);

         User::create([
            'name' => 'Kelurahan Ciptomulyo',
            'username' => 'ciptumulyo',
            'email' => 'kelurahan.ciptomulyo@admin.com',
            'password' => bcrypt('kelurahan.ciptomulyo')
        ]);

        User::create([
            'name' => 'Kelurahan Gadang',
            'username' => 'gadang',
            'email' => 'kelurahan.gadang@admin.com',
            'password' => bcrypt('kelurahan.gadang')
        ]);

         User::create([
            'name' => 'Kelurahan Karangbesuki',
            'username' => 'karangbesuki',
            'email' => 'kelurahan.karangbesuki@admin.com',
            'password' => bcrypt('kelurahan.karangbesuki')
        ]);

         User::create([
            'name' => 'Kelurahan Kebonsari',
            'username' => 'kebonsari',
            'email' => 'kelurahan.kebonsari@admin.com',
            'password' => bcrypt('kelurahan.kebonsari')
        ]);

         User::create([
            'name' => 'Kelurahan Mulyorejo',
            'username' => 'mulyorejo',
            'email' => 'kelurahan.mulyorejo@admin.com',
            'password' => bcrypt('kelurahan.mulyorejo')
        ]);

         User::create([
            'name' => 'Kelurahan Pisangsandi',
            'username' => 'pisangsandi',
            'email' => 'kelurahan.pisangsandi@admin.com',
            'password' => bcrypt('kelurahan.pisangsandi')
        ]);

         User::create([
            'name' => 'Kelurahan Sukun',
            'username' => 'sukun',
            'email' => 'kelurahan.sukun@admin.com',
            'password' => bcrypt('kelurahan.sukun')
        ]);

         User::create([
            'name' => 'Kelurahan Tanjungrejo',
            'username' => 'tanjungrejo',
            'email' => 'kelurahan.tanjungrejo@admin.com',
            'password' => bcrypt('kelurahan.tanjungrejo')
        ]);

        User::create([
            'name' => 'Nichola',
            'username' => 'nichola',
            'email' => 'kerjasamakol@gmail.com',
            'password' => bcrypt('12345')
        ]);



        // User::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nichola Saputra',
        //     'email' => 'kerjasamakol@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Faradita',
        //     'email' => 'faradita@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        Category::create([
            'nameFromTableCategory' => 'Programming',
            'slugFromTableCategory' => 'programming'
        ]);

        Category::create([
            'nameFromTableCategory' => 'Web Design',
            'slugFromTableCategory' => 'web-design'
        ]);

        Category::create([
            'nameFromTableCategory' => 'Personal',
            'slugFromTableCategory' => 'personal'
        ]);

        // Profile::create([
        //     'cek' => 'kjdsfkjd',
        //     'user_id' => 1
        // ]);

        // User::factory(5)->create();

        // Post::factory(20)->create();

        // Post::create([
        //     'titleFromTablePost' => 'Judul Artikel Pertama',
        //     'category_id'=> 1,
        //     'user_id' => 1,
        //     'slugFromTablePost' => 'judul-artikel-pertama',
        //     'excerptFromTablePost' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta culpa voluptatum reiciendis accusantium, placeat cumque accusamus libero ipsum, dolorum est incidunt labore consectetur. Sit totam numquam, perferendis adipisci nisi non harum provident quis assumenda sequi dolorem culpa reiciendis! Autem dicta eveniet eaque placeat ipsa cumque dolorem nam omnis magni, quam, possimus aperiam perspiciatis, id cupiditate facilis ipsam dolores sit minima. Natus consectetur, magni assumenda ad distinctio provident quisquam similique sed ex repellat velit, quae magnam, at quam quas? Aliquam ipsam officia culpa a modi nam maiores officiis animi dolore neque? Asperiores nemo placeat voluptate voluptatum nisi beatae blanditiis molestias?',
        //     'bodyFromTablePost' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repudiandae nesciunt velit cum doloremque accusamus consequatur aspernatur quaerat fugiat. Corporis, cum ea libero facere quisquam eius fuga dicta sit consequuntur nostrum ipsa numquam repellendus, iure molestiae! Quasi expedita ipsum maxime assumenda, exercitationem eligendi odio perferendis similique sed nam atque temporibus minus delectus nisi, facere deserunt iste illum cum quidem doloribus. Odit, expedita veniam rem a, numquam provident voluptas consequatur laboriosam rerum fuga minus ducimus, iusto voluptate! Voluptate eveniet molestias cupiditate saepe eos animi sapiente similique numquam libero perspiciatis quisquam ipsum odio magni ea sunt voluptatum soluta sed consequuntur cum delectus, quidem voluptatibus qui! Dolorem debitis ad minus quae! Illum iste consectetur vero laudantium adipisci eaque neque nostrum, qui dicta praesentium perspiciatis distinctio voluptatum odit provident. Neque tenetur dicta in accusamus eos nam adipisci. Cumque, quaerat nam! Sequi, dicta corporis rem unde, itaque ex laborum doloribus accusamus neque eum perferendis. Omnis ipsam provident rerum veniam, saepe natus at dolore quia asperiores obcaecati nam labore aliquam ratione molestiae error tenetur dignissimos vero maiores? Corporis aspernatur asperiores ipsum maxime veritatis praesentium, delectus et quisquam sequi ipsam neque dignissimos vitae laboriosam repudiandae? Amet, odit doloremque debitis dolorem repudiandae autem labore quae itaque repellat quasi. Maxime magni officia quaerat facilis suscipit ex, minima provident animi doloremque voluptatum, consequatur illum. Dolor, soluta esse maxime rem delectus beatae id. Atque quae autem temporibus quos! Repudiandae autem magnam atque voluptas nesciunt. Culpa dolorem alias quaerat? Reprehenderit atque neque quam eveniet magnam amet, sequi perferendis? Eum sequi temporibus sunt vel labore, maxime, iusto commodi dignissimos repudiandae quo eos fugiat! Sit veniam, ullam labore modi molestiae corporis saepe mollitia temporibus rerum tempore eius quidem beatae corrupti itaque. Placeat quis tenetur voluptas corporis consectetur, facere culpa aliquam eos atque non et consequuntur adipisci iure! Quam corrupti cum dolores totam, odit doloribus.'
        // ]);

        // Profile::create([
        //     'namaFromTableProfile' => "PKK Suka Maju",
        //     'user_id' => 1,
        //     'alamatFromTableProfile' => "pkk",
        //     'emailFromTableProfile' => 'pkk@gmail.com',
        //     'teleponFromTableProfile' => '0851567123',
        //     'aboutFromTableProfile' => 'fefefefe',
        //     'bodyFromTableProfile' => 'efef',
        //     'titleVisiMisiFromTableProfile' => 'ewfefssfd',
        //     'bodyVisiMisiFromTableProfile' => 'sdfidsfds'
        // ]);

        // Profile::create([
        //     'namaFromTableProfile' => "PKK Suka Maju",
        //     'user_id' => 1,
        //     'alamatFromTableProfile' => "pkk",
        //     'emailFromTableProfile' => 'pkk@gmail.com',
        //     'teleponFromTableProfile' => '0851567123',
        //     'aboutFromTableProfile' => 'fefefefe',
        //     'bodyFromTableProfile' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit corrupti veniam repellendus aperiam perferendis hic, saepe dolor eum aspernatur architecto minus praesentium quod non beatae iure deleniti harum vel quam est! Voluptates ea, recusandae eveniet sed ad aliquid doloribus? Voluptate distinctio optio quae sapiente. Quos, voluptatem nostrum! Expedita reiciendis ipsum aliquam officia eveniet ratione officiis architecto, qui asperiores voluptas dicta et cum id aspernatur odio dolorum quod inventore animi voluptatem. Perspiciatis maxime voluptatem aut corrupti! Vitae, omnis autem porro dolorum mollitia temporibus magnam nobis blanditiis hic illo harum reiciendis pariatur similique nemo debitis ipsam doloribus esse sapiente facilis suscipit?
        //     ',
        //     'titleVisiMisiFromTableProfile' => 'ewfefssfd',
        //     'bodyVisiMisiFromTableProfile' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit corrupti veniam repellendus aperiam perferendis hic, saepe dolor eum aspernatur architecto minus praesentium quod non beatae iure deleniti harum vel quam est! Voluptates ea, recusandae eveniet sed ad aliquid doloribus? Voluptate distinctio optio quae sapiente. Quos, voluptatem nostrum! Expedita reiciendis ipsum aliquam officia eveniet ratione officiis architecto, qui asperiores voluptas dicta et cum id aspernatur odio dolorum quod inventore animi voluptatem. Perspiciatis maxime voluptatem aut corrupti! Vitae, omnis autem porro dolorum mollitia temporibus magnam nobis blanditiis hic illo harum reiciendis pariatur similique nemo debitis ipsam doloribus esse sapiente facilis suscipit?
        //     '
        // ]);



        // Post::create([
        //     'titleFromTablePost' => 'Judul Artikel Kedua',
        //     'category_id'=> 2,
        //     'user_id' => 1,
        //     'slugFromTablePost' => 'judul-artikel-kedua',
        //     'excerptFromTablePost' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta culpa voluptatum reiciendis accusantium, placeat cumque accusamus libero ipsum, dolorum est incidunt labore consectetur. Sit totam numquam, perferendis adipisci nisi non harum provident quis assumenda sequi dolorem culpa reiciendis! Autem dicta eveniet eaque placeat ipsa cumque dolorem nam omnis magni, quam, possimus aperiam perspiciatis, id cupiditate facilis ipsam dolores sit minima. Natus consectetur, magni assumenda ad distinctio provident quisquam similique sed ex repellat velit, quae magnam, at quam quas? Aliquam ipsam officia culpa a modi nam maiores officiis animi dolore neque? Asperiores nemo placeat voluptate voluptatum nisi beatae blanditiis molestias?',
        //     'bodyFromTablePost' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repudiandae nesciunt velit cum doloremque accusamus consequatur aspernatur quaerat fugiat. Corporis, cum ea libero facere quisquam eius fuga dicta sit consequuntur nostrum ipsa numquam repellendus, iure molestiae! Quasi expedita ipsum maxime assumenda, exercitationem eligendi odio perferendis similique sed nam atque temporibus minus delectus nisi, facere deserunt iste illum cum quidem doloribus. Odit, expedita veniam rem a, numquam provident voluptas consequatur laboriosam rerum fuga minus ducimus, iusto voluptate! Voluptate eveniet molestias cupiditate saepe eos animi sapiente similique numquam libero perspiciatis quisquam ipsum odio magni ea sunt voluptatum soluta sed consequuntur cum delectus, quidem voluptatibus qui! Dolorem debitis ad minus quae! Illum iste consectetur vero laudantium adipisci eaque neque nostrum, qui dicta praesentium perspiciatis distinctio voluptatum odit provident. Neque tenetur dicta in accusamus eos nam adipisci. Cumque, quaerat nam! Sequi, dicta corporis rem unde, itaque ex laborum doloribus accusamus neque eum perferendis. Omnis ipsam provident rerum veniam, saepe natus at dolore quia asperiores obcaecati nam labore aliquam ratione molestiae error tenetur dignissimos vero maiores? Corporis aspernatur asperiores ipsum maxime veritatis praesentium, delectus et quisquam sequi ipsam neque dignissimos vitae laboriosam repudiandae? Amet, odit doloremque debitis dolorem repudiandae autem labore quae itaque repellat quasi. Maxime magni officia quaerat facilis suscipit ex, minima provident animi doloremque voluptatum, consequatur illum. Dolor, soluta esse maxime rem delectus beatae id. Atque quae autem temporibus quos! Repudiandae autem magnam atque voluptas nesciunt. Culpa dolorem alias quaerat? Reprehenderit atque neque quam eveniet magnam amet, sequi perferendis? Eum sequi temporibus sunt vel labore, maxime, iusto commodi dignissimos repudiandae quo eos fugiat! Sit veniam, ullam labore modi molestiae corporis saepe mollitia temporibus rerum tempore eius quidem beatae corrupti itaque. Placeat quis tenetur voluptas corporis consectetur, facere culpa aliquam eos atque non et consequuntur adipisci iure! Quam corrupti cum dolores totam, odit doloribus.'
        // ]);

        // Post::create([
        //     'titleFromTablePost' => 'Judul Artikel Ketiga',
        //     'category_id'=> 1,
        //     'user_id' => 2,
        //     'slugFromTablePost' => 'judul-artikel-ketiga',
        //     'excerptFromTablePost' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium dicta culpa voluptatum reiciendis accusantium, placeat cumque accusamus libero ipsum, dolorum est incidunt labore consectetur. Sit totam numquam, perferendis adipisci nisi non harum provident quis assumenda sequi dolorem culpa reiciendis! Autem dicta eveniet eaque placeat ipsa cumque dolorem nam omnis magni, quam, possimus aperiam perspiciatis, id cupiditate facilis ipsam dolores sit minima. Natus consectetur, magni assumenda ad distinctio provident quisquam similique sed ex repellat velit, quae magnam, at quam quas? Aliquam ipsam officia culpa a modi nam maiores officiis animi dolore neque? Asperiores nemo placeat voluptate voluptatum nisi beatae blanditiis molestias?',
        //     'bodyFromTablePost' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repudiandae nesciunt velit cum doloremque accusamus consequatur aspernatur quaerat fugiat. Corporis, cum ea libero facere quisquam eius fuga dicta sit consequuntur nostrum ipsa numquam repellendus, iure molestiae! Quasi expedita ipsum maxime assumenda, exercitationem eligendi odio perferendis similique sed nam atque temporibus minus delectus nisi, facere deserunt iste illum cum quidem doloribus. Odit, expedita veniam rem a, numquam provident voluptas consequatur laboriosam rerum fuga minus ducimus, iusto voluptate! Voluptate eveniet molestias cupiditate saepe eos animi sapiente similique numquam libero perspiciatis quisquam ipsum odio magni ea sunt voluptatum soluta sed consequuntur cum delectus, quidem voluptatibus qui! Dolorem debitis ad minus quae! Illum iste consectetur vero laudantium adipisci eaque neque nostrum, qui dicta praesentium perspiciatis distinctio voluptatum odit provident. Neque tenetur dicta in accusamus eos nam adipisci. Cumque, quaerat nam! Sequi, dicta corporis rem unde, itaque ex laborum doloribus accusamus neque eum perferendis. Omnis ipsam provident rerum veniam, saepe natus at dolore quia asperiores obcaecati nam labore aliquam ratione molestiae error tenetur dignissimos vero maiores? Corporis aspernatur asperiores ipsum maxime veritatis praesentium, delectus et quisquam sequi ipsam neque dignissimos vitae laboriosam repudiandae? Amet, odit doloremque debitis dolorem repudiandae autem labore quae itaque repellat quasi. Maxime magni officia quaerat facilis suscipit ex, minima provident animi doloremque voluptatum, consequatur illum. Dolor, soluta esse maxime rem delectus beatae id. Atque quae autem temporibus quos! Repudiandae autem magnam atque voluptas nesciunt. Culpa dolorem alias quaerat? Reprehenderit atque neque quam eveniet magnam amet, sequi perferendis? Eum sequi temporibus sunt vel labore, maxime, iusto commodi dignissimos repudiandae quo eos fugiat! Sit veniam, ullam labore modi molestiae corporis saepe mollitia temporibus rerum tempore eius quidem beatae corrupti itaque. Placeat quis tenetur voluptas corporis consectetur, facere culpa aliquam eos atque non et consequuntur adipisci iure! Quam corrupti cum dolores totam, odit doloribus.'
        // ]);
    }
}