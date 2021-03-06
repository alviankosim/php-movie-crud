<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/**
 * genhelper.php
 * author: @alviankosim
 */

if (!function_exists('my_sess')) {
    function my_sess($index)
    {
        if (isset($_SESSION['user_data'])) {
            return $_SESSION['user_data'][$index];
        } else {
            return null;
        }
    }
}

if (!function_exists('base_url')) {
    /**
     * Function untuk mendapatkan base url dari website
     * @param string path
     * @return string url
     * @author alviankosim
     */
    function base_url($extra = "")
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
        $host  = $_SERVER['HTTP_HOST'] . '/movie';
        return "$protocol$host/$extra";
    }
}

if (!function_exists('print_stars')) {
    /**
     * Function untuk dapatkan output bintang sesuai jumlah yang dimasukkan
     * @param int stars
     * @author alviankosim
     */
    function print_stars($stars_count)
    {
        $stars = "⭐";
        return str_repeat($stars, $stars_count);
    }
}

if (!function_exists('censor_name')) {
    /**
     * Function untuk dapatkan output username yang disensor
     * @param string username
     * @author alviankosim
     */
    function censor_name($username)
    {
        return substr($username, 0,3) . "*****";
    }
}

if (!function_exists('checklogin')) {
    /**
     * Function untuk cek login
     * @author alviankosim
     */
    function checklogin()
    {
        if (my_sess('username')) {
            //kali aja dibutuhin nanti
        } else {
            header("HTTP/1.1 401 Unauthorized");
            echo "Not authorized";
            exit();
        }
    }
}

if (!function_exists('checkIsAdmin')) {
    /**
     * Function untuk cek login apakah dia admin
     * @author alviankosim
     */
    function checkIsAdmin()
    {
        if (my_sess('is_admin')) {
            //kali aja dibutuhin nanti
        } else {
            header("HTTP/1.1 401 Unauthorized");
            echo "Not authorized";
            exit();
        }
    }
}