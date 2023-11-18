<section class="container my-5">
    <div class="col-12">
        <div class="row justify-content-around ">
            {{-- Card console --}}
            <div class="col-12 col-md-3 my-2 ">
                <a href="{{route('console.index')}}">
                    <div class="bg-black border rounded border-primary crd">
                        <img src="\media\img\console.jpg" class="img-fluid rounded" alt="">
                        <div class=" text-center">
                            <h2 class="text-light">Console</h2>
                        </div>

                    </div>

                </a>
            </div>
            {{-- Card pc --}}
            <div class="col-12 col-md-3 my-2 ">
                <a href="{{route('computer.index')}}">
                    <div class="bg-black border rounded border-primary crd">
                        <img src="\media\img\pcGaming.jpg" class="img-fluid rounded" alt="">
                        <div class=" text-center">
                            <h2 class="text-light">Gaming Pc</h2>
                        </div>

                    </div>

                </a>
            </div>
            {{-- card Giochi --}}
            <div class="col-12 col-md-3 my-2 ">
                <a href="{{route('game.index')}}">
                    <div class="bg-black border rounded border-primary crd">
                        <img src="\media\img\videogiochi2.jpg" class="img-fluid rounded "  alt="">
                        <div class=" text-center">
                            <h2 class="text-light">Giochi</h2>
                        </div>

                    </div>

                </a>
            </div>
        </div>
    </div>


</section>
