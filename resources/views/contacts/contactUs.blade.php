@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h4>Contact us</h4>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contactUs.send') }}" method="POST" name="contact-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email"><i class="far fa-envelope"></i> Email</label>
                        <input type="email" value="{{ old('email') }}" required="required" class="form-control" name="email" id="email" placeholder="example@example.com">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name"><i class="far fa-user"></i> Full Name</label>
                        <input type="text" value="{{ old('name') }}" required="required" class="form-control" name="name" id="name" placeholder="John Doe">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone"><i class="fas fa-mobile-alt"></i> Phone Number</label>
                        <input type="phone" value="{{ old('phone') }}" required="required" class="form-control" name="phone" id="phone" placeholder="060111222">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState"><i class="fas fa-route"></i> Which of our services are you interested in? </label>
                        <select id="services" class="form-control" name="services[]" multiple>
                            <option  @if(in_array('Tours', old('services', []))) selected @endif value="Tours" >Tours</option>
                            <option  @if(in_array('Attraction', old('services', []))) selected @endif value="Attraction" >Tourism attraction</option>
                            <option  @if(in_array('Accommodation', old('services', []))) selected @endif value="Accommodation" >Tourism accommodation</option>
                            <option  @if(in_array('Activities', old('services', []))) selected @endif value="Activities" >Tourism activities</option>
                        </select>
                        @error('services')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name"><i class="far fa-envelope-open"></i> Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Write a message" cols="30" rows="10">{{old('message')}}</textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="readTerms" @if(old('readTerms')) checked @endif type="checkbox" id="gridCheck" value="1">
                        <label class="form-check-label" for="gridCheck">
                            I read the rules
                        </label>
                        
                    </div>
                    @error('readTerms')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Send the message <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </div>

@endsection