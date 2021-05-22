@extends('master')
@section('content') 

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left pt-5">
                        <img class="mt-5" src="/images/registerAnimate.png" alt=""/>
                        <h3>Welcome Back</h3>
                        <p>We are happy to see you again!!</p> 
                    </div>
                    
                    <div class="col-md-9 register-right">
                     <form action="login" method="POST">
                        @csrf 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login</h3>
                                <div class="row register-form">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="tscNumber" placeholder="Enter TSC Number" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password *" required />
                                        </div>
                                        
                                        <div class="col-md-12">
                                             <input type="submit" class="btn btn-success col-md-12" name="btnLogins" value="Login"/>
                                          </div>
                                          <div class="col-md-12">
                                          <a href="/changepassword"><p class="loginForgotpassword">Forgot Password?</p></a>
                                          </div> 
                                    </div> 
                                    <div class="col-md-3"></div> 
                                </div>
                            </div> 
                        </div>
                        </form>
                    </div>
                    
                </div>

            </div>
 @endsection