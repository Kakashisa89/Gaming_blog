<div class="card mx-1 my-1" style="width: 18rem;">
    <img src="{{Storage::url($game->logo)}}" class="card-img-top mt-1" alt="{{$game->name}}">
    <div class="card-body">
        <p class="card-title"><b>Nome: </b>{{$game->name}}</p>
        <p class="card-text"><b>Prodotto da:</b> {{$game->creator}}</p>
        <p class="card-title"><b>Data uscita: </b>{{$game->data}}</p>
        <p class="card-title"><b>Post creato il: </b>{{$game->created_at->format('d/m/y')}}</p>
        <div class="text-center">
            <a href=" {{route('game.show',$game)}}" class=" text-primary">Dettagli</a>

        </div>
    </div>
</div>
