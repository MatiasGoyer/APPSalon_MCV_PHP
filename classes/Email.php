<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $token;


    public function __construct($email,$nombre,$token)
    {
        $this->email=$email;
        $this->nombre=$nombre;
        $this->token=$token;
    }

    public function enviarConfirmacion(){
        $mail= new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'Appsalon.com');
        $mail->Subject='Confirma tu cuenta';

        //Utilizar html
        $mail->isHTML(TRUE);
        $mail->CharSet='UTF-8';
        
        $contenido="<html>";
        $contenido.= "<p><strong>Hola ". $this->nombre ."</strong> has creado tu cuenta correctamente en App salon, solo debes confirmarla presionando en el siguiente enlace.</p>";
        $contenido.= "<p>Presiona aqui: <a href='" . $_ENV['APP_URL'] . "/confirmar-cuenta?token=". $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido.= "<p>Si tu no solicitaste esta cuenta, ignora este mensaje</p>";
        $contenido.= "</html>";
        $mail->Body=$contenido;

        $mail->send();
    }

    public function enviarInstrucciones(){
         //Crear el objeto de mail
         $mail= new PHPMailer();
         $mail->isSMTP();
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];
 
         $mail->setFrom('cuentas@appsalon.com');
         $mail->addAddress('cuentas@appsalon.com', 'Appsalon.com');
         $mail->Subject='Reestablece tu password';
 
         //Utilizar html
         $mail->isHTML(TRUE);
         $mail->CharSet='UTF-8';
         
         $contenido="<html>";
         $contenido.= "<p><strong>Hola ". $this->nombre ."</strong> has solicitado reestablecer tu password, ingresa al siguiente enlace para continuar.</p>";
         $contenido.= "<p>Presiona aqui: <a href='" . $_ENV['APP_URL'] . "/recuperar?token=". $this->token . "'>Reestablecer cuenta</a></p>";
         $contenido.= "<p>Si tu no solicitaste esta cuenta, ignora este mensaje</p>";
         $contenido.= "</html>";
         $mail->Body=$contenido;
 
         $mail->send();
    }
}