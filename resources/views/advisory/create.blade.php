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

   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>

    <section class="advisory">

        <div class="container">
            <div class="card">
                <div class="card-heade text-center text-light bg-dark">
                    <h2>ADD LATEST ADVISORY</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('advisory.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 ">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Place</label>
                                        <input type="text" class="form-control @error('place') is-invalid @enderror" name="place" placeholder="Place"  value="{{old('place')}}">
                                    </div>
                                    @error('place')
                                    <span>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    </span>

                                        @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Date</label>
                                        <input type="text" class="form-control @error('dateTime') is-invalid @enderror" name="dateTime" id="dateTime"  value="{{old('dateTime')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Information</label>
                                        <textarea class="form-control @error('info') is-invalid @enderror " rows="8" name="info" placeholder="Information">{{old('info')}}</textarea>
                                    </div>
                                    @error('info')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>



                            <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
                            <a href="{{ route('advisory.index') }}" class="btn btn-sm btn-warning mt-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
          $('input[id="dateTime"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1900,
            maxYear: parseInt(moment().format('YYYY'),10)


          });

        });
    </script>

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

    <script type='text/javascript' src='https://boheco1.com/wp-content/plugins/tablepress/js/jquery.datatables.min.js?ver=1.11'></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>
