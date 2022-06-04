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
           
           
                <form method="POST" action="{{route('otpverify')}}">
                   
                   <div class="form-group col-md-12">
                     <label for="mobileno">Mobile no</label>
                     <input type="number" class="form-control" name="mobileno" value="{{$mobileno}}" disabled="true">
                    <input type="hidden" name="mobileto"  value="{{$mobileno}}">
                   </div>
                   <div class="form-group col-md-12">
                     <label for="otp">OTP</label>
                     <input type="number" class="form-control" name="otp" placeholder="otp">
                    
                   </div>
                   <button type="submit"  class="btn btn-success">submit</button>
                </form>
            
        </div>
    </div>

</body>
</html>