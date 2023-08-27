<!doctype html>
<html>
<head>
    <title>Authtenticación personalizada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5"style="...">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">ADSI - SENA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collpase" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
      
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departament.create') }}">Department</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cities.create') }}">Cities</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients.create') }}">Clients</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employees.create') }}">Employees</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('providers.create') }}">Providers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.create') }}">Categories</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bills.create') }}">Bills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('invoiceDetails.create') }}">InvoiceDetails</a>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}" >Iniciar Sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Regístrate!</a>
                    </li>
 


                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Salir</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>