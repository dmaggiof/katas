<?php

class UserController
{
    public function __construct()
    {
        $this->connection = mysql_connect("localhost", "user", "password");
        mysql_select_db("ProductionDatabase", $this->connection);
    }

    /**
     * registers the user (if it doesn't exist) and returns the database id */
    public function register_and_Notify()
    {
        $user_exists = mysql_query("SELECT * from users where email = '" . $_POST['email'] . "'", $this->connection);
        if ($user_exists) {
            return mysql_fetch_assoc($user_exists)['id'];
        } else {
        // insert into database
            mysql_query("INSERT INTO users(name, email) values('" . $_POST['name'] . "', '" . $_POST['email'] . "'", $this->connection);
        // send welcome email
            mail($_POST['email'], 'Welcome to Leadtech', "Hello $_POST['name'], thanks for registering on our site. <br>Regards, Leadtech Team");
        // return user id
        return mysql_insert_id();
        }
    }
}