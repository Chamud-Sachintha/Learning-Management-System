<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body, html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        }

        * {
        box-sizing: border-box;
        }

        .bg-img {
        /* The image used */
        background-image: url("{{asset('home/home1.jpg')}}");
        min-height: 82.5%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* position: relative; */
        }

        /* Add styles to the form container */
        .container {
        top: 14%;
        position: absolute;
        left: 70%;
        /* margin: 1%; */
        max-width: 22%;
        /* padding: 1%; */
        /*background-color: white;*/
        }

        .bot-container{
            top: 70%;
            position: absolute;
            left: 40%;
            margin: 20px;
            max-width: 700px;
            padding: 10px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 2%;
        margin: 3px 0 8px 0;
        border: none;
        background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        /* Set a style for the submit button */
        .btn {
        background-color: darkred;
        color: white;
        padding: 5px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        .btn:hover {
        transition: 0.5s;
        opacity: 1;
        color: white;
        }

        .textbox-appearance{
            border: 0px 0px 0px 1px 0px;
            background-color: white;
        }

        footer{
            bottom: 0;
            position: fixed;
            width: 100%;
            color: white;
            font-size: x-small;
            font-weight: bold;
            text-align: center;
            background-color: crimson
        }
    </style>
</head>
<body>
    <div class="col" style="margin-bottom: 3%;">
        {{View::make('header')}}
    </div>

    <!-- register popup -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form action="/savestudent" method="post">
                        @csrf
                        <label for="fname">Full Name -</label><br>
                        <input type="text" placeholder="Nimal Kumara" class="form-control" name="full_name">

                        <label for="fname">Email Address -</label><br>
                        <input type="text" placeholder="nimal123@gmail.com" class="form-control" name="email">

                        <label for="fname">Create Password -</label><br>
                        <input type="text" placeholder="********" class="form-control" name="paswd">

                        <label for="fname">Confirm Password -</label><br>
                        <input type="text" placeholder="********" class="form-control" name="con_paswd">

                        <input type="submit" class="btn btn-success mt-3" value="Create Account">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- reg model ends here -->

    <!-- status show model  start here-->

    <div class="modal fade" id="modalStatusShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="alert alert-success" role="alert">
                    {{Session()->get('status')}}
                </div>
            </div>
        </div>
    </div>

    <!-- status show model ends here -->

    <div class="bg-img d-none d-lg-block d-xl-block">
        <!--<img src="{{asset('home/site_topic.png')}}" alt="" style="width: 600px;">-->
        <form action="/login" class="container" method="post">
            @csrf
            <div class="col-sm-12">
                <img src="{{asset('home/logo.jpg')}}" alt="" style="width: 40%; height: 40%; margin-bottom: 10px; margin-left: 70px;">
            </div>
            <div class="col-12">
                <p style="color: white; font-size: small; margin-bottom: -1px;">{{$status}}ඔබ පෙර ලියාපදිංචි වී ඇත්නම් ඔබගේ විස්තර ඇතුළත් කර Login  වෙන්න ඔබ අලුතින්ම සම්බන්ධ වන්නේ නම් පහතින් Register වෙන්න.</p>
            </div>
            <div class="col">
                <label for="email" style="color: white;"><b>Email</b></label>
            </div>
            <div class="col">
                <input type="text" placeholder="Enter Email" name="email" required>
            </div>
            <div class="col">
                <label for="psw" style="color: white;"><b>Password</b></label>
            </div>
            <input type="password" placeholder="Enter Password" name="paswd" required>

            <button type="submit" class="btn mt-1">Login</button><br>
            <p style="color: white; margin-top: 5%; font-size:small;">Don't You Have an Account ? <a href="#" data-toggle="modal" data-target="#modalRegisterForm"> Register</a> </p>

        </form>

        <!-- <div class="bot-container">
            <p style="font-size: small;">Align images with the helper float classes or text alignment classes.block -level images can be centered using the . mx-auto margin utility class <br> mx-auto margin utility class</p>
            <img src="{{asset('home/time_table.jpg')}}" alt="" style="position: absolute; width: 80px; height: 80px; margin-top: -50px; margin-left: 595px;">
            <img src="{{asset('home/prev_lessons.jpg')}}" alt="" style="position: absolute; width: 80px; height: 80px; margin-top: -50px; margin-left: 500px;">
            <img src="{{asset('home/time_table.jpg')}}" alt="" style="position: absolute; width: 80px; height: 80px; margin-top: -50px; margin-left: 400px;">
        </div> -->

    </div>

    <!-- have to code mobile view-->
    <div class="d-lg-none d-xl-none">
        <!-- <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 300px;">
        </div> -->
        <div class="row">
            <div class="col text-center">
                <img src="{{asset('home/mobile_home.png')}}" alt="" style="width: 100%; height: 100%; margin-bottom: 10px; margin-left: -20px;">
            </div>
        </div>

        <div style="margin: 2px 25px 2px 25px">
            <p style="font-size: small; text-align: justify;">ඔබ පෙර ලියාපදිංචි වී ඇත්නම් ඔබගේ විස්තර ඇතුළත් කර Login  වෙන්න ඔබ අලුතින්ම සම්බන්ධ වන්නේ නම් පහතින් Register වෙන්න.</p>

            <form action="/login" method="post" style="margin-top: -10px">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkRemember">
                        <label class="form-check-label" for="checkRemember">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Sign in</button>
                <p style="font-size:small;">Don't You Have an Account ? <a href="#" data-toggle="modal" data-target="#modalRegisterForm"> Register</a> </p>
                <div class="row">
                    <div class="text-center">
                        <img src="{{asset('home/time_table.jpg')}}" alt="" style="width: 80px; height: 80px;">
                        <img src="{{asset('home/prev_lessons.jpg')}}" alt="" style="width: 80px; height: 80px;">
                        <img src="{{asset('home/time_table.jpg')}}" alt="" style="width: 80px; height: 80px;">
                    </div>
                </div>
                <!--<div class="text-center">
                </div>-->
            </form>

            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.pinimg.com/originals/11/1a/03/111a03133d14214539c96e0f657dff1a.png" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://uhdwallpapers.org/uploads/converted/20/01/14/the-mandalorian-5k-1920x1080_477555-mm-90.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://wallpaperaccess.com/full/215112.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        </div>
    </div>

    <!-- <footer>
        <p style="margin-top: 20px;">&copy;2022 All Right Recived.!</p>
    </footer> -->

    @if(Session()->has('status'))
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#modalStatusShow").modal('show');
            }
        </script>
    @endif
</body>
</html>