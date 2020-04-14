<?php 
#open connection to database
    #$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME );
    $conn = mysqli_connect("localhost","root","","ecommerce");
    if (!$conn){
        die(" Cnnot to connect ");
    }