@extends('main')
@section('content')
<style>
    .card-header1 {
       overflow: hidden;
       /* background-color: #f1f1f1; */
       padding: 20px 10px;
   }
   .card-header1 h1{
       /* display: inline; */
       color: black;

   }
   .card-header2 a{
       float: right;
   }

   .hrr{
       margin-top: 6px;
       opacity: 0.3;
       color: gray;


   }
</style>

   <section class="advisory">
       <div class="container-fluid mt-5">
               <div class="card-header1 text-muted mt-5">
                   <h1 class=" text-dark text-center ">CURRENT INTERRUPTIONS</h1>
                   @role('admin')
                   <div class="card-header2">
                       <a href="{{route('int.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                   </div>
                   @endrole
               </div>

               <form method="GET" action="{{ route('int.index') }}" class="form-inline" id="search-form">
                    <div class="input-group">
                        <input type="text" class="form-control mr-sm-2" name="search" placeholder="Search Interruption" value="{{ request()->query('search') }}" id="search-input">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>

               @foreach ($interruptions as $int)

               @if (strpos(strtolower($int->what), strtolower(request()->query('search'))) !== false || 
               strpos(strtolower($int->where), strtolower(request()->query('search'))) !== false || 
               strpos(strtolower($int->why), strtolower(request()->query('search'))) !== false || 
               strpos(strtolower($int->dateTime), strtolower(request()->query('search'))) !== false)

               <div class="container-fluid mb-2">
                   <div class="card mt-2" style="box-shadow: 2px 2px 5px #181818">
                       <div class="card-body">
                           <h4 class="intisory-title text-center">{{$int->created_at->isoFormat('MMMM d, Y')}}</h4>
                           <div class="container">
                            <p ><strong>WHAT:</strong> {{$int->what}}</p>
                            <p><strong>WHEN:</strong> {{$int->dateTime}}</p>
                            <p><strong>WHERE:</strong> {{$int->where}}</p>
                            <p><strong>WHY:</strong> {{$int->why}}</p>
                           </div>
                        </div>
                       <div class="container text-left">
                           <small>
                            <p class="text-center text-muted">
                                We sincerely apologize for the inconvenience this will bring you. We
                                request
                                your patience and understanding on this matter. Rest assured that our team will exert best
                                effort to restore the power the soonest possible time.
                                For further queries, please call our hotline numbers at <strong> 09177147493 </strong> or <strong> 09199950240</strong>
                            </p>
                           </small>
                       </div>
                       @role('admin')
                       <div class="card-footer1 mb-4 text-center ">
                           <a href="{{ route('int.edit', $int) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                           <form id="delete-form-{{ $int->id }}" action="{{ route('int.destroy', $int->id) }}" method="POST" class="d-inline">
                               @csrf
                               @method('DELETE')
                               <button onclick="deleteData({{ $int->id }}, '{{ $int->what }}', '{{ $int->where }}')" type="button" data-placement="bottom" onclick="deleteInterruptions()" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                           </form>
                       </div>
                       @endrole
                   </div>
               </div>
               @endif
               @endforeach
               
       </div>
       <div class="card-footer py-4">
           <div class="d-flex justify-content-center">
               {{ $interruptions->links() }}
           </div>
       </div>
   </section>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function deleteData(id, what, where){
        Swal.fire({
            title: 'Are you sure you want to delete this?',
            text: `"What:"${what}".`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Proceed'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
                // Swal.fire(
                // 'Deleted!',
                // 'Your file has been deleted.',
                // 'success'
                // )
            }
            })
    }
  </script>

   <script>
   function deleteInterruptions() {
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
            window.location.href = '{{ route('int.index') }}';
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

