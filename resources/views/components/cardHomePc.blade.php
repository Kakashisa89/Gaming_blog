{{-- Card computer homepage --}}

<div class="card mx-1 my-1" style="width: 18rem;">
    <img src="{{Storage::url($computer->logo)}}" class="card-img-top my-1" alt="{{$computer->model}}">
    <div class="card-body">
        <p class="card-title"><b>Modello: </b>{{$computer->model}}</p>
        <p class="card-text"><b>Prodotto da:</b> {{$computer->creator}}</p>
        <p class="card-title"><b>Data uscita: </b>{{$computer->data}}</p>
        <p class="card-title"><b>Post creato il: </b>{{$computer->created_at->format('d/m/y')}}</p>
        <div class="text-center">
            <a href="{{route('computer.show',$computer)}}" class=" text-primary">Dettagli</a>

        </div>
    </div>
</div>
