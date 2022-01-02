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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"
        integrity="sha512-MbhLUiUv8Qel+cWFyUG0fMC8/g9r+GULWRZ0axljv3hJhU6/0B3NoL6xvnJPTYZzNqCQU3+TzRVxhkE531CLKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/jquery.tinymce.min.js"
        integrity="sha512-nmHWouzLZ3EkXUiXVLpRy/scUPyOOwWkAZ6p8GJnswtVIfSgQ6dFjfCv4VrUA9YgutCRqUDyjHGfQ+/3OEbH4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type='text/javascript' src=''></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="js/dashboard.js"></script>
</head>
<style>
</style>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            <?php
            echo '<script>window.location.replace("/userpost")</script>';
        ?>
        </div>
        @endif
        <div class="card">
            <h5 class="card-header" style="color: green;">Create Post</h5>
            <div class="card-body">
                <form method="POST" action='/createpost' enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{session()->get('Id')}}" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">select category</label>
                            <select class="form-control" name="category">
                                <option selected hidden value="">Select Category</option>
                                <option value="Health">Health</option>
                                <option value="Sports">Sports</option>
                                <option value="Movies">Movies</option>
                                <option value="Politics">Politics</option>
                                <option value="Technology">Technology</option>
                            </select>
                            <small id="error">@error('category')
                                {{$message}}
                                @enderror</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlTextarea1">Title</label>
                            <textarea class="form-control" name="title" rows="1"></textarea>
                            <small id="error">@error('title')
                                {{$message}}
                                @enderror</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                        <small id="error">@error('description')
                            {{$message}}
                            @enderror</small>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Add Image</label>
                            <input type="file" class="form-control-file" name='image'>
                            <small id="error">@error('image')
                                {{$message}}
                                @enderror</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Created By</label>
                            <input type="text" class="form-control" name="created" placeholder="Enter Creater Name">
                            <small id="error">@error('created')
                                {{$message}}
                                @enderror</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Submit Post</button>
                        <a href="/register" class="btn btn-danger" style="color: white;">Cancel</a>
                    </div>
            </div>
        </div>
    </body>

</html>
