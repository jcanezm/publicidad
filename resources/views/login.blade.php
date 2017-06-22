@extends('layouts.app')

@section('content')

<body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>Bienvenido!</strong></h1>
                  <div class="mydescription">
                    <p>Accede para encontrar la diversión que esta a tu alrededor...</p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                              <h3><strong>Login</strong></h3>
                              <p>Digita tu usuario y contraseña:</p>
                          </div>
                          <div class="myform-top-right">
                            <i class="fa fa-male fa-1x" aria-hidden="true"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <form role="form" action="" method="post" class="">
                          <div class="form-group">
                              <input type="text" name="form-username" placeholder="Usuario..." class="form-control" id="form-username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="form-password" placeholder="Contraseña..." class="form-control" id="form-password">
                          </div>
                          <button type="submit" class="mybtn">Entrar</button>
                        </form>
                      </div>
                  </div>
            </div>
            <div class="row">
                 <div class="col-sm-12 mysocial-login">
                    <h3>...contactanos también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>   
            </div>

        </div>
    </div>
@endsection