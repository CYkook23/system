@extends('app')
@section('content')
<html>
  <head>
    <title>Document</title>
     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-3">
      <div class="row justify-content-center" >
        <div class="col-md-11" >
          <div style="text-align:right" >
            <a href="{{ route('employees.create') }}" > <button type="submit" class="btn btn-info text-light">New Employees</button></a>
          </div>
          @if(session('message'))
          <div style="color: green;">{{ session('message') }}</div>
          @endif
          <table class="table table-striped  my-3 shadow p-3 mb-5 bg-body-tertiary rounded" >
            <thead class=" text-light">
              <tr class="table-dark">
            <td>No.</td>
            <td>Name</td>
            <td>last name</td>
            <td>Identification card</td>
            <td>Telephone number</td>
            <td>Address</td>
            <td>Mail</td>
            <td>City</td>
            <td style="padding-left: 60px;">Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($employees as $key => $employee)   
      <tr>
      <td>{{ $employees->firstItem() + $key }}.</td>
      <td>{{ $employee->name }}</td>
      <td>{{ $employee->last_name}}</td>
      <td>{{ $employee->identification_card}}</td>
      <td>{{ $employee->telephone_number}}</td>
      <td>{{ $employee->address}}</td>
      <td>{{ $employee->mail}}</td>
      <td>
        {{ $employee->city->name }}
      </td>

      <td style="display: flex;">
        <a href="{{ route('employees.edit', $employee) }}">
        <button type="submit" class="btn btn-success " style="padding: 6px 22px;" >Edit</button> </a>
        
        
        <form action="{{ route('employees.delete', $employee)}}" method="post"  style="margin-left: 10px;">
            @csrf    
            <button type="submit" class="btn btn-danger">Delete</button> 
        </form>                            
      </td>
    </tr>
   @empty
    <tr>
       <td colspan="5">No data found in table</td>
   </tr>
   @endforelse
 </tbody>
</table>
</div>
    </div>
  </body>
</html>
@endsection    