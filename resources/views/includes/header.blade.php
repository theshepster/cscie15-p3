<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">DWA-15 Project 3</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li @yield('home-active')>
                            <a href="/">Home</a>
                        </li>
                        <li @yield('users-active')>
                            <a href="/users">User Generator</a>
                        </li>
                        <li @yield('lorem-active')>
                            <a href="/lorem">Apple Ipsum Generator</a>
                        </li>
                        <li>
                            <a href="http://p1.mooreberg.me">More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>