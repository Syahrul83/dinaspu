@include('layout.partial.viewhead')

<!-- @include('layout.partial.viewnav') -->

@include('layout.partial.menu')

<body data-plugin-page-transition="">
    <div class="body">
        <div role="main" class="main">
            @yield('content')
        </div>
    </div>
</body>
@include('layout.partial.viewfooter')
@include('layout.partial.view-js-lib')
