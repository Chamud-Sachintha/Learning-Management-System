<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Document</title>

    <style>
        .heading{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        .bg-container{
            background-color: #1e1e1e; 
            width:100%;
            padding-bottom: 10%;
        }
    </style>
</head>
<body style="overflow-x: hidden;">
    {{View::make('header')}}

    <div class="d-sm-block d-md-block d-xs-block d-lg-none d-xl-none">
        <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 300px;">
        </div>
    </div>
    
    <!-- comment popup start here -->

    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 Modal Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Student Name</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer d-block">
                            <p class="float-start">Not yet account <a href="#">Sign Up</a></p>
                            <button type="submit" class="btn btn-warning float-end">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end popup model here -->

    <h1 class="heading ms-3">FREE SESSIONS</h1>
    <div class="bg-container d-none d-lg-block d-xl-block" style="margin-top: 2%;">
        <div class="row ms-2">
            <div class="col-6 mt-3">
                <div class="col-sm-auto">
                    <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
            </div>
            <div class="col-6" style="position: absolute;">
                <div class="ratio ratio-16x9" style="width: 100%; left: 106%;" id="myVedio" style="position:absolute;">
                    <iframe src="https://www.youtube.com/embed/MPq6vYm3Nno"></iframe>
                    <!-- <video src="https://vimeo.com/695969795" 
                        poster="" 
                        webkit-playsinline="" 
                        playsinline="" preload="metadata" controlslist="nodownload" disablepictureinpicture="" 
                        controls="" class="h5p-video" style="display: block;">
                    </video> -->
                    <!-- <iframe class="embed-responsive-item" src="https://vimeo.com/embed/695969795" allowfullscreen></iframe> -->                    
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 d-none d-lg-block d-xl-block" style="margin-left: 53%;">
        <div class="float-right">
            <a href="" style="width: 98%;" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalForm">Put a Comment</a> 
        </div>
    </div>
    
    <!-- have to change mobile view -->
    <div class="bg-container d-lg-none d-xl-none" style="overflow-x: hidden;">
        <div class="row ms-2">
            <div class="col-12 mt-3">
                <div class="col-sm-auto">
                    <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
                <div class="col">
                    <p style="color: white">Lesson Title</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="ratio ratio-16x9" id="myVedio">
                <iframe src="https://player.vimeo.com/video/695969795?h=5aea9c3550&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position: absolute;top:0;left:0;width:100%;height:100%;" ></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                <!-- <video src="https://vimeo.com/695969795" 
                    poster="" 
                    webkit-playsinline="" 
                    playsinline="" preload="metadata" controlslist="nodownload" disablepictureinpicture="" 
                    controls="" class="h5p-video" style="display: block;">
                </video> -->
                <!-- <iframe class="embed-responsive-item" src="https://vimeo.com/embed/695969795" allowfullscreen></iframe> -->
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalForm" style="width: 100%">Put  Comment</a>
            </div>
        </div>
    </div>
</body>
</html>