@extends('layouts.main') @section('main')
<main
    class="col-4 mx-auto my-5 d-flex align-items-center justify-content-center"
    style="min-height: 80vh"
>
    <form action="/register" method="POST" style="width: 100%">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

        <div class="form-floating my-1">
            <input
                type="text"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                placeholder="Your name"
                required
                value="{{ old('name') }}"
            />
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

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
            Register
        </button>
        <small class="d-block text-center mt-2 mb-3">
            Have an account? <a href="/login">Login</a>
        </small>
    </form>
</main>
@endsection
