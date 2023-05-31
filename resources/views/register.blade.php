@extends('template.master')

@section('konten')
    <style>
        .form-registration input{
            border-radius: 0;
            margin-bottom: -1px;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration my-5">
                <h1 class="h3 mb-3 pb-4 fw-normal text-center">Registration Form</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="name" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="name" value="{{ old('name') }}">
                        <label for="flaotingInput">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control  @error('name') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com"  value="{{ old('email') }}">
                        <label for="flaotingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control  @error('name') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="Password" class="form-control  @error('name') is-invalid @enderror" name="password_confirmation" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary rounded-top my-3" type="submit">
                        Register
                    </button>
                </form>
                <small class="fw-bold d-block text-center mx-" style="margin-top: -10px; padding-bottom: 15px">Already registered? <a style="font-size: 14px; font-weight: 500; color:blue; text-decoration: underline" href="{{ route('redLogin') }}">Login</a></small>
            </main>
        </div>
    </div>

@endsection
