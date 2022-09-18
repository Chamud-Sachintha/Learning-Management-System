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
            padding: 50px;
        }
    </style>
</head>
<body>
    {{View::make('header')}}

    <div class="d-sm-block d-md-block d-xs-block d-lg-none d-xl-none">
        <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 600px;">
        </div>
    </div>

    <h1 class="heading ms-3">ABOUT</h1>
    <div class="bg-container">
        <div class="row">
            <p style="color: white">ADVANCED LEVEL MEDIA & COMMUNICATION STUDIES</p>
        </div>
        <div class="row">
            <p style="color: white">SAMEERA PERERA</p><br>
            <p style="color: white">BA(Hons) University of Kelaniya</p><br>
            <p style="color: white">Certificate in Digital Journalism</p><br>
            <p style="color: white">Script Writer</p><br>
            <p style="color: white">Tv Journalist</p><br>
            <p style="color: white">+94 77 8 75 76 77</p><br>
        </div>
    </div>
</body>
</html>