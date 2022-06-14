<?php

class Flash {

    public static function setFlash($name, $val) {
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION['flash'] = [
                'name' => $name,
                'val' => $val
            ];
        } else return false;
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            $alert_name = $_SESSION['flash']['name'] == 'success' ? 'alert-success' : 'alert-danger';
            echo '<div class="alert '. $alert_name .' m-0 mt-3 py-2 px-4 w-100" role="alert" style="font-size: 12px;">' . 
                    $_SESSION['flash']['val']
                . ' </div>';
            unset($_SESSION['flash']);
        } else return false;
    }

}