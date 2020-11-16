@extends('layouts.app')

@section('title',$personal->personalname)

@section('content')
<div class="box">
<div class="container register">
    <div class="row">

        @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li> {{$error}} </li>
@endforeach
</ul>
</div>
@endif
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>  COMPANY </h3>
            <p>You are 30 seconds away from earning your own money!</p>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="company" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="personal" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Personal</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               
<div class="tab-pane fade show active" id="personaltab" role="tabpanel" aria-labelledby="profile-tab">
<h3  class="register-heading">Edit Personal</h3>

    <div class="row register-form">
    <div class="col-md-6">
        <form id="personalform" method="POST" action="{{ route('Personal.update', $personal)}}">  
            @csrf
        @method('PATCH') 
        <div class="form-group">
            <input id="personalname" type="text" name="personalname" class="form-control" required placeholder="Personal Name *" value="{{ $personal->personalname }}" />
        </div>
        <div class="form-group">
            <input id="personallastname" type="text" name="personallastname" class="form-control" required placeholder="Personal Last Name *" value="{{ $personal->personallastname }}" />
        </div>
        <div class="form-group">
            <input id="personalemail" type="mail" name="personalemail" class="form-control" required placeholder="Personal Email *" value="{{ $personal->personalemail }}" />
        </div>
        <div class="form-group">
            <input id="personalphone" type="number" name="personalphone"  class="form-control" required placeholder="Personal Phone *" value="{{ $personal->personalphone }}" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input id="personaltitle" type="text" name="personaltitle"  class="form-control" required placeholder="Personal title *" value="{{ $personal->personaltitle }}" />
        </div>
        <div class="form-group">
            <input id="personaltc" type="number" name="personaltc"  class="form-control" required placeholder="Personal TC*" value="{{ $personal->personaltc }}" />
        </div>
        <div class="form-group">
            <input id="personalcompany" type="text" name="personalcompany"  class="form-control" required placeholder="Personal company*" disabled value="{{ $personal->personalcompany }}" />
        </div>
        <button id="personaladd" type="submit" class="btnRegister">Saved</button>
    </form> 
    <button id="personalcancel" class="btnRegister">Cancel</button>
</div>
</div>

</div>
</div>
</div>
</div>
<style>
      .box {
        top:50%;
        transform : translate(0% ,35%);
    }
    body {
     font-family: Helvetica;
     -webkit-font-smoothing: antialiased;
     background: rgba(86 103 120);
 }
    </style>

<script>
$('#personalcancel').click(function(){
                    window.location.href = "../../Personal" ;
                });  

$('#company').click(function(){
    window.location.href = "../../Company/create";
});


</script>

@endsection