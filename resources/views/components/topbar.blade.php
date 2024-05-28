<body class="bg-blue-500">
    <nav class="nav-blur px-4 py-4 flex justify-between items-center sticky top-0 z-10 mb-4">
		<div class="flex items-center">
			<span class="font-archivo text-3xl">
				<a href="{{ route('home') }}" class="flex mx-4">
					<h1 class="italic">KEE</h1>
					<h1 class="text-transparent font-outline-1 italic">BOD</h1>
				</a>
			</span>
		</div>

		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-gray-900 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>

		<ul class="hidden lg:flex lg:mx-auto lg:items-center lg:space-x-2">
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('custom-keyboard') }}">Custom Keyboard</a></li>
			<li class="text-gray-300">|</li>
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('coming-soon') }}">Keyboard Repair</a></li>
			<li class="text-gray-300">|</li>
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('coming-soon') }}">Keyboard Mod</a></li>
			<li class="text-gray-300">|</li>
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('coming-soon') }}">Parts Store</a></li>
			<li class="text-gray-300">|</li>
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('ai-suggestion') }}">AI Suggestion</a></li>
			<li class="text-gray-300">|</li>
			<li><a class="text-sm text-gray-400 hover:text-teal-700" href="{{ route('prebuilt') }}">Latest Prebuilt</a></li>
		</ul>


		<div class="hidden lg:flex items-center space-x-4">
			<ul class="flex items-center space-x-4">
				@auth
					<li><a class="font-archivo text-xl" href="{{ route('cart') }}">CART</a></li>
					<li>
						<livewire:logout />
					</li>
				@else
					<li><a class="font-archivo text-xl" href="{{ route('login') }}">LOGIN</a></li>
					<li><a class="font-archivo text-xl text-transparent font-outline-1" href="{{ route('register') }}">REGISTER</a></li>
				@endauth
			</ul>
		</div>
	</nav>

    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="font-archivo text-3xl flex items-center mb-8">
                <a href="{{ route('home') }}" class="flex mx-4">
                    <h1 class="italic">KEE</h1>
                    <h1 class="text-transparent font-outline-1 italic">BOD</h1>
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul class="font-archivo">
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="{{ route('custom-keyboard') }}">Custom Keyboard</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="#">Keyboard Repair</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="#">Keyboard Mod</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="#">Parts Store</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="{{ route('ai-suggestion') }}">AI Suggestion</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded"
                            href="{{ route('prebuilt') }}">Lastest Prebuilt</a>
                    </li>
                    @auth
                        <li>
                            <livewire:logout />
                        </li>
                    @else
					<li><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded" href="{{ route('login') }}">Login</a></li>
					<li><a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-teal-50 hover:text-teal-600 rounded" href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright KEEBOD© 2024</span>
                </p>
            </div>
        </nav>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
