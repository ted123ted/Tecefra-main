@extends('layouts.guest')

@section('content')
    <main class="form-signin text center" style="   width: 100%;
                                                    max-width: 400px;
                                                    padding: 15px;
                                                    margin: auto;">
            <form action="/users/authenticate" method="POST">
            @csrf
            <img class="mb-4" src="{{asset('images/logo.png')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">log-in</h1>
            <div class="form-floating">
                <label for="floatingPassword">email</label>
                <input type="email" name="email"value="{{old('email')}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="floatingPassword" placeholder="Password" style="margin-bottom: 10px;">
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <label for="floatingpassword">Dont have an account? <a href="/register">register</a></label>
            </form>
    </main>
  
@endsection