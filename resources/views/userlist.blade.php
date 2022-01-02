<!Doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src=''></script>
    <link rel="stylesheet" href="css/dashboards.css">
    <script src="js/dashboard.js"></script>
</head>
<style>
    #hide {
        background-color: whitesmoke;
    }

    #hide {
        z-index: 9;
        margin-top: 1em;
    }

    #c {
        position: absolute;
        margin-left: -7em;
    }
</style>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"><img src="assets/oorwin.png" id="header-toggle"></div>
            <div class="header_img">
                <img src="assets/oorwin.png" alt="" id="action">
            </div>
        </header>
        @if(session()->get('Admin')=='No')
        <div class="card float-md-right" style="width:13rem;height:7rem;" id="hide">
            <div class="card-body">
                <h5 class="card-title" id="adduser"><a href="" target="myFrame"
                        style="color:green;text-decoration:none;">Edit Profile</a></h5>
                <h5 class="card-title"><a href="/logout" style="color:green;text-decoration:none;">Log-out</a></h5>
            </div>
        </div>
        @else
        <div class="card float-md-right" style="width:13rem;height:4rem;" id="hide">
            <div class="card-body">
                <h5 class="card-title"><a href="/logout" style="color:green;text-decoration:none;">Log-out</a></h5>
            </div>
        </div>
        @endif
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                @if(session()->get('Admin')=="No")
                <div> <a class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">Welcome,{{session()->get('datas')}}</span></a>
                    <div class="nav_list"> <a href="/table" class="nav_link active" target="myFrame"><i
                                class="fas fa-home"></i><span class="nav_name" style="color:white;">Home</span> </a> <a
                            href="/createpost" class="nav_link" target="myFrame"><i class="fas fa-cogs"
                                style="color:white;"></i> <span class="nav_name" style="color:white;">Create</span>
                        </a><a href="/userpost" class="nav_link" target="myFrame"><i class="fas fa-gem"
                                style="color:white;"></i>
                            <span class="nav_name" style="color:white;">Jobs</span>

                    </div>
                    @else
                    <div> <a class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                                class="nav_logo-name">Welcome,{{session()->get('datas')}}</span></a>
                        <div class="nav_list"> <a href="/adduser" class="nav_link active" target="myFrame"><i
                                    class="fas fa-home"></i><span class="nav_name" style="color:white;">Home</span> </a>
                            <a href="/archeive" class="nav_link" target="myFrame"><i class="fas fa-archive"
                                    style="color:white;"></i>
                                <span class="nav_name" style="color:white;">Archeive</span>

                        </div>
                        @endif
            </nav>
        </div>
        @if(session()->get('Admin')=="No")
        <div class="height-100 bg-light">
            <iframe id="a" src="/table" name="myFrame" width="1100" height="600"></iframe>
        </div>
        @else
        <div class="height-100 bg-dark">
            <iframe class="embed-responsive-item" src="/adduser" name="myFrame" width="1200" height="600"
                id="c"></iframe>
        </div>
        @endif

    </body>

</html>
