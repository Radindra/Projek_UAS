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
         
        
           User::create([
              'name' => 'Radindra Brahma',
              'username'=> 'radindrabrahma',
              'email' => 'radindrabrahmaa@gmail.com',
              'password'=> bcrypt('123')

          ]);
        //  User::create([
        //     'name' => 'Naufal Pradipta',
        //     'email' => 'naufalpradipta@gmail.com',
        //     'password'=> bcrypt('123')

        // ]);
            
         User::factory(3)->create();

         Category::create([
            'name' => 'Detail Kost',
            'slug' => 'detail-kost',
            
         ]);

         Category::create([
            'name' => 'Update Kabar Kost',
            'slug' => 'update-kabar-kost',
            
         ]);

         Category::create([
            'name' => 'Kata Mereka ',
            'slug' => 'kata-mereka',
            
         ]);
         Post::factory(15)-> create();

        //  Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse debitis neque nihil corporis labore repellat repudiandae aliquam fugiat delectus hic consectetur impedit, laboriosam iusto itaque quod? Veniam earum, saepe nobis dolorem impedit, hic dolor autem unde ad cupiditate repellat temporibus, error rerum eius quod cum? Minus veritatis dolorum ullam in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aspernatur modi obcaecati tempora totam autem, tenetur possimus laudantium magni id quod repellendus pariatur itaque, aliquid, quaerat doloribus nobis. Facere debitis inventore vitae quia eum, est, cum nostrum quas optio excepturi aliquid soluta neque possimus accusamus pariatur consequatur sunt similique odit enim voluptas perferendis nam accusantium, illum porro! Consequatur id omnis accusantium, fugiat quae blanditiis praesentium aperiam quod? Fugiat cupiditate corporis laboriosam cumque quam repellat! Impedit, ipsa alias repellat omnis nihil hic. Odit aut facilis ipsam vel non voluptatum tenetur deserunt laudantium sed asperiores, dolore provident nobis saepe vitae. Officia, nam.',
        //     'category_id' => 1,
        //     'user_id' =>1
               
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse debitis neque nihil corporis labore repellat repudiandae aliquam fugiat delectus hic consectetur impedit, laboriosam iusto itaque quod? Veniam earum, saepe nobis dolorem impedit, hic dolor autem unde ad cupiditate repellat temporibus, error rerum eius quod cum? Minus veritatis dolorum ullam in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aspernatur modi obcaecati tempora totam autem, tenetur possimus laudantium magni id quod repellendus pariatur itaque, aliquid, quaerat doloribus nobis. Facere debitis inventore vitae quia eum, est, cum nostrum quas optio excepturi aliquid soluta neque possimus accusamus pariatur consequatur sunt similique odit enim voluptas perferendis nam accusantium, illum porro! Consequatur id omnis accusantium, fugiat quae blanditiis praesentium aperiam quod? Fugiat cupiditate corporis laboriosam cumque quam repellat! Impedit, ipsa alias repellat omnis nihil hic. Odit aut facilis ipsam vel non voluptatum tenetur deserunt laudantium sed asperiores, dolore provident nobis saepe vitae. Officia, nam.',
        //     'category_id' => 1,
        //     'user_id' =>1
               
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse debitis neque nihil corporis labore repellat repudiandae aliquam fugiat delectus hic consectetur impedit, laboriosam iusto itaque quod? Veniam earum, saepe nobis dolorem impedit, hic dolor autem unde ad cupiditate repellat temporibus, error rerum eius quod cum? Minus veritatis dolorum ullam in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aspernatur modi obcaecati tempora totam autem, tenetur possimus laudantium magni id quod repellendus pariatur itaque, aliquid, quaerat doloribus nobis. Facere debitis inventore vitae quia eum, est, cum nostrum quas optio excepturi aliquid soluta neque possimus accusamus pariatur consequatur sunt similique odit enim voluptas perferendis nam accusantium, illum porro! Consequatur id omnis accusantium, fugiat quae blanditiis praesentium aperiam quod? Fugiat cupiditate corporis laboriosam cumque quam repellat! Impedit, ipsa alias repellat omnis nihil hic. Odit aut facilis ipsam vel non voluptatum tenetur deserunt laudantium sed asperiores, dolore provident nobis saepe vitae. Officia, nam.',
        //     'category_id' => 2,
        //     'user_id' =>1
               
        //  ]);
        //  Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse debitis neque nihil corporis labore repellat repudiandae aliquam fugiat delectus hic consectetur impedit, laboriosam iusto itaque quod? Veniam earum, saepe nobis dolorem impedit, hic dolor autem unde ad cupiditate repellat temporibus, error rerum eius quod cum? Minus veritatis dolorum ullam in.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aspernatur modi obcaecati tempora totam autem, tenetur possimus laudantium magni id quod repellendus pariatur itaque, aliquid, quaerat doloribus nobis. Facere debitis inventore vitae quia eum, est, cum nostrum quas optio excepturi aliquid soluta neque possimus accusamus pariatur consequatur sunt similique odit enim voluptas perferendis nam accusantium, illum porro! Consequatur id omnis accusantium, fugiat quae blanditiis praesentium aperiam quod? Fugiat cupiditate corporis laboriosam cumque quam repellat! Impedit, ipsa alias repellat omnis nihil hic. Odit aut facilis ipsam vel non voluptatum tenetur deserunt laudantium sed asperiores, dolore provident nobis saepe vitae. Officia, nam.',
        //     'category_id' => 2,
        //     'user_id' =>2
               
        //  ]);



    }
}
