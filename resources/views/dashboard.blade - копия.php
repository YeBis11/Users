<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@section('title')My Site @show</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="/css/main.css" rel="stylesheet">
</head>
<body>
<main>
    <nav class="navbar sticky-top navbar-light bg-light">
        <span class="navbar-brand">Привет, <a class="font-weight-bold "> {{auth()->user()->name}}</a></span>
        <span class="pull-right"><a href="{{route('login.logout')}}">Log Out</a></span>
    </nav>
@if(count($users))
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Registered at</th>
                <th scope="col">Last login at</th>
                <th scope="col">Status</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->last_login_at}}</td>
                    <td>{{$user->blocked}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

    {{--{{ $users->appends(['s' => request()->s])->links() }}--}}
@else
    <p>Записей не найдено...</p>
@endif
</main>
</body>
</html>
