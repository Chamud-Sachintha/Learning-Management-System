<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('Admin Panel/css/style.css')}}">
    <style>
        input[type=text] {
            border: 1px solid black;
        }

        .select{
            border: 1px solid black;
        }

        .textarea{
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <!-- calling nav -->

        {{View::make('admin_header')}}

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Manage All Lessons </h2>

            <div class="row">
                <div class="col-12">
                    <span>Add Lesson Details By Providing Required Details</span>
                </div>

                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="lessonName">Enter Lesson Name -</label>
                                        <input type="text" class="form-control" placeholder="Eg. Science For Everyone">
                                    </div>
    
                                    <div class="col-6">
                                        <label for="month">Select Lesson Month -</label>
                                        <select name="month" id="" class="form-control select">
                                            <option value="january">January</option>
                                        </select>
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label for="month">Select Lesson Type -</label>
                                        <select name="month" id="" class="form-control select">
                                            <option value="tc">Theory Lesson</option>
                                            <option value="tc">Revision Lesson</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="vedioLink">Enter lesson Vedio Link (YouTube or Other) - </label>
                                        <input type="text" class="form-control" placeholder="https://www.youtube.com/wtrgsbvgft">
                                    </div>

                                    <div class="col-12 mt-2">
                                        <label for="fname">Provide Some Message Why Register Like This -</label><br>
                                        <textarea style="width: 100%; outline: none;" name="message" cols="30" rows="5"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="submit" class="btn btn-primary" value="Save Lesson Details">
                                            </div>

                                            <div class="col">
                                                <input type="reset" style="color: white" class="btn btn-warning" value="Reset Feilds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <span>Manage All Lesson Details</span>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('Admin Panel/js/jquery.min.js')}}"></script>
    <script src="{{asset('Admin Panel/js/popper.js')}}"></script>
    <script src="{{asset('Admin Panel/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin Panel/js/main.js')}}"></script>
</body>

</html>