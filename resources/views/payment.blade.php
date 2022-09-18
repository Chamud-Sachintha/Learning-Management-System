<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- <link rel="stylesheet" href="{{asset('css/accordian_style.css')}}"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
		#foo{
			pointer-events: none;
		}

		.template_faq {
		background: #edf3fe none repeat scroll 0 0;
		}
		.panel-group {
		background: #fff none repeat scroll 0 0;
		border-radius: 3px;
		box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
		margin-bottom: 0;
		padding: 30px;
		}
		#accordion .panel {
		border: medium none;
		border-radius: 0;
		box-shadow: none;
		margin: 0 0 15px 10px;
		}
		#accordion .panel-heading {
		border-radius: 30px;
		padding: 0;
		}
		#accordion .panel-title a {
		background: darkred none repeat scroll 0 0;
		border: 1px solid transparent;
		border-radius: 30px;
		color: #fff;
		display: block;
		font-size: 18px;
		font-weight: 600;
		padding: 12px 20px 12px 50px;
		position: relative;
		transition: all 0.3s ease 0s;
		}
		#accordion .panel-title a.collapsed {
		background: #fff none repeat scroll 0 0;
		border: 1px solid #ddd;
		color: #333;
		}
		#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
		background: darkred none repeat scroll 0 0;
		border: 1px solid transparent;
		border-radius: 50%;
		box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
		color: #fff;
		content: "";
		font-family: fontawesome;
		font-size: 25px;
		height: 55px;
		left: -20px;
		line-height: 55px;
		position: absolute;
		text-align: center;
		top: -5px;
		transition: all 0.3s ease 0s;
		width: 55px;
		}
		#accordion .panel-title a.collapsed::after {
		background: #fff none repeat scroll 0 0;
		border: 1px solid #ddd;
		box-shadow: none;
		color: #333;
		content: "";
		}
		#accordion .panel-body {
		background: transparent none repeat scroll 0 0;
		border-top: medium none;
		padding: 20px 25px 10px 9px;
		position: relative;
		}
		#accordion .panel-body p {
		border-left: 1px dashed #8c8c8c;
		padding-left: 25px;
		}


        .heading{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        .bg-container{
            background-color: #1e1e1e; 
            padding: 20px 20px;
			right: 0;
        }

		.payment{
			border-radius: 10px;
			font-size: large;
			font-weight: bolder;
			color: white;
			padding: 20px;
			background-color: darkred;
		}

    </style>
</head>
<body style="overflow-x: hidden;">
    {{View::make('header')}}

     <div class="d-lg-none d-xl-none">
        <div class="text-center">
            <img src="{{asset('home/site_topic.png')}}" alt="" style="width: 300px;">
        </div>
    </div>

    <h1 class="heading ms-3 " id="foo">PAYMENTS</h1>
	<div class="bg-container d-none d-lg-block d-xl-block">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-auto mt-3">
				<div class="card" style="width: 30rem;">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="card-title">Theory Classes</h5>
								<p class="card-text">Learn All the theories in Syllabus Completely.</p>
							</div>
							<div class="col">
								<p class="payment">LKR. 2000.00</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-auto mt-3">
				<div class="card" style="width: 30rem;">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="card-title">Revision Classes</h5>
								<p class="card-text">Learn All the Revisions in Syllabus Completely.</p>
							</div>
							<div class="col">
								<p class="payment">LKR. 1500.00</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- accordian started -->
		<div class="row mt-3 justify-content-center">				
			<div class="col-md-9">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="row">
						<div class="col-12 mb-3">
							<strong style="font-size: large;">Payment Methoid 01</strong>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Hatton National Bank (HNB) 
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									People's Bank 
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Bank Of Ceylon (BOC)
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Sampath Bank 
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Nation Trust Bank 
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<form action="#" method="post">
							<div class="col">
								<label for="upload_slip" style="font-size: large">You can Upload Payed Bank Slip Down Here and Please Specify Month That you want to Pay</label>
							</div>
							<div class="row mt-2">
								<div class="col-4">
									<select name="" class="form-select">
										<option value="">January</option>
									</select>
								</div>
								<div class="col-auto">
									<input type="file" name="upload_slip" class="form-control" id="formFile">
								</div>
								<div class="col" >
									<input type="submit" class="btn btn-primary" value="Upload Bank Slip">
								</div>
							</div>
						</form>
					</div>

					<!-- <div class="row">
						<div class="col-12 mt-3">
							<strong style="font-size: large;">Payment Method 02</strong>
							<p>You Can Directly Pay Using Debit or Credit Card.</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="col-12">
								<label for="pay_month">Select Month Wish to Pay</label>
							</div>
							<div class="col">
								<select name="" id="" class="form-select">
									<option value="">January</option>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="col-12">
								<label for="pay_month">Select Month Wish to Pay</label>
							</div>
							<div class="col">
								<select name="" id="" class="form-select">
									<option value="">For Theory Classes</option>
									<option value="">For Revision Classes</option>
									<option value="">For Theory & Revision Classes</option>
								</select>
							</div>
						</div>
						<div class="col" style="margin-top: 23px">
							<input type="submit" class="btn btn-primary" value="Confirm Payment">
						</div> -->

						<div class="row mt-3">
							<strong style="font-size: large;" class="mb-3">Payment Method 02</strong>
							<form action="#" method="post">
								<div class="col">
									<label for="upload_slip" style="font-size: large">You Can Directly Pay Using Debit or Credit Card.</label>
								</div>
								<div class="row mt-2">
									<div class="col-4">
										<label for="pay_month">Select Month Wish to Pay</label>
									</div>
									<div class="col-auto">
										<label for="pay_month">Select Class Type</label>
									</div>
								</div>
								<div class="row mt-2">
									<div class="col-4">
										<select name="" class="form-select">
											<option value="">January</option>
										</select>
									</div>
									<div class="col-4">
										<select name="" id="" class="form-select">
											<option value="">For Theory Classes</option>
											<option value="">For Revision Classes</option>
											<option value="">For Theory & Revision Classes</option>
										</select>
									</div>
									<div class="col" >
										<input type="submit" class="btn btn-primary" value="Upload Bank Slip">
									</div>
								</div>
							</form>
						</div>

					</div>
					
				</div>
			</div>	
		</div>
		<!-- accordian ends here -->
	</div>

	<!-- change mobile view -->
	
	<div class="bg-container d-lg-none d-xl-none">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-auto mt-3">
				<div class="card" style="width: auto;">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="card-title">Theory Classes</h5>
								<p class="card-text">Learn All the theories in Syllabus Completely.</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col">
								<p class="payment">LKR. 2000.00</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-auto mt-3">
				<div class="card" style="width: auto;">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="card-title">Revision Classes</h5>
								<p class="card-text">Learn All the Revisions in Syllabus Completely.</p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col">
								<p class="payment">LKR. 1500.00</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- accordian start here -->
			<div class="col-md-12 mt-3">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="row">
						<div class="col-12 mb-3">
							<strong style="font-size: large;">Payment Methoid 01</strong>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Why you choose Titanic? 
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Why Titanic best? 
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									How to apply Titanic jobs? 
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									How experts Titanic team member? 
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How Titanic give customer support? 
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
							</div>
						</div>
					</div>

					<!-- payment method 1 for mobile view -->
					<div class="row mt-3">
						<form action="#" method="post">
							<div class="col">
								<label for="upload_slip" style="font-size: large">You can Upload Payed Bank Slip Down Here and Please Specify Month That you want to Pay</label>
							</div>
							<div class="row mt-2">
								<div class="col-12 mb-3">
									<select name="" class="form-select" id="">
										<option value="">January</option>
									</select>
								</div>
								<div class="col-auto mb-3">
									<input type="file" name="upload_slip" class="form-control" id="formFile">
								</div>
								<div class="col ">
									<input type="submit" class="btn btn-primary" value="Upload Bank Slip">
								</div>
							</div>
						</form>
					</div>

					<!-- payment method 2 for mobile view -->
					<div class="row">
						<div class="col-12 mt-3">
							<strong style="font-size: large;">Payment Method 02</strong>
							<p>You Can Directly Pay Using Debit or Credit Card.</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="col-12">
								<label for="pay_month">Select Month Wish to Pay</label>
							</div>
							<div class="col">
								<select name="" id="" class="form-select">
									<option value="">January</option>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="col-12">
								<label for="pay_month">Select Month Wish to Pay</label>
							</div>
							<div class="col">
								<select name="" id="" class="form-select">
									<option value="">For Theory Classes</option>
									<option value="">For Revision Classes</option>
									<option value="">For Theory & Revision Classes</option>
								</select>
							</div>
						</div>
						<div class="col" style="margin-top: 23px">
							<input type="submit" class="btn btn-primary" value="Confirm Payment">
						</div>
					</div>

				</div><!--- END COL -->		
			</div>
			<!-- accordian ends -->
		</div>
	</div>
	

	<script src="{{asset('js/accordian.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

	<!-- <script type='text/javascript'> 
		document.addEventListener('contextmenu', event => event.preventDefault());

		document.onkeydown = function(e) {
		var message='Content is protected\nYou cannot view the page source.';
		if (e.ctrlKey &&
		(e.keyCode === 67 ||
		e.keyCode === 86 ||
		e.keyCode === 85 ||
		e.keyCode === 117)) {
		alert(message);
		return false;
		} else {
		return true;
		}
		};
		$(document).keypress('u',function(e) {
		if(e.ctrlKey)
		{
		return false;
		}
		else
		{
		return true;
		}
		});

		$(document).keydown(function (event) {
		var message = 'Content is protected\nYou cannot view the Dev Tools.';
		if (event.keyCode == 123) { // Prevent F12
		alert(message);
		return false;
		} else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
		alert(message);
		return false;
		}
		});

	</script> -->
</body>
</html>