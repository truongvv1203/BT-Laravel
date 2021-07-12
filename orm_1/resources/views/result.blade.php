<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <form action="search" method="POST">
        @csrf
        <div class="row">
            <div class="col col-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputId" name="id" placeholder="Enter Id">
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name">
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputClass" name="class" placeholder="Enter class">
                </div>
            </div>
            <div class="col col-lg-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </form>
    <table style="width:100%">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Class</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['class']}}</td>
        </tr>
        @endforeach
    <table>
</body>
</html>