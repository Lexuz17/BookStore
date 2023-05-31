<div class="modal" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" value="{{Cookie::get('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" value="{{Cookie::get('password') }}">
                    </div>
                    <div class="mb-1">
                        <input name="remember_me" type="checkbox" class="form-check-input">
                        <label class="form-label">Remember Me</label>
                    </div>
                </div>
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" class="custom-button" value="Submit">
                </div>
            </form>
            <small class="fw-bold d-block text-center mx-" style="margin-top: -10px; padding-bottom: 15px">Not registered? <a style="font-size: 14px; font-weight: 500; color:blue; text-decoration: underline" href="{{ route('redRegister') }}">Register Now!</a></small>
        </div>
    </div>
</div>
