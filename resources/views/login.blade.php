
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perguruan Tinggi AL – FAJAR BEKASI | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

</head>
<body class="body-login">
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login Teacher & Employee</h4>
                    </div>
                    <div class="modal-body">
                    <div class="login-form">
                    <form action="{{ url('login_teacher') }}" method="POST">
                    {{ csrf_field() }}
                    <input class="login-input" name="akses_code" id="log-inp" placeholder="NIP Al-Fajar" required></input>
                    
                      <select name="akses_type" class="form-control" id="sg">
                        <option value="Teacher">Teacher</option>
                        <option value="Employee">Employee</option>
                      </select>
                   
                    <input class="login-input" name="akses_email" id="log-inp" placeholder="Email" required></input>
                    <input class="login-input" name="akses_password" type="password" placeholder="Password" required></input><br>
                    <div id="cb-log" class="checkbox">
                    <label><input type="checkbox" value=""> Remember me</label>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login Staff</h4>
                    </div>
                            <div class="modal-body">
                                <div class="login-form">
                    <form action="{{ url('login_staff') }}" method="POST">
                    {{ csrf_field() }}
                    <input class="login-input" name="akses_code" id="log-inp" placeholder="Access Code" required></input>
                    <input class="login-input" name="akses_email" id="log-inp" placeholder="Email" required></input>
                    <input class="login-input" name="akses_password" type="password" placeholder="Password" required></input><br>
                    <div id="cb-log" class="checkbox">
                    <label><input type="checkbox" value=""> Remember me</label>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login Parents</h4>
                    </div>
                    <div class="modal-body">
                    <div class="login-form">
                    <form action="{{ url('login_parent') }}" method="POST">
                    {{ csrf_field() }}
                    <input class="login-input" name="akses_code" id="log-inp" placeholder="NISN" required></input>
                    <select name="dt_student_grade" class="form-control" id="sg">
                    <option value="">Students Grade</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    </select>
                    <input class="login-input" name="akses_email" id="log-inp" placeholder="Email" required></input>
                    <input class="login-input" name="akses_password" type="password" placeholder="Password" required></input><br>
                    <div id="cb-log" class="checkbox">
                    <label><input type="checkbox" value=""> Remember me</label>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content-login">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Login Students</h4>
                    </div>
                    <div class="modal-body">
                    <div class="login-form">
                    <form action="{{ url('login_student') }}" method="POST">
                    {{ csrf_field() }}
                    <input class="login-input" name="akses_code" id="log-inp" placeholder="NISN" required></input>
                    <select name="dt_student_grade" class="form-control" id="sg">
                    <option value="">Grade</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    </select>
                    <input class="login-input" name="akses_email" id="log-inp" placeholder="Email" required></input>
                    <input class="login-input" name="akses_password" type="password" placeholder="Password" required></input><br>
                    <div id="cb-log" class="checkbox">
                    <label><input type="checkbox" value=""> Remember me</label>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
                <button style="border:none" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
        </div>

<!-- box -->

<div class="login-page">
<?php
                    
                    if(isset($_SESSION['error_msg']))
                    {
                    echo "<div class='alert alert-warning'>
                      <strong>".$_SESSION['error_msg']."</strong>
                    </div>";
                    unset($_SESSION['error_msg']);
                    }
                    ?>
    <div class="login-content">
        <div data-toggle="modal" data-target="#myModal1" class="login-box" style="margin-right:20px;">
            <img class="login-img" src="{{ url('img/img_login/teacher_login.png') }}">
            <div class="div-lab">
            <lable class="login-lable">Login Teacher & Employee</lable>
            </div>
        </div>

        <div data-toggle="modal" data-target="#myModal2" class="login-box">
            <img class="login-img" src="{{ url('img/img_login/staff_login.png') }}">
            <div class="div-lab">
            <lable class="login-lable">Login Staff</lable>
            </div>
        </div>

        <div data-toggle="modal" data-target="#myModal3" class="login-box" style="margin-right:20px;">
            <img class="login-img" src="{{ url('img/img_login/parents_login.png') }}">
            <div class="div-lab">
            <lable class="login-lable">Login Parents</lable>
            </div>
        </div>

        <div data-toggle="modal" data-target="#myModal4" class="login-box">
            <img class="login-img" src="{{ url('img/img_login/students_login.png') }}">
            <div class="div-lab">
            <lable class="login-lable">Login Students</lable>
            </div>
        </div>

<!-- box end -->

    </div>
    <a class="back-button" href="{{ url('/') }}"><i class="fa fa-home"></i></a>
</div>


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/default.js"></script>

<!-- <script type="text/javascript">

    $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 7000
    });

    });


</script> -->

</body>
</html>
