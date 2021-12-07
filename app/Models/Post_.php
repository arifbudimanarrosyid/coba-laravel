<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Blog Post 1',
            'slug' => 'blog-post-1',
            'author' => 'Arif Budiman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum aliquid eligendi exercitationem molestias perspiciatis nobis error laboriosam animi. Delectus doloribus ullam libero, iure rerum incidunt! Vel natus debitis aut soluta quibusdam iste sunt voluptates, ea omnis, corporis hic culpa magnam ad, facere labore minus. Recusandae enim non perspiciatis doloribus asperiores reprehenderit, autem nobis dicta nulla, quis fugit modi magnam provident expedita. Vel exercitationem, ipsam excepturi similique odio dolorem amet sapiente, laudantium et pariatur ab cumque. Cupiditate, ducimus recusandae. Id iusto in vero nesciunt ipsum deserunt reprehenderit porro nulla iste non, beatae nostrum excepturi atque ipsam dolore tempore dignissimos cum repudiandae laboriosam aspernatur error facilis? Consequatur assumenda, harum esse doloremque unde, veniam soluta itaque adipisci, ex repudiandae necessitatibus at dolores. Quo aliquam vel at velit eligendi, delectus sequi eius veritatis molestiae odio ratione. Atque cumque sequi culpa amet, pariatur iusto repudiandae libero nostrum, non corrupti, delectus error quaerat saepe ullam?'
        ],
        [
            'title' => 'Blog Post 2',
            'slug' => 'blog-post-2',
            'author' => 'Arif',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum aliquid eligendi exercitationem molestias perspiciatis nobis error laboriosam animi. Delectus doloribus ullam libero, iure rerum incidunt! Vel natus debitis aut soluta quibusdam iste sunt voluptates, ea omnis, corporis hic culpa magnam ad, facere labore minus. Recusandae enim non perspiciatis doloribus asperiores reprehenderit, autem nobis dicta nulla, quis fugit modi magnam provident expedita. Vel exercitationem, ipsam excepturi similique odio dolorem amet sapiente, laudantium et pariatur ab cumque. Cupiditate, ducimus recusandae. Id iusto in vero nesciunt ipsum deserunt reprehenderit porro nulla iste non, beatae nostrum excepturi atque ipsam dolore tempore dignissimos cum repudiandae laboriosam aspernatur error facilis? Consequatur assumenda, harum esse doloremque unde, veniam soluta itaque adipisci, ex repudiandae necessitatibus at dolores. Quo aliquam vel at velit eligendi, delectus sequi eius veritatis molestiae odio ratione. Atque cumque sequi culpa amet, pariatur iusto repudiandae libero nostrum, non corrupti, delectus error quaerat saepe ullam?'
        ],
        [
            'title' => 'Blog Post 3',
            'slug' => 'blog-post-3',
            'author' => 'Arif Arrosyid',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum aliquid eligendi exercitationem molestias perspiciatis nobis error laboriosam animi. Delectus doloribus ullam libero, iure rerum incidunt! Vel natus debitis aut soluta quibusdam iste sunt voluptates, ea omnis, corporis hic culpa magnam ad, facere labore minus. Recusandae enim non perspiciatis doloribus asperiores reprehenderit, autem nobis dicta nulla, quis fugit modi magnam provident expedita. Vel exercitationem, ipsam excepturi similique odio dolorem amet sapiente, laudantium et pariatur ab cumque. Cupiditate, ducimus recusandae. Id iusto in vero nesciunt ipsum deserunt reprehenderit porro nulla iste non, beatae nostrum excepturi atque ipsam dolore tempore dignissimos cum repudiandae laboriosam aspernatur error facilis? Consequatur assumenda, harum esse doloremque unde, veniam soluta itaque adipisci, ex repudiandae necessitatibus at dolores. Quo aliquam vel at velit eligendi, delectus sequi eius veritatis molestiae odio ratione. Atque cumque sequi culpa amet, pariatur iusto repudiandae libero nostrum, non corrupti, delectus error quaerat saepe ullam?'
        ]
    ];
    public static function all()
    {
        return collect (self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
