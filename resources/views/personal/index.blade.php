@extends('layouts.app')

@section('title','Personal')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="{{ route('Personal.create') }}" class="btn btn-info">Personal create</a>  
    </div>
    <div class="col-sm">
      <button id="gocompany" class="btn btn-warning">Go Company Page</button>  
    </div>
  </div>
</div>

@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>No</th>
              <th>Personal Name</th>
              <th>Personal Lastname</th>
              <th>Personal Email</th>
              <th>Personal Phone </th>
              <th>Personal Title</th>
              <th>Personal TC</th>
              <th>Personal Company</th>
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach($personal as $item)
          <tr>
              <td scope="row">{{ $item->id }}</td>
              <td>{{ $item->personalname  }}</td>
              <td>{{ $item->personallastname  }}</td>
              <td>{{ $item->personalemail  }}</td>
              <td>{{ $item->personalphone }}</td>
              <td>{{ $item->personaltitle  }}</td>
              <td>{{ $item->personaltc }}</td>
              <td>{{ $item->personalcompany }}</td>
              <td>
                <a href="{{ route('Personal.show',$item) }}" class="btn btn-success">detail
                </a>
              </td>
              <td>
                <a href="{{ route('Personal.edit',$item) }}" class="btn btn-primary">edit
                </a>
              </td>
              <td>
                <form action="{{ route('Personal.destroy',$item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="display: flex" type="submit" class="btn btn-danger">delete
                    </button>
                </form>
              </td>
          </tr> 
          @endforeach       
          <tbody>
      </table>
  </div>


  <style>
    /* buttons  */
    * {
  margin: 0;
  padding: 0;
}

html,
body {
  box-sizing: border-box;
  height: 100%;
  width: 100%;
}

body {
  background: #FFF;
  font-family: 'Noto Sans JP', sans-serif;
  font-weight: 400;
}

.buttons {
  display: flex;
  flex-direction: row;
      flex-wrap: wrap;
  justify-content: center;
  text-align: center;
  width: 100%;
  height: 100%;
  margin: 0 auto;
/*   padding: 2em 0em; */
}
.container {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  padding:  40px 0px;
  width: 440px;
}

h1 {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  margin: 0 0 0.4em;
  font-size: 1em;
}

p {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  font-size: 0.8em;
  margin: 0 0 2em;
}


.btn {
  letter-spacing: 0.1em;
  cursor: pointer;
  font-size: 14px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;
}
.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect04 {
  --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
  display: var(--uismLinkDisplay);
  color: #000;
  outline: solid  2px #000;
  position: relative;
  transition-duration: 0.4s;
  overflow: hidden;
}

.effect04::before,
.effect04 span{
    margin: 0 auto;
	transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
	transition-duration: 0.4s;
}

/* 文字1を上に */
.effect04:hover{

  background-color: #000;
}

/* HOVERしたら文字1を上に */
.effect04:hover span{
  -webkit-transform: translateY(-400%) scale(-0.1,20);
          transform: translateY(-400%) scale(-0.1,20);
}

/*文字2*/
.effect04::before{
  content: attr(data-sm-link-text);
	color: #FFF;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-transform: translateY(500%) scale(-0.1,20);
          transform: translateY(500%) scale(-0.1,20);
}

/* HOVERしたら文字2を上に */
.effect04:hover::before{
  letter-spacing: 0.05em;
  -webkit-transform: translateY(0) scale(1,1);
          transform: translateY(0) scale(1,1);
}
/* buttons  */



    *{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
  }
  body {
      font-family: Helvetica;
      -webkit-font-smoothing: antialiased;
      background: rgba(86 103 120);
  }
  h2{
      text-align: center;
      font-size: 18px;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: white;
      padding: 30px 0;
  }
  
  /* Table Styles */
  
  .table-wrapper{
      margin: 10px 70px 70px;
      box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
  }
  
  .fl-table {
      border-radius: 5px;
      font-size: 12px;
      font-weight: normal;
      border: none;
      border-collapse: collapse;
      width: 100%;
      max-width: 100%;
      white-space: nowrap;
      background-color: white;
  }
  
  .fl-table td, .fl-table th {
      text-align: center;
      padding: 8px;
  }
  
  .fl-table td {
      border-right: 1px solid #f8f8f8;
      font-size: 12px;
  }
  
  .fl-table thead th {
      color: #ffffff;
      background: #4FC3A1;
  }
  
  
  .fl-table thead th:nth-child(odd) {
      color: #ffffff;
      background: #324960;
  }
  
  .fl-table tr:nth-child(even) {
      background: #F8F8F8;
  }
  
  /* Responsive */
  
  @media (max-width: 767px) {
      .fl-table {
          display: block;
          width: 100%;
      }
      .table-wrapper:before{
          content: "Scroll horizontally >";
          display: block;
          text-align: right;
          font-size: 11px;
          color: white;
          padding: 0 0 10px;
      }
      .fl-table thead, .fl-table tbody, .fl-table thead th {
          display: block;
      }
      .fl-table thead th:last-child{
          border-bottom: none;
      }
      .fl-table thead {
          float: left;
      }
      .fl-table tbody {
          width: auto;
          position: relative;
          overflow-x: auto;
      }
      .fl-table td, .fl-table th {
          padding: 20px .625em .625em .625em;
          height: 60px;
          vertical-align: middle;
          box-sizing: border-box;
          overflow-x: hidden;
          overflow-y: auto;
          width: 120px;
          font-size: 13px;
          text-overflow: ellipsis;
      }
      .fl-table thead th {
          text-align: left;
          border-bottom: 1px solid #f7f7f9;
      }
      .fl-table tbody tr {
          display: table-cell;
      }
      .fl-table tbody tr:nth-child(odd) {
          background: none;
      }
      .fl-table tr:nth-child(even) {
          background: transparent;
      }
      .fl-table tr td:nth-child(odd) {
          background: #F8F8F8;
          border-right: 1px solid #E6E4E4;
      }
      .fl-table tr td:nth-child(even) {
          border-right: 1px solid #E6E4E4;
      }
      .fl-table tbody td {
          display: block;
          text-align: center;
      }
  }
    </style>

<script>
  $('#gocompany').click(function(){
      window.location.href = "../Company";
  });
</script>
@endsection