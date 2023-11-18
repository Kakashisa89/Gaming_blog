<x-leyout>
    <section class="se min-vh-100 ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-10 col-xl-9 mx-auto ">
                    <div class="flex-row my-5 border-0 shadow rounded-3 overflow-hidden ">
                        {{--  <div class="card-img-left d-none d-md-flex">
                            <!-- Background image for card set in CSS! -->
                        </div> --}}
                        <div class="card-body col-8 p-4 p-sm-5 my-5  ">
                            <h5 class=" mb-5 fs-1 fs-5 text-white ">Registrati</h5>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control" id="name" placeholder="myusername" required autofocus>
                                    <label for="name">Username</label>
                                    @error('name')
                                        <p class=" text-danger ">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" id="email" placeholder="name@example.com">
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <hr>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                    <label for="password">Password</label>
                                    @error('password')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="Confirm Password">
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>

                                <div class="d-grid mb-2">
                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                        type="submit">Registrati</button>
                                </div>

                                <a class="d-block text-center mt-2 small text-white " href="{{route('login')}}">Hai un accaunt?
                                    Sign In</a>

                                {{--   <hr class="my-4">

                                <div class="d-grid mb-2">
                                    <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase"
                                        type="submit">
                                        <i class="fab fa-google me-2"></i> Sign up with Google
                                    </button>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase"
                                        type="submit">
                                        <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                                    </button>
                                </div> --}}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-leyout>
