<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/design.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.bottom{
    background-color:rgba(255,255,255,0.8);
    border-top:2px solid #ddd;
    clear:both;
    padding-top:10px;
    padding-bottom:0px;
    text-align:center;
    font-size:14px;
}

.form-group{
  padding-top:2%;
  padding-left:5%;
  padding-right:5%;
}
/* General sizing */
ul.dropdown-lr {
  width: 300px;
}
/* General sizing */
ul.dropdown-lr {
  width: 300px;
}
/* mobile fix */
@media (max-width: 768px) {
	.dropdown-lr h3 {
		color: #eee;
	}

	.dropdown-lr label {
		color: #eee;
	}
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/nwh/"><img src="BL Pictures/logo.png" width="100px" height: style="margin-right:10px;margin-top:-18px;" class="white-border center-block"/></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="hotelgallery.php">Hotel</a></li>
        <li><a href="amenitiesgallery.php">Amenities</a></li>
        <li><a href="resortgallery.php">Resort</a></li>
        <li><a href="location.php">Location</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
      <li class="dropdown" id="login-dp">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
          <form id="ajax-login-form" action="#" method="post" role="form" autocomplete="off">
            <div class="form-group">
              <label for="username">Username</label>
               <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-center" style="text-align:right;">
                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-xs-12 pull-center" >
                  <input style="background-color:#edc478;border-color:#DCDCDC;color: black;font-weight:bold;"type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                </div>
                <div class="col-xs-8">
                  <input type="checkbox" tabindex="3" name="remember" id="remember">
                   <label for="remember"> Remember Me</label>
                </div>
              </div>
            </div>

            <div class="bottom">
								<a href="#myModalSignUp" data-toggle="modal" data-target="#myModalSignUp"><b>Register</b></a>
						</div>
      </ul>
    </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myModalSignUp" role="dialog">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <center><h3 class="modal-title"><b>Registration</b></h3></center>
					</div>
					<div class="modal-body">
						<p>
						<label for="firstname">First Name:</label><input type="text" name="firstname"><br/><br/>
						<label for="lastname">Last Name:</label> <input type="text" name="lastname"><br/><br/>
						<label for="birthdate">Birthdate:</label><input type="date" name="birthdate" value="1" min="1" max="31" /><br/><br/>
						<label for="Username">Username:</label><input type="text" name="username"><br/><br/>
						<label for="Email">Email:</label><input type="text" name="email"><br/><br/>
						<label for="Password">Password:</label><input type="password" name="password"><br/>
					</p>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
					</div>
				  </div>
				</div>
		</div>  		