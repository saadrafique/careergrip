@extends('layouts.app')
<script>
function blinker() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blinker, 1000);
</script>
    <style>
   .col-md-3{
        height:600px;
    }
    #from-container
    {
        background-image: url("img/bg/bg.jpg");
//        background-color: WhiteSmoke;
    }
    .form,fieldset
    {
    }
    #login
    {
        opacity: 0.6;
        background-image: url("img/bg/bg3.jpg");
            margin-top:50px;
            padding-top:40px;
            height: 620px;
            box-shadow: 10px 10px 5px #888888;
            border-radius: 10%;
    }
    #login:hover
    {
        opacity: 1;
    }
    #welcome
    {
        margin-top: 40%;
    }
    span{
        font-family: 'ChunkFiveRegular';
        font-size: 38px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);

    }
input, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
//    -moz-transition: 0.5s;
  //  transition: 0.5s;
    outline: none;
}
textarea{
    height: 200px;
}
label{
    color: #FCB53B;
}
button {
    background-color: #f03761;; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    //-moz-transition-duration: 0.4s; /* Safari */
    //transition-duration: 0.4s;
    //cursor: pointer;
}
#link{
    text-align: center;
    color: red;
}
</style>

    @include('partials.login-header')
<div class="container-fluid" id="from-container">
    <div class="row" id="form-row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" id="login">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="login-form">
                    <form class="form" style="height: 100%" method="post" action="{{URL::to('index2')}}">
                        <fieldset class="form">
                            <div class="container-fluid text-center" id="welcome">
                            <span>
                                Welcome Back! 
                            </span>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary"style="margin-top: 1.5%;background-color: rgba(110,220,100,155)"></input>
                            <div class="container-fluid text-center" style="margin-top: 2%">
                                    <a href="{{URL::to('#')}}" id="link" class="blink">
                                        New Here? Create an account.
                            </div>
                        </fieldset>
                    </form>
                </div> 
                <div class="col-md-3"> </div>
            </div>
        </div>
    <div class="col-md-3"> </div> 
</div>
</div>
<!--Color Divide Row Starts Here-->
<div class="container-fluid">
<div class="row">
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
</div>
<div class="row">
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
</div>
</div>
<!--Color Divide Row Ends Here-->
<div class="container-fluid">
<div class="row text-center" style="background-color: lightblue">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <h4>
            <p>&copy; | All Rights Reserved By <a href="#">Career Grip</a></p>
        </h4>
    </div>
    <div class="col-lg-4"></div>
</div>
</div>




