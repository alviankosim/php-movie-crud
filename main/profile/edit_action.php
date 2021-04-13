<?php

/**
 * edit_action.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include inputhelper
include "../../utils/inputhelper.php";
//Include gen helper
include "../../utils/genhelper.php";

//Check islogin
checklogin();

if (daPost('submit')) {
    if (daPost('password') == daPost('password_conf')) {
        $id = my_sess('id');

        //Updating
        $dataUpdate = array(
            md5(daPost('password')),
            $id
        );

        $statement = $mysqli->prepare("
            UPDATE `user` SET password=? WHERE `id`=?
        ");
        $statement->bind_param('si', ...$dataUpdate);
        $statement->execute();
        if (!$mysqli->errno && $statement->affected_rows) {
            set_message('success', "Successfully edit user profile, you can check the changes now!");
        } else {
            set_message('error', $mysqli->error);
        }
    }

}

redirect('main/profile');