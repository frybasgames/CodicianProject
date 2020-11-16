@extends('layouts.app')

@section('title','Company')

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
                        <h3>  COMPANY</h3>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="company" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="personal" data-toggle="tab" href="#" role="tab" aria-controls="profile" aria-selected="false">Personal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="companytab" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create a Company</h3>
                                
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <form id="companyform" method="POST" action="{{ route('Company.store')}}">
                                            @csrf
                                        <div class="form-group">
                                            <input id="companyname" name="companyname" required type="text" class="form-control" placeholder="Company Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="companyvkntckn" name="companyvkntckn" required type="number" class="form-control" placeholder="CompanyVKN_TCKN *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="companyaddress" name="companyaddress" required type="text" class="form-control" placeholder="Company Address *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input id="companywebsite" name="companywebsite" required type="text" class="form-control"  placeholder="Company Web Site *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="companyphone" name="companyphone" type="number" required class="form-control" placeholder="Company Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select id="companyarea" class="form-control" required name="companyarea">
                                                <option class="hidden" selected disabled>Company Area</option>
                                                <option>Development and technology</option>
                                                <option>Sales</option>
                                                <option>Consulting services and support</option>
                                                <option>Marketing and communications</option>
                                                <option>Corporate operations</option>
                                                <option>Human resources</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                        
                                        <button id="create" type="submit" class="btnRegister">Create</button>
                                    </form> 
                                    <button id="companycancel" class="btnRegister">Cancel</button>
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
                $('#companycancel').click(function(){
                window.location.href = "../Company";
                });

                $('#personal').click(function(){
                    window.location.href = "../Personal/create";
                });

                
                    
</script>


@endsection