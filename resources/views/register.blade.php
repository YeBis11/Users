@extends('layouts.formLayout')
@section('title')Регистрация@endsection

@section('form')
    <div class="container">
    <form class ="mt-5" method="post" action="{{route('register.register')}}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>

        @include('layouts.messages')

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" placeholder="John Doe" name="name" value="{{ old('name') }}"/>
            <label for="floatingName">Full Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" />
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"/>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="ConfirmedfloatingPassword" placeholder="Confirm Password" name="password_confirmation"/>
            <label for="ConfirmedfloatingPassword">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">
            Register
        </button>
        <div><a href="{{route('login')}}">Sign In</a></div>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
    </div>
@endsection

