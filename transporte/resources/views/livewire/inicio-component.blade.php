<div>
    <style>
        .encabezado{
            background-color: lightgray;
        }
        .menu{
            background-color: lightcoral;
        }
        .promociones{
            background-color: lightskyblue;
        }
        .cards{
            background-color: lightseagreen;
        }
        .pie{
            background-color: lightblue;
        }
    </style>
    <div class="encabezado">encabezado</div>
    <div class="menu">
        <div>Menu 1</div>
        <div>Menu 2</div>
        <div>
            <a href="{{ route('clientes') }}">
                Clientes
            </a>
        </div>
    </div>
    <div class="promociones">promociones</div>
    <div class="cards">cards</div>
    <div class="pie">pie</div>
</div>
