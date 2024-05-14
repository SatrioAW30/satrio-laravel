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
        

        User::create([
            'name' => 'Satrio Adi Wibowo',
            'username' => 'satrioaw',
            'email' => 'satrioaw@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Bangkit Galuh',
        //     'email' => 'bgsarum@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Operating System',
            'slug' => 'operating-system'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit. Asperiores porro corrupti facere quibusdam consequatur vitae placeat cum reprehenderit quasi itaque laboriosam perferendis deserunt, quod, voluptas exercitationem! Id tempore voluptates minus sequi pariatur provident, nam suscipit magnam, fugit amet nemo. Perspiciatis, quae quidem consequuntur illo doloremque architecto ad odit aliquam reiciendis temporibus excepturi soluta dignissimos doloribus unde, officia aut corporis, consequatur iure quam cumque eos! Recusandae animi, accusantium veritatis excepturi, tempore fugiat corporis voluptatum obcaecati incidunt dolores qui illum? Soluta illo perspiciatis quam odio ea, perferendis provident aliquam mollitia eaque?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul KeDua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit. Asperiores porro corrupti facere quibusdam consequatur vitae placeat cum reprehenderit quasi itaque laboriosam perferendis deserunt, quod, voluptas exercitationem! Id tempore voluptates minus sequi pariatur provident, nam suscipit magnam, fugit amet nemo. Perspiciatis, quae quidem consequuntur illo doloremque architecto ad odit aliquam reiciendis temporibus excepturi soluta dignissimos doloribus unde, officia aut corporis, consequatur iure quam cumque eos! Recusandae animi, accusantium veritatis excepturi, tempore fugiat corporis voluptatum obcaecati incidunt dolores qui illum? Soluta illo perspiciatis quam odio ea, perferendis provident aliquam mollitia eaque?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul KeTiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit. Asperiores porro corrupti facere quibusdam consequatur vitae placeat cum reprehenderit quasi itaque laboriosam perferendis deserunt, quod, voluptas exercitationem! Id tempore voluptates minus sequi pariatur provident, nam suscipit magnam, fugit amet nemo. Perspiciatis, quae quidem consequuntur illo doloremque architecto ad odit aliquam reiciendis temporibus excepturi soluta dignissimos doloribus unde, officia aut corporis, consequatur iure quam cumque eos! Recusandae animi, accusantium veritatis excepturi, tempore fugiat corporis voluptatum obcaecati incidunt dolores qui illum? Soluta illo perspiciatis quam odio ea, perferendis provident aliquam mollitia eaque?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul KeEmpat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut mollitia commodi soluta dolorem explicabo animi nihil, ea recusandae reprehenderit. Asperiores porro corrupti facere quibusdam consequatur vitae placeat cum reprehenderit quasi itaque laboriosam perferendis deserunt, quod, voluptas exercitationem! Id tempore voluptates minus sequi pariatur provident, nam suscipit magnam, fugit amet nemo. Perspiciatis, quae quidem consequuntur illo doloremque architecto ad odit aliquam reiciendis temporibus excepturi soluta dignissimos doloribus unde, officia aut corporis, consequatur iure quam cumque eos! Recusandae animi, accusantium veritatis excepturi, tempore fugiat corporis voluptatum obcaecati incidunt dolores qui illum? Soluta illo perspiciatis quam odio ea, perferendis provident aliquam mollitia eaque?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
