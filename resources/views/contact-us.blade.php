@extends('layout')
@section('content')
    <main class="main">
        <header class="contacts__header">
            <h3 class="contacts__title">Contact Us</h3>
        </header>

        <section class="section contacts__input">
            <div class="contacts__input-inner">
                <input type="name" placeholder="first name" class="contacts__input-name">
                <input type="lastname" placeholder="last name" class="contacts__input-lastname">
            </div>
            <div class="contacts__input-inner">
                <input type="text" placeholder="email" class="contacts__input-email">
                <input type="text" placeholder="phone" class="contacts__input-phone">
            
                
            </div>
            <div class="contacts__input-inner">
                <textarea class="contacts__input-textarea" name="message" id="" placeholder="write a message" cols="10" rows="10"></textarea>
            </div>
            <button class="contacts__input-btn">Send</button>
            <div class="contacts__data">
                <a href="tel:+37367611711" class="contacts__data-item">Phone: +373 67611711</a>
                <a href="emailto:Orheiulvechireserve@gmail.com" class="contacts__data-item">Email: Orheiulvechireserve@gmail.com</a>
                <a href="emailto:Contabilrcnorheiulvechi@gmail.com" class="contacts__data-item">Email: Contabilrcnorheiulvechi@gmail.com</a>
                <a href="fax:+37323556042" class="contacts__data-item">Fax: +373 23556042</a>
            </div>
        </section>
    </main>
@endsection