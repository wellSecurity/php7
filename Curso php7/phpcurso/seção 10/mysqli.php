<?php

$conn = new mysqli("127.0.0.1", "root", "qwerty", "db_php7");
if($conn->connection_error) {
    echo "Error: "; $conn->connection_error;
}

?>