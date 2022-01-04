<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@section('title')User Dashboard@show</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="/css/main.css" rel="stylesheet">
</head>
<body>
<main>
    <nav class="navbar sticky-top navbar-light bg-light">
        <span class="navbar-brand">Привет, <a class="font-weight-bold "> {{auth()->user()->name}}</a></span>
        <button class="w-30 btn btn-lg btn-primary" type="submit" value="delete" name="action" form="userForm">
            Delete
        </button>
        <button class="w-30 btn btn-lg btn-primary" type="submit" value="block" name="action" form="userForm">
            Block
        </button>
        <button class="w-30 btn btn-lg btn-primary" type="submit" value="unblock" name="action" form="userForm">
            Unblock
        </button>
        <span class="pull-right"><a href="{{route('login.logout')}}">Log Out</a></span>
    </nav>
@if(count($users))
    <form method="post" id="userForm" action="{{route('dashboard.edit')}}">
        @csrf
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="usersTable">
                <thead>
                <tr>
                    <th scope="col" onclick="tableNumericSort(0)">#</th>
                    <th scope="col">Select All <input type="checkbox" id="check-all"></th>
                    <th scope="col" onclick="tableSymbolicSort(2)">Name</th>
                    <th scope="col" onclick="tableSymbolicSort(3)">Email</th>
                    <th scope="col" onclick="tableDateSort(4)">Register date</th>
                    <th scope="col" onclick="tableDateSort(5)">Last login date</th>
                    <th scope="col" onclick="tableSymbolicSort(6)">Status</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td><input type="checkbox" name="selector[]" value="{{ $user->id }}" /></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->last_login_at}}</td>
                        @if($user->blocked)
                            <td>Blocked</td>
                            @else
                            <td>OK</td>
                            @endif

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div><!-- ./table-responsive-->

    </form>
    {{--{{ $users->appends(['s' => request()->s])->links() }}--}}
@else
    <p>There are no users to show</p>
@endif
</main>
<script src="/js/checkbox.js"></script>
<script src="/js/tablesort.js"></script>
</body>
</html>
