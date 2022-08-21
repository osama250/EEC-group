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
    </ul>


    <div class="container mt-5">
        @yield('content')
    </div>



@include('Layouts.footer')
