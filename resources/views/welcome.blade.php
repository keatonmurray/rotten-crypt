<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <title>{{config('app.name')}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/5dfbc71075.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link href="https://fonts.cdnfonts.com/css/djb-werecow-of-danville" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/the-bold-font" rel="stylesheet">                
        <title>{{config('app.name')}}</title>
    </head>
    <body>
        <div id="main">
            @include('partials.navbar')
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-1 d-block top-0">
                    <div class="col-10 col-sm-8 col-lg-6"></div>
                        <div class="col-lg-6">
                            <h1 class="display-1 fw-bold gs-2 lh-1 mb-3 text-white" id="danville">Welcome to the Crypt!</h1>
                            <p class="lead fs-5 text-white" id="danville">Death Metal release updates, news, music videos, live shows, podcasts, and more. </p>
                            <br>
                            <div class="d-grid justify-content-md-start">
                                <a href="" type="button" class="btn btn-light btn-lg px-4 me-md-2">
                                <span id="danville">
                                    <i class="fa-solid fa-circle-play"></i>  Browse Music
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image mx-3 d-block my-2">
                    <img src="{{asset('assets/images/riddick.png')}}">
                </div>
            </div>
        </div>
    </body>
</html>