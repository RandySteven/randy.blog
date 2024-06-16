<?php require_once "./header.php" ;?>
<?php require_once "./gallery_form.php"; ?>
<?php
    require_once "./conn.php";
    function get_gallery() {
        $conn = get_connection();
        $query = "SELECT id, image, title, description FROM galleries";
        $result = pg_query($conn, $query);
        if(!$result) {
            echo "No image in gallery";
        }
        return $result;
    }

    function fetch_gallery() {
        $result = get_gallery();
        if(pg_num_rows($result) == 0) {
            echo "No images in gallery";
        }
        echo "<div class='grid-container'>";
        while($row = pg_fetch_assoc($result)) {
            echo "<img src=".$row['image']." alt='image' />";
        }
        echo "</div>";
    }
?>
<?php fetch_gallery();?>
<?php require_once "./footer.php" ;?>
