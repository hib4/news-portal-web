<?php

namespace Database\Seeders;

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
        

        // User::create([
        //     'name' => 'hiba',
        //     'email' => 'hiba@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe. Omnis nobis laborum error maxime architecto ea aliquam blanditiis provident nihil similique ab nostrum ipsum exercitationem, quia doloremque vel. Eius impedit quia sequi velit optio harum sunt est omnis dolore eveniet doloribus ex asperiores, architecto iure temporibus molestiae quam laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe. Omnis nobis laborum error maxime architecto ea aliquam blanditiis provident nihil similique ab nostrum ipsum exercitationem, quia doloremque vel. Eius impedit quia sequi velit optio harum sunt est omnis dolore eveniet doloribus ex asperiores, architecto iure temporibus molestiae quam laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe. Omnis nobis laborum error maxime architecto ea aliquam blanditiis provident nihil similique ab nostrum ipsum exercitationem, quia doloremque vel. Eius impedit quia sequi velit optio harum sunt est omnis dolore eveniet doloribus ex asperiores, architecto iure temporibus molestiae quam laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptates porro numquam quasi reiciendis, odit, voluptas modi sed sunt, vel culpa temporibus veritatis! Quisquam praesentium error alias! Perferendis, consequuntur velit repellendus fuga beatae mollitia et debitis a magni dolor? Voluptatem asperiores quis placeat voluptas sit, beatae, dolore, possimus ex minima dolor aspernatur doloremque amet natus voluptates dolorem perferendis ut saepe. Omnis nobis laborum error maxime architecto ea aliquam blanditiis provident nihil similique ab nostrum ipsum exercitationem, quia doloremque vel. Eius impedit quia sequi velit optio harum sunt est omnis dolore eveniet doloribus ex asperiores, architecto iure temporibus molestiae quam laboriosam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
