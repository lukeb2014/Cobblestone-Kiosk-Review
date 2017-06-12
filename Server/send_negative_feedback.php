<?php
    header('Access-Control-Allow-Origin: *');
    //////////
    // Initialization
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $key = $_POST['key'];
    require('../vendor/autoload.php');
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
    $from = new SendGrid\Email(null, "app62308816@heroku.com");
    $subject = "Negative Review Feedback";
    //$to = new SendGrid\Email(null, "wecare@cobblestone.com"); // TODO switch emails
    $to = new SendGrid\Email(null, "luke@rpmnational.com");

    $message = "<h1>Negative Review Message</h1><p>Name: $name</p><p>Email: $email</p><p>Message: $feedback</p>";

    $content = new SendGrid\Content("text/html", $message);
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();
    echo $response->headers();
    echo $response->body();
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