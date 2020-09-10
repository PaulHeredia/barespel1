@extends('layouts.app')

@section('content')
 
 
    <form class="form-inline my-2 my-lg-0">
    @if (Route::has('login'))
            <div class="top-right links bg-success">
                @auth
                    <a href="{{ url('/home') }}"class="btn btn-success btn-sm"style="color:white;">Home</a>
                @else
                    <a href="{{ route('login') }}"class="btn btn-success btn-sm"style="color:white;">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"class="btn btn-success btn-sm"style="color:white;">Register</a>
                    @endif
                @endauth
                @endif
    </form>
 
  
 
 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div></div>

                <div>
                    @if (session('status'))
                        <div role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
    <br>
    <br>
<div class="container">
    <div class="row">
        <div class="col-sm">
        <a href="http://localhost/barespel1/public" class="btn btn-primary btn-sm">Salir</a>
        </div>
    </div>
</div>
    <div class="container">
    <div class="row">
    <div class="col-md">
    <div class="card-deck">
        <div class="card">
            <img src="https://www.flaticon.es/premium-icon/icons/svg/763/763126.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">BAR </h5>
            <a href="http://localhost/barespel1/public/bars" class="btn btn-primary">Entrar</a>
        </div>
    </div>
    
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/641/641149.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">MENU</h5>
            <a href="http://localhost/barespel1/public/menus" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/1323/1323764.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">BUZON</h5>
            <a href="http://localhost/barespel1/public/buzons" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
<br>
    <div class="container">
    <div class="row">
    <div class="col-md">
    <div class="card-deck">
<div class="card">
        <img src="https://image.flaticon.com/icons/png/512/859/859415.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">SNACK</h5>
            <a href="http://localhost/barespel1/public/snacks" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/svg/1642/1642121.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">SUGERENCIA</h5>
            <a href="http://localhost/barespel1/public/preferencias" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    <div class="card">
        <img src="https://image.flaticon.com/icons/png/512/1115/1115573.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">CAMPUS</h5>
            <a href="http://localhost/barespel1/public/sites" class="btn btn-primary btn-sm">Entrar</a>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
<br>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
 
    