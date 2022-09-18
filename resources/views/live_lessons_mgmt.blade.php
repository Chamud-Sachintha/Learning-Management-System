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
            <h2 class="mb-4">Manage All Live Classes </h2>

        </div>
    </div>

    <script src="{{asset('Admin Panel/js/jquery.min.js')}}"></script>
    <script src="{{asset('Admin Panel/js/popper.js')}}"></script>
    <script src="{{asset('Admin Panel/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin Panel/js/main.js')}}"></script>
</body>

</html>