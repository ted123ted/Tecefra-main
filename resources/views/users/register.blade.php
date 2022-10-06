@extends('layouts.guest')

@section('content')
    <main class="form-signin text center" style="   width: 100%;
                                                    max-width: 400px;
                                                    padding: 15px;
                                                    margin: auto;">
            <form action="register" method="POST">
            @csrf
            <img class="mb-4" src="{{asset('images/logo.png')}}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">register</h1>
            <div class="form-floating">
                <label for="floatingPassword">name</label>
                <input type="name" name="name" value="{{old('name')}}" class="form-control" id="floatingInput" placeholder="doe">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>
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
            <div class="form-floating">
                <label for="floatingPassword">Password_confirmation</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}} "class="form-control" id="floatingPassword" placeholder="Password_confirmation" style="margin-bottom: 10px;"> 
                @error('password_confirmation')
                    <p>{{$message}}</p>
                @enderror
            </div>
    
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <label for="floatingpassword">already have an account ?<a href="/login">login</a></label>
            </form>
    </main>
  
@endsection