<body>
        @section('sidebar')
{{ HTML::link('mostrarprueba','hola')}}
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
