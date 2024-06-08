<?php

class SqlConnector {
    private $conn;

    public function connect() {
        $dbConn = pg_connect("");
        if(!$dbConn) {
            echo "Connection failed: " . pg_last_error();
        }
    }
}