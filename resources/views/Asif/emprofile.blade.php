@extends('layouts.app')


<!DOCTYPE html>
<html>
<head>
	<title>Employer Profile</title>
</head>
<body>
@include('partials.logout-header')

<div class="container-fluid" style="margin-bottom: 1%;">
    <div class="row text-center">
                <h2 style="margin-bottom: -1%;"><i>Employer Profile</i></h2>
        <div class="btn btn-primary" style="float: right;">
            <a href="{{URL::to('jobpost')}}" style="color: white; text-decoration: none;">Post Job</a>
        </div>
    </div>    
<hr/>
    <div class="row" id="p-info">
            <!--Personal Information form starts here...-->
        <form action="empstore" method="post" files = "true" enctype="multipart/form-data">
            <div class="col-sm-2">
                <input type="hidden" name="compinfos_id" value= {{$Euser->id}} />
                <h4>Upload Company Logo</h4>
                <div class="fileupload-new thumbnail img-up">
                    <img alt="Company Logo" src="{{ asset('img/demoUpload.jpg')}}">
                </div>
                <input type="file" name="company_logo" class="form-control">
            </div>
            <div class="col-lg-10">
                    <div class="row" id="form-row">
                        <div class="col-lg-6">
                            <p style="color: red; font-weight: bold;">Fields Marked with * are Mandatory</p>
                            <div class="input-group">
                                <div class="input-group-addon">Company Name * </div>
                                <input type="text" class="form-control" placeholder="Softec&reg;">
                            </div>
                        </div>            
                        <div class="col-lg-6">
                            <div class="input-group" style="margin-top: 5.5%;">
                                <div class="input-group-addon">Company E-Mail * </div>
                                <input type="email" class="form-control" name="email" placeholder="asifsharif190@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="form-row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Company Head Name * </div>
                                <input type="text" class="form-control" name="comp_head_name" placeholder="Mr. Ali">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">HR Head Name</div>
                                <input type="text" class="form-control" name="head_hr_department" placeholder="Mr. Adnan">
                            </div>
                        </div>
                    </div>

                    <div class="row" id="form-row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Company Slogan</div>
                                <input type="text" class="form-control" name="slogan" placeholder="Asdfghjkl">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Company Website </div>
                                <input type="text" class="form-control" name="comp_website" placeholder="www.pel.com.pk">
                            </div>
                        </div>
                    </div>




                    <div class="row" id="form-row">
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="input-group-addon">Address</div>
                                <input type="text" class="form-control" name="address" placeholder="House #..St..">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                    </div>
                    <div class="row" id="form-row">
                    	<div class="col-lg-4">
	                    	<div class="input-group">
	                    		<div class="input-group-addon">Industry</div>
			                    <input list = "Industry" name="industry_type" placeholder="Industry Type" class="form-control">
			                    <datalist id="Industry">
				                    <option value="Textile Industry">Textile Industry</option>
				                    <option value="Vegetable Ghee and Cooking Oil Industry">Vegetable Ghee and Cooking Oil Industry</option>
				                    <option value="Sugar Industry">Sugar Industry</option>
				                    <option value="Fertilizer Industry">Fertilizer Industry</option>
				                    <option value="Cement Industry">Cement Industry</option>
				                    <option value="Chemical Industry">Chemical Industry</option>
				                    <option value="Jute Industry">Jute Industry</option>
				                    <option value="Engineering Goods Industry">Engineering Goods Industry</option>
				                    <option value="Heavy Mechanical Complex, Texila">Heavy Mechanical Complex, Texila</option>
				                    <option value="Pakistan Machine Tools Factory, Landhi">Pakistan Machine Tools Factory, Landhi</option>
				                    <option value="Pakistan Steel Mills, Karachi">Pakistan Steel Mills, Karachi</option>
				                    <option value="Ship Building Industry">Ship Building Industry</option>
				                    <option value="Woolen and Worsted Textile Industry">Woolen and Worsted Textile Industry</option>
				                    <option value="Cigarette Industry">Cigarette Industry</option>
			                    </datalist> 
	                    	</div>
                    	</div>
                    	<div class="col-lg-4">
                    		<div class="input-group">
                    			<div class="input-group-addon">Employees Count</div>
			                    <input list = "Number Of Employees" name="number_of_employer" class="form-control" placeholder="Number Of Employees">
			                    <datalist id="Number Of Employees">
				                    <option value="1-10">1-10</option>
				                    <option value="11-50">11-50</option>
				                    <option value="51-100">51-100</option>
				                    <option value="101-200">101-200</option>
				                    <option value="201-300">201-300</option>
				                    <option value="301-500">301-500</option>
				                    <option value="More than 500">More than 500</option>
			                    </datalist> 
                    		</div>
                    	</div>
                    	<div class="col-lg-4">
                    		<div class="input-group">
                    			<div class="input-group-addon">Ownership Type</div>
	                    		<input list = "Ownership Type" name="ownership_type" class="form-control" placeholder="Ownership Type">
    	                		<datalist id="Ownership Type">
        	            			<option value="Sole Proprietorship">Sole Proprietorship</option>
            	        			<option value="Public">Public</option>
                	    			<option value="Private">Private</option>
                    				<option value="NGO">NGO</option>
                    			</datalist> 
                    		</div>
                    	</div>
                    </div>
                    <div class="row" id="form-row">
                    	<div class="col-lg-4">
                            <div class="input-group">
                                <div class="input-group-addon">Since</div>
	                    		<input list = "since" name="since" class="form-control" placeholder="Since">
    	                		<datalist id="since"> 
        	            			<option value="2016">2016</option>
        	            			<option value="2015">2015</option>
        	            			<option value="2014">2014</option>
        	            			<option value="2013">2013</option>
        	            			<option value="2012">2012</option>
        	            			<option value="2011">2011</option>
        	            			<option value="2010">2010</option>
        	            			<option value="2009">2009</option>
        	            			<option value="2008">2008</option>
        	            			<option value="2007">2007</option>
        	            			<option value="2006">2006</option>
        	            			<option value="2005">2005</option>
        	            			<option value="2004">2004</option>
        	            			<option value="2003">2003</option>
        	            			<option value="2002">2002</option>
        	            			<option value="2001">2001</option>
        	            			<option value="2000">2000</option>
                    			</datalist> 
                            </div>
                    	</div>
                    	<div class="col-lg-4">
                            <div class="input-group">
                    			<div class="input-group-addon">Branches</div>
	                    		<input list = "Branches" name="number_of_branches" class="form-control" placeholder="Branches">
    	                		<datalist id="Branches">
        	            			<option value="0-1">0-1</option>
            	        			<option value="1-2">1-2</option>
                	    			<option value="2-3">2-3</option>
                    				<option value="More then 3">More then 3</option>
                    			</datalist> 
                            </div>
                    	</div>
                    	<div class="col-lg-4">
                            <div class="input-group">
                                <div class="input-group-addon">Phone #</div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                    	</div>
                    </div>
                    <div class="row text-center" id="form-row">
                        <input type="submit" class="btn btn-primary"/>
                    </div>
            </div>
        </form>
        <!--Personal Information form ends here...-->
    </div>
</div>

@include('partials.footer2')

</body>
</html>

