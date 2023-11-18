<div class="card mx-1 my-1" style="width: 18rem;">
    <img src="{{ Storage::url($consol->logo) }}" class="card-img-top my-1" style="height: 270px" alt="{{ $consol->name }}">
    <div class="card-body">
        <p class="card-title"><b>Nome:</b> {{ $consol->name }}</p>
        <p class="card-title"><b>Data uscita:</b> {{ $consol->data }}</p>
        <p class="card-title"><b>Prodotta da:</b> {{ $consol->creator }}</p>
        <p class="text-small"><b>Post creato il:</b> {{ $consol->created_at->format('d/m/y') }}</p>
        <div class="text-center">
            <a href="{{route('console.show',$consol)}}" class=" text-primary">Dettagli</a>

        </div>

    </div>
</div>
