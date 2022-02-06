<!-- header -->
    <header
        class="
            header
            d-flex
            flex-wrap
            justify-content-center
            py-3
            mb-4
            border-bottom
        "
    >
        <a
            href="{{ route('home') }}"
            class="
                header__link
                d-flex
                align-items-center
                mb-3 mb-md-0
                me-md-auto
                text-dark text-decoration-none
            "
        >
            <img
                src="../assets/images/logo-with-name.png"
                alt=""
                class="header__logo bi me-2"
                width="266"
                height="66"
            />
            {{-- <h1 class="header__title fs-6">
                The Orheiul Vechi <br />
                Cultural-Natural Reserve
            </h1> --}}
        </a>

        <nav class="header__nav">
            <ul class="header__nav-list nav nav-pills">
                <li class="header__nav-item nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link link-dark"
                        aria-current="page"
                        >Home</a
                    >
                </li>
                <li class="header__nav-item nav-item">
                    <a href="{{ route('aboutUs') }}" class="header__nav-link nav-link link-dark"
                        >About us</a
                    >
                </li>
                <li class="header__nav-item nav-item">
                    <a href="{{ route('tourism') }}" class="header__nav-link nav-link link-dark"
                        >Tourism</a
                    >
                </li>
                <li class="header__nav-item">
                    <a href="{{ route('blog') }}" class="header__nav-link nav-link link-dark"
                        >Events</a
                    >
                </li>
                {{-- <li class="header__nav-item">
                    <a href="/resources/_patrimonium.html" class="header__nav-link nav-link link-dark"
                        >Natural Patrimonium</a
                    >
                </li>
                <li class="header__nav-item nav-item">
                    <a href="/resources/_heritage.html" class="header__nav-link nav-link link-dark"
                        >Cultural Heritage</a
                    >
                </li> --}}
                <li class="header__nav-item">
                    <a href="{{ route('contactUs') }}" class="header__nav-link nav-link link-dark"
                        >Contact us</a
                    >
                </li>
                <li class="header__nav-item">
                    <a href="{{ route('cart') }}" class="header__nav-link nav-link link-dark">
                        <i class="fas fa-shopping-cart"></i>
                        {{-- <i class="fas fa-shopping-bag"></i> --}}
                    </a>
                </li>
            </ul>
        </nav>
    </header>
<!-- /header -->