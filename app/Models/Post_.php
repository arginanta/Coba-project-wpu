<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => "Muhammad Arginanta Kafi Uhuy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro exercitationem sed esse recusandae. In illo illum deleniti, ab ad obcaecati odit rerum quibusdam voluptatem minus culpa nisi dolorem explicabo eaque laudantium fugiat ipsum repellat esse quaerat commodi doloribus? Fugiat ducimus maiores a molestiae saepe, est nostrum laborum facilis, incidunt voluptatum, esse ipsa? Beatae voluptate corrupti qui obcaecati nulla voluptatem expedita, doloribus error aspernatur amet sit aliquam illum repellat vitae laborum ad maiores rem dolore! Pariatur et aspernatur voluptatum labore commodi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "autor" => "Siti Nur Haliza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima similique quam odio accusamus at saepe voluptas quasi tempore perferendis ipsa quod, accusantium distinctio voluptate commodi eos doloremque architecto, porro debitis quibusdam libero dolorum voluptatibus inventore. Quaerat autem deserunt quod nostrum. Perferendis, id, animi illo neque aut ducimus sit natus aliquid, reiciendis quisquam repellat aperiam suscipit! Accusantium nisi asperiores itaque provident, molestiae aperiam ipsum dignissimos expedita nostrum repellendus, soluta accusamus. Aliquid dolorem repellendus corrupti saepe quae qui distinctio? In tempore explicabo voluptates perspiciatis ratione error delectus rerum cupiditate consequuntur dolorem, sunt rem ab facilis labore suscipit. Libero rem distinctio eaque maxime?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
