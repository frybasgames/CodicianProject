<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
              <div class="col-xs-2 col-xs-offset-4">
                <div class="box">
                    <a href="{{ route('Company.index') }}" class="btn btn-white btn-animation-1">Go Company Page</a> 
                  </div>
              </div>
              <div class="col-xs-2 col-xs-offset-1">
                <div class="box1">
                    <a href="{{ route('Personal.index') }}" class="btn btn-white btn-animation-1">Go Personal Page</a> 
                  </div>
              </div>
            </div>
          </div>
        </div>

        
        

    </body>
</html>

<style>
    body {
font-family: Helvetica;
-webkit-font-smoothing: antialiased;
background: rgba(86 103 120);
}
    /* buttons  */
    
.box{
  position:absolute;
  top:50%;
  left:50%;
  transform : translate(20% ,-50%);
}

.box1{
  position:absolute;
  top:50%;
  left:50%;
  transform : translate(-120% ,-50%);
}

.btn:link,
.btn:visited{
  text-decoration: none;
  text-transform:uppercase;
  position:relative;
  top:0;
  left:0;
  padding:20px 40px;
  border-radius:100px;
  display:inline-block;
  transition: all .5s;
}

.btn-white{
  background:#fff;
  color:#000;
}

.btn:hover{
   box-shadow:0px 10px 10px rgba(0,0,0,0.2);
   transform : translateY(-3px);
}

.btn:active{
  box-shadow:0px 5px 10px rgba(0,0,0,0.2)
  transform:translateY(-1px);
}

.btn-bottom-animation-1{
  animation:comeFromBottom 1s ease-out .8s;
}

.btn::after{
  content:"";
  text-decoration: none;
  text-transform:uppercase;
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  border-radius:100px;
  display:inline-block;
  z-index:-1;
  transition: all .5s;
}

.btn-white::after {
    background: #fff;
}

.btn-animation-1:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

@keyframes comeFromBottom{
  0%{
    opacity:0;
    transform:translateY(40px);
  } 
  100%{
    opacity:1;
    transform:translateY(0);
  }
}
/* buttons  */
</style>
