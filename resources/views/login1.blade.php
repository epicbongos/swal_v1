@extends('layouts.app')

<head>
    <style>
        /* .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        } */

    </style>
</head>

<body>
    <br>
    <div class="container box">
        <h3 align="center">
            Simple Login System in Laravel
        </h3>

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button " class="close" data-dismiss="alert">&times;</button>X</button>
                <strong>{{ $message }}</strong>

            </div>
        @endif

        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Enter Password</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Enter password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </div>
            </form>
    </div>
</body>
