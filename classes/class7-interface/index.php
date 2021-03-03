<?php

interface Search {

    public function all();
}

class User implements Search {

    public function all() {
        
        return "Obteniendo los valores de los usuarios, XML";
    }
}

class Post implements Search {

    public function all() {
        
        return "Obteniendo los valores de los post, JSON";
    }
}

$user = new User;
echo $user->all();

echo "<br>";

$post = new Post;
echo $post->all();