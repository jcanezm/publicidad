@extends('layouts.app')

@section('content')

<section class="BannerPrincipal container col-md-12">
   <div class="separador row  text-center" id="0">
               <img src="img/logo.png" class="logoBanner img-responsive center-block">
               <div class="eslogan text-center">Bienvenido a:</div>
               <img class="txteslogan img-responsive center-block" src="img/eslogan.png">
               <button type="button" onclick="window.location.href='/login'" class="comenzar"><span>Comenzar</span></button>
    </div>
</section>
@endsection
