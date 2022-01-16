<?php
session_start();
    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost:4306", "root", "", "test");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM blogdata";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $user = $_SESSION['user_name'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        // $sql = "INSERT INTO blogdata(title, content) VALUES('$title', '$content')";

        $sql = "INSERT INTO blogdata(username, title, content, timest) VALUES('$user', '$title', '$content', CURRENT_TIME())";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: Stories.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['ID'])){
        $ID = $_REQUEST['ID'];
        $sql = "SELECT * FROM blogdata WHERE ID = $ID";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $ID = $_REQUEST['ID'];

        $sql = "DELETE FROM blogdata WHERE ID = $ID";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $ID = $_REQUEST['ID'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blogdata SET title = '$title', content = '$content' WHERE ID = $ID";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

?>
