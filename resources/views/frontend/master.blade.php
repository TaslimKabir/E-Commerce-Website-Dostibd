
<html lang="en">
  <head><style type="text/css">span.iconify, i.iconify, iconify-icon { display: inline-block; width: 1em; }</style>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="OzveiH1r4F4swDK2TDVDTcdTihAQwrBotvqeL63X">
    <title>DostiBD</title>
    @include('frontend.include.style')
   <style>
    
* {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
  
  /* Float four columns side by side */
  
  
  /* Remove extra left and right margins, due to padding */
  .row {margin: 0 -5px;}
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive columns */
  @media (max-width: 991.98px)  {
    .column {
      width: 50%;
      display: block;
      margin-bottom: 20px;
      
    }
  }
 
.word {
width: 150px;
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-word;
        color: black;
display: block;
font-weight: 500;
line-height: 18px;
text-transform: capitalize;
margin-top:10px;
    }
.prices{
  color:#FF5733;
}
.checked {
color: orange;
}
  /* Style the counter cards */
  .carddds {
    padding: 10px;
    text-align: left;
    background-color: #ffff;
    overflow-wrap: break-word;
    max-height: 100%;
    justify-content: space-around;
    margin: 3%;
    
  }

 
/* CSS */
.button-5 {
align-items: center;
background-clip: padding-box;
background-color: #fa6400;
border: 1px solid transparent;
border-radius: .25rem;
box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
box-sizing: border-box;
color: #fff;
cursor: pointer;
display: inline-flex;
font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 16px;
font-weight: 600;
justify-content: center;
line-height: 1.25;
margin: 0;
min-height: 3rem;
padding: calc(.875rem - 1px) calc(1.5rem - 1px);
position: relative;
text-decoration: none;
transition: all 250ms;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
vertical-align: baseline;
width: auto;
}

.button-5:hover,
.button-5:focus {
background-color: #fb8332;
box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
transform: translateY(-1px);
}

.button-5:active {
background-color: #c85000;
box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
transform: translateY(0);
}
   </style>
    
    <!-- Jquery Script  CDN-->
   @include('frontend.include.script')
    

  </head>
  <body>
    <!--Header Part Include Start-->
    @include('frontend.include.header')
   @yield('body')  
   @include('frontend.include.footer')
    <!--Footer Part End-->
   @include('frontend.include.mobilemenu')
   @include('frontend.include.script')
   
  
    
  </body>
</html>