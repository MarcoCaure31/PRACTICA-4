@extends('layouts.landing')

@section('title', 'Inicio')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/index.css') }}">

<div class="home-section">
    <h1>Bienvenido a mi Proyecto</h1>
    <p>Estamos comprometidos a ofrecer soluciones innovadoras y de alta calidad para satisfacer las necesidades de nuestros clientes. Descubre más sobre lo que podemos hacer por ti.</p>
    
    <h2>Nuestros Servicios</h2>
    <div class="services">
        <div class="service-item">
            <h3>Consultoría</h3>
            <p>Te ayudamos a identificar oportunidades de crecimiento y a implementar estrategias efectivas.</p>
        </div>
        <div class="service-item">
            <h3>Desarrollo Web</h3>
            <p>Creamos sitios web modernos y funcionales adaptados a las necesidades de tu negocio.</p>
        </div>
        <div class="service-item">
            <h3>Soporte Técnico</h3>
            <p>Ofrecemos asistencia técnica para asegurar el buen funcionamiento de tus sistemas.</p>
        </div>
    </div>

    
</div>
@endsection
