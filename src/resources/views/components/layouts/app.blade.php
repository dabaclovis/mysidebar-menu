<!doctype html>
<html lang="en">

<head>
    <title>{{ $title ?? 'page title' }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description ?? 'page description' }}">
    <meta name="keywords" content="{{ $keywords ?? 'page keywords' }}">
    <meta name="author" content="{{ $author ?? 'showcase developer' }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c20dc11a05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <script src="{{ asset('css/main.js') }}"></script> --}}
    @livewireStyles
</head>

<body>

    <div class="grandparent">
        <nav id="sidebar">
            <ul>
                <li>
                    <span class="logo">clovis</span>
                    <button id="toggle-btn" onclick="toggleSidebar()">
                        <em class="fa fa-angle-double-left"></em>
                    </button>
                </li>
                <li class="active">
                    <a href="{{ route('pages.index') }}" wire:navigate>
                        <em class="fa fa-home"></em>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <em class="fa fa-file"></em>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <em class="fa fa-phone"></em>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <button class="dropdown-btn" onclick="toggleSubMenu(this)">
                        <em class="fa fa-folder-open"></em>
                        <span>Articles</span>
                        <em class="fa fa-chevron-down"></em>
                    </button>
                    <ul class="sub-menu">
                        <div>
                            <li><a href="">Article 1</a></li>
                            <li><a href="">Article 2</a></li>
                            <li><a href="">Article 3</a></li>
                            <li><a href="">Article 4</a></li>
                            <li><a href="">Article 5</a></li>
                        </div>
                    </ul>
                </li>
                <li>
                    <button class="dropdown-btn" onclick="toggleSubMenu(this)">
                        <em class="fa fa-folder-open"></em>
                        <span>Posts</span>
                        <em class="fa fa-chevron-down"></em>
                    </button>
                    <ul class="sub-menu">
                        <div>
                            <li><a href="">Posts</a></li>
                            <li><a href="">Show</a></li>
                            <li><a href="">Edit</a></li>
                            <li><a href="">Delete</a></li>
                            <li><a href="">Count</a></li>
                        </div>
                    </ul>
                </li>

                <li>
                    <button class="dropdown-btn" onclick="toggleSubMenu(this)">
                        <em class="fa fa-folder-open"></em>
                        <span>More</span>
                        <em class="fa fa-chevron-down"></em>
                    </button>
                    <ul class="sub-menu">
                        <div>
                            <li><a href="">Article 1</a></li>
                            <li><a href="">Article 2</a></li>
                            <li><a href="">Article 3</a></li>
                            <li><a href="">Article 4</a></li>
                            <li><a href="">Article 5</a></li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <em class="fa fa-cog"></em>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <em class="fa fa-sign-out"></em>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="master" class="container-fluid">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts

    <script>
        const toggleBtn = document.getElementById("toggle-btn");
        const sidebar = document.getElementById("sidebar");

        function toggleSidebar() {
            sidebar.classList.toggle("closed");
            toggleBtn.classList.toggle("rotate");
            Array.from(sidebar.getElementsByClassName("show")).forEach(ul => {
                ul.classList.remove("show");
                ul.previousElementSibling.classList.remove("rotate");
            });
        }

        function toggleSubMenu(button) {
            button.nextElementSibling.classList.toggle("show");
            button.classList.toggle("rotate");
            if(sidebar.classList.contains("closed")) {
                sidebar.classList.remove("closed");
                toggleBtn.classList.remove("rotate");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>