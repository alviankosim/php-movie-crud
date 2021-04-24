<?php

/**
 * login_action.php
 * author: @alviankosim
 */

//Include input helper
include "../../utils/inputhelper.php";
//Include db helper
include "../../utils/dbconnection.php";

//Validating
if (daPost('submit')) {

    //Querying
    $username = daPost('username');
    $password = daPost('password');

    $statement = $mysqli->prepare("
        SELECT * FROM `user` WHERE username = ?
    ");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement_result = $statement->get_result();
    if (!$statement->errno && $statement_result->num_rows > 0) {
        $result = $statement_result->fetch_array();
        
        if ($result['password'] == md5($password)) {

            $daSession = array(
                'id' => $result['id'],
                'username' => $result['username']
            );
            //if he's admin
            if ($result['is_admin']) {
                $daSession['is_admin'] = true;
            } else {
                $daSession['is_admin'] = false;
            }

            $_SESSION['user_data'] = $daSession;

            //redirect ke home
            redirect('');
        } else {
            set_message('error', "Your password is wrong");
        }

    } else {
        set_message('error', $statement->error ?? "Please check your username");
    }

}

redirect('main/login');