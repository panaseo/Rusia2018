@extends('layouts.main')

@section('content')

    <div class="alert alert-warning" role="alert">
        Ahora somos WEB papurri! Qué podemos hacer por ahora?:
        <ul>
            <li>Ver la tabla de posiciones</li>
            <li>Ver los resultados de apuestas para cada categoría</li>
        </ul>
        <b>Ya vendrá: Apuestas en sigueientes rondas!</b>
    </div>

    <h1 class="mt-5">Bases de Participación</h1>

    <p>
        Aqui están las bases definitivas de participación. No se cambian las reglas de lo que se enviara por correo a cada uno anteriormente, sólo se clarifican.
    </p>

    <h2>Apuestas al resultado de los partidos</h2>
    <p>
        Cada participante asignará a cada partido del Mundial (a partir de Octavos), su pronóstico del resultado. Para cada partido se darán puntos a cada participante si acierta a las siguientes categorías:
    </p>

    <table class="table">
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><b>Ganador del Partido (1pt):</b> Acertar al que pasa a la llave siguiente.</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><b>Resultado Exacto (2pts):</b> Acertar al resultado del partido en los 90 ó 120 minutos (de haber alargue). <b>NO considera el resultado de los penales.</b></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><b>Llave Exacta (2pts):</b> Acertar los equipos que juegan un partido de la llave siguiente.</td>
        </tr>
        </tbody>
    </table>

    <h2>Apuestas al campeonato</h2>

    <table class="table">
        <tbody>
        <tr>
            <th scope="row">4</th>
            <td><b>Campeón del Mundo (4pts):</b> Acertar al equipo que resulte campeón.</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td><b>Subcampeón (2pts):</b> Acertar al equipo que resulte subcampeón.</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td><b>Tercero (1pt):</b> Acertar al equipo que resulte Tercero.</td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td><b>Botín de Oro - Goleador (2pts):</b> Acertar a quien resulte Botín de Oro del Mundial.</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td><b>Segundo Goleador (1pts):</b> Acertar a quien resulte segundo goleador del Mundial.</td>
        </tr>
        </tbody>
    </table>

    <h2>Cómo se cuentan los puntos?</h2>
    <p>Habrá quienes por no saber nada de fútbol, no acierten ni un resultado en una ronda. <b class="font-weight-bold">La idea es que puedan seguir jugando y sumando, haciendo rondas de apuestas sucesivas para todas las categorías, antes del primer partido de una ronda (Octavos - Cuartos - Semi - Tercer lugar y Final)</b> </p>

    <p> Pero con una desventaja:</p>

    <p>El puntaje de cada apuesta, de cada usuario, se multiplicará por un factor que premia adelantar los resultados de cada categoría. <b>No es lo mismo apostar antes de Octavos por el campeón, que hacerlo antes de la Final. </b></p>

    <p>Como se cálcula el factor?:</p>

    <p> FACTOR = 2 elevado ( Ronda_resultado - Ronda_apuesta)</p>

    <p><b>Algunas reglas sobre la aplicación del factor en una apuesta:</b></p>

    <ul>
        <li>Habrá quienes crean que lo que apostaron en rondas anteriores no va a pasar y quieren cambiar su apuesta. <b>Solo valdrá la apuesta de la ronda más avanzada. No insista.</b></li>
        <li>Habrá quienes piensan que todo esto es un weveo... lo es. Si no quiere hacer apuestas en rondas sucesivas, corre el riesgo de quedarse sin partidos en las llaves. Si les quedan partidos, déjelos... son los que màs valen.</li>
    </ul>

    <h2>y... quién gana perrito?</h2>

    <p>Gana el apostador <b>que suma más puntos</b>. En caso de empate se aplicarán en orden, las siguientes reglas:</p>
    <ul>
        <li>Puntos por vaticinio del Campeón.</li>
        <li>Puntos por aciertos a Resultados exactos.</li>
        <li>Puntos por aciertos a Llave exacta.</li>
        <li>Tijera - Papel - Piedra: Cachipún.</li>
    </ul>

    <h2>... Juegue, juegue!</h2>

    <p>Participan todos quienes cumplan con las siguientes condiciones:</p>
    <ul>
        <li>Envía apuestas antes del sábado 30 de junio. 0:00 hrs</li>
    </ul>

    <p>Además tendrá que ponerse con diez luquitas o un pisco (no la promo) de igual o mayor valor.</p>

@endsection

@section('login')
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
