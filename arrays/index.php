<?php

class Post {

    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post('My first post', 'JW', true),
    new Post('My second post', 'JW', true),
    new Post('My third post', 'TL',true),
    new Post('My first post', 'KK', false)

];

//$unpublishedPosts = array_filter($posts, function($post) {
//    return !$post->published;
//});
//
//$publishedPosts = array_filter($posts, function($post) {
//    return $post->published;
//});

$modifier = array_map(function ($post) {
    return (array) $post;
},$posts);


$titles = array_column($modifier, 'title', 'author');

//var_dump($modifier);
var_dump($titles);