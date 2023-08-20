<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card text-center">
                            <div class="card-header">
                                <span style="">
                                    View All GLC Member
                                </span>
                            </div>
                            <div class="card-body">

                                <table class="table table-sm table-striped table-reponsive">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Family</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($members as $member)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$member->name}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>{{$member->address}}</td>
                                                <td>{{$member->contact}}</td>
                                                <td>{{$member->family}}</td>
                                                <td>
                                                    <a href="{{route('member.update', $member->id)}}" class="btn btn-sm btn-{{$member->status ? 'success' : 'danger'}}" onclick="return confirm('Are you sure?')">
                                                        {{$member->status ? 'Active' : 'Inactive'}}
                                                    </a>
                                                </td>
                                                <td><img src="{{url('images/' . $member->image)}}" style="height: 100px; width: 100px">{{$member->image}}</td>
                                                <td>
                                                    <div class="btn btn-group">
                                                        {!! link_to_route('member.edit', "Edit", $member->id, ['class' => 'btn btn-sm btn-warning', 'onclick '=> "return confirm('Are you sure to edit?')"]) !!}
                                                        {!! Form::open(['route' => ['member.destroy', $member->id], 'method' => 'Delete']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger', 'onclick '=> "return confirm('Are you sure to delete?')"]) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9">No Data Found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </main>
    </div>
</body>
</html>
