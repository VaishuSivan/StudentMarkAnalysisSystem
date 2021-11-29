

    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "db");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $sub_id = mysqli_real_escape_string($link, $_REQUEST['sub_id']);

    $sub_name = mysqli_real_escape_string($link, $_REQUEST['sub_name']);

    $internal_I = mysqli_real_escape_string($link, $_REQUEST['internal_I']);
	$internal_II = mysqli_real_escape_string($link, $_REQUEST['internal_II']);
	$semester = mysqli_real_escape_string($link, $_REQUEST['semester']);

     

    // attempt insert query execution

    $sql = "INSERT INTO 16it49 (sub_id, sub_name, internal_I,internal_II,semester) VALUES ('$sub_id', '$sub_name', '$internal_I', '$internal_II', '$semester')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>

