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
           
           
                <form method="POST" action="{{ route('update',$editdata->id) }}">
                    @csrf
                    {{method_field('POST')}}
                   
                    
                    <div class="form-row ">
                       <div class="form-group col-md-12">
                         <label for="firstname">First name</label>
                         <input type="text" value="{{$editdata->firstname}}" class="form-control" name="firstname" id="firstname" placeholder="First name">
                         @error('firstname')
                             <div class="error">{{ $message }}</div>
                         @enderror

                       

                       </div>
                       <div class="form-group col-md-12">
                         <label for="lastname">Last name</label>
                         <input type="text"value="{{$editdata->lastname}}" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                         @error('lastname')
                             <div class="error">{{ $message }}</div>
                         @enderror
                       </div>
                       <div class="form-group col-md-12">
                         <label for="address">Address</label>
                         <textarea class="form-control"  id="address" name="address" placeholder="address">{{$editdata->address}}</textarea>
                         @error('address')
                             <div class="error">{{ $message }}</div>
                         @enderror
                       </div>

                       <div class="form-group col-md-12">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" value="{{$editdata->email}}" id="email" name="email" placeholder="Email">
                         @error('email')
                             <div class="error">{{ $message }}</div>
                         @enderror
                       </div>
                       <div class="form-group col-md-12">
                         <label for="mobileno">Mobile no</label>
                         <input type="number" value="{{$editdata->mobileno}}" class="form-control" id="mobileno" name="mobileno" placeholder="Mobile number">
                        @error('mobileno')
                            <div class="error">{{ $message }}</div>
                        @enderror
                       </div>
                       <div class="form-group col-md-12">
                         <label for="age">Age</label>
                         <input type="date" value="{{$editdata->age}}" class="form-control" id="age" name="age">
                         @error('age')
                             <div class="error">{{ $message }}</div>
                         @enderror
                       </div>
                      
                       <div class="form-group col-md-12">
                       <button type="submit" class="btn btn-success">submit</button>
                       </div>
                      
                     </div>
                </form>
            
        </div>
    </div>

</body>
</html>