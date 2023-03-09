<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>

<body>
    @include('layouts.navbar')
    <section class="advisory">
        <div class="container">
            <div class="card  bg-secondary">
                <div class="card-header bg-dark text-light">
                    <h2>POWER INTERRUPTIONS</h2>
                    <div class="col-12 text-right">
                        <a href="{{url('addint')}}" class="btn btn-sm btn-primary">Create Interruptions</a>
                    </div>
                </div>
                @foreach ($interruptions as $int)
                <div class="container mb-2">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="advisory-title text-center">{{$int->created_at->isoFormat('MMMM d, Y')}}</h4>
                        </div>
                        <hr class="mb-2">
                        <div class="container">
                            <p><strong>WHAT:</strong> {{$int->what}}</p>
                            <p><strong>WHEN:</strong> {{$int->dateTime}}</p>
                            <p><strong>WHERE:</strong> {{$int->where}}</p>
                            <p><strong>WHY:</strong> {{$int->why}}</p>
                            </p>
                        
                            <p class="text-center">
                                We sincerely apologize for the inconvenience this will bring you. We
                                request
                                your patience and understanding on this matter. Rest assured that our team will exert best
                                effort to restore the power the soonest possible time.
                                For further queries, please call our hotline numbers at <strong> 09177147493 </strong> or <strong> 09199950240</strong>
                            </p>
                        </div>
                        <div class="card-footer text-center ">
                            <a href="{{ route('int.edit', $int) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('int.destroy', $int) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete this?') ? this.parentElement.submit() : ''">Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer py-4">
            <div class="d-flex justify-content-center">
                {{ $interruptions->links() }}
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
        <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'>
    </script>
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
</body>

</html>

