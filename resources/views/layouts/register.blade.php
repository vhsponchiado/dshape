@extends('./layouts/main')
  <section class="vh-100 bg-image" style="background-image: url({{asset('assets/bg-register.jpg')}}); background-repeat: no-repeat; background-size:100%;">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card bg-dark text-white" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center">Criar conta</h2>
            <p class="text-white-50 mb-5 text-center">Crie uma conta e tenha acesso a sua evolução</p>
            <form>
              <div class="form-outline form-white mb-4">
                <label style="margin-right:25em" class="form-label" for="typeEmailX">Nome</label>
                <input type="text" id="name" class="form-control" placeholder="Nome" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Nome é obrigatório.</div>
              </div>
              <div class="form-outline form-white mb-4">
                <label style="margin-right:25em" class="form-label" for="typePasswordX">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" data-sb-validations="required"/>
                <div class="invalid-feedback" data-sb-feedback="email:required">Email é obrigatório.</div>
              </div>
              <div class="form-outline form-white mb-4">
                <label style="margin-right:25em" class="form-label" for="typeEmailX">Senha</label>
                <input type="password" id="senha" class="form-control" placeholder="Senha" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="senha:required">Senha é obrigatório.</div>
              </div>
              <div class="form-outline form-white mb-4">
                <label style="margin-right:25em" class="form-label" for="typePasswordX">Repita sua senha</label>
                <input type="password" id="confirmaSenha" class="form-control" placeholder="Repita sua senha" data-sb-validations="required"/>
                <div class="invalid-feedback" data-sb-feedback="confirmaSenha:required">Confirmação de senha é obrigatório.</div>
              </div>
              <div class="d-flex justify-content-center">
                <button type="button"
                  class="btn btn-outline-success btn-lg px-5">Registrar</button>
              </div>
              <p class="my-5 text-center">Já posssui uma conta? <a href="/login" class="text-white-50 fw-bold">Fazer login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>




