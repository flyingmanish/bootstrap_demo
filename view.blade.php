<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">first name</th>
                  <th scope="col">last name</th>
                  <th scope="col">age</th>
                  <th scope="col">Mobile number</th>
                  <th scope="col">email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($dataview as $data)
                <tr>
                  <th>{{$data->id}}</th>
                  <th>{{$data->firstname}}</th>
                  <th>{{$data->lastname}}</th>
                  <th>{{$data->age}}</th>
                  <th>{{$data->mobileno}}</th>
                  <th>{{$data->email}}</th>
                  <th>
                    <a href="delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                  </th>
                  <th>
                    <a href="edit/{{$data->id}}" class="btn btn-primary">Edit</a>
                  </th>
                </tr>
                
                @endforeach
              </tbody>
            </table>
            
        </div>
    </div>

</body>
</html>