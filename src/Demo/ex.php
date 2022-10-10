<?php

class User
{
    private $mail;
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function sendMail($username)
    {
        $this->mail->sendMail($username);
    }
}

class Mail
{
    private $mailSender;
    public function __construct(MailSender $mailSender)
    {
        $this->mailSender = $mailSender;
    }

    public function sendMail($username)
    {
        $this->mailSender->send($username);
    }
}

class MailSender
{
    public function send($username)
    {
        echo "Email was sent to  ${username} \n";
    }
}




$instance = new User(new Mail(new MailSender()));
$instance->sendMail("alex");