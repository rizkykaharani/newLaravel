<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // User::create([
        //     'name' => 'Rizky Kaharani',
        //     'email'=>'ki@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name' => 'Jaringan Komputer',
            'slug'=>'jaringan-komputer'
        ]);

        Post::factory(5)->create();

        // Post::create([
        //     'title' => 'Web Programming',
        //     'slug'=> 'web-programming',
        //     'excerpt'=>'Web Programing.......',
        //     'isi'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p>',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title' => 'Tulisan Kedua',
        //     'slug'=> 'tulisan-kedua',
        //     'excerpt'=>'Tulisan Kedua.......',
        //     'isi'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p>',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title' => 'Jaringan Komputer',
        //     'slug'=> 'jaringan-komputer',
        //     'excerpt'=>'Jaringan Komputer.......',
        //     'isi'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Similique deserunt dolor, impedit mollitia sint aperiam architecto a explicabo. Nesciunt temporaculpa earum quasi ipsum laudantium obcaecati soluta eligendi dolor ea</p>',
        //     'category_id'=> 2,
        //     'user_id'=>1
        // ]);

    }
}
