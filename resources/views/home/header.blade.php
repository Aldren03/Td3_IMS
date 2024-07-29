<header class="fixed top-0 left-0 w-full py-2 px-8 bg-gradient-to-r from-black to-green-800 border-2 border-opacity-50 flex justify-between items-center z-50 shadow-lg backdrop-filter backdrop-blur-md">
        <div class="flex items-center">
            <img src="logo.png" alt="Logo" class="h-20 mr-1">
            <span class="text-white font-bold text-base">TD3 SMART FUND CREDIT CORPORATION</span>
        </div>
        <nav>
            <ul class="flex space-x-8 items-center">
                <li class="nav-item">
                    <a class="nav-link text-white text-sm font-medium relative group" href="#">Home
                        <span class="block absolute left-0 bottom-0 w-full h-1 bg-white rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-sm font-medium relative group" href="#">About Us
                        <span class="block absolute left-0 bottom-0 w-full h-1 bg-white rounded transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
                    </a>
                </li>
                <li class="nav-item" >
                    <a class="btn btn-success text-white bg-green-500 hover:bg-green-700 px-4 py-2 rounded" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item" >
                    <a class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded" href="{{url('register')}}">Register</a>
                </li>
            </ul>
        </nav>
    </header>
