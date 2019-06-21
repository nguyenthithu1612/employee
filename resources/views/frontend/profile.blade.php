<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="css/custom.css" rel="stylesheet">  
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../../{{$employee->picture }}" class="img-responsive" alt="">
                </div>
               
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                       
                    </div>
                    <div class="profile-usertitle-job">
                        {{ $employee->lastname }} {{ $employee->middlename }} {{ $employee->firstname }}
                    </div>
                </div>
                
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="">
                                <i class="glyphicon glyphicon-home"></i>
                                Personal Information</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <h1>General Information</h1>
                <div class="col-md-3">
                    <p>Name:</p>
                    <p>Unit:</p>
                    <p>Division:</p>
                    <p>Address:</p>
                    <p>City:</p>
                    <p>Zip:</p>
                    <p>Age:</p>
                    <p>BirthDate:</p>
                    <p>Date_hired:</p>
                    <p>Department:</p>

                </div>
                <div class="col-md-9">
                     <p>{{ $employee->lastname }} {{ $employee->middlename }} {{ $employee->firstname }}</p>
                    <p>{{ $employee->zip }}</p>
                    <p>{{ $division->name }}</p>
                    <p>{{ $employee->address }}</p>
                    <p>{{ $city->name }}</p>
                    <p>{{ $employee->zip }}</p>
                    <p>{{ $employee->age }}</p>
                    <p>{{ $employee->birthdate }}</p>
                    <p>{{ $employee->date_hired }}</p>
                    <p>{{ $department->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
    <strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">me</a></strong>
</center>
<br>
<br>
