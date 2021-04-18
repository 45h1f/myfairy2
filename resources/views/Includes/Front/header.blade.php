<!-- navbar -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img src="{{URL::to('storage/app/public/Frontassets/images/logo.svg')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{URL::to('donate')}}">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('how-it-work')}}">How it works?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/membership-plan')}}">Membership plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('marketplace')}}">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('sign-in')}}">sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn border-btn" href="{{URL::to('sign-up')}}">Join Now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- navbar -->
