<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Marwan Hakim',
            'username' => 'Marwan',
            'email' => 'marwan@gmail.com',
            'password' => bcrypt('password')


        ]);

        // User::create([
        //     'name' => 'Amos',
        //     'email' => 'amos@gmail.com',
        //     'password' => bcrypt('123123123')


        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'

        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        Post::factory(25)->create();



        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Eveniet deleniti non suscipit aliquid, corrupti
        //     officiis modi
        //     hic iste magni quas aperiam, officia rem. Voluptates harum vitae officiis quae eligendi odit. Nobis asperiores nam qui
        //     voluptate ex excepturi, reiciendis esse aliquam cum molestiae quasi unde amet rerum quas repellendus magni. Mollitia
        //     qui
        //     sint sit, similique, earum eius aut architecto incidunt quidem assumenda ipsam voluptas quaerat repellendus,</p>
        //   <p> doloribus
        //     deleniti voluptatem. Culpa suscipit vitae perspiciatis eius molestiae in ratione dolorum corporis eum sint optio esse
        //     laudantium commodi numquam,</p>
        //   <p> obcaecati est nobis eveniet modi officia, fugiat consequatur? Suscipit veniam dolores, nihil
        //     cupiditate distinctio reiciendis totam earum hic ipsa esse minus quibusdam, commodi doloremque laborum magnam
        //     voluptates
        //     tempora sed dolorum, quisquam quasi placeat deleniti rem. Fuga est, sed nemo illum in modi voluptatum fugiat iure sunt
        //     eius a, quaerat rem vero! Suscipit assumenda aut tenetur dolor ducimus cum velit facilis? Officiis excepturi nulla
        //     laudantium dolore!</p>',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Eveniet deleniti non suscipit aliquid, corrupti
        //     officiis modi
        //     hic iste magni quas aperiam, officia rem. Voluptates harum vitae officiis quae eligendi odit. Nobis asperiores nam qui
        //     voluptate ex excepturi, reiciendis esse aliquam cum molestiae quasi unde amet rerum quas repellendus magni. Mollitia
        //     qui
        //     sint sit, similique, earum eius aut architecto incidunt quidem assumenda ipsam voluptas quaerat repellendus,</p>
        //   <p> doloribus
        //     deleniti voluptatem. Culpa suscipit vitae perspiciatis eius molestiae in ratione dolorum corporis eum sint optio esse
        //     laudantium commodi numquam,</p>
        //   <p> obcaecati est nobis eveniet modi officia, fugiat consequatur? Suscipit veniam dolores, nihil
        //     cupiditate distinctio reiciendis totam earum hic ipsa esse minus quibusdam, commodi doloremque laborum magnam
        //     voluptates
        //     tempora sed dolorum, quisquam quasi placeat deleniti rem. Fuga est, sed nemo illum in modi voluptatum fugiat iure sunt
        //     eius a, quaerat rem vero! Suscipit assumenda aut tenetur dolor ducimus cum velit facilis? Officiis excepturi nulla
        //     laudantium dolore!</p>',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Eveniet deleniti non suscipit aliquid, corrupti
        //     officiis modi
        //     hic iste magni quas aperiam, officia rem. Voluptates harum vitae officiis quae eligendi odit. Nobis asperiores nam qui
        //     voluptate ex excepturi, reiciendis esse aliquam cum molestiae quasi unde amet rerum quas repellendus magni. Mollitia
        //     qui
        //     sint sit, similique, earum eius aut architecto incidunt quidem assumenda ipsam voluptas quaerat repellendus,</p>
        //   <p> doloribus
        //     deleniti voluptatem. Culpa suscipit vitae perspiciatis eius molestiae in ratione dolorum corporis eum sint optio esse
        //     laudantium commodi numquam,</p>
        //   <p> obcaecati est nobis eveniet modi officia, fugiat consequatur? Suscipit veniam dolores, nihil
        //     cupiditate distinctio reiciendis totam earum hic ipsa esse minus quibusdam, commodi doloremque laborum magnam
        //     voluptates
        //     tempora sed dolorum, quisquam quasi placeat deleniti rem. Fuga est, sed nemo illum in modi voluptatum fugiat iure sunt
        //     eius a, quaerat rem vero! Suscipit assumenda aut tenetur dolor ducimus cum velit facilis? Officiis excepturi nulla
        //     laudantium dolore!</p>',

        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Eveniet deleniti non suscipit aliquid, corrupti
        //     officiis modi
        //     hic iste magni quas aperiam, officia rem. Voluptates harum vitae officiis quae eligendi odit. Nobis asperiores nam qui
        //     voluptate ex excepturi, reiciendis esse aliquam cum molestiae quasi unde amet rerum quas repellendus magni. Mollitia
        //     qui
        //     sint sit, similique, earum eius aut architecto incidunt quidem assumenda ipsam voluptas quaerat repellendus,</p>
        //   <p> doloribus
        //     deleniti voluptatem. Culpa suscipit vitae perspiciatis eius molestiae in ratione dolorum corporis eum sint optio esse
        //     laudantium commodi numquam,</p>
        //   <p> obcaecati est nobis eveniet modi officia, fugiat consequatur? Suscipit veniam dolores, nihil
        //     cupiditate distinctio reiciendis totam earum hic ipsa esse minus quibusdam, commodi doloremque laborum magnam
        //     voluptates
        //     tempora sed dolorum, quisquam quasi placeat deleniti rem. Fuga est, sed nemo illum in modi voluptatum fugiat iure sunt
        //     eius a, quaerat rem vero! Suscipit assumenda aut tenetur dolor ducimus cum velit facilis? Officiis excepturi nulla
        //     laudantium dolore!</p>',

        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
