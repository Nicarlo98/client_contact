<?php
    session_start();
    require 'dbcon.php';

    if (isset($_POST['delete_client'])) {
        $client_code = mysqli_real_escape_string($con, $_POST['delete_client']);
    
        $query = "DELETE FROM client WHERE code='$client_code' ";
        $query_run = mysqli_query($con, $query);

        if ( $query_run) {
            $_SESSION['message'] = "Client Successfully Deleted";
            header("Location: index.php");
            exit(0);
        }
        else{

            $_SESSION['message'] = "Client Not Deleted";
            header("Location: index.php");
            exit(0);
        }
    }

    if (isset($_POST['update_client'])) {
        
        $client_code = mysqli_real_escape_string($con, $_POST['client_code']);
        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $links = mysqli_real_escape_string($con, $_POST['links']);
  
        $query = "UPDATE client SET name ='$name',links ='$links' WHERE code ='$client_code'";

        $query_run = mysqli_query($con, $query);

         if ($query_run) {
            $_SESSION['message'] = "Client Successfully Updated";
            header("Location: index.php");
            exit(0);
        }
        else{

            $_SESSION['message'] = "Client Not Updated";
            header("Location: index.php");
            exit(0);
        }
    }

    if (isset($_POST['save_client'])) {
        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        
        $links = mysqli_real_escape_string($con, $_POST['links']);

        $query = "INSERT INTO client(name,links) VALUES 
        ('$name','$links')";

        $query_run = mysqli_query($con,$query);
        if ($query_run) {

            $_SESSION['message'] = "Client Created Successfully";
            header("Location: client_create.php");
            exit(0);
        }
        else{

            $_SESSION['message'] = "Client Not Created";
            header("Location: client_create.php");
            exit(0);
        }
    }

?>