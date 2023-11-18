<x-leyout>
<section class="container text-center my-5 border rounded shadow p-2">
    <h1>Questo e il tuo profilo {{ Auth::user()->name }}</h1>

</section>
<section class="container-fluid my-5">
    <div class="row">
        {{-- Vetrina Console --}}
        <div class=" col-12 my-5 ">
            <h2>Console:</h2>
            <div class="row shadow-lg border rounded border-black">
                @foreach ($console as $console )
                <x-profileConsole :consol="$console"/>

                @endforeach


            </div>
        </div>
        {{--  --}}

        {{-- Vetrina Computer --}}
        <div class="col-12 my-5 ">
            <h2>Computer:</h2>
            <div class="row border shadow-lg  rounded border-black">
                @foreach ($computer as $computer)
                <x-profileComputer :computer="$computer"/>

                @endforeach

            </div>
        </div>
        {{--  --}}

        {{-- Vetrina Game --}}
        <div class=" col-12 my-5 ">
            <h2>Game:</h2>
            <div class="row border shadow-lg rounded border-black">
                @foreach ($game as $games )
                <x-profileGame :game="$games"/>

                @endforeach

            </div>
        </div>
    </div>

</section>

</x-leyout>
