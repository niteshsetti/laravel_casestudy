<?php
use Illuminate\Support\Facades\DB;
$results = DB::Table('userposts')->where('Id',session()->get('Id'))->Where('Status','!=','Pending')->get();
?>

<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-color: white;
    }
</style>
<br>
<br><br>
@if(count($results)!=0)
<h1>
    <center>USER BLOG</center>
</h1>
<table id="myTable" class="table table-striped table-bordered" width="300">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Category</th>
            <th>Created_By</th>
            <th>Post-Id</th>
            <th>Status</th>
            <th>Created_At</th>
            <th>Updated_At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($results as $data)
        <tr>
            <td>{{$data->Title}}</td>
            <td>
                <?php
                    $len=$data->Description;
                    for($i=0;$i<strlen($len);$i++){
                    if($i<50){
                        echo $len[$i]."";
                    }
                    else{
                      echo ".....";
                    ?>
                <a href="/getdes/{{$data->Postid}}" class="btn btn-danger">
                    Read More
                </a>
                <?php
                    break;
                    }
                }
        ?>
            </td>
            <td>
                <img class="card-img-top" src="uploads/{{$data->Image}}" alt="Card image cap"
                    style="width:200px;height:200px;">
            </td>
            <td>{{$data->Category}}</td>
            <td>{{$data->created_by}}</td>
            <td>{{$data->Postid}}</td>
            <td>
                @if($data->Status=="Published")
                <button class="btn btn-success">
                    Published
                </button>
                @endif
            </td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
@else
<div class="text-center">
    <img class="card-img-top" src="{{url('/uploads/no-data.png')}}" alt="Card image cap">
    <h3 class="text-center">Hello {{session()->get('datas')}},No Posts Where Published Yet......</h3>
</div>
@endif
<script>
    $(document).ready(function(){
            $('#myTable').dataTable();
        });
</script>
