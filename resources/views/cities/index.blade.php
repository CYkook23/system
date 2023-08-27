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
        <div class="col-md-9" >
          <div style="text-align:right" >
            <a href="{{ route('cities.create') }}" > <button type="submit" class="btn btn-info text-light">New City</button></a>
          </div>
          @if(session('message'))
          <div style="color: green;">{{ session('message') }}</div>
          @endif
          <table class="table table-striped  my-3 shadow p-3 mb-5 bg-body-tertiary rounded" >
            <thead class=" text-light">
              <tr class="table-dark">
            <td>No.</td>
            <td>Name</td>
            <td>Department</td>
            <td style="padding-left: 60px;">Action</td>
           


    </tr>
    </thead>
    <tbody>

    @forelse($cities as $key => $city)
     
      <tr>
      <td>{{ $cities->firstItem() + $key }}.</td>
      <td>{{ $city->name }} </td>

      <td>
        {{ $city->department->name }}
      </td>

      <td style="display: flex;">
        <a href="{{ route('cities.edit', $city) }}">
        <button type="submit" class="btn btn-success " style="padding: 6px 22px;" >Edit</button> </a>

        <form action="{{ route('cities.delete', $city) }}" method="post" style="margin-left: 10px;">
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
