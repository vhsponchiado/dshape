@extends('./layouts/main')
@section('container')

<form action="/auth" method="post">
  @csrf
  <div class="container">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Por favor, entre com seu email e senha!</p>
                  @if($msg = Session::get('Erro'))
                    {{$msg}}
                  @endif
                  <div class="form-outline form-white mb-4">
                    <label style="margin-right:25em" class="form-label" for="typeEmailX">Email</label>
                    <input type="email" name="email"id="email" class="form-control" placeholder="Email" data-sb-validations="required"/>
                    <div class="invalid-feedback" data-sb-feedback="email:required">Email é obrigatório.</div>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label style="margin-right:25em" class="form-label" for="typePasswordX">Senha</label>
                    <input type="password" name="password" id="senha" class="form-control" placeholder="Senha" data-sb-validations="required"/>
                    <div class="invalid-feedback" data-sb-feedback="senha:required">Senha é obrigatório.</div>
                  </div>
                  <button class="btn btn-outline-warning btn-lg px-5" type="submit">Entrar</button>
                <div>
                  <p class="my-5">Ainda não possui uma conta? <a href="/register" class="text-white-50 fw-bold">Registre-se</a></p>
                </div>
              </div>
            </div> 
          </div>
        </div> 
      </div> 
    </div> 
</form>
@endsection

<style>
 body {
  background-size: 100%;
  background-repeat: no-repeat;
  background-image: url({{asset('assets/bg-login.jpg')}});
  }
</style>