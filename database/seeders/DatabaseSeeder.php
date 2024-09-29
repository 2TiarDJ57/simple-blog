<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::create([
        //     'name' => 'Bachtiar Dwi Julianto',
        //     'email' => 'bachtiardwijuliato@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Bachtiar Dwi J',
            'username' => 'bachtiar',
            'email' => 'bachtiar@gmail.com',
            'password' => bcrypt('tiar123456')
        ]);

        User::factory(3)->create();
       

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem, vel unde placeat voluptas repellat quo cumque, enim illo excepturi rerum dolores dolore a praesentium, amet pariatur esse harum dignissimos. Quasi incidunt veritatis, libero voluptate rem sapiente. Facilis sint iusto doloremque aliquid, perferendis accusamus? Aliquam culpa aliquid totam, ut eveniet sunt, a perspiciatis possimus natus ex et fugit? Ducimus debitis tempore exercitationem, accusamus fuga dolores maxime impedit omnis nam officia quos incidunt natus perferendis, sed illo soluta, odio porro eius pariatur? Ipsam distinctio ab recusandae. Suscipit itaque iusto dolore, sit velit sapiente vero perferendis similique. Ea, dignissimos odio.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem, vel unde placeat voluptas repellat quo cumque, enim illo excepturi rerum dolores dolore a praesentium, amet pariatur esse harum dignissimos. Quasi incidunt veritatis, libero voluptate rem sapiente. Facilis sint iusto doloremque aliquid, perferendis accusamus? Aliquam culpa aliquid totam, ut eveniet sunt, a perspiciatis possimus natus ex et fugit? Ducimus debitis tempore exercitationem, accusamus fuga dolores maxime impedit omnis nam officia quos incidunt natus perferendis, sed illo soluta, odio porro eius pariatur? Ipsam distinctio ab recusandae. Suscipit itaque iusto dolore, sit velit sapiente vero perferendis similique. Ea, dignissimos odio.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem, vel unde placeat voluptas repellat quo cumque, enim illo excepturi rerum dolores dolore a praesentium, amet pariatur esse harum dignissimos. Quasi incidunt veritatis, libero voluptate rem sapiente. Facilis sint iusto doloremque aliquid, perferendis accusamus? Aliquam culpa aliquid totam, ut eveniet sunt, a perspiciatis possimus natus ex et fugit? Ducimus debitis tempore exercitationem, accusamus fuga dolores maxime impedit omnis nam officia quos incidunt natus perferendis, sed illo soluta, odio porro eius pariatur? Ipsam distinctio ab recusandae. Suscipit itaque iusto dolore, sit velit sapiente vero perferendis similique. Ea, dignissimos odio.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem,',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sapiente provident exercitationem, vel unde placeat voluptas repellat quo cumque, enim illo excepturi rerum dolores dolore a praesentium, amet pariatur esse harum dignissimos. Quasi incidunt veritatis, libero voluptate rem sapiente. Facilis sint iusto doloremque aliquid, perferendis accusamus? Aliquam culpa aliquid totam, ut eveniet sunt, a perspiciatis possimus natus ex et fugit? Ducimus debitis tempore exercitationem, accusamus fuga dolores maxime impedit omnis nam officia quos incidunt natus perferendis, sed illo soluta, odio porro eius pariatur? Ipsam distinctio ab recusandae. Suscipit itaque iusto dolore, sit velit sapiente vero perferendis similique. Ea, dignissimos odio.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}


