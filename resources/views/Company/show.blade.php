@extends('layouts.app')

@section('title','show'.$company->companyname)

@section('content')

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">


<body>
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                      <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3> {{ $company->companyname }} </h3>
                    <p> {{ $company->companyvkntckn }}  </p>
                    <p> {{ $company->companyaddress }}  </p>
                    <p> {{ $company->companywebsite }}  </p>
                    <p> {{ $company->companyphone }}  </p>
                    <p> {{ $company->companyarea }}  </p>
                    <button id="gocompany" class="btn btn-warning">Go Company Page</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

  <style>
    body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;   
    font-family: sans-serif;
    background-color: #f1f1f1; 
}

.container {
    width: 500px;
    position: absolute;
    display: flex;
    justify-content: space-between;
    transform : translate(10% ,-65%);
}

.container .card {
    position: relative;
    border-radius: 10px;
}

.container .card .icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #f00;
    transition: 0.7s;
    z-index: 1;
}

.container .card:nth-child(1) .icon {
    background: #e07768;
}

.container .card:nth-child(2) .icon {
    background: #6eadd4;
}

.container .card:nth-child(3) .icon {
    background: #4aada9;
}


.container .card .icon .fa {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.7s;
    color: #fff;
}

i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.7s;
    color: #fff;
}

.container .card .face {
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.container .card .face.face1 {
    position: relative;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container .card:hover .face.face1{
    background: #ff0057;
    transform: translateY(0px);
}

.container .card .face.face1 .content {
    opacity: 1;
    transition: 0.5s;
}

.container .card:hover .face.face1 .content {
    opacity: 1;
}

.container .card .face.face1 .content i{
    max-width: 100px;
}

.container .card .face.face2 {
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0,0,0,0.8);
    transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);
}

.container .card .face.face2 .content p {
    margin: 0;
    padding: 0;
    text-align: center;
    color: #414141;
}

.container .card .face.face2 .content h3 {
    margin: 0 0 10px 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
    text-align: center;
    color: #414141;
} 

.container a {
    text-decoration: none;
    color: #414141;
}
    </style>
<script>
$('#gocompany').click(function(){
  window.location.href = "../Company";
}); 
</script>
@endsection