<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link href="{{ asset('css/userend.css') }}" rel="stylesheet">
</head>

<body>
    <div class="contaoner-fluid">
        <div class="container">
            <form class="form-horizontal"  action="{{ route('userend.register.userendstore') }}" method="post">

                    {{ csrf_field() }}
                <div class="row mt-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                        <div class="page">
                            <a class="link" href="#">
                                <img src="{{ asset('images/logo-header.png') }}" alt="logo">
                            </a>
                            <h5 class="title">Welcome! You are just one step away to sell on Nijhum.</h5>
                        </div>
                        <div class="box shop-reg">
                            <div class="box-header with-border">
                                <h3 class="box-title">SIGN UP</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label for="shop-name" class="col-sm-3 control-label" required>Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                                        @if($errors->has('name'))
                                        <span class="help-block">Name is required.</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('phone-number') ? 'has-error' : '' }}">
                                    <label for="shop-based-in" class="col-sm-3 control-label" required>Mobile Number</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" placeholder="+880........." name="phone-number">
                                      @if($errors->has('phone-number'))
                                      <span class="help-block">Mobile Number is required.</span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email" class="col-sm-3 control-label" required>Email Address</label>
                                    <div class="col-sm-9">
                                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                                      @if($errors->has('email'))
                                      <span class="help-block">Email is required.</span>
                                      @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label for="password" class="col-sm-3 control-label" required>Password</label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" placeholder="password" name="password">
                                      @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label" required>Confirm Password</label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="checkbox pl-4">
                                    <label>
                                        <input type="checkbox"> I've read and understood Nijhum's <a href="#">Terms &
                                            Conditions</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>



