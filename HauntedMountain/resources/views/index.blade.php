@extends ('layout.masterpage')

@section('estilos')
@section('title' , 'Index page')

@section('content')
<section id="fondo">
    <span contenteditable spellcheck="false"></span>
    <div>
        <h5>#2 Trending en España</h5>
        <h1>Haunted Mountain</h1> <br>
        <p>5 amigos van a celebrar la despedida de soltero de Ibar en Gorbea,
            pero nada es lo que parece…. Las Sorginak se reunirán
            después de mucho tiempo para hacerles la vida imposible.
            ¿Podrán Ibar y sus amigos escapar de la cumbre más alta del macizo montañoso? <br>
            <div class="iconosIn">
                <i class='fa fa-bomb' width="40" height="40"> </i><span> Dificultad Media</span> <br>
                <i class='fa fa-clock-o'></i> <span> 60 Minutos</span> <br>
                <i class='fa fa-user'></i><span> 2 - 6 Jugadores</span>
            </div>
            </p>
        <div class="boton">
            <div class="botones" id="btnComprar"><p>Jugar</p></div>
            <button class="botones" onclick="window.open('https://www.youtube.com/watch?v=e9UHI-BHva4&list=LL&index=6', '_blank', 'noopener')">Ver Trailer</button>
        </div>
    </div>
</section>
<section class="fog">
    <div class="absolute-bg"></div>
    <div class="fog-container">
        <div class="fog-img fog-img-first"></div>
        <div class="fog-img fog-img-second"></div>
    </div>
</section>
@endsection
