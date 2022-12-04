@extends('./layouts/main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-12 my-3">
        <a href="/home">Voltar</a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-warning text-white text-center">
            <h2>Medidas Cadastradas</h2>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
            @if ($measurements->isEmpty())
                 <tr>
                   <td colspan="3" class="text-center">Nenhuma Medida Cadastrada</td>
                 </tr> 
            @else
                  @foreach ($measurements as $measurement)
                  <tr>
                    <th scope="row">{{$measurement->id}}</th>
                    <td>{{$measurement->date}}</td>
                    <td>
                       <a href="/measurements/{{$measurement->id}}" class="btn btn-secondary" role="button">Editar</a>
                        <!-- Button trigger modal -->
                       <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal" data-measurement-id="{{$measurement->id}}">
                       Excluir
                      </button>
                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div><!-- fim do card-body -->
        </div> <!-- fim do card -->
      </div> <!-- fim da col -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->

  <!-- Modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Deseja Excluir essa Medida?
          <p id="meu-paragrafo"> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          <form action="" method="POST" id="formDeleteMeasurements">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
    <script> 
      //Váriavel que recebe o elemento Html(Modal)
      const confirmationModal = document.getElementById('confirmationModal');
      confirmationModal.addEventListener('show.bs.modal',function (event){

      //Váriavel que recebe o formulário do Modal
      const button = event.relatedTarget;
      const form = document.getElementById('formDeleteMeasurements');

      form.action = "/measurements/" + button.getAttribute('data-measurement-id');

      });

    </script>

    
    @endsection

  