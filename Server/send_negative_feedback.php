<?php
    //////////
    // Initialization
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
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
    // Email manager via SendGrid API
    // TODO
    echo 'emailed manager';
    //////////

    //////////
    // Either repeat code in enter_into_drawing.php or run enter_into_drawing.php
    // TODO
    echo 'entered into drawing';
    //////////

    ////
    echo '200';
    ////
?>