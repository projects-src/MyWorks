<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => '投稿タイトル：テスト',
        'body' => "投稿の本文。テスト：本日はお日柄もよく・・・。",
    ];
});
