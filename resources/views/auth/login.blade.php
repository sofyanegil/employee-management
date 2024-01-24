@extends('layouts.main') @section('main')
<main
    class="col-4 mx-auto my-5 d-flex align-items-center justify-content-center"
    style="min-height: 80vh"
>
    <form action="/login" method="POST" style="width: 100%">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

        <div class="form-floating my-1">
            <input
                type="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                placeholder="name@example.com"
                required
                value="{{ old('email') }}"
            />
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-floating my-1">
            <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                placeholder="Password"
                name="password"
                required
            />
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">
            Login
        </button>
        <small class="d-block text-center mt-2 mb-3">
            Don't have an account? <a href="/register">Register</a>
        </small>
    </form>
</main>
@endsection
