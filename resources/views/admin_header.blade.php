<?php
    $name_string = explode(" ", Session::get('member')['full_name']);
?>
<nav id="sidebar">
	<div class="custom-menu">
		<button type="button" id="sidebarCollapse" class="btn btn-primary"></button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
        <div class="user-logo">
            <div class="img" style="background-color: dodgerblue; padding-top: 8px;">
                <span style="color: white; font-size: 50px; font-weight: 600px;">{{ $name_string[0][0] }}{{ $name_string[1][0] }}</span>
            </div>
            <h3>{{ Session::get('member')['full_name'] }}</h3>
        </div>
    </div>
    <ul class="list-unstyled components mb-5">
        <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="/dashboard"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li class="{{ (request()->is('student')) ? 'active' : '' }}">
            <a href="/student">
                <span class="fa fa-download mr-3 notif">
                    {{-- <small class="d-flex align-items-center justify-content-center">5</small> --}}
                </span> 
                Student Mgmt.
            </a>
        </li>
        <li class="{{ (request()->is('lessons')) ? 'active' : '' }}">
            <a href="/lessons"><span class="fa fa-gift mr-3"></span> Lessons Mgmt.</a>
        </li>
        <li class="{{ (request()->is('live_lessons')) ? 'active' : '' }}">
            <a href="/live_lessons"><span class="fa fa-trophy mr-3"></span> Live Classes</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Free Sessions</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Payments</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Setings</a>
        </li>
        <li>
            <a href="/logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
        </li>
    </ul>
</nav>