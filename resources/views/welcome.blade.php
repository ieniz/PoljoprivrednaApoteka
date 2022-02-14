<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>POLJOPRIVREDNA APOTEKA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

   
        <style>   body{
             background: url(http://www.da-files.com/artnetwork/realm-of-fantasy/bg-stars.gif) repeat 0 0;
    transition: background-position 10500s ease-out !important;
    position: center absolute!important;
  font-family: 'Roboto Slab', serif;
  
  margin: 0;
}
.wrapper{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  font-size: 5vw;
  font-weight: 100;
}



a {
  border-bottom: 1px solid #453886;
  color: red;
  padding-bottom: .25em;
  text-decoration: none;
}

a:hover {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='%23453886' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
  background-position: bottom;
  background-repeat: repeat-x;
  background-size: 20%;
  border-bottom: 0;
  padding-bottom: .3em;
  text-decoration: none;
}
  
   
        </style>
    </head>
    <body >     
    <div class="wrapper">
  <div class="inner">
  &nbsp &nbsp   
    <a  href="{{ route('login') }}" >PRIJAVA</a>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp              
    
    <a  href="{{ route('register') }}" >REGISTRACIJA</a>
  </div>
</div>             
    </body>
</html>
