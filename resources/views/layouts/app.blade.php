<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Main</title>
<link rel="stylesheet" type="text/css" href="{{ asset('Site.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{ asset('css/'bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('css/jquery.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/jqui/jquery-ui.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('js/jqui/jquery-ui.css')}}">
<!--
<link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
-->
<script type="text/javascript" src="{{ asset('js/validate/bootstrapValidator.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/validate/jquery.datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validate/pwstrength.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validate/registration_validation.js')}}"></script>

</head>
<body>
@yield('content')

</body>



        <script type="text/javascript">
    $(function(){
        $('#adv').click(function(){
//window.alert('Loading: Please Wait...');

 $.ajax({
      url: 'ajax',
      type: "get",
   /*   data: {
        'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()

      },
*/
      success: function(data){
        //alert(data);
         $("#add-view").append(data);
      }
    });  


        })//end of click event
    })
</script>

  
</html>




















