@extends('main.layout')
@section('content')
    <div class="container col-xxl-8 px-4 py-0">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 d-block">
            <div class="col-10 col-sm-8 col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="display-1 fw-bold gs-2 lh-1 mb-3 text-white" id="danvilleRed">Welcome to the Crypt!</h1>
                    <p class="lead fs-5 text-white" id="danville">Death Metal release updates, news, music videos, live shows, podcasts, and more. </p>
                    <br>
                    <div class="d-grid justify-content-md-start">
                        <a href="/discographies" type="button" class="btn btn-light btn-lg px-4 me-md-2">
                        <span id="danville">
                            <i class="fa-solid fa-circle-play"></i>  Browse Music
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image d-block mx-5 mt-1">
            <img src="{{asset('assets/images/riddick.png')}}">
        </div>
    </div>
@endsection