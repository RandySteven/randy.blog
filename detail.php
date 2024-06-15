<?php
    require_once "./conn.php";

    function get_detail() {
        $conn = get_connection();
        $id = $_GET['id'];
        $query = "SELECT id, title, content, created_at, updated_at, deleted_at FROM blogs WHERE id = ".$id;
        $result = pg_query($conn, $query);
        if(!$result) {
            header('location: error.php');
            return;
        }
        return pg_fetch_assoc($result);
    }

    function fetch_detail($row) {
        echo "<div class='box'>";
        echo "<h4>".$row['title']."</h4>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>".$row['content']."</p>";
        echo "</div>";
        echo "</div>";
    }
?>

<?php require_once "./header.php"; ?>

<?php
    $row = get_detail();
    fetch_detail($row);
?>

<?php require_once "./footer.php"; ?>