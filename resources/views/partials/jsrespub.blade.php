@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
                <h3>Research & Publication</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="rpstore" method="post" file="true">
                Research & Publication Title:
                <input type="text" class="form-control" name="rp_title"></input><br/>
                Research & Publication Description:
                <input type="text" class="form-control" name="rp_description"></input><br/>
                Research & Publication Year:
                <input type="text" class="form-control" name="rp_year"></input><br/>
                Publication Paper:
                <input type="text" class="form-control" name="p_paper"></input><br/>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>



