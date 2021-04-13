<?php

/**
 * register_action.php
 * author: @alviankosim
 */

//Include input helper
include "../../utils/inputhelper.php";
//Include db helper
include "../../utils/dbconnection.php";

//Validating
if (daPost('submit')) {
    
    if (daPost('password') == daPost('password_conf')) {
        $dataInsert = array(
            daPost('username'),
            md5(daPost('password')),
            date('Y-m-d H:i:s')
        );
    
        //Inserting
        $statement = $mysqli->prepare("
            INSERT INTO `user`(username,password,created_date) VALUES(?,?,?)
        ");
        $statement->bind_param('sss', ...$dataInsert);
        $statement->execute();
        if (!$mysqli->errno && $statement->affected_rows) {
            set_message('success', "Successfully created new user, you can login now");
        } else {
            set_message('error', $mysqli->error);
        }
    } else {
        set_message('error','Confirmation password is not same');
    }

}

redirect('main/register');