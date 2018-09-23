<?php 
    $fname = (isset($_POST['fname'])) ? $_POST['fname'] : 'No first name give';
    $lname = (isset($_POST['lname'])) ? $_POST['lname'] : 'No last name give';
    $somevalue = "whatever";
    $array = ['fname'=>$fname, 'lname'=>$lname, 'response'=>$somevalue];
    echo json_encode($array);
?>