<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});
route::get('home', function () {
    $blogs = [
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '1',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '0',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '0',
        ],
        [
            'image' => 'assets/images/pexels.jpg',
            'title' => 'name of Product',
            'details' => 'This is a beautiful product',
            'price' => '500',
            'addtocard' => 'Add To Card',
            'order' => 'Order Now',
            'status' => '0',
        ]
       

    ];
    return view('home', compact('blogs'));
});
