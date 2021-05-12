<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('content.index') }}">Content</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('topics.index') }}">Topics</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @if(auth()->check())
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
