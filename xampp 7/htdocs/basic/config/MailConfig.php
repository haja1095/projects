<?php
/**
 * Created by PhpStorm.
 * User: karthik.venugopal
 * Date: 6/30/2016
 * Time: 11:21 AM
 */
class MailConfig
{
    const SMTP_host = "10.100.1.22";
    const SMTP_port = "25";
    const SMTP_username = "voiztrail";
    const SMTP_password = "Voiz@123";

    public static function getSMTPConnection()
    {
        return [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => self::SMTP_host,
                'username' => self::SMTP_username,
                'password' => self::SMTP_password,
                'port' => self::SMTP_port,
            ],
        ];
    }
}