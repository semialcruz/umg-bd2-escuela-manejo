<?php

/**
 * Clase: Login
 * Aqui se gestiona el ingreso, egreso y la sesión de los usuarios
 *
 * @author Sergio Alvarado - salvaradoc7@miumg.edu.gt
 * @version 1.0
 * */

class login
{
    private $user = '';                 // Nombre del usuario
    private $email = '';                // Correo electrónico del usuario
    private $password = '';             // Contraseña del usuario
    private $pass_hash = '';            // Contraseña codificada
    private $user_is_logged_in = '';       // Estado del ingreso del usuario

    private $connection = null;         // Conexión a la base de datos

    public $view_user = '';
    public $view_email = '';

    public $errors = array();
    public $messages = array();

    /**
     * Constructor de la clase Login
     * Esta función inicia automáticamente cuando un objeto de esta clase se crea
     * */
    public function __construct(){

        if( FORCE_HTTPS && $_SERVER["HTTPS"] != "on" ){
            header("HTTP/1.1 301 Moved Permanently");
            header("Location https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
            exit();
        }

        session_start();

        if (isset($_COOKIE["user"])){
            $this->view_user = strip_tags($_COOKIE["user"]);
        }else{
            $this->view_user = "Usuario";
        }

        if (isset($_COOKIE["email"])){
            $this->avatar_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($_COOKIE['email']))) . "?d=mm&s=125";
        }else{
            $this->avatar_url = "http://www.gravatar.com/avatar/" . md5("xxxxxx@xxxxxxxxxx.com") . "?d=mm&s=125";
        }

        if (isset($_GET["logout"])){

            $this->doLogout();

        }/*elseif ( (isset($_SESSION["user_logged_in"])) && ($_SESSION["user_logged_in"] == 1) ){

            if ($this->connect_to_db($db)){
                $this->validate_user_logged();
            }

        }*/

        if (isset($_POST["login"])){
            if (empty($_POST["user"]) || empty($_POST["password"])){
                $this->errors[] = 'Campos "Nombre de usuario" y/o "Contraseña" están vacíos';
                $this->doLogout();
            }/*elseif ($nonce->isValid()){
                if ($this->connect_do_db($db)){
                    $this->login();
                }
            }*/else{
                $this->doLogout();
            }
        }elseif (isset($_POST["register"])){
            if (PUBLIC_REGISTER !== TRUE && !$this->user_is_logged_in){
                $this->errors[] = 'El registro está deshabilitado';
                return;
            }/*elseif ($nonce->isValid()){
                if ($this->connect_to_db($db)){
                    $this->registerNewUser();
                }else{
                    $this->doLogout();
                }
            }*/
        }

    }

    private function login(){

        $q = "SELECT usuario, email, contrasenia FROM usuarios WHERE usuario ? ";
        $p = array($this->user);
        $o = array("Scrollable"=>SQLSRV_CURSOR_KEYSET);

        $this->user = $this->connection->real_escape_string($_POST['user']);
        $check = $this->connection->sqlsrv_query($q,$p,$O);

        if ($check->sqlsrv_num_rows() == 1){
            $result_row = $check->sqlsrv_fetch_object();

            //TODO: Cambiar contrasenia por hash
            if ($_POST["password"] == $result_row->contrasenia){

                $_SESSION['name'] = $result_row->usuario;
                $_SESSION['email'] = $result_row->email;
                $_SESSION['user_logged_in'] = 1;

                $_SESSION['agent'] = $_SERVER['HTTP_USER_AGENT'] ;
                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
                $_SESSION['count'] = 0;

                setcookie("user", $result_row->user, time() + (3600*24*100));
                setcookie("email", $result_row->email, time() + (3600*24*100));
                $this->user_is_logged_in = true;
                return true;

            }else{

                $this->errors[] = "Usuario y/o contraseña inconrrectos. Intente de nuevo";
                $this->login_delay();
                return false;

            }
        }else{

            $this->errors[] = "Usuario y/o contraseña inconrrectos. Intente de nuevo";
            $this->login_delay();
            return false;

        }

    }

    private function register(){

    }

    private function validate_user_logged(){

        if (( $_SESSION['agent'] == $_SERVER['HTTP_USER_AGENT'] ) && ($_SESSION['ip'] == $_SERVER['REMOTE_ADDR'])){
            session_regenerate_id();
            $this->user_is_logged_in = true;
        }else{
            $this->doLogout();
        }

    }

    public function doLogout(){

        if(isset($_SESSION)){
            $_SESSION = array();
            session_regenerate_id();
        }
        $this->user_is_logged_in = false;

    }

    public function isUserLoggedIn(){
        return $this->user_is_logged_in;
    }

    public function displayRegisterPage() {
        if (isset($_GET["register"])) {
            return true;
        }else{
            return false;
        }
    }

    private function login_delay(){
        sleep(LOGIN_FAIL_DELAY);
    }

    private  function connect_to_db($db){
        if ($this->connection === NULL){
            $this->connection = $db->getDatabaseConnection();
            if ($this->connection == FALSE) {
                $this->errors[] = 'No hay conexión a la base de datos';
            }
        }
        return $this->connection;
    }

}