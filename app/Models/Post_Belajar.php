<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Satrio Adi Wibowo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab qui nobis officiis minima aliquid, ullam illum fugiat laborum assumenda eum id facilis dignissimos! Excepturi quaerat veritatis eos tempore placeat corporis, iusto esse voluptatem, ut libero eaque eum magnam blanditiis! Rem culpa ut explicabo blanditiis veritatis, eveniet repudiandae quisquam ea architecto iste vero amet. Nesciunt modi et veniam culpa deserunt. Quos tenetur exercitationem eum excepturi at sed? Blanditiis iste repellendus tenetur perspiciatis provident similique aliquid, laboriosam, consequatur quos beatae, asperiores vel."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judu-post-kedua",
            "author" => "Bangkit Galuh Setyaningrum",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, voluptate dolores. Cumque delectus accusamus inventore repellendus aliquam voluptates beatae assumenda minima magni exercitationem! Nesciunt nemo iure, pariatur dolorem ipsum dignissimos reiciendis soluta perferendis molestias at asperiores repellat officia minima esse sit itaque provident quis est? Exercitationem adipisci, voluptate unde provident quasi omnis expedita dicta, explicabo in nisi veritatis tempore eligendi nostrum odit sit ad! Dignissimos libero numquam molestias expedita ad minima. Quas illo a minima repellendus numquam eius, modi qui, expedita pariatur quidem atque perspiciatis vitae accusamus, aliquam distinctio quod doloribus tenetur reprehenderit ab iure odio dolorum earum sed. Quae?"
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);

        }
}
