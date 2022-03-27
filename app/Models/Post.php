<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, blanditiis quae. Natus, quam! Harum, dolores ipsum laborum odit distinctio eum, dicta inventore eaque natus nulla quae tempora officia porro minus minima iste asperiores rem labore exercitationem, laboriosam numquam doloribus. Sed consequuntur rerum ipsum praesentium modi corrupti sapiente, laboriosam laudantium quod nihil alias nam voluptates assumenda. Quis fuga ut delectus maxime, odio aut laborum sint dignissimos sed beatae possimus, hic eaque repellat fugit! Consectetur blanditiis ab quidem facere consequatur illum natus!"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, blanditiis quae. Natus, quam! Harum, dolores ipsum laborum odit distinctio eum, dicta inventore eaque natus nulla quae tempora officia porro minus minima iste asperiores rem labore exercitationem, laboriosam numquam doloribus. Sed consequuntur rerum ipsum praesentium modi corrupti sapiente, laboriosam laudantium quod nihil alias nam voluptates assumenda. Quis fuga ut delectus maxime, odio aut laborum sint dignissimos sed beatae possimus, hic eaque repellat fugit! Consectetur blanditiis ab quidem facere consequatur illum natus!"
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;

    }
}
