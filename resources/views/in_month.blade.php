<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .heading{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        .bg-container{
            background-color: #1e1e1e;
            padding: 20px;
        }

        .thead-primary{
            background-color: dodgerblue;
            color: white;
        }
    </style>
</head>
<body>
    {{View::make('header')}}

    <div class="d-sm-block d-md-block d-xs-block d-lg-none d-xl-none">
        <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 300px;">
        </div>
    </div>

    <h1 class="heading ms-3">LESSONS</h1>
    <div class="bg-container">
        <div class="row">
            <div class="col" class="col-12 col-sm-6 col-md-6 col-xs-6">
                <div class="card mt-2" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Theory Lessons</h5>

                        <div>
                            <table class="table">
                                <thead class="thead-primary">
                                <tr>
                                    <th>Lessons</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">LESSON 01</th>
                                    <td>
                                        <a href="/view_lesson" class="btn btn-primary btn-sm">Watch Lesson</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">LESSON 02</th>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Watch Lesson</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col" class="col-12 col-sm-6 col-md-6 col-xs-6">
                <div class="card mt-2" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Revision Lessons</h5>

                        <div>
                            <table class="table">
                                <thead class="thead-primary">
                                <tr>
                                    <th>Lessons</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">LESSON 01</th>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Watch Lesson</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">LESSON 02</th>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Watch Lesson</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>