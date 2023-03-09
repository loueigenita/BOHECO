<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body>

@include('layouts.navbar')

    <section class="news" id="addnews">

        <div class="container">
            <div class="card">
                <div class="card-heade text-center text-light bg-dark">
                    <h2>ADD LATEST NEWS</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 ">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                </div>
                            </div>

                            
                           
                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Article</label>
                                        <textarea class="form-control" rows="3" name="article"  placeholder="Article"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <label class="col-form-label">Date</label>
                                <div class="col-5 mb-4">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" name="dateTime" id="dateTime" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fas fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" onchange="preview()" multiple>
                                </div>
                                <img id="frame" class="img-fluid" src="" alt="No Available Image">
                            </div>

            
                            <button type="submit" class="btn btn-sm btn-primary mt-5">Submit</button>
                            <a href="{{ route('news.index') }}" class="btn btn-sm btn-warning mt-5">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .input-group-append {
            cursor: pointer;
        }
    </style>
    

    @include('layouts.footer')

    <script>
        function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'MM d, yyyy',
            locale: 'en'
        });
    </script>
        
    <script src="{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('resources/Magnific-Popup-master/dist/jquery.magnific-popup.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('resources/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- Custom Js --}}
    <script src="{{asset('js/script.js')}}">
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://boheco1.com/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=1.11'></script>


</html>