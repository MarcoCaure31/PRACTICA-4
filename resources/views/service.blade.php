@extends('layouts.landing')

@section('title','services')

    @section('content')
    <h1>services</h1>
    @component('_components.card')
        @slot('title','service 1')
        @slot('content','lorem ipsum door jfvjfj') 
    @endcomponent 
    @component('_components.card')
     @slot('title','service 2')
      @slot('content','lorem ipsum el awelo del albaco le hace el amor') 
@endcomponent 
@component('_components.card')
@slot('title','service 3')
@slot('content','hola hola hola zzzzzzzzzz') 
@endcomponent 
@endsection
 