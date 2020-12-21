<!-- Login Modal -->

<div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            
            <div class="modal-header">    
                <h2 class="modal-title">User Login</h2>
                <button class="close pt-4" type="button" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form name="login_form" action="#" onsubmit="return(Submit_login())">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pswd">Password</label>
                        <input class="form-control" type="password" id="pswd" placeholder="Enter password" name="psw">
                    </div>
                    <!-- <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div> -->
                    <button type="button" class="btn btn-primary btn-block">Login</button>
                </form>
            <p class="font-weight-light text-center" style="font-size: 15px;"><a href="#"><i>Forgot Password?</i></a></p>
            <p class="font-weight-light text-center" style="font-size: 17px;"><small>Not an User?</small> <b><i><a data-toggle="modal" href="#signin" data-dismiss="modal">Sign-in</a></i></b></p>
            
            </div>
        </div>
    </div>
</div>

<!-- Admin Login Modal -->

<div class="modal fade" id="admin_login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            
            <div class="modal-header">    
                <h2 class="modal-title">Admin Login</h2>
                <button class="close pt-4" type="button" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form name="login_form" action="#" onsubmit="return(Submit_login())">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pswd">Password</label>
                        <input class="form-control" type="password" id="pswd" placeholder="Enter password" name="psw">
                    </div>
                    <!-- <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div> -->
                    <button type="button" class="btn btn-primary btn-block">Login</button>
                </form>
                <p class="font-weight-light text-center" style="font-size: 15px;"><a href="#"><i>Forgot Password?</i></a></p>
                <p class="font-weight-light text-center" style="font-size: 17px;"><small>Not an Admin?</small> <b><i><a data-toggle="modal" href="#admin_signin" data-dismiss="modal">Sign-in</a></i></b></p>
            
            </div>
        </div>
    </div>
</div>

<!-- Sign-in Modal -->
<div class="modal fade" id="signin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">

            <div class="modal-header">
                <h2 class="modal-title">User Sign-in</h2>
                <button class="close pt-4" type="button" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form name="signin_form" action="#" onsubmit="return(Submit_signin())">
                    <div class="row">
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input class="form-control" type="text" id="firstname" placeholder="Enter First name" name="fname">
                            </div>
                        </div>
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" id="lastname" placeholder="Enter Last name" name="lname">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Current Address</label>
                        <input class="form-control" type="textarea" id="address" placeholder="Your current address" name="adr">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="opt" value="male">
                            <label class="custom-control-label" for="customRadio1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="opt" value="female">
                            <label class="custom-control-label" for="customRadio2">Female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="opt" value="other">
                            <label class="custom-control-label" for="customRadio3">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input class="form-control" type="text" id="mobile" placeholder="Enter Mobile number" name="mob">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter Email address" name="email">
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="pswd">Password</label>
                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw">
                            </div>
                        </div>
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="pswd">Confirm Password</label>
                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="agree" checked> I agree to all the terms and conditions.
                        </label>
                    </div>

                    <button type="button" class="btn btn-primary btn-block">Sign-in</button>

                </form>
            
            <p class="font-weight-light text-center" style="font-size: 17px;"><small>Wanna</small> <b><i><a data-toggle="modal" href="#login" data-dismiss="modal">Login?</a></i></b></p>
            
            </div>


        </div> 
    </div>
</div>

<!-- Admin Sign-in Modal -->
<div class="modal fade" id="admin_signin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">

            <div class="modal-header">
                <h2 class="modal-title">Admin Sign-in</h2>
                <button class="close pt-4" type="button" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form name="signin_form" action="#" onsubmit="return(Submit_signin())">
                    <div class="row">
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input class="form-control" type="text" id="firstname" placeholder="Enter First name" name="fname">
                            </div>
                        </div>
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" id="lastname" placeholder="Enter Last name" name="lname">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Current Address</label>
                        <input class="form-control" type="textarea" id="address" placeholder="Your current address" name="adr">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="opt" value="male">
                            <label class="custom-control-label" for="customRadio1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="opt" value="female">
                            <label class="custom-control-label" for="customRadio2">Female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="opt" value="other">
                            <label class="custom-control-label" for="customRadio3">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input class="form-control" type="text" id="mobile" placeholder="Enter Mobile number" name="mob">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter Email address" name="email">
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="pswd">Password</label>
                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw">
                            </div>
                        </div>
                        <div class="col-sm">
                            
                            <div class="form-group">
                                <label for="pswd">Confirm Password</label>
                                <input class="form-control" type="password" id="pswd" placeholder="Enter Password" name="psw">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="agree" checked> I agree to all the terms and conditions.
                        </label>
                    </div>

                    <button type="button" class="btn btn-primary btn-bl ock">Sign-in</button>

                </form>
            
            <p class="font-weight-light text-center" style="font-size: 17px;"><small>Wanna</small> <b><i><a data-toggle="modal" href="#login" data-dismiss="modal">Login?</a></i></b></p>
            
            </div>


        </div> 
    </div>
</div>