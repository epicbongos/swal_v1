@extends('layouts.app')

<body>
    <br>
    <div class="container box">
        <h3>Simple Login System in Laravel</h3>
        <br>

        @if (isset(Auth::user()->email))
            <div class="alert alert-danger success-block" role="alert">
                <strong>Welcome {{ Auth::user()->email }}</strong>
                <br>
                <a href="{{ url('/main/logout') }}"></a>
            </div>
            else
        @endif

    </div>

</body>
