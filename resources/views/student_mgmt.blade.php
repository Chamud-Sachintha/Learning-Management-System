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
            <h2 class="mb-4">Manage All Students </h2>

            <div class="row mt-2">
                <div class="col-12">
                    <span>Add New Student By Providing Details</span>
                </div>

                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" class="form-group" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="fname">Student First Name -</label>
                                        <input type="text" class="form-control" placeholder="Eg. Kamal">
                                    </div>

                                    <div class="col-6">
                                        <label for="lname">Student Last Name -</label>
                                        <input type="text" class="form-control" placeholder="Eg. Gunarathne">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <label for="email">Student Email Address -</label>
                                        <input type="text" class="form-control" placeholder="Eg. Kamal123@gmail.com">
                                    </div>

                                    <div class="col-6">
                                        <label for="mobile">Student Mobile Number -</label>
                                        <input type="text" class="form-control" placeholder="Eg. 077 1234567">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-12">
                                        <label for="fname">Provide Some Message Why Register Like This -</label><br>
                                        <textarea style="width: 100%; outline: none;" name="message" cols="30" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-3">
                                        <input type="submit" class="btn btn-primary" value="Save Student Details">
                                    </div>

                                    <div class="col">
                                        <input type="reset" style="color: white" class="btn btn-warning" value="Reset Feilds">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <span>Manage All Students Details</span>
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