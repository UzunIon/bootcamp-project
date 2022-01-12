@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h4>Contact us</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contactUs.send') }}" method="POST" name="contact-form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" value="{{ old('email') }}" required="required" class="form-control" name="email" id="email" placeholder="example@example.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Full Name</label>
                        <input type="text" value="{{ old('name') }}" required="required" class="form-control" name="name" id="name" placeholder="John Doe">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="phone" value="{{ old('phone') }}" required="required" class="form-control" name="phone" id="phone" placeholder="060111222">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Which of our services are you interested in? </label>
                        <select id="services" class="form-control" name="services[]" multiple>
                            <option  @if(in_array('tours', old('services', []))) selected @endif value="tours" >Tours</option>
                            <option  @if(in_array('attraction', old('services', []))) selected @endif value="attraction" >Tourism attraction</option>
                            <option  @if(in_array('accommodation', old('services', []))) selected @endif value="accommodation" >Tourism accommodation</option>
                            <option  @if(in_array('activities', old('services', []))) selected @endif value="activities" >Tourism activities</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Write a message" cols="30" rows="10">{{old('message')}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="readTerms" @if(old('readTerms')) checked @endif type="checkbox" id="gridCheck" value="1">
                        <label class="form-check-label" for="gridCheck">
                            I read the rules
                        </label>
                    </div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Send the message</button>
            </form>
        </div>
    </div>

@endsection