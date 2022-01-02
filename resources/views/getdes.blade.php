<?php
use Illuminate\Support\Facades\DB;
$results = DB::Table('userposts')->where('Postid',$col)->get();
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
    #co {
        margin-left: 5rem;
    }
</style>

<body>
    @foreach($results as $result)
    <div class="card mb-3" id="co">
        <img class="card-img-top" src="{{url('/uploads/'.$result->Image)}}" alt="Card image cap">
        <div class="card-body" id="cool">
            <h5 class="card-title">{{$result->Title}} Continution......</h5>
            <p class="card-text">{{$result->Description}}</p>
            <p class="card-text"><small class="text-muted">Created At {{$result->created_at}}</small></p>
        </div>
    </div>
    @endforeach
</body>

</html>
