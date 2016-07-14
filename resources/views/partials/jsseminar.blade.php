@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
                <h3>Seminar</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
		    <form action="seminar_store" method="post" file="true">
        		Seminar Topic:
		        <input type="text" class="form-control" name="s_topic"></input><br/>
        		Institute:
		        <input type="text" class="form-control" name="s_institute"></input><br/>
        		<input type="submit" class="btn btn-primary" value="submit">
		    </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>



