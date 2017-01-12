<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a href="?controller=passengers&action=toLogin">Sign In</a></div>
        </div>
        <div class="panel-body" >
            <form id="signupform" class="form-horizontal" role="form" method="post" action="?controller=passengers&action=signup">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>

                <div class="form-group">
                    <label for="uname" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="uname" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mob" class="col-md-3 control-label">Mobile</label>
                    <div class="col-md-9">
                        <input type="tel" class="form-control" name="mob" placeholder="Mobile">
                    </div>
                </div>

                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <input type="submit" value="SignUp" id="btn-login" class="btn btn-success"/>
                        <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>