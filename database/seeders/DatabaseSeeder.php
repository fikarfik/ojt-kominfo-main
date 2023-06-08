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

        // User::create([
        //     'name' => 'Kelurahan Jodipan',
        //     'username' => 'jodipan',
        //     'email' => 'kelurahan.jodipan@admin.com',
        //     'password' => bcrypt('kelurahan.jodipan')
        // ]);

        // User::create([
        //     'name' => 'Klojen',
        //     'username' => 'klojen',
        //     'email' => 'kelurahan.klojen@admin.com',
        //     'password' => bcrypt('kelurahan.klojen')
        // ]);

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

        Profile::create([
            'namaFromTableProfile' => "PKK Suka Maju",
            'user_id' => 1,
            'alamatFromTableProfile' => "pkk",
            'emailFromTableProfile' => 'pkk@gmail.com',
            'teleponFromTableProfile' => '0851567123',
            'aboutFromTableProfile' => 'fefefefe',
            'bodyFromTableProfile' => 'efef',
            'titleVisiMisiFromTableProfile' => 'ewfefssfd',
            'bodyVisiMisiFromTableProfile' => 'sdfidsfds'
        ]);

        Profile::create([
            'namaFromTableProfile' => "PKK Suka Maju",
            'user_id' => 1,
            'alamatFromTableProfile' => "pkk",
            'emailFromTableProfile' => 'pkk@gmail.com',
            'teleponFromTableProfile' => '0851567123',
            'aboutFromTableProfile' => 'fefefefe',
            'bodyFromTableProfile' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit corrupti veniam repellendus aperiam perferendis hic, saepe dolor eum aspernatur architecto minus praesentium quod non beatae iure deleniti harum vel quam est! Voluptates ea, recusandae eveniet sed ad aliquid doloribus? Voluptate distinctio optio quae sapiente. Quos, voluptatem nostrum! Expedita reiciendis ipsum aliquam officia eveniet ratione officiis architecto, qui asperiores voluptas dicta et cum id aspernatur odio dolorum quod inventore animi voluptatem. Perspiciatis maxime voluptatem aut corrupti! Vitae, omnis autem porro dolorum mollitia temporibus magnam nobis blanditiis hic illo harum reiciendis pariatur similique nemo debitis ipsam doloribus esse sapiente facilis suscipit?
            ',
            'titleVisiMisiFromTableProfile' => 'ewfefssfd',
            'bodyVisiMisiFromTableProfile' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit corrupti veniam repellendus aperiam perferendis hic, saepe dolor eum aspernatur architecto minus praesentium quod non beatae iure deleniti harum vel quam est! Voluptates ea, recusandae eveniet sed ad aliquid doloribus? Voluptate distinctio optio quae sapiente. Quos, voluptatem nostrum! Expedita reiciendis ipsum aliquam officia eveniet ratione officiis architecto, qui asperiores voluptas dicta et cum id aspernatur odio dolorum quod inventore animi voluptatem. Perspiciatis maxime voluptatem aut corrupti! Vitae, omnis autem porro dolorum mollitia temporibus magnam nobis blanditiis hic illo harum reiciendis pariatur similique nemo debitis ipsam doloribus esse sapiente facilis suscipit?
            '
        ]);



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
