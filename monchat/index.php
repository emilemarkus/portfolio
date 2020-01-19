<?php
require 'class/Autoload.php';
use \Chatbox\Autoloader;
use \Chatbox\HTML\Form;
use \Chatbox\HTML\Html;
use \Chatbox\CONTROL\Connect;
use \Chatbox\CONTROL\Formcheck;

var_dump($_POST);


Autoloader::register();

$form = new Form($_POST);
$html = new Html();
$connection = new Connect();
$checkField = new Formcheck($_POST);


// ACTION WHEN WE RECEIVE A FORM BY THE POST METHOD
if ($_POST) {
    $action = $_POST["action"];
    switch ($action) {
        case ("signup"):

            // we check the login -> checkLogin(login fieldName, login value)
            $ifLoginOk = $checkField->checkLogin("nameSignUpLogin", $_POST['nameSignUpLogin']);
            // we check the password -> checkPassword(password01 fieldName, password01 value)
            $ifPass01Ok = $checkField->checkPassword("nameSignUpPassword1", $_POST['nameSignUpPassword1']);
            // we check the password -> checkPassword(password02 fieldName, password02 value)
            $ifPass02Ok = $checkField->checkPassword("nameSignUpPassword2", $_POST['nameSignUpPassword2']);
            break;
        case ("signin"):
            echo "signin";
            // we check the login -> checkLogin(login fieldName, login value)
            $ifLoginOk = $checkField->checkLogin("nameSignInLogin", $_POST['nameSignInLogin']);
            // we check the password -> checkPassword(password01 fieldName, password01 value)
            $ifPassOk = $checkField->checkPassword("nameSignInPassword", $_POST['nameSignInPassword']);
            break;

    }
}


// implémenter creation de groupe (admin)
//


?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        body {
            padding-left: 50px;
        }

        form > label {
            display: block;
        }

        .btn {
            margin: 1rem 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
// formulaire d'inscriptions
include("pages/logForm.php");

?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>