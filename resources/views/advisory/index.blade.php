@extends('main')
@section('content')
<style>
    .card-header1 {
        overflow: hidden;
        /* background-color: #f1f1f1; */
        padding: 20px 10px;
    }
    .card-header1 h1{
        color: black;

    }
    .card-header2 a{
        float: right;
    }

    hr{
        margin-top: 6px;
    }
    .hed2 .date{
        float: left;
    }
    .hed1 h4{
        float: center;
    }


</style>
    <section class="advisory">
        <div class="container-fluid mt-5">
                <div class="card-header1 text-muted">
                    <h1 class=" text-dark text-center">CURRENT ADVISORY</h1>
                    @role('admin')
                    <div class="card-header2">
                        <a href="{{route('advisory.create')}}" class="btn btn-primary"><i class="fas fa-plus" aria-hidden="true"></i></a>
                    </div>
                    @endrole
                </div>

                <form method="GET" action="{{ route('advisory.index') }}" class="form-inline" id="search-form">
                    <div class="input-group">
                        <input type="text" class="form-control mr-sm-2" name="search" placeholder="Search Advisory" value="{{ request()->query('search') }}" id="search-input">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                @foreach ($advisories as $adv)

                @if (strpos(strtolower($adv->place), strtolower(request()->query('search'))) !== false || 
                strpos(strtolower($adv->info), strtolower(request()->query('search'))) !== false ||
                strpos(strtolower($adv->dateTime), strtolower(request()->query('search'))) !== false)

                <div class="container-fluid mb-2 mt-2">
                    <div class="card mt-2 ">
                        <div class="card-body" style="box-shadow: 2px 2px 5px #181818">

                            <div class="d-inline">
                                <h2 class="d-inline">{{$adv->place}}</h2>
                            </div>
                            <div class="d-inline d-flex justify-content-end">
                                 <p class="text-muted text-right d-inline text-right">{{ Carbon\Carbon::parse($adv->dateTime)->format('M d, Y') }}</p>
                            </div>
                            <p class="text-center">{{$adv->info}}</p>
                        @role('admin')
                        <div class="card-footer1 d-flex justify-content-end ">
                            <a href="{{ route('advisory.edit', $adv) }}" class="btn btn-sm btn-success mx-1"><i class="fas fa-edit"></i></a>

                            <form id="delete-form-{{ $adv->id }}" action="{{ route('advisory.destroy', $adv->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="deleteData({{ $adv->id }}, '{{ $adv->place }}')" type="button" data-placement="bottom" onclick="deleteAdvisory()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                        @endrole
                    </div>
                </div>
                </div>
                @endif
                @endforeach

        </div>
        <script>
            function deleteData(id, place){
                Swal.fire({
                    title: 'Are you sure you want to delete this?',
                    text: `Place:"${place}".`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Proceed'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                    })
            }
          </script>
        <div class="card-footer py-4">
            <div class="d-flex justify-content-center">
                {{ $advisories->links() }}
            </div>
          </div>
        </div>
</section>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function deleteAdvisory() {
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
</script>

<script>
    const form = document.getElementById('search-form');
    const input = form.querySelector('input[name="search"]');
    
    input.addEventListener('input', () => {
        if (input.value === '') {
            window.location.href = '{{ route('advisory.index') }}';
        }
    });
</script>

<script>
    $(document).ready(function() {
        // get the search input element
        var searchInput = $('#search-input');

        // add an event listener to the search input field
        searchInput.on('input', function() {
            // wait 1 second after the user stops typing to submit the form
            clearTimeout($.data(this, 'timer'));
            var searchTimer = setTimeout(function() {
                $('#search-form').submit();
            }, 200);
            $(this).data('timer', searchTimer);
        });
    });
</script>
@endsection





