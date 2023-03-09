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
    
    </head>
    <body>
        
        @include('layouts.navbar')
    
    
        <section class="advisory">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h2>POWER INTERRUPTIONS</h2>
                        <div class="col-12 text-right">
                            <a href="{{url('addint')}}" class="btn btn-sm btn-primary">Create Interruptions</a>
                        </div>
                    </div>

                    @foreach ($interruptions as $int)
                    <div class="card-body">
                        <h4 class="advisory-title text-center">{{$int->created_at}}</h4>
                        <p>
                          <p>WHAT: <br>{{$int->what}}</p>
                          <p>WHEN: <br>{{$int->dateTime}}</p>
                          <p>WHERE: <br>{{$int->where}}</p>
                          <p>WHY: <br>{{$int->why}}</p>
                        </p>
                      </div>
                      <div class="card-footer">
                        <p class="text-center">We sincerely apologize for the inconvenience this will bring you. We request your patience and understanding on this matter. Rest assured that our team will exert best effort to restore the power the soonest possible time.
                            For further queries, please call our hotline numbers at 09177147493 or 09199950240</p>
                      </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer py-4">
                <div class="d-flex justify-content-center">
                    {{ $interruptions->links() }}
                </div>
              </div>
        </div>
    </section>
    
    @include('layouts.footer')
    
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
    </body>
    </html>