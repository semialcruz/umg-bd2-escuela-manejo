<?php

!defined('APPLOGIN_LOCATION') ? define('APPLOGIN_LOCATION', ''): TRUE ;

require_once(APPLOGIN_LOCATION.'config/config.php');
require_once(APPLOGIN_LOCATION.'classes/database.php');
require_once(APPLOGIN_LOCATION.'classes/login.php');

class APPlogin
{

    private $errors = array();
    private $messages = array();
    protected $db;
    private $login;

    public function __construct(){
        $this->db    = new database();
        $this->login = new login($this->db);
    }




    public function add_error($error){
        $this->errors[] = $error;
    }


    public function add_message($message){
        $this->messages[] = $message;
    }

    public function display(){
        if ($this->login->displayRegisterPage()) {
            include(APPLOGIN_LOCATION.'views/header/header.php');
            //include(APPLOGIN_LOCATION.'views/login/register.php');
            $this->display_messages();
            echo "</body></html>".PHP_EOL;
            exit(0);

        } elseif ($this->login->isUserLoggedIn() === TRUE) {
            include(APPLOGIN_LOCATION.'views/header/header.php');
            include(APPLOGIN_LOCATION.'views/panels/dashboard.php');
            include(APPLOGIN_LOCATION.'views/footer/footer.php');

        } else {
            include(APPLOGIN_LOCATION.'views/header/header.php');
            include(APPLOGIN_LOCATION.'views/login/not_logged_in.php');
            $this->display_messages();
            //echo "</body></html>".PHP_EOL;
            include(APPLOGIN_LOCATION.'views/footer/footer.php');
            exit(0);
        }
    }

    private function display_messages(){
        $errors = array_merge($this->login->errors, $this->errors);
        $messages = array_merge($this->login->messages, $this->messages);

        foreach ($errors as $error) {
            echo '<div class="login_message error">'.PHP_EOL;
            echo $error.PHP_EOL;
            echo '</div>'.PHP_EOL;
        }

        foreach ($messages as $message) {
            echo '<div class="login_message success">'.PHP_EOL;
            echo $message.PHP_EOL;
            echo '</div>'.PHP_EOL;
        }

        $this->login->errors = array();
        $this->login->messages = array();
        $this->messages = array();
        $this->errors = array();
    }


    function __destruct(){
        $this->display_messages();
    }

}