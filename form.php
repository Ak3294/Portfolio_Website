<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // echo 'Your Entry has been submitted Successfully';

    //Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";

    //Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Die if connection was not successful
    if(!$conn)
    {
        die("SORRY we failed the connection :". mysqli_connect_errer());
    }
    else
    {
        // echo "connection was Successful";
    
        //Submit these to database

        $sql = "INSERT INTO `portfoliotable` (`NAME`, `EMAIL`, `PROJECT`, `MESSAGE`, `Date`) VALUES 
        ('$name', '$email', '$project', '$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo'SUCCESS! Information is Post Successfully.';
        }
        else
        {
            echo'ERROR! Information is Not Post Successfully. ';
            // echo 'ERROR'.mysqli_error($conn);
        }
    }
}

?>


