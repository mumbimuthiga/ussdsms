<?php
class Menu{
    protected $text;
    protected $sessionId;

    function __construct($text, $sessionId){
        $this->text = $text;
        $this->sessionId = $sessionId;
    }

    public function mainMenuRegistered(){
        //User who have Registered
    }
    public function mainMenuUnRegistered(){
        //User who have unRegistered
    }
    public function registerMenu(){
        //Register User
    }
    public function sendMoneyMenu(){
        //Send Money Menu
    }
    public function withdrawMoneyMenu(){
        //Withdraw Menu
    }
    public function checkBalanceMenu(){
        //Check Balance Menu
    }


}
?>