<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Mail\Message;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contacts.contactUs');
    }
    public function send(ContactUsRequest $request): RedirectResponse
    {
        $callback = function (string $test): string{
            return "{$test} input";
        };

        $data = $request->validated();
        \Log::debug($callback('test'), $data);
        \Mail::send(
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

        return redirect()->route('contactUs')->withInput($data);
    }
}