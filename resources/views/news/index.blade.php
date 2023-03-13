<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOHECO I</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/int.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" >

    
</head>
<body>
  
  @include('layouts.navbar')

    
    <section class="news">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h1>ALL NEWS</h1>
                    @role('admin')
                    <div class="col-12 text-right">
                        <a href="{{url('addnews')}}" class="btn btn-sm btn-primary">Create News</a>
                    </div>
                </div>
                @endrole
              @foreach($news as $new)
              <div class="container-fluid mt-2 shadow">
                <div class="row">
                  <div class="col-md-4">
                      <img class="news-card-img" src="{{ asset('uploads/news/'.$new->image) }}" alt="Image">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <p class="card-title article-title elipsis">{{$new->title}}</p>
                          <p class="article-subtitle">{{ Carbon\Carbon::parse($new->dateTime)->format('M d, Y') }}</p>
          
                          <div class="card-text">
                              <div class="parent">
                                  <div class="block-ellipsis">
                                      <figure class="wp-block-image size-large"><img
                                        src="{{ asset('uploads/news/'.$new->image) }}" alt="Image"
                                              class="wp-image-2528"
                                              src="{{ asset('uploads/news/'.$new->image) }}" 1024w, src="{{ asset('uploads/news/'.$new->image) }}" 2048w
                                              sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                                  </div>
                              </div>
                          </div>
                          <br>
                          <a href="{{ route('news.show', $new) }}" class="btn btn-warning btn-sm"><i
                                  class="fa fa-share"></i>Read Article
                          </a>
                          @role('admin')
                          <a href="{{ route('news.edit', $new) }}">
                          <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-pen"></i></button>
                          </a>

                          <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-placement="bottom" onclick="deletePost()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                            @endrole
                         
                      </div>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
        <div class="card-footer py-4">
          <div class="d-flex justify-content-center">
              {{ $news->links() }}
          </div>
        </div>
      </div>
      @include('sweetalert::alert')
    </section>
@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>

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



<script>
    function deletePost() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Proceed'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form
                document.forms[0].submit();
            }
        });
    }
</script



</body>
</html>