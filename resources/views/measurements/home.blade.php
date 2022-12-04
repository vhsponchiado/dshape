@extends('./layouts/main')

@section('container')
  <ul>
    <li><a href="/measurements"> Medidas Cadastradas</a></li>
    <li><a href="/measurements/new">Nova Medida</a></li>
    <li>{{auth()->user()->name}}<a href="/logout"> Sair</a></li>
  </ul>

<div class="container">
  {{-- Gráficos --}}
<div class="row">
@if(empty($dados))
<div class="col-12 text-center">
<p>Nenhuma medida cadastrada</p>
</div>
@else

{{-- Braço esquerdo --}}
    <div class="col-md-6">
            <div class="cardChart card shadow p-4 my-2">
                <canvas id="chart_left_arm"></canvas>
            </div>
        </div>
   

{{-- Braço direito --}}
        <div class="col-md-6">
            <div class="cardChart card shadow p-4 my-2">
                <canvas id="chart_right_arm"></canvas>
            </div>
        </div>
 

{{--  Cintura --}}

<div class="col-md-6">
    <div class="cardChart card shadow p-4 my-2">
        <canvas id="chart_waist"></canvas>
        </div>
    </div>

{{--  Cintura --}}

<div class="col-md-6">
    <div class="cardChart card shadow p-4 my-2">
        <canvas id="chart_abdomen"></canvas>
        </div>
    </div>
    

@endif
</div>
</div>

<!-- Importando o Chart.js -->

    <script src="{{asset('/js/chart.min.js')}}"></script>
    <script src="{{asset('/js/create_chart.js')}}"></script>

    <script>
      
        @empty(!$dados);
        //Braço esquerdo
        createChart("chart_left_arm",{!!json_encode($dados["dates"])!!},"Braço esquerdo", {!!json_encode($dados["left_arm"])!!});

        //Braço direito
        createChart("chart_right_arm",{!!json_encode($dados["dates"])!!},"Braço direito", {!!json_encode($dados["right_arm"])!!});

         //Cintura

         createChart("chart_waist",{!!json_encode($dados["dates"])!!},"Cintura", {!!json_encode($dados["waist"])!!});
        //Abdomen
         createChart("chart_abdomen",{!!json_encode($dados["dates"])!!},"Abdomen", {!!json_encode($dados["abdomen"])!!});


        @endempty
    </script>
</body>

@endsection

