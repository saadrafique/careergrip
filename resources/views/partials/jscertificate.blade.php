@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
		<h3>Certification / Course</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
		    <form action="coursestore" method="post" file="true">
        		Certification / Course Title:
		        <input type="text" class="form-control" name="c_name"/><br/>
        		Certification / Course Year:
        		<input type="date" id="datepicker" class="form-control" name="c_year"/><br/>
		        Certification / Course Institute:
        		<input type="text" class="form-control" name="c_institute"/><br/>
        		<input type="submit" class="btn btn-primary" value"Submit">
    		</form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

