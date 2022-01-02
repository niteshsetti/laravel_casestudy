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
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            {{header("refresh:1;url=/login")}}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="card">
            <h5 class="card-header" style="color: green;">Reset Password</h5>
            <div class="card-body">
                <form method="POST" action="/forget">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Registered email">
                        <small id="error">@error('email')
                            {{$message}}
                            @enderror</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" class="form-control" name="newpassword" placeholder="Enter New Password">
                        <small id="error">@error('newpassword')
                            {{$message}}
                            @enderror</small>
                    </div>
                    <div class="form-group">
                        <br>
                        <button class="btn btn-success">Update</button>
                        <a href="/login" class="btn btn-danger" style="color: white;">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>
