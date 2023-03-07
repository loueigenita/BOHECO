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

                            <div class="row">
                                <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" onchange="preview()" multiple>
                                </div>
                                <img id="frame" class="img-fluid" src="" alt="No Available Image">
                            </div>

            
                            <button type="submit" class="btn btn-sm btn-primary mt-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    @include('layouts.footer')

    <script>
        function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
    </script>
</html>