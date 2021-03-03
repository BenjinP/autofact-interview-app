@extends('layouts.app')


@section('content')
<h1>Responde el siguiente cuestionario</h1>
<form method="POST" action="{{route('survey.store')}}">
  @csrf
  <div class="form-group">
    <label for="question1answer">¿Qué te gustaría que agregaramos al informe?</label>
    <textarea id="question1anwser" name="question1" class="form-control"  rows="3"></textarea>
  </div>
    
    <div class="form-group">

      <label id="question2" for="question2answer">¿La información es correcta?</label>
    <div class="radio">
      <label>
        <input type="radio" name="question2" id="question2answer" value="si">Si
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="question2" id="question2answer" value="no">No
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="question2" id="question2answer" value="mas_o_menos">Más o menos
      </label>
    </div>

    </div>
    
    

    <div class="form-group">
      <label id="question2" for="question2answer">¿Del 1 al 5, qué tan rápido es el sitio?</label>
      @for ($i = 1; $i < 6; $i++)
      <div class="form-check form-check-inline">
        <input name="question3" class="form-check-input" type="radio" name="inlineRadioOptions" id="answer3option" value={{$i}}>
        <label class="form-check-label" for="inlineRadio1">{{$i}}</label>
      </div>
      @endfor

    </div>

      
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

