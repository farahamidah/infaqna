@extends('layouts.second')

@section('container')
<div class="container mt-5 login">
<main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <div class="text-center">
                    <img class="mb-4" src="\img\unida1.png" alt="" width="80" height="120">
                </div>
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old ('email')}}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>

        </main>
</div>
@endsection
