<?php
namespace App\Services;

use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Psr\Log\LoggerInterface;

class ContactUsMailer
{
    private Mailer $infrastructureMailer;
    private LoggerInterface $logger;

    public function __construct(Mailer $infrastructureMailer, LoggerInterface $logger)
    {
        $this->infrastructureMailer = $infrastructureMailer;
        $this->logger = $logger;
    }

    public function send(array $data): void
    {
        $this->infrastructureMailer->send(
            'emails.contactUs', 
            [
                'email' => $data['email'],
                'name' => $data['name'],
                'phone' => $data['phone'],
                'services' => $data['services'],
                'messageText' => $data['message'],
            ],
            function(Message $message) use ($data){
                $message->subject('Message from customer ' . $data['email']);
                $message->to('tech@baloon.com');
                $message->from('no-replay@baloon.app', 'Baloon mailer');
            }
        );
        $this->logger->info('Contact us mail send to tech@baloon.com');
    }

}