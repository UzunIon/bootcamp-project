<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactUsRequest;
use App\Services\ContactUsMailer;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contacts.contactUs');
    }
    public function send(ContactUsRequest $request, ContactUsMailer $mailer): RedirectResponse
    {
        $callback = function (string $test): string{
            return "{$test} input";
        };

        $data = $request->validated();
        \Log::debug($callback('test'), $data);
        $mailer->send($data);

        return redirect()->route('contactUs')->withInput($data);
    }
}