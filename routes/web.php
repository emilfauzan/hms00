<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Novotel Pulomas',
        'pagetitle' => 'Novotel Pulomas',
    ]);
});

Route::get('/log', function () {
    return view('log', [
        'title' => 'Activity Log',
        'pagetitle' => 'Novotel Pulomas - Activity Log',
        'log' => [
            [
                'id' => 1,
                'title' => 'Title 1',
                'author' => 'Emil Fauzan',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel dolorum cumque libero qui deleniti! Facere minus temporibus deserunt recusandae culpa provident reiciendis maxime at suscipit nisi, dignissimos perspiciatis adipisci nam eos debitis? Ut, et aperiam consequatur quasi porro accusamus quia magnam labore dicta vel deserunt tempore fuga adipisci eos nobis.'
            ],
            [
                'id' => 2,
                'title' => 'Title 2',
                'author' => 'Emil Fauzan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eaque voluptas tempora quod enim! Harum illo
            velit quam in labore nobis, accusantium asperiores beatae praesentium quas? Reprehenderit dolorem
            distinctio, ut eum voluptatem tempore vitae ea veritatis ab, velit voluptates pariatur, sit dolorum unde
            ipsam temporibus nam officia facere? Dignissimos, porro quos sed optio reiciendis qui eaque quibusdam non,
            neque perspiciatis, cumque earum id at voluptate facilis deleniti ratione ut laudantium.'
            ],
        ]
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'pagetitle' => 'Novotel Pulomas - About Us'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'pagetitle' => 'Novotel Pulomas - Contact'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Novotel Pulomas - Sign Up',
        'pagetitle' => 'Novotel Pulomas - Sign Up'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Novotel Pulomas - Login',
        'pagetitle' => 'Novotel Pulomas - Login'
    ]);
});
