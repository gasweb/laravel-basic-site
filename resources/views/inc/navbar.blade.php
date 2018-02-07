<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a class="p-2 text-dark" href="/">Home</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a class="p-2 text-dark" href="/about">About</a></li>
            <li class="{{ Request::is('messages') ? 'active' : '' }}"><a class="p-2 text-dark" href="/messages">Messages</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a class="p-2 text-dark" href="/contact">Contact</a></li>
        </ul>
    </nav>
</div>