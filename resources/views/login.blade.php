<!Doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Blog Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle">
                <img src="assets/oorwin.png">
            </div>
        </header>
        <br>
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="card">
            <h5 class="card-header" style="color: green;">Login</h5>
            <div class="card-body">
                <form method="POST" action='/login'>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="error">@error('email')
                            {{$message}}
                            @enderror</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <small id="error">@error('password')
                            {{$message}}
                            @enderror</small>
                    </div>
                    <small id="emailHelp" class="form-text text-muted text-center"><a href="/forget"
                            style="color:green;">Forget Password ?</a></small>
                    <div class="form-group">
                        <br>
                        <button class="btn btn-success">Login</button>
                        <a href="/login" class="btn btn-danger" style="color: white;">Cancel</a>
                    </div>
                    <p class="text-center">New user?&nbsp;Get register to login <a href="/register"
                            style="color:green;">Register</a></p>
                </form>
            </div>
        </div>

    </body>

</html>
