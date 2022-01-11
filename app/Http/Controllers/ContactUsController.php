<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contacts.contactUs');
    }
    public function send(ContactUsRequest $request): RedirectResponse
    {
        dd($request->all());
        return redirect()->route('contactUs');
    }
}