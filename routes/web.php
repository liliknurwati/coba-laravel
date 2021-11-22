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
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jaemin Na",
        "image" => "jae.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lilik Nurwati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eveniet mollitia
            tempore aspernatur quasi, minus quaerat fuga nobis voluptatibus quae incidunt commodi
            dolorum rem quas libero asperiores aperiam obcaecati ad. Illum hic neque ducimus odit? 
            Autem quia laboriosam quis error, nam in dolore dolor sit consequuntur. Necessitatibus 
            sint et nesciunt!" 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Elenwest",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam libero 
            assumenda magni sint? Suscipit voluptas maiores temporibus. Impedit nam 
            earum repellat veritatis praesentium vel reiciendis deleniti id qui unde? 
            Repudiandae deleniti dolorem provident assumenda voluptatem accusamus 
            temporibus nobis atque aliquid. Beatae commodi quasi molestiae vitae 
            doloremque nobis pariatur asperiores id sequi, ut, soluta ducimus, officiis 
            ab quam dolor eos nesciunt distinctio eum totam adipisci odio a? Similique, 
            obcaecati blanditiis accusamus necessitatibus tenetur reprehenderit ipsa fugiat 
            officia! Quaerat quam qui inventore ducimus facere harum fuga sequi sapiente? 
            Doloribus, quidem a delectus dolorum impedit hic possimus iusto expedita saepe 
            nisi rem enim!" 
        ]
    ];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single posts
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lilik Nurwati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eveniet mollitia
            tempore aspernatur quasi, minus quaerat fuga nobis voluptatibus quae incidunt commodi
            dolorum rem quas libero asperiores aperiam obcaecati ad. Illum hic neque ducimus odit? 
            Autem quia laboriosam quis error, nam in dolore dolor sit consequuntur. Necessitatibus 
            sint et nesciunt!" 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Elenwest",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam libero 
            assumenda magni sint? Suscipit voluptas maiores temporibus. Impedit nam 
            earum repellat veritatis praesentium vel reiciendis deleniti id qui unde? 
            Repudiandae deleniti dolorem provident assumenda voluptatem accusamus 
            temporibus nobis atque aliquid. Beatae commodi quasi molestiae vitae 
            doloremque nobis pariatur asperiores id sequi, ut, soluta ducimus, officiis 
            ab quam dolor eos nesciunt distinctio eum totam adipisci odio a? Similique, 
            obcaecati blanditiis accusamus necessitatibus tenetur reprehenderit ipsa fugiat 
            officia! Quaerat quam qui inventore ducimus facere harum fuga sequi sapiente? 
            Doloribus, quidem a delectus dolorum impedit hic possimus iusto expedita saepe 
            nisi rem enim!" 
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});



