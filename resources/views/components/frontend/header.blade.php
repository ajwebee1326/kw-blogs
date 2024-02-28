<header class="top-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('viewIndex')}}"><img src="{{asset('frontend')}}/images/logo.png" alt="kakewalk"></a>
            <div class="nav-mobile">
                <ul class="list-unstyled mb-0">
                       <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><span class="bx bxs-bell-ring secondary-tooltip"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Expect
                                    surprises... and cat videos!"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class='bx bxs-envelope secondary-tooltip'data-bs-toggle="tooltip" data-bs-placement="bottom" title="
                                Inbox peekaboo: Want Love letters. Want spam?"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="{{asset('frontend')}}/images/user-icon.png" class="secondary-tooltip" alt="user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="
                                Virtual high-five awaits! 🖐️"></a>
                        </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item nav-small">
                        <a class="nav-link active" aria-current="page" href="#"><span class="bx bxs-bell-ring secondary-tooltip"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Expect
                                surprises... and cat videos!"></span></a>
                    </li>
                    <li class="nav-item nav-small">
                        <a class="nav-link" href="#"><span class='bx bxs-envelope secondary-tooltip'data-bs-toggle="tooltip" data-bs-placement="bottom" title="
                            Inbox peekaboo: Want Love letters. Want spam?"></span></a>
                    </li>
                    <li class="nav-item nav-small">
                        <a class="nav-link" href="#"><img src="{{asset('frontend')}}/images/user-icon.png" class="secondary-tooltip" alt="user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="
                            Virtual high-five awaits! 🖐️"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('viewBlog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('viewContactUsPage')}}">Contact Us</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
</header>
