<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand home" href="{{ url('/') }}">
                    <img src="{{ url('site/images/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-collapse"
                    aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active" data-class=".section-body">
                            <a class="nav-link" href="#">{{ trans('site.home') }}</a>
                        </li>
                        <li class="nav-item" data-class=".section-about-us">
                            <a class="nav-link" href="#">{{ trans('site.about-us') }} </a>
                        </li>
                        <li class="nav-item" data-class=".section-skills">
                            <a class="nav-link" href="#">{{ trans('site.skills') }} </a>
                        </li>
                        <li class="nav-item" data-class=".section-services">
                            <a class="nav-link" href="#">{{ trans('site.services') }} </a>
                        </li>
                        <li class="nav-item" data-class=".section-portfolio">
                            <a class="nav-link" href="#">{{ trans('site.portfolio') }} </a>
                        </li>
                        <li class="nav-item" data-class=".section-contact">
                            <a class="nav-link" href="#">{{ trans('site.contact') }} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
