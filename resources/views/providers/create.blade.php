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
                        <a href="{{ route('providers.index') }}" > 
                            <button type="submit" class="btn btn-info text-light" style="padding: 6px 20px;">Provider List</button></a>
                    </div>
                    <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
                        <h3 class="card-header bg-dark text-center text-light">Create Provider</h3>
                        <div class="card-body">


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif 

<form action="{{ route('providers.create')}}" method="post">
    @csrf 
    <div style="margin-bottom: 1em;">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter client" class="form-control">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name" class="form-label">Last name</label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter Last name" class="form-control">
        @error('last_name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="identification_card" class="form-label">Identification card</label>
        <input type="text" name="identification_card" id="identification_card" placeholder="EnterIdentification card" class="form-control">
        @error('identification_card')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="telephone_number" class="form-label">Telephone number</label>
        <input type="text" name="telephone_number" id="telephone_number" placeholder="Telephone number" class="form-control">
        @error('telephone_number')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" placeholder="Address" class="form-control">
        @error('address')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="mail" class="form-label">Mail</label>
        <input type="text" name="mail" id="mail" placeholder="Mail" class="form-control">
        @error('mail')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    
    
    <div style="margin-bottom: 1em;">
    <label for="city_id" class="form-label">City</label>
    <select name="city_id" id="city_id"  class="form-select">
        <option value="">Select</option>
        @foreach($cities as $city)
        <option 
            @if ($city->id == (int)old('city_id'))
               selected
            @endif
            value="{{ $city->id }}">{{ $city->name}}</option>
            @endforeach
    </select>
    @error('city_id')
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