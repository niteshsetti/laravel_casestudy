<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Createuserpost;
$result=Createuserpost::onlyTrashed()->get();
?>
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
<style>
    #table {
        z-index: 9;
    }

    th,
    td {
        color: black;
    }
</style>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        @if(count($result)!=0)
        <div class="row">
        <h2 class="text-center">Oorwin Restore Panel</h2>
        <div class="text-end">
            <a onclick="return confirm('Are you sure Want to RestoreAll Posts ?')"
                href="/restoreAll" class="btn btn-success">
                Restore All
            </a>
        </div>
    </div>
        <div id="table">
            <table class="table table-striped table-borderless">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Post-Id</th>
                        <th scope="col">Created_By</th>
                        <th scope="col">Created_At</th>
                        <th scope="col">Restore</th>
                        <th scope="col">Delete(Per)</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $fetchs)
                    <tr>
                        <th scope="row">{{$fetchs->Title}}</th>
                        <td>{{$fetchs->Category}}</td>
                        <td>{{$fetchs->Postid}}</td>
                        <td>{{$fetchs->created_by}}</td>
                        <td>{{$fetchs->created_at}}</td>
                        <td><a onclick="return confirm('Are you sure Want to Restore this Post ?')"
                                href="/restore/{{$fetchs->Postid}}" class="btn btn-danger">
                                Restore
                            </a></td>
                        <td><a href="/permanentdelete/{{$fetchs->Postid}}" class="btn btn-danger">
                                Agree
                            </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center">
            <img class="card-img-top" src="{{url('/uploads/archieved.gif')}}" alt="Card image cap" style="height:300px">
            <br>
            <h3 class="text-center">Hello {{session()->get('datas')}}, No Archieved Records Were Found !!! </h3>

        </div>
        @endif
    </body>

</html>
