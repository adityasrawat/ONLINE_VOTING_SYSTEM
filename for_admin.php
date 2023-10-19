<?php
    session_start();
    include("connection.php");

    $name = $_POST['name'];
    $pass = $_POST['pass'];


    $check = mysqli_query($connect, "select * from user where name='$name' and password='$pass' ");

    if(mysqli_num_rows($check)>0){
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "admin_dashboard.php";
            </script>';}
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "admin_login.php";
            </script>';
    }
    
?>