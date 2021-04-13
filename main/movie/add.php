<?php

/**
 * add.php
 * author: @alviankosim
 */

//Include db helper
include "../../utils/dbconnection.php";
//Include input helper
include "../../utils/inputhelper.php";
//Include genhelper
include "../../utils/genhelper.php";

//Check islogin
checklogin();

include "../../views/layout/header.php";
include "../../views/movieAdd.php";
include "../../views/layout/footer.php";