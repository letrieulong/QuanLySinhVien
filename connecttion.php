<?php
    //open connection to mysql db
    $connection = mysqli_connect("us-cdbr-east-05.cleardb.net","be5e9c603b0178","8bbc452e","heroku_56f9eba53eaf186") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from quanlysinhvien";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        array_push($emparray, $row);
    }
    echo $emparray."thanh cong";

    //close the db connection
    mysqli_close($connection);
?>