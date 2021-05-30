@extends('master')
@section('content') 

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left ">
                        <img class="mt-5 mb-5" src="/images/registerAnimate.png" alt=""/>
                        <h3>Welcome</h3>
                        <p class="mt-3 mb-3">You are 30 seconds away from been a member!</p>
                        <a href="/login" class=" mb-5"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    
                    <div class="col-md-9 register-right">
                     <form action="register" method="POST">
                        @csrf 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create account with us</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="fname" placeholder="First Name *" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name *" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tscnumber" placeholder="TSC Number *"   />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="idno" placeholder="ID Number *" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" required />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" required />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="gender">
                                                <option class="hidden"  selected disabled>Please select your gender</option>
                                                <option value="male">Male</option>
                                                <option value ="female">Female</option> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="modeofnotificatio">
                                                <option class="hidden"  selected disabled>Please select your notification type</option>
                                                <option value="email">Email Address</option>
                                                <option value ="sms">SMS</option> 
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password *" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confrimpassword" placeholder="Confirm Password *" required/>
                                        </div>
                                        <input type="submit" class="btnRegister" name="btnRegister" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                    
                </div>

            </div>
 @endsection