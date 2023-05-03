<div class="modal fade" id="newsView-{{ $new->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">NEWS</h4>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
                <h6 class="text-muted mx-3 mt-2">{{ Carbon\Carbon::parse($new->dateTime)->format('M d, Y') }}</h6>
                <h4 class="text-dark text-center" style="font-weight: bolder;">{{ $new->title }}</h4>
                <div class="modal-body">
                <p><p class=" text-dark" style="padding-left: 10px; padding-right: 10px;">
                    {{$new->article}}
                </p></p>
                </div>
                @foreach (json_decode($new->image, true) as $img)
                <div style="height: 80%;
                width: 100%; padding-left: 20px; padding-right: 20px;">
                        <figure style="box-shadow: 2px 4px 8px rgba(0,0,0,0.4); background-color: rgba(255, 251, 0, 0.712); "><img style="padding: 5px;" src="{{  url('uploads/news/' . $img) }}" alt="Image"></figure>
                
                </div>
            @endforeach
        </div>
    </div>
</div>
<style>
    .modal{
        backdrop-filter: blur(5px);
    }
</style>