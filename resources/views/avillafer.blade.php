<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('El Rincón de El Bardo Ibérico') }}
        </h2>
    </x-slot>--}}
    <div class="flex flex-row">
        <div>
        @include('partials.navbardoiberico')
        </div>


            <div class="flex flex-col items-center justify-start w-full p-4 mb-4 bg-no-repeat bg-cover filter sepia bg-opacity-10" style="background-image: url('http://www.lanuevacronica.com/imagenes/articulos/puente-villafer-02-09-19.jpg')">
                <h2 class="p-3 mt-2 text-3xl font-bold leading-tight text-gray-200 bg-gray-800 rounded shadow-2xl bg-opacity-90">
                    A VILLAFER
                </h2>
                <h4 class="p-10 mb-2 text-lg font-bold leading-8 text-gray-200 bg-gray-800 rounded shadow-2xl bg-opacity-90">
                    Del ancho Esla en la rojiza orilla <br>
                    que férrea puente abraza poderosa,<br>
                    surge bañada por el sol, hermosa,<br>
                    VILLAFER, de León y de Castilla.<br>
                    <br>
                    ¿Quién la fundó? ¿A quién debe su nombre?<br>
                    "Villa de ferre", ni escudo ni cimera.<br>
                    Grandes tributos pagó su vida entera:<br>
                    de trigo arrobas y de vino azumbres.<br>
                    <br>
                    Nunca mantuvo torres almenadas,<br>
                    pues de Pimentel vasallos fueron,<br>
                    hijos robustos de esta tierra pía.<br>
                    <br>
                    Mécense al viento por el sol doradas<br>
                    las mieses que de Ceres al amor crecieron<br>
                    de los "Campos Godos" en la patria mía.<br>
                    <br>
                    (El bardo Ibérico)
                    <br>
                </h4>
            </div>
    </div>

    </x-app-layout>
