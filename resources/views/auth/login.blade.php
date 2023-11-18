<x-leyout>
    <div class="container-fluid ps-md-0 bg-image">
        <div class="row g-0 justify-content-center">

            <div class="col-md-8 col-lg-6  ">
                <div class="login d-flex  align-items-center py-5">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 text-white  fs-2 fw-bold">Benvenuto!</h3>

                                <!-- Sign In Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="name@example.com">
                                        <label for="email">Inserisci email</label>
                                        @error('email')
                                            <p class=" text-danger -denger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                        @error('password')
                                            <p class=" text-danger -denger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" value="remember"
                                            id="remember">
                                        <label class="form-check-label text-white" for="remember">
                                            Ricordami
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Sign in</button>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Registrati</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-leyout>
