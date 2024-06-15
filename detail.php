<?php
    require_once "./conn.php";

    function get_detail() {
        $conn = get_connection();
        $id = $_GET['id'];
        $query = "SELECT id, title, content, created_at, updated_at, deleted_at FROM blogs WHERE id = ".$id;
        $result = pg_query($conn, $query);
        if(!$result) {
            return null;
        }
        return pg_fetch_assoc($result);
    }

    function fetch_detail($row) {
        echo "<div class='box'>"
            ."<h4>".$row['title']."</h4>"
            ."<div class='card-body'>"
            ."<p class='card-text'>".$row['content']."</p>"
            ."</div>"
            ."</div>";
    }
?>

<?php require_once "./header.php"; ?>

<?php
    $row = get_detail();
    if($row != null) {
        fetch_detail($row);
    }else {
        header('Location: error_404.php');
    }
?>

<?php require_once "./footer.php"; ?>