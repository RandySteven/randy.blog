<?php
    require_once "./conn.php";

    $conn = get_connection();

    function get_blogs() {
        global $conn;
        $query = "SELECT title, content FROM blogs";
        $result = pg_query($conn, $query);
        if(!$result) {
            return "failed to get blogs";
        }
        return $result;
    }

    function fetch_blogs() {
        $result = get_blogs();
        echo "<table>";
        while($row=pg_fetch_assoc($result)){
            echo "<tr>";
            echo "<td align='center' width='200'>" . $row['title'] . "</td>";
            echo "<td align='center' width='200'>" . $row['content'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jujuman Blog</title>
</head>
<body>
    <h1>Hello Welcome to Aju's blog</h1>
    <?php
        fetch_blogs();
    ?>
</body>
</html>