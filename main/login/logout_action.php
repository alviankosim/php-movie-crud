<?php

//include input helper
include "../../utils/inputhelper.php";

//Delete session
session_start();
session_destroy();
redirect('');