@extends('layouts.front')
@section('title', 'Contact | ' . $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('css')

@endsection
@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{route('index')}}">Home</a>
                <span class="breadcrumb-item active">Contact</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12 bg-light">
            {!! $setting->contact !!}
        </div>
    </div>
</div>



<!-- Contact Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                @include('home.messages')
                <form name="sentMessage" action="{{route('storemessage')}}" method="post">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone"
                            required="required" data-validation-required-message="Please enter your phone" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                            required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control input" type="text"  name="message" rows="8" placeholder="Message"
                            required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit"> Send Message </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-30 mb-30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.9768456895617!2d27.12612507568247!3d38.41889997183018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd8e22ff7592d%3A0xc3bdd7b1feef0b7a!2zS2VtZXJhbHTEsSDDh2FyxZ_EsXPEsSwgxLB6bWlyIFNhYXQgS3VsZXNpLCAzNTM2MCBLb25hay_EsHptaXI!5e0!3m2!1str!2str!4v1685981127612!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Konak., İzmir, TURKEY</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>yigittabak@example.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+090 587 732 7748</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
@section('js')

@endsection
