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
    #welcome{
       margin-bottom: 20px;
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
#link
{
    text-align: center;
    color: red;
}
    
    </style>
    @include('partials.signup-header')
<div class="container-fluid" id="from-container">
    <div class="row" id="form-row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" id="login">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="login-form">
                    <form class="form" style="height: 100%" action="jstore">
                        <fieldset class="form">
                            <div class="container-fluid text-center" id="welcome">
                            <span>
                                I Am A Job Seeker!
                            </span>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="First-Name" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="Last-Name" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="E-Mail" placeholder="E-Mail" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="Password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>Re-Type Password</label>
                                <input type="password" class="form-control" name="Re-Type-Password" placeholder="Re-Type Password" required>
                            </div>
                            <input type="submit" value="Signup" class="btn btn-primary"style="margin-top: 1.5%;background-color: rgba(110,220,100,155)"></input>
                            <div class="container-fluid text-center" style="margin-top: 2%;">
                                    <a href="{{URL::to('login')}}" id="link" class="blink">
                                Already a member? Login here.</a>
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

<!--
@extends('layouts.app')
<div class="container-fluid">
    <div class="container">
        <div class="row text-center">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h2>
                Job Seeker Sign Up Form
            </h2>
            <form action="{{ URL::to('jsprofile') }}" method="get">
                <label>*First Name: </label><br/>
                <input class="form-control" type="text" name="First-Name" placeholder="First Name"  required><br/><br/>
                <label>*Last Name: </label><br/>
                <input class="form-control" type="text" name="Last-Name" placeholder="Last Name" required><br/><br/>
                <label>*Password: </label><br/>
                <input class="form-control" type="password" name="Password" placeholder="Password" required><br/><br/>
                <label>*Re-Type Password: </label><br/>
                <input class="form-control" type="password" name="Re-Type Password" placeholder="Re-Type Password" required><br/><br/>
                <label>*E-Mail: </label><br/>
                <input class="form-control" type="email" name="E-Mail" placeholder="Enter E-Mail" required><br/><br/>
                <input type="submit" value="Submit" id="b1">
            </form>
        </div>
        <div class="col-lg-4"></div>
        </div>
    </div>
</div>
-->