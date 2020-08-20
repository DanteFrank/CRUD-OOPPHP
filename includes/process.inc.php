<?php 

include 'class-autoload.inc.php';


$dataObj = new DataOperation();

if (isset($_POST['submit'])) {
    $dataArray = array(
        "food_item" => test_input($_POST['food']),
        "qty" => test_input($_POST['qty'])
    );

    if ($dataObj->insertRecord('food', $dataArray)) {
        header('location:index.php?msg=Succesful');
    }
    
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }