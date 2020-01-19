<?php

namespace Chatbox\CONTROL;

const MINLOGIN = 5;
const MAXLOGIN = 15;
const MINPASSWORD = 6;
const MAXPASSWORD = 15;
CONST PATTERNLOGIN ='/[a-zA-Z0-9]/';
const PATTERNPASSWORD = '/[a-zA-Z\!\*\$\!\#\&\@]+[0-9]{1}/';

class Formcheck
{

    // FUNCTION
    public function __construct($datas)
    {
        $this->dataform = $datas;
        $this->errorMessage = array();

    }

    /* FUNCTION CHECK A LOGIN REGARDING OUR CONST VARIABLE
    DECLARED AT THE BEGINING OF OUR CLASS.
    @PARAM - FIELD(STRING) - $PASS(STRING)
    @RETURN - BOLLEAN
    */
    public function checkLogin($field,$login)
    {
        $this->errorMessage[$field] = array();
        //if empty
        if (empty(trim($login))) {
            array_push($this->errorMessage[$field], "Login can't be empty !");
        }

        // if is form is according to our max and min
        if (strlen($login) < MINLOGIN || strlen($login) > MAXLOGIN) {
            array_push($this->errorMessage[$field], "Your login must count at least " . MINLOGIN . " character and at most " . MAXLOGIN . "  !");
        }
        // if we have some incorrect data like no alphanumeric

       $ifNoAlphNum = ctype_alnum($login);
        if (!($ifNoAlphNum)) {
            array_push($this->errorMessage[$field], "Use only alphanumeric character  !");
        }

    }

    /* FUNCTION CHECK A PASSWORD REGARDING OUR CONST VARIABLE
    DECLARED AT THE BEGINING OF OUR CLASS.
    @PARAM - FIELD(STRING) - $PASS(STRING)
    @RETURN - BOLLEAN
    */

    public function checkPassword($field,$pass)
    {
        $this->errorMessage[$field] = array();
        //if empty
        if (empty(trim($pass))) {
            array_push($this->errorMessage[$field], "Login can't be empty !");
        }

        // if is form is according to our max and min
        if (strlen($pass) < MINPASSWORD || strlen($pass) > MAXPASSWORD) {
            array_push($this->errorMessage[$field], "Your login must count at least " . MINPASSWORD . " character and at most " . MAXPASSWORD . "  !");
        }
        // if we have some incorrect data
        if (!(preg_match(PATTERNPASSWORD,$pass))) {
            array_push($this->errorMessage[$field], "Use only alphanumeric character and some symbols(!*$!#&@)<br>Your password must have at least one number.");
        }
    }
    /*FUNCTION THAT DISPLAY A ERROR FIELD IF  EXIST
    @PARAM $INDEX(NAME OF FIELD TO CHECK) STRING
    @RETURN STRING(HTML FIELD)
    */
    public function displayError($index){
        //var_dump($this->errorMessage);
        if(array_key_exists($index,$this->errorMessage)){
            foreach ($this->errorMessage[$index] as $key => $value) {
                return "<p class=\"text-danger\">".$value."</p>";
            };
        }
    }


}