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
                        <a href="{{ route('invoiceDetails.index') }}" > <button type="submit" class="btn btn-info text-light" style="padding: 6px 20px;">InvoiceDetails List</button></a>
                    </div>
                    <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
                        <h3 class="card-header bg-dark text-center text-light">Create InvoiceDetails</h3>
                        <div class="card-body">
                            @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                            @endif 
                            <form action="{{ route('invoiceDetails.create')}}" method="post">
                                @csrf 
                    
                                <div style="margin-bottom: 1em;">
                                    <label for="cantidad" class="form-label">cantidad</label>
                                    <input type="number" name="cantidad" id="cantidad" placeholder="Enter cantidad" value="{{ old('cantidad')}}" class="form-control">
                                    @error('cantidad')
                                        <div >{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="bill_id" class="form-label">Bills</label>
                                    <select name="bill_id" id="bill_id" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($bills as $bill)
                                           <option 
                                           @if ($bill->id == (int)old('bill_id'))
                                            selected
                                            @endif
                                            value="{{ $bill->id }}">{{ $bill->total}}</option>
                                        @endforeach
                                    </select>
                                    @error('bill_id')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="product_id" class="form-label">Product</label>
                                    <select name="product_id" id="product_id" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($products as $product)
                                           <option 
                                           @if ($product->id == (int)old('product_id'))
                                            selected
                                            @endif
                                            value="{{ $product->id }}">{{ $product->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
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

