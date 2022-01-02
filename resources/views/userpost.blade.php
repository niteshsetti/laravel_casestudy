<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Createuserpost;
$result = Createuserpost::where('Id',session()->get('Id'))->get();
$stat="";
foreach($result as $check){
    $stat=$check->Status;
}
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
    #de {
        display: inline-block;
        margin-left: 30px;
        margin-bottom: 2em;
    }
</style>

<body>
    @if(count($result)!=0)
    <h4 class="text-center" style="font-family:sans-serif;">Your Posts Status </h4>
    @foreach($result as $split_result)
    @if($split_result->Status=="Pending")
    <div class="row" id="de">
        <div class="card" style="width: 18rem; height:auto;">
            <br>
            <img class="card-img-top" src="uploads/{{$split_result->Image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$split_result->Title}}</h5>
                <p class="card-text">
                    <?php
                    $len=$split_result->Description;
                    for($i=0;$i<strlen($len);$i++){
                    if($i<70){
                        echo $len[$i]."";
                    }
                    else{
                      echo ".....";
                    ?>
                    <a href="/readmore/{{$split_result->Postid}}">ReadMore</a>
                    <?php
                    break;
                    }
                }
              ?>

                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Category :</b>&nbsp;{{$split_result->Category}}</li>
                <li class="list-group-item"><b>Status : </b>
                    @if($split_result->Status=='Pending')
                    <button class="btn btn-danger">Pending</button>
                    @else
                    <button class="btn btn-success">Published</button>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    @else
    <div class="row" id="de">
        <div class="card" style="width: 18rem; height:auto;">
            <br>
            <img class="card-img-top" src="uploads/{{$split_result->Image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$split_result->Title}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Category :</b>&nbsp;{{$split_result->Category}}</li>
                <li class="list-group-item"><b>Status : </b>
                    @if($split_result->Status=='Pending')
                    <button class="btn btn-danger">Pending</button>
                    @else
                    <button class="btn btn-success">Published</button>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    @endif
    @endforeach
    @else
    <div class="text-center">
        <img src="uploads/noposts.png" lass="img-fluid" alt="Responsive image" width="600">
        <h4 class="text-center">No Posts Found Yet............</h4>
    </div>
    @endif
</body>

</html>
