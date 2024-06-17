<?php
    require "./conn.php";

    $conn = get_connection();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "INSERT INTO blogs (title, content) VALUES ('".$title."','".$content."')";
    $result = pg_query($conn, $query);
    if(!$result) {
        echo pg_last_error();
    }
    header('Location: insert.php');
?>
