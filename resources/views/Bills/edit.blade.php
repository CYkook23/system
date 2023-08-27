@extends('app')
@section('content')
<html>
    <head>
    <title>Document</title>
     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <main class="login-form">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div style="text-align:right" >
                        <a href="{{ route('bills.index') }}" > <button type="submit" class="btn btn-info text-light" style="padding: 6px 20px;">Bill List</button></a>
                    </div>
                    <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
                        <h3 class="card-header bg-dark text-center text-light">Edit Bill</h3>
                        <div class="card-body">
                            @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                            @endif 
                            <form action="{{ route('bills.edit', $bill)}}" method="post">
                                @csrf 
                                <div style="margin-bottom: 1em;">
                                    <label for="total" class="form-label">Total</label>
                                    <input type="number" name="total" id="total" placeholder="Enter total" value="{{ $bill->total}}" class="form-control">
                                     @error('name')
                                    <div style="color: red;">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="subtotal" class="form-label">Subtotal</label>
                                    <input type="number" name="subtotal" id="subtotal" placeholder="Enter price" value="{{ $bill->subtotal}}" class="form-control">
                                    @error('price')
                                    <div>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-select" >
                                        <option value="">Select</option>
                                        @foreach($employees as $employee)
                                        <option 
                                        @if ($employee->id == (int)old('employee_id'))
                                        selected
                                        @endif   
                                        value="{{ $employee->id }}">{{ $employee->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('employee_id')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="client_id" class="form-label">Client</label>
                                    <select name="client_id" id="client_id" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($clients as $client)
                                           <option 
                                           @if ($client->id == (int)old('client_id'))
                                            selected
                                            @endif
                                            value="{{ $client->id }}">{{ $client->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>   
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
@endsection  
