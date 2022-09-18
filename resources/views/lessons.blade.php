<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons</title>

    <style>
        .heading{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        .bg-container{
            background-color: #1e1e1e; 
            padding: 50px 0px 50px 0px;

        }

    </style>
</head>
<body style="overflow-x: hidden">
    {{View::make('header')}}

    <div class="d-sm-block d-md-block d-xs-block d-lg-none d-xl-none">
        <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 300px;">
        </div>
    </div>

    <h1 class="heading ms-3">LESSONS</h1>
    <div class="bg-container d-none d-lg-block d-xl-block">
        <div class="row">
            <div class="row">
                <!-- <form action="#" method="post" class="mb-3">
                    <div class="row ms-2">
                        <div class="col-sm-auto  mt-2 d-flex justify-content-center">
                            <label for="prev" style="color: white;">Previous Years : </label>
                        </div>
                        <div class="col-sm-auto  mt-2 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-sm" aria-label="Default select example" style="width: 100px;">
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div>
                        <div class="col-sm-auto mt-2 d-flex justify-content-center">
                            <input type="submit" value="Load Lessons" class="btn btn-success btn-sm">
                        </div>
                    </div> 
                </form> -->
                <div class="col d-flex justify-content-center">
                    <div class="card mt-2" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">January</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="/in_month" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card mt-2" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">February</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="/in_month" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">March</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">April</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">May</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">June</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mt-2  mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">July</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">August</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">September</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">October</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">November</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">December</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- have to change mobile view -->

    <div class="bg-container d-lg-none d-xl-none">
        <div class="row">
            <div class="row">
                <!-- <form action="#" method="post" class="mb-3">
                    <div class="row">
                        <div class="col-sm-auto  mt-2 d-flex justify-content-center">
                            <label for="prev" style="color: white;">Previous Years : </label>
                        </div>
                        <div class="col-sm-auto  mt-2 d-flex justify-content-center">
                            <select name="" id="" class="form-select form-select-sm" aria-label="Default select example" style="width: 100px;">
                                <option value="">2021</option>
                                <option value="">2020</option>
                            </select>
                        </div>
                        <div class="col mt-2 d-flex justify-content-center">
                            <input type="submit" value="Load Lessons" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </form> -->
                <div class="col d-flex justify-content-center">
                    <div class="card mt-2" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">January</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="/in_month" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center">
                    <div class="card mt-2" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">February</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">March</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">April</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">May</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">June</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mt-2  mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">July</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">August</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">September</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">October</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">November</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>

                <div class="col mt-2 d-flex justify-content-center">
                    <div class="card" style="width: 11rem;">
                        <div class="card-body">
                            <h5 class="card-title">December</h5>
                            <p class="card-text">Explore Weekly Lessons </p>
                            <a href="#" class="btn btn-primary">View Lessons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>