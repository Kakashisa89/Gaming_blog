<div class="card my-2 mx-2 " style="width: 18rem;">
    <img src="{{ Storage::url($consol->logo) }}" class="card-img-top mt-1 rounded" style="height: 270px"
        alt="{{ $consol->name }}">
    <div class="card-body row">
        <h5 class="card-title">Nome: {{ $consol->name }}</h5>
        <h5 class="card-title">Data uscita: {{ $consol->data }}</h5>
        <h5 class="card-title">Prodotta da: {{ $consol->creator }}</h5>
        <h5 class="text-small">Post creato il: {{ $consol->created_at->format('d/m/y') }}</h5>

        <div class="mt-4 border-top  d-flex justify-content-evenly">
            <a href="{{ route('console.show', $consol) }}" class="texy text-primary ">Dettagli</a>


            @if (Auth::user() && $consol->user_id == Auth::user()->id)
                <a href="{{ route('console.edit', $consol) }}" class="text text-warning "> Modifica </a>

                <form action="{{ route('console.delete', $consol) }}" method="Post" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" text bg-white border-0 text-decoration-underline text-danger">Elimina</button>
                </form>

            @endif
        </div>

    </div>
</div>
