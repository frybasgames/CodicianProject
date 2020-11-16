@extends('layouts.app')

@section('title','Personal')

@section('content')
 {{-- <a href="{{ route('Company.create') }}" class="btn btn-success">create</a>  --}}

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
                        <h3>  COMPANY NAME</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="company" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="personal" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Personal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show" id="companytab" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create a Company</h3>
                            </div>
                            <div class="tab-pane fade show active" id="personaltab" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Personal for Company</h3>
                                 
                                    <div class="row register-form">
                                    <div class="col-md-6">
                                        <form id="personalform" method="POST" action="{{ route('Personal.store')}}">
                                            @csrf   
                                        <div class="form-group">
                                            <input id="personalname" name="personalname" required type="text" class="form-control" placeholder="Personal Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="personallastname" name="personallastname" required type="text" class="form-control" placeholder="Personal Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="personalemail" name="personalemail" type="mail" required class="form-control" placeholder="Personal Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="personalphone" name="personalphone" type="number" required class="form-control" placeholder="Personal Phone *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="personaltitle" name="personaltitle" type="text" required class="form-control" placeholder="Personal title *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="personaltc" name="personaltc" type="number" required class="form-control" placeholder="Personal TC*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select id="personalcompany" name="personalcompany" class="form-control">
                                                <option class="hidden"  selected disabled>Select Company</option>
                                                    @foreach ($company as $item)
                                                        <option>{{$item->companyname}}</option>
                                                    @endforeach
                                            </select>
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
                    window.location.href = "../Personal";
                });        

                $('#company').click(function(){
                    window.location.href = "../Company/create";
                });
                                    
</script>


@endsection