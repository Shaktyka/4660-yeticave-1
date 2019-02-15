<?php
    require_once('functions.php');
    require_once('data.php');

    $main_content = include_template('index.php', [
        'lots' => $lots, 
        'categories' => $categories
    ]);
    
    $layout = include_template('layout.php', [
        'content' => $main_content, 
        'categories' => $categories, 
        'user_name' => $user_name
    ]);
                               
    print($layout);
?>
