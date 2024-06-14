<?php
    function get_connection() {
        $env = parse_ini_file(".env");
        $connStr = $env['DB_CONN'];
        $conn = pg_connect($connStr);
        if (!$conn) {
            echo "Error: Unable to connect to PostgreSQL." . PHP_EOL;
            exit; // Terminate script execution on connection failure
        }
        return $conn;
    }