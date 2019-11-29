<?php 

include 'db_info.php';

$error = $title = $content = '';
if (@$_POST['submit']) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    if (!$title) $error .= 'タイトルがありません。<br>';
    if (!$content) $error .= '本文がありません。<br>';
    if (!$error) {
        $stmt = $pdo->query("insert into post(title, content) 
            values('$title', '$content')");
        header('Location: index.php');
        exit();
    }
}
require 't_post.php';
?>
