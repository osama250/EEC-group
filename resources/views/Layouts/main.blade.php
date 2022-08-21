@include('Layouts.header')

    {{-- Sample Navbar --}}
    <ul class="nav justify-content-center" style="margin-top: 20px">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}"> Dashbord </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('Pharmacies.index') }}"> Pharmacies </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('Products.index') }}"">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('Pro_Pharmacy') }}"">Add Products-With-Pharmacies </a>
        </li>
        <form class="d-flex" role="search" action="{{ route('product.Search') }}" method="POST">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </ul>


    <div class="container mt-5">
        @yield('content')
    </div>



@include('Layouts.footer')
