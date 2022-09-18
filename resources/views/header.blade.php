<header class="d-none d-lg-block d-xl-block">
  <!--navbar navbar-expand-lg navbar-light bg-light-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <img src="{{asset('home/site_topic.png')}}" height="50" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto" style="font-weight: bolder; font-size: small; margin-right: 15px;">
                <a href="/" class="nav-item nav-link active">HOME</a>
                <a href="/payment" class="nav-item nav-link">PAYMENTS</a>
                <a href="/lessons" class="nav-item nav-link">LESSONS</a>
                <a href="/live_classes" class="nav-item nav-link">LIVE CLASSES</a>
                <a href="/free_sessions" class="nav-item nav-link">FREE SESSIONS</a>
                <a href="/about" class="nav-item nav-link">ABOUT</a>

                @if(Session()->has('member'))
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Session()->get('member')['full_name']}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/app">Profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
  </nav>
</header>

<!--have to change mobile view-->
<header class="d-lg-none d-xl-none">
  <!--navbar navbar-expand-lg navbar-light bg-light-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto" style="font-weight: bolder; font-size: small; margin-right: 10px;">
                <a href="/" class="nav-item nav-link active">HOME</a>
                <a href="/payment" class="nav-item nav-link">PAYMENTS</a>
                <a href="/lessons" class="nav-item nav-link">LESSONS</a>
                <a href="/live_classes" class="nav-item nav-link">LIVE CLASSES</a>
                <a href="/free_sessions" class="nav-item nav-link">FREE SESSIONS</a>
                <a href="#" class="nav-item nav-link">ABOUT</a>
            </div>
        </div>
    </div>
  </nav>
</header>