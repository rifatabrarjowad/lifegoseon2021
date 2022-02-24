<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo.svg') }}" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about')}}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/service')}}">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/portfolio')}}">PORTFOLIO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>