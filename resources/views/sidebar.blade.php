{{-- <div class="container-fluid">
    <div class="row flex-nowrap ">
        <div class="col-1 px-5 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Form</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">

                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                            class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
{{-- <div class="col py-3">
            Content area...
        </div> --}}
</div>
</div>
{{--
<div class="container">
    <div class="row flex-nowrap ">
        <div class="col-3 px-5 bg-dark ">
            <ul>
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Form</span>
                    </a>
                </li>
                <li>
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link align-middle">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                    </a>
                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link"> <span class="d-none d-sm-inline">Item</span> 1
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"> <span class="d-none d-sm-inline">Item</span> 2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
<!--Main Navigation-->
<style>
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */

        /* body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: lightyellow;
        } */

        /* ul {
            padding: 0;
            list-style-type: none;
        } */
    }
        span{
            font-size: 15px;
            width: 8em;
            height: 2em;
            text-align: center;
            line-height: 2em;
            font-family: sans-serif;
            text-transform: capitalize;
            position: relative;
            transition: 0.5s;
            margin: 0.8em;
        }

        span::before,
        span::after {
            content: '';
            position: absolute;
            width: 0.6em;
            height: 0.6em;
            background-color: gainsboro;
            border-radius: 50%;
            transition: 0.5s cubic-bezier(0.5, -0.5, 0.25, 1.5);
            top: calc(50% - 0.6em / 2);
        }

        span::before {
            left: 0;
            z-index: -1;
        }

        span::after {
            right: 0;
            z-index: -2;
        }

        span:hover {
            color: white;
        }

        span:hover::before,
        span:hover::after {
            width: 100%;
            height: 100%;
            border-radius: 0;
            background-color: dodgerblue;
        }

        span:hover::before {
            top: 0;
        }

        span:hover::after {
            right: -0.4em;
            filter: brightness(0.8);
        }

</style>
<header>
    <!-- Sidebar -->
    <div id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('form') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-wpforms" aria-hidden="true"></i>
                    <span>Form</span></a>

                <a href="{{ route('index') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fa fa-eye" aria-hidden="true"></i>
                    <span>ShowData</span></a>
            </div>
        </div>
    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->
