<?php
use Illuminate\Support\Facades\DB;
$results = DB::Table('userposts')->where('Postid',$cols)->get();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    #tmoves {
        margin-left: 5em;
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;

    }

    #tmoves td,
    #tmoves th {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }

    #tmoves tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #tmoves tr:hover {
        background-color: #ddd;
    }

    #tmoves th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>

<body>
    <h2 class="text-center">Post Details</h2>
    <div class="text-center">
        <table class="table table-bordered" id="tmoves">
            <tbody>
                @foreach($results as $result)
                <tr>
                    <th scope="row">Post-ID</th>
                    <td>{{$result->Postid}}</td>
                </tr>
                <tr>
                    <th scope="row">Post-Title</th>
                    <td>{{$result->Title}}</td>
                </tr>
                <tr>
                    <th scope="row">Category</th>
                    <td>{{$result->Category}}</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>{{$result->Status}}</td>
                </tr>
                <tr>
                    <th scope="row">Created_By</th>
                    <td>{{$result->created_by}}</td>
                </tr>
                <tr>
                    <th scope="row">Created_At</th>
                    <td>{{$result->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
