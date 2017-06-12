<?php
    //////////
    // Initialization
    $name = $_POST['name'];
    $email = $_POST['email'];
    $key = $_POST['key'];
    //////////
    
    //////////
    // Validation
    if ($key !== 'rpm_1') {
        echo '403';
        exit();
    }
    //////////

    //////////
    // Send data to dropbox
    // TODO
    //////////

    ////
    echo '200';
    ////
?>