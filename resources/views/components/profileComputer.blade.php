<div class="card my-2 mx-2 " style="width: 18rem;">
    <img src="{{ Storage::url($computer->logo) }}" class="card-img-top mt-1 rounded" style="height: 270px"
        alt="{{ $computer->model }}">
    <div class="card-body row">
        <h5 class="card-title">Nome: {{ $computer->model }}</h5>
        <h5 class="card-title">Data uscita: {{ $computer->data }}</h5>
        <h5 class="card-title">Prodotta da: {{ $computer->creator }}</h5>
        <h5 class="text-small">Post creato il: {{ $computer->created_at->format('d/m/y') }}</h5>

        <div class="mt-4 border-top  d-flex justify-content-evenly">
            <a href="{{ route('computer.show', $computer) }}" class="texy text-primary ">Dettagli</a>


            @if (Auth::user() && $computer->user_id == Auth::user()->id)
                <a href="{{ route('computer.edit', $computer) }}" class="text text-warning "> Modifica </a>

                <form action="{{ route('computer.delete', $computer) }}" method="Post" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" text bg-white border-0 text-decoration-underline text-danger">Elimina</button>
                </form>

            @endif
        </div>

    </div>
</div>
