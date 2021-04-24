<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/**
 * inputhelper.php
 * author: @alviankosim
 */

function _daInput($type, $index){

    if ($type == 'post') {
        $method = $_POST;
    } else {
        $method = $_GET;
    }

    if (isset($method) && isset($method[$index])) {
        return $method[$index];
    } else {
        return null;
    }
}

/**
 * Function untuk mendapatkan $_POST dengan aman (null and undefined safe)
 * @param string
 * @author alviankosim
 */
function daPost($index){
    return _daInput('post',$index);
}
/**
 * Function untuk mendapatkan $_GET dengan aman (null and undefined safe)
 * @param string
 * @author alviankosim
 */
function daGet($index){
    return _daInput('get',$index);
}

/**
 * Function untuk redirect url ketika ada error atau lainnya
 * @param string
 * @author alviankosim
 */
function redirect($path)
{
    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
    $host  = $_SERVER['HTTP_HOST'] . '/movie';
    $extra = $path;
    header("Location: $protocol$host/$extra");
    exit();
}

/**
 * Function untuk mengisi message
 * @param string $type
 * @param string $message
 * @author alviankosim
 */
function set_message($type, $message)
{
    $dataSession = array(
        'type' => $type,
        'message' => $message
    );
    $_SESSION['message'] = $dataSession;
}

/**
 * Function untuk menampilkan message
 * @return void
 */
function show_message()
{
    $return = "";
    if (isset($_SESSION) && isset($_SESSION['message'])) {
        $return =  '
        <div class="alert '. $_SESSION['message']['type'] .'">
            <span>'. ucfirst($_SESSION['message']['type']) .'</span>
            <p>'. $_SESSION['message']['message'] .'</p>
        </div>
        ';
        unset($_SESSION['message']);
    }

    return $return;
}