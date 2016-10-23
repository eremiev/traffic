
@if (Route::has('login'))
    <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
@endif

<div class="navbar navbar-default "> <!-- navbar-fixed-top -->
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Traffic</a>
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-main"
                    aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    {{ Html::linkAction('CityController@index', 'Градове') }}
                </li>
                <li>
                    {{ Html::linkAction('StationController@create', 'Добави стоянка') }}

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Влез</a></li>
            </ul>

        </div>
    </div>
</div>