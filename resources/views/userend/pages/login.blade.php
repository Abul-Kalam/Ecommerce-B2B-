<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'KadaMati') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/userend.css') }}" rel="stylesheet">
</head>

<body>
    <div id="page">
        <header>
        </header>

        <div>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <form action="{{ route('userend.register.userendstore') }}" method="post">
                                {{ csrf_field() }}
                            <div class="form-group {{  $errors->has('email') ? 'has-error' : '' }}">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                                @if($errors->has('email'))
                                <span class="help-block">Email is required.</span>
                                @endif
                            </div>
                            <div class="form-group {{  $errors->has('password') ? 'has-error' : '' }}">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                @if($errors->has('password'))
                                <span class="help-block">Password is required.</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <script src="{{ asset('js/userend.js') }}" defer></script>
</body>

</html>
