<?php
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $serrvername = "localhost";
        $username = "root";
        $password = "";
        $database = "myshop";

        $connection = new mysqli($serrvername, $username, $password, $database);

        $sql = "DELETE FROM clients WHERE id = $id";
        $connection->query($sql);
    }

    header("Location: /myshop/index.php");
    exit();
?>