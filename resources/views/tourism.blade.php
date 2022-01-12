@extends('layout')
@section('content')
    <main class="main">
        <div class="container">
            <header class="tourism__header">
                <h3 class="tourism__title">Tourism Orhei</h3>
                <ul class="tourism__list">
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link active">All</a>
                    </li>
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link">Visiting Rules</a>
                    </li>
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link">Tourist Attractions</a>
                    </li>
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link">Tourist Routes</a>
                    </li>
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link">Accommodation</a>
                    </li>
                    <li class="tourism__list-item">
                        <a href="#" class="tourism__list-item__link">Activities</a>
                    </li>
                </ul>
            </header>

            <section class="section tourism__attraction">
                <h4 class="section-title tourism__attraction-title">Tourism attraction</h4>
                <div class="tourism__content-outer">
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Schitul Rupestru Pestera</h6>
                        <p class="tourism__content-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem repellendus aspernatur, delectus officia rem? </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Muzeul "Casa țărănească din sec XIX"</h6>
                        <p class="tourism__content-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis corporis explicabo veniam! Maxime. </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Muzeul de arheologie și antropologie</h6>
                        <p class="tourism__content-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fuga numquam sed esse quo architecto officia dolor! </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Baia Medievală Nr.2</h6>
                        <p class="tourism__content-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor facilis unde distinctio, quos libero corrupti esse accusamus recusandae. </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Palatul Pârcălabului</h6>
                        <p class="tourism__content-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, eius? Voluptas, earum. </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                    <div class="tourism__content-item">
                        <h6 class="tourism__content-title">Mănăstirea Rupestră Bosie</h6>
                        <p class="tourism__content-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita vero praesentium esse dolor, tempora voluptatum debitis. </p>
                        <a href="#" class="tourism__content-link">Explore</a>
                    </div>
                </div>
            </section>

            <section class="section tourism__accommodation">
                <h4 class="section-title tourism__accommodation-title">Tourism accommodation</h4>
                <div class="tourism__accommodation-outer">
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/eco-resort-butuceni.jpg" alt="" class="tourism__accommodation-item__img">
                        <br class="tourism__accommodation-item__title">Eco Resort</br> Butuceni</h6>
                    </a>
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/valea-stincii-2.jpg" alt="" class="tourism__accommodation-item__img">
                        <h6 class="tourism__accommodation-item__title">VALEA STÂNCII</h6>
                    </a>
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/casa-din-lunca-scaled.jpg" alt="" class="tourism__accommodation-item__img">
                        <h6 class="tourism__accommodation-item__title">Casa din Luncă</h6>
                    </a>
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/vila-roz.jpg" alt="" class="tourism__accommodation-item__img">
                        <h6 class="tourism__accommodation-item__title">Vila Roz</h6>
                    </a>
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/casa-verde--scaled.jpg" alt="" class="tourism__accommodation-item__img">
                        <h6 class="tourism__accommodation-item__title">Casa Verde</h6>
                    </a>
                    <a href="#" class="tourism__accommodation-item">
                        <img src="./images/casa-de-sub-stanca-scaled.jpg" alt="" class="tourism__accommodation-item__img">
                        <h6 class="tourism__accommodation-item__title">Casa de sub Stâncă</h6>
                    </a>
                </div>
            </section>

            <section class="section tourism__activities">
                <h4 class="section-title tourism__activities-title">Tourism activities</h4>
                <div class="tourism__activities-outer">
                    <a href="#" class="tourism__activities-item">
                        <img src="" alt="" class="tourism__activities-item__img">
                        <h6 class="tourism__activities-item__title">Sport activities</h6>
                    </a>
                    <a href="#"  class="tourism__activities-item">
                        <img src="" alt="" class="tourism__activities-item__img">
                        <h6 class="tourism__activities-item__title">Nature activities</h6>
                    </a>
                    <a href="#"  class="tourism__activities-item">
                        <img src="" alt="" class="tourism__activities-item__img">
                        <h6 class="tourism__activities-item__title">Cultural-historical events</h6>
                    </a>
                </div>
            </section>

            <section class="section tourism__rules">
                <h4 class="tourism__rules-title">Orheiul Vechi reservation rules</h4>
                <div class="tourism__rules-item">
                    <h6 class="tourism__rules-item__title">Access for motor vehicles and tourists</h6>
                    <p class="tourism__rules-item__subtitle">Access for motor vehicles and tourists is allowed only on established and marked routes</p>
                </div>
                <div class="tourism__rules-item">
                    <h6 class="tourism__rules-item__title">Parking</h6>
                    <p class="tourism__rules-item__subtitle">Parking is done only in places specially designed for this purpose</p>
                </div>
                <div class="tourism__rules-item">
                    <h6 class="tourism__rules-item__title">Abandonment of waste of any kind is prohibited</h6>
                    <p class="tourism__rules-item__subtitle">Waste will only be disposed of in places specially designed for collection</p>
                </div>
                <div class="tourism__rules-item">
                    <h6 class="tourism__rules-item__title">Vegetation modification</h6>
                    <p class="tourism__rules-item__subtitle">The breaking, cutting, destruction or alteration of vegetation is strictly forbidden. To protect biodiversity, the visitor must not intervene in any way (even if motivated by good intentions) on plants, shrubs or trees</p>
                </div>
                <div class="tourism__rules-item">
                    <h6 class="tourism__rules-item__title">Deforestation</h6>
                    <p class="tourism__rules-item__subtitle">Carving on trees, rocks or cave walls is forbidden</p>
                </div>
            </section>
        </div>
    </main>
@endsection