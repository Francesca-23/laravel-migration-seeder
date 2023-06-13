@extends('layout.app')

@section('title-page')
    Home
@endsection

@section('content')

    <div class="container">

        <h1 class="text-center my-4">Trains</h1>

        <div class="row">            
            @foreach ($trains as $elem)
        
                <div class="card bg-body-tertiary">
                    <div class="card-body">
                        <h5 class="card-title mb-3">{{$elem->azienda}}</h5>
                        <p class="card-text"><strong>Partenza da:</strong> {{$elem->stazione_partenza}}</p>
                        <p class="card-text"><strong>Arrivo a:</strong> {{$elem->stazione_arrivo}}</p>
                        <p class="card-text"><strong>Orario:</strong> {{$elem->orario_partenza}}</p>
                        <p class="card-text"><strong>Codice:</strong> {{$elem->codice}}</p>
                        <p class="card-text">
                            @if ($elem->ritardo == true)
                                <span>Treno in ritardo</span>
                            @elseif ($elem->ritardo == false)  
                                <span>Treno in orario</span>
                            @endif 
                        </p>
                    </div>
                </div>
        
            @endforeach
        </div>
    </div>
@endsection