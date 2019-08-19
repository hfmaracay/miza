@extends('layouts.layout')

@section('title', 'Institución')

@section('header')
  @include('layouts._header')
@endsection

@section('content')
<section class="container">
  <div class="py-5 text-center row d-flex align-items-center justify-content-center">
    <h1 class="h1 qsb col-sm-8">INSTITUCIÓN</h1>
  </div>
  <div class="row">
    <div class="col-md-8">
      <p>El Museo del Instituto de Zoología Agrícola "Francisco Fernández Yépez" (MIZA), es una institución dedicada al estudio de la biodiversidad tropical. Tenemos la convicción de que el conocimiento de nuestro patrimonio biológico está íntimamente relacionado con su preservación y uso sostenible, es por ello que la educación ambiental es una herramienta vital para formar ciudadanos conscientes y protectores de nuestro patrimonio biológico.</p>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail" src="{{ asset('img/MIZA_Sede.jpg') }}" alt="Sede MIZA" title="Sede MIZA" />
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>Visión</h4>
      <p>Nuestra Visión es la de ser una institución fundamental para el estudio y conservación de la fauna de los trópicos americanos, especialmente la de Venezuela y la región andina y caribeña, con el fin de contribuir a su aprovechamiento sostenible en el tiempo, y así lograr un mayor bienestar social. Somos una institución con personal de alta calidad, identificado con las actividades del MIZA y convencido de que la educación en todas sus expresiones es la clave para alcanzar una mejor sociedad, compatible con su entorno natural.</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>Misión</h4>
      <p>Nuestra Misión es la de contribuir al conocimiento de la fauna venezolana y de otras áreas del Neotrópico en conjunción con entes públicos y privados, mediante el uso de estrategias modernas de la museología, a fin de lograr el uso sostenible de nuestra biodiversidad y así mejorar la calidad de vida.</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h4>Agradecimientos</h4>
      <p>La construcción, equipamiento, mantenimiento y formación de recursos humanos del MIZA ha sido posible por los aportes de instituciones, empresas nacionales e internacionales y personas. A ellos nuestro sincero agradecimiento.</p>
      <div class="row">
        <div class="col-md-6">
          <ul>
            <li>Fundación Empresas Polar</li>
            <li>Senderauto C.A.</li>
            <li>Europets</li>
            <li>Gobernación del Estado Aragua</li>
            <li>Frío La Estrella</li>
            <li>Pescadería La Estrella</li>
            <li>Lactuario Maracay</li>
            <li>Pepsi Co. International</li>
            <li>Industria La Española</li>
            <li>Empaques LIM C.A.</li>
            <li>Vicerectorado Administrativo UCV</li>
            <li>Coordinación de Investigación FAGRO-UCV</li>
            <li>Grúa Corsa C.A.</li>
            <li>Mistic Candles C.A.</li>
            <li>J.J. Moros M.</li>
            <li>Claudio Di Cera</li>
            <li>Maruja Michelangeli</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul>
            <li>Vitriarte C.A.</li>
            <li>Fauna Aragua C.A.</li>
            <li>Fundación Fondo Valores Inmobiliarios</li>
            <li>Carmen Ferraz</li>
            <li>Deforsa</li>
            <li>Francisco Obispo</li>
            <li>Verosaka</li>
            <li>Rubén Sánchez</li>
            <li>Andrew Neild</li>
            <li>Río Verde</li>
            <li>JRS Biodiversity Foundation</li>
            <li>GBIF-España</li>
            <li>AndinoNet</li>
            <li>Sociedad de Odonatología Latinoamericana (SOL)</li>
            <li>Mauro Costa</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('footer')
  @include('layouts._footer')
@endsection
