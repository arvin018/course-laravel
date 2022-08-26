@extends('Layout/isGuest')

@section('content')
    <div>
        <h3>Login Page</h3>
        <i>{{ session()->get('error') }}</i>
        <form method="POST" action={{ route('login_action') }}>
            @csrf
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <button type="submit">LOGIN</button>
        </form>
    </div>
@endsection
