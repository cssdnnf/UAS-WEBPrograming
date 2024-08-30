<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception; 

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Jika Anda menggunakan PHPMailer sebagai library CodeIgniter:
        // $this->load->library('phpmailer_lib'); 
    }

    public function send_email() {
        // Ambil data dari form
        $name = $this->input->post('name');
        $to = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // Buat instance PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Konfigurasi server
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'vikram.gfireservers.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@terbawasuasana.com';
            $mail->Password   = 'Admin7299!@#';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Penerima
            $mail->setFrom('info@terbawasuasana.com', 'Web Design TAU');
            $mail->addAddress($to);

            // Konten
            $mail->isHTML(true);
            $mail->Subject = $name." - ".$subject;
            $mail->Body    = $message;

            $mail->send();
            echo 'Email telah dikirim';
            redirect('/');
        } catch (Exception $e) {
            echo "Email tidak dapat dikirim. Mailer Error: {$mail->ErrorInfo}";
            redirect('/');
        }
    }
}
?>
