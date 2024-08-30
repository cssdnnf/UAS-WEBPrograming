<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('assets/PHPMailer/src/Exception.php');
require_once('assets/PHPMailer/src/PHPMailer.php');
require_once('assets/PHPMailer/src/SMTP.php');

class Phpmailer_lib {
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load() {
        // Buat instance PHPMailer
        $mail = new PHPMailer(true);
        return $mail;
    }
}
