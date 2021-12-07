<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            'title' => 'Home',
        ]
    );
});
Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About', 'name' => 'Arif Budiman', 'email' => 'arifbudimanarrosyid@gmail.com'
        ]
    );
});
Route::get('/blog', function () {

    $blog_posts = [
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
    return view(
        'posts',
        [
            'title' => 'Blog',
            'posts' => $blog_posts
        ]
    );
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Post',
        'post' => $new_post
    ]);
});
