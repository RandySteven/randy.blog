<?php
    require_once "./conn.php";

    $conn = get_connection();

    function get_blogs() {
        global $conn;
        $query = "SELECT id, title, content FROM blogs WHERE deleted_at IS NULL";
        $result = pg_query($conn, $query);
        if(!$result) {
            return "failed to get blogs";
        }
        return $result;
    }

    function fetch_blogs() {
        $result = get_blogs();
        while($row=pg_fetch_assoc($result)){
            $detail = "/detail.php?id=".$row["id"];
            echo "<div class='box'>";
            echo "<h1>".$row['title']."</h1>";
            echo "<p id='content'>".$row['content']."</p>";
            echo "<a href='".$detail."'>Read More</a>";
            echo "</div>";
        }
    }
?>
<?php require_once "./header.php"; ?>
    <h1 id="header">Aju's blog</h1>
    <?php
        fetch_blogs();
    ?>
<?php require "./footer.php"; ?>