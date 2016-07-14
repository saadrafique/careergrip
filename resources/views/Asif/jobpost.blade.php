@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Job Post Page</title>
</head>
<body>
<!--Header Starts Here-->
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-lg-6" id="logo-col">
            <img id="logo" src="{{ asset('img/logo2.png')}}" style="height:100px;"/>
        </div>
        <div class="col-lg-6" id="reg-col">
            <ul id="nav-reg1" class="nav navbar-nav">
                <li id="nav-reg12"><a href="{{ URL::to('index2')}}">Home</a></li>
                <li id="nav-reg12"><a href="{{ URL::to('emprofile')}}">Goto Profile</a></li>
                <li id="nav-reg12"><a href="{{ URL::to('index')}}">Logout</a> </li>
            </ul>
        </div>
    </div>
</div>
<!--Header Ends Here-->

<!--Color Divide Row Starts Here-->
<div class="container-fluid">
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

<!--Job post form starts here-->
<div class="container-fluid">
    <div class="row" style="margin-bottom: 1%;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h2 class="text-center">Post Job Detail: </h2>
            <form action="jobstore" method="post" id="job-form">
                <label>Job Title: </label><br/>
                <input class="form-control" type="text" name="job_title" placeholder="Job Title"><br/>
                <label>Job Description: </label><br/>
                <input class="form-control" type="text" name="job_description" placeholder="Job Description"><br/>
                <label>Job Duration: </label><br/>
                <input class="form-control" type="text" name="job_duration" placeholder="Job Description"><br/>
                <label>Apply Due: </label><br/>
                <div class="form-inline">
                    <label>From: </label>
                    <input class="form-control" type="date" name="apply_due" placeholder="From" style="width: 41%;">
                    <label>To: </label>
                    <input class="form-control" type="date" name="last_date" placeholder="To" style="width: 41%;">
                </div>
                <br/>
                <input class="btn btn-primary" type="submit" value="submit" >
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<!--Job post form ends here-->


@include('partials.footer2')
</body>
</html>




