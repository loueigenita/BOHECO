<div class="modal fade" id="adv-{{ $adv->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">ADVISORY</h4>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="d-inline">
                    <h2 class="d-inline">{{$adv->place}}</h2>
                </div>

                <div class="d-inline d-flex justify-content-end">
                        <p class="text-muted text-right d-inline text-right">{{ Carbon\Carbon::parse($adv->dateTime)->format('M d, Y') }}</p>
                </div>
                <p class="text-center">{{$adv->info}}</p>
                
            </div>
        </div>
    </div>
</div>
<style>
    .modal{
        backdrop-filter: blur(5px);
    }
</style>
