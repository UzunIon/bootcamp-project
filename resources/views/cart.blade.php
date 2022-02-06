@extends('layout')

@section('content')
<div class="card">
    <div class="row">
        <div class="col cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 44.00 </div>
                    <div class="col close text-center">&#10005;</div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 25.00 </div>
                    <div class="col text-center close">&#10005;</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 60.00 </div>
                    <div class="col text-center close">&#10005;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-column justify-content-center cart__summary">
            <div>
                <h5 class="cart__summary_title"><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col text-center" >ITEMS 3</div>
                <div class="col text-center">&euro; 132.00</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col text-center">TOTAL PRICE</div>
                <div class="col text-center">&euro; 137.00</div>
            </div> 
            <button class="summary__btn">ORDER</button>
        </div>
    </div>
    <div class="back-to-shop"><a href="{{ route('tourism') }}">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
</div>
@endsection