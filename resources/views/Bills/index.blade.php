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
            <a href="{{ route('bills.create') }}" > <button type="submit" class="btn btn-info text-light">New Bill</button></a>
          </div>
          @if(session('message'))
          <div style="color: green;">{{ session('message') }}</div>
          @endif
          <table class="table table-striped  my-3 shadow p-3 mb-5 bg-body-tertiary rounded" >
            <thead class=" text-light">
              <tr class="table-dark">
                <td>No.</td>
                <td>Total</td>
                <td>Subtotal</td>
                <td>Employee</td>
                <td>Client</td>
                <td >Timestamp</td>
                <td style="padding-left: 60px;" >Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key => $bill)   
      <tr>
      <td>{{ $bills->firstItem() + $key }}.</td>
      <td>{{ $bill->total }}</td>
      <td>{{ $bill->subtotal }}</td>
      <td>
        {{ $bill->employee->name }}
      </td>
      <td>
        {{ $bill->client->name }}
      </td>
      <td>{{ $bill->created_at->format('F, d, Y')}}</td>
      <td style="display: flex;">
        <a href="{{ route('bills.edit', $bill) }}">
        <button type="submit" class="btn btn-success " style="padding: 6px 22px;" >Edit</button> </a>
        
        <form action="{{ route('bills.delete', $bill)}}" method="post" style="margin-left: 10px;">
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
