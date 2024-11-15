<header id="header" class="header-effect-shrink"
    data-plugin-options="{&#39;stickyEnabled&#39;: true, &#39;stickyEffect&#39;: &#39;shrink&#39;, &#39;stickyEnableOnBoxed&#39;: true, &#39;stickyEnableOnMobile&#39;: true, &#39;stickyChangeLogo&#39;: true, &#39;stickyStartAt&#39;: 120, &#39;stickyHeaderContainerHeight&#39;: 70}"
    style="height: 129px">
    <div class="header-body border-top-0" style="position: fixed">
        <div class="header-top header-top-borders bg-primary" style="height: 40px">
            <div class="container h-100" style="max-width: 1600px">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">


                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex "> <a href="/"
                                            class="text-white"><img src="/assets/logo-pu.png" alt="Indonesia"
                                                width="25"> PUPR</a> </li>
                                    <li class="nav-item nav-item-borders py-2"> <a href="{{ route('home') }}"
                                            class="text-white"><i class="fa fa-home text-4" aria-hidden="true"
                                                style="top: 0;"></i>
                                            {{ $kontak->no_hp }}</a> </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex"> <a
                                            href="mailto:infosda@pu.go.id" class="text-white text-3"><i
                                                class="fas fa-envelope text-4 text-white" style="top: 0;"></i>
                                            {{ $kontak->email }}</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex"> <a
                                            href="{{ route('home') }}" class="text-white">
                                            {{ now()->locale('id')->translatedformat('l, j F Y') }}
                                        </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 82px">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo" style="width: 500px; height: 50px">
                            <a href="{{ route('home') }}">
                                <img alt="Ditjen SDA" width="500" height="50" data-sticky-width="400"
                                    data-sticky-height="40" src="/assets/sda_logo.png" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        @foreach ($menu->menuItems as $item)

                                            @include('layout.partial.menu-item', ['item' => $item])
                                        @endforeach
                                    </ul>
                                </nav>

                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex "> <a href="/"
                                        class="text-white"><img src="/assets/zi.png" alt="Indonesia" width="120">
                                        PUPR</a> </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>