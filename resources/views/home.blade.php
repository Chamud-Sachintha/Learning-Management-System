<!doctype html>
<html lang="en">
  <head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('Admin Panel/css/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<!-- calling nav -->
      
      {{View::make('admin_header')}}

      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Hellow <span><img src="https://img.icons8.com/bubbles/100/000000/so-so.png"/></span>{{ Session::get('member')['full_name'] }}</h2>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <img src="https://img.icons8.com/bubbles/100/000000/all.png"/>
                    </div>
                    <div class="media-body text-right">
                      <h3>278</h3>
                      <span>New Posts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <img src="https://img.icons8.com/bubbles/100/000000/all.png"/>
                    </div>
                    <div class="media-body text-right">
                      <h3>278</h3>
                      <span>New Posts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <img src="https://img.icons8.com/bubbles/100/000000/all.png"/>
                    </div>
                    <div class="media-body text-right">
                      <h3>278</h3>
                      <span>New Posts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <img src="https://img.icons8.com/bubbles/100/000000/all.png"/>
                    </div>
                    <div class="media-body text-right">
                      <h3>278</h3>
                      <span>New Posts</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-12">
            <span>Payment Analytics</span>
          </div>
          
          <div class="col-xl-6 col-sm-12 col-12 mt-2">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 text-center">
                    <img src="https://img.icons8.com/bubbles/100/000000/bank-building.png"/>
                  </div>
                  <div class="col-12 text-center">
                    <p>Payment With Bank Transfer</p>
                  </div>
                  <div class="col-12 text-center">
                    <h1 class="display-4">19</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-sm-12 col-12 mt-2">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 text-center">
                    <img src="https://img.icons8.com/bubbles/100/000000/bank-card-back-side.png"/>
                  </div>
                  <div class="col-12 text-center">
                    <p>Payment With Online Banking</p>
                  </div>
                  <div class="col-12 text-center">
                    <h1 class="display-4">19</h1>
                  </div>
                </div>
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