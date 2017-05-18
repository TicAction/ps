<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>


            {{--dropdown liens utiles--}}


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liens externes utiles <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{{link_to('http://www.cssh.qc.ca','Cssh',['target'=>'blank','title'=>'Cssh'])}}</li>
                            <li>{{link_to('http://www.cssh.qc.ca/Ecole_Plein-Soleil/Pour_nous_joindre.html','École Plein-Soleil',['target'=>'blank','title'=>'École Plein-Soleil'])}}

                            <li class="divider"></li>

                            <li>{{link_to('https://www.classdojo.com/fr-fr/?redirect=true','Class Dojo',['target'=>'blank','title'=>'Class Dojo'])}}
                            <li>{{link_to('https://www.netmaths.net/SignIn?lang=fr','Netmath',['target'=>'blank','title'=>'Netmath'])}}</li>
                            <li>{{link_to('http://www.alloprof.qc.ca/','Allô Prof',['target'=>'blank','title'=>'Allô Prof'])}}</li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Connexion</a></li>
                        <li><a href="{{ route('register') }}">S'enregistrer</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>