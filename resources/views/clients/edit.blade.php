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
                        <a href="{{ route('clients.index') }}" > <button type="submit" class="btn btn-info text-light" style="padding: 6px 20px;">Client List</button></a>
                    </div>
                    <div class=" my-3 shadow  mb-5 bg-body-tertiary rounded">
                        <h3 class="card-header bg-dark text-center text-light">Edit Client</h3>
                        <div class="card-body">

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif 


<form action="{{ route('clients.edit', $client)}}" method="post">
    @csrf 
    <div style="margin-bottom: 1em;">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter client" class="form-control" value="{{ $client->name}}">
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name" class="form-label">Last name</label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter Last name" class="form-control" value="{{ $client->last_name}}">
        @error('last_name')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="identification_card" class="formlabel">Identification card</label>
        <input type="text" name="identification_card" id="identification_card" placeholder="Enter Identification card" class="form-control" value="{{ $client->identification_card}}">
        @error('identification_card')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="telephone_number" class="form-label">Telephone number</label>
        <input type="text" name="telephone_number" id="telephone_number" placeholder="Telephone number" class="form-control" value="{{ $client->telephone_number}}">
        @error('telephone_number')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" placeholder="Address" class="form-control" value="{{ $client->address}}">
        @error('address')
        <div>{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="mail" class="form-label">Mail</label>
        <input type="text" name="mail" id="mail" placeholder="Mail" class="form-control" value="{{ $client->mail}}">
        @error('mail')
        <div>{{ $message }}</div>
        @enderror
    </div>
    

<div style="margin-bottom: 1em;">
    <label for="city_id" class="form-label">City</label>
    <select name="city_id" id="city_id" class="form-select" class="form-control" value="{{ $client->city_id}}">
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
</form>
@endsection  
