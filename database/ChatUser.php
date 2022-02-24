<?php

class ChatUser
{
    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_profile;
    private $user_status;
    private $user_create_on;
    private $user_varification_code;
    private $user_login_status;
    public $connect;

    public function __construct()
    {
        require_once('Database_connection.php');

        $database_obj = new Database_connection;

        $this->connect = $database_obj->connect();
    }

    function getUserId()
    {
        return $this->user_id;
    }

    function setUserName($user_name)
    {
        return $this->user_name = $user_name;
    }

    function setUserEmail($user_email)
    {
        return $this->user_email = $user_email;
    }

    function setUserPassword($user_password)
    {
        return $this->user_password = $user_password;
    }

    function setUserProfile($user_profile)
    {
        return $this->user_profile = $user_profile;
    }

    function setUserStatus($user_status)
    {
        return $this->user_status = $user_status;
    }

    function setUserCreateOn($user_create_on)
    {
        return $this->user_create_on = $user_create_on;
    }

    function setUserVerification($user_varification_code)
    {
        return $this->user_varification_code = $user_varification_code;
    }

    function setUserLoginStatus($user_login_status)
    {
        return $this->user_login_status = $user_login_status;
    }

    function make_avatar($character)
    {
        $path = "imeges/".time().".png";
    
    }

}

?>