<?php

class Post
{
    public $title;
    public $published;
    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post','Henk', true),
    new Post('My second post', 'Jan', true),
    new Post('My third post', 'Gerard',true),
    new Post('My fourth post', 'Piet',false),
];

//$unpublishedPosts = array_filter($posts, function ($post) {
//    return ! $post->published;
//});
//
//$publishedPosts = array_filter($posts, function ($post) {
//    return $post->published;
//});
//
//$modifiedPosts = array_map(function ($oldpost) {
//        $post = new Post($oldpost->title, true);
////        $post->published = true;
//        return $post;
//}, $posts);
$titles = array_column($posts, 'author', 'title');

echo '<pre>';var_dump($titles);

//This now returns an array to work with.
$posts = array_map(function ($post)
{
    return (array) $post;
}, $posts);

$authors = array_column($posts, 'author', 'title');

var_dump($authors);

