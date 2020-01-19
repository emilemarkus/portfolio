<?php

// Login formular
// open div  - $id(string),$class($string),$attr(array)->string
echo $html->openDiv("containerSignin","container-login form-group form-check");
echo $html::h(1,"title","Sign In");

    // open form (id/name/action/method/enctype)
    echo $form::openForm("idSignInForm","nameSignInForm","index.php","post");

    echo "<input type=\"hidden\" name=\"action\" value=\"signin\" >";

    // label login
    echo $html::label("idSignInLogin","Login");
    // input login (id,name,type)
    echo $form->input("idSignInLogin","nameSignInLogin","text");
    // display error field if exist
    echo $checkField->displayError("nameSignInLogin"); // display an error if exist

    // label password
    echo $html::label("idSignInPassword","Password");
    // input password (id,name,type)
    echo $form->input("idSignInPassword","nameSignInPassword","password");
    // display error field if exist
    echo $checkField->displayError("nameSignInPassword"); // display an error if exist


    // submit button (id,class,text)
    echo $html::warp("p",$form::submit("idSignInSubmit","btn submit btn-info","Enter"));

    //close form
    echo $form::closeForm();

echo $html::closeDiv();


// Signup formular
// open div  - $id(string),$class($string),$attr(array)->string
echo $html->openDiv("containerSignup","container-login form-group form-check");

    echo $html::h(1,"title","Sign Up");

    // open form (id/name/action/method/enctype)
    echo $form::openForm("idSignUpForm","nameSignUpForm","index.php","post");

    echo "<input type=\"hidden\" name=\"action\" value=\"signup\" >";

    echo $html::label("idSignUpLogin","Login"); // for->input id AND text before input
    // input login (id,name,type)
    echo $form->input("idSignUpLogin","nameSignUpLogin","text");
    echo $checkField->displayError("nameSignUpLogin"); // display an error if exist


    echo $html::label("idSignUpPassword1","Password");
    // input password (id,name,type)
    echo $form->input("idSignUpPassword1","nameSignUpPassword1","password");
    echo $checkField->displayError("nameSignUpPassword1"); // display an error if exist

    echo $html::label("idSignUpPassword2","Confirm");
    // input password (id,name,type)
    echo $form->input("idSignUpPassword2","nameSignUpPassword2","password");
    echo $checkField->displayError("nameSignUpPassword2"); // display an error if exist


// submit button (id,class,text)
    echo $html::warp("p",$form::submit("idSignUpSubmit","btn submit btn-info","Enter"));

    //close form
    echo $form::closeForm();

echo $html::closeDiv();

