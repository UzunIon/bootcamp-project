<!-- header -->
<div class="container">
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
            href="/resources/index.html"
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
                src="/resources/images/orhei-logo-white1.jpg"
                alt=""
                class="header__logo bi me-2"
                width="60"
                height="60"
            />
            <h1 class="header__title fs-6">
                The Orheiul Vechi <br />
                Cultural-Natural Reserve
            </h1>
        </a>

        <nav class="header__nav">
            <ul class="header__nav-list nav nav-pills">
                <li class="header__nav-item nav-item">
                    <a
                        href="{{route('home')}}"
                        class="nav-link link-dark"
                        aria-current="page"
                        >Home</a
                    >
                </li>
                <li class="header__nav-item nav-item">
                    <a href="{{route('about-us')}}" class="header__nav-link nav-link link-dark"
                        >About us</a
                    >
                </li>
                <li class="header__nav-item nav-item">
                    <a href="{{route('tourism')}}" class="header__nav-link nav-link link-dark"
                        >Tourism</a
                    >
                </li>
                <li class="header__nav-item">
                    <a href="{{route('blog')}}" class="header__nav-link nav-link link-dark"
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
                    <a href="{{route('contact-us')}}" class="header__nav-link nav-link link-dark"
                        >Contact us</a
                    >
                </li>
            </ul>
        </nav>
    </header>
</div>
<!-- /header -->