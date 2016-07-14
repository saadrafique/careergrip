<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset('css/jquery.js')}}"></script>
<style>
html, body
{
    height: 100%;
}
body
{
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
}
.container
{
    text-align: center;
    display: table-cell;
    vertical-align: middle;
}
.content
{
    text-align: center;
    display: inline-block;
}
.title
{
    font-size: 96px;
}
a
{
    text-decoration: none;
    font-family: Algerian;
    color: rgba(80,140,200,100);
/*
    transition: transform 2s;
    transition-duration: 2s;
*/
}
a:hover
{
    text-shadow: 4px 10px 7px black;
/*    transform: scale(2,2); */

}
</style>
</head>

<script type="text/javascript">
    $(function(){
        $('#asif').click(function(){
        window.alert('Loading: Please Wait...');
        })
    })
</script>

<body>
    <div class="container">
        <div class="content">
            <div class="title" id="asif"><a href="{{ URL:: to('index')}}">Click Here...</a></div>
        </div>
    </div>
</body>
</html>


























<!--
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Effects - Show Demo</title>
  
  <link rel="stylesheet" href="{{ asset('jquery-ui.css')}}">
  <script src="{{ asset('jquery-1.10.2.js')}}"></script>
  <script src="{{ asset('jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('style.css')}}">

  <style>
  .toggler { width: 500px; height: 200px; }
  #button { padding: .5em 1em; text-decoration: none; }
  #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
  #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
  </style>
  <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 100 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 280, height: 185 } };
      }
 
      // run the effect
      $( "#effect" ).show( selectedEffect, options, 1000, callback );
    };
 
    //callback function to bring a hidden box back
    function callback() {
      setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
      }, 5000 );
    };
 
    // set effect from select menu value
    $( "#asif1" ).mouseover(function() {
      runEffect();
    });

 
//    $( "#effect" ).hide();
  });

  </script>
</head>
<body>
 
<div class="toggler">
  <h3 id="asif1">asif</h3>
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Show</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>
 
<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
</select>
<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
</body>
</html>
-->