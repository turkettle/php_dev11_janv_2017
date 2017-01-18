<?php
/**
 * Created by PhpStorm.
 * User: aston
 * Date: 18/01/17
 * Time: 15:20
 */

$transport = Swift_SmtpTransport::newInstance('mail.server.com', 1025);

$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(array('john@doe.com' => 'John Doe'))
    ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);