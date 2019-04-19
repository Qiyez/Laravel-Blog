<?php
return [
    'name' => "零里君",
    'title' => "零里君",
    'subtitle' => 'https://blog.asaltedfish.cn',
    'description' => '零里君的个人站',
    'author' => '零里君',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage',
    ],
    'contact_email'=>env('MAIL_FROM'),
];