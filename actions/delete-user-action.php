<?php
    //inherite the User.php class
    include "../classes/User.php";

    //instantiate an object
    $user = new User;

    //call the delete method in the User.php
    $user->delete();
?>