@extends('layouts.formLayout')
@section('title')Добро пожаловать@endsection

@section('form')
    <form class ="mt-5" method="post" action="{{route('login.login')}}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        @include('layouts.messages')

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}" />
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" />
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" name="remember" />
                Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">
            Sign in
        </button>
    </form>
        <div><a href="{{route('register.index')}}">Register</a></div>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
 @endsection
