<div class="w-full text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-800">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between p-4">
            <a href="{{route('home')}}"><img src = "{{ asset('/images/logoWhite.png') }}" style="width: 3.3rem" /></a>
            <a href="{{route('home')}}" class="text-lg px-3 font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">Het Witte Hert</a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('home')}}" :active="request()->routeIs('home')">Home</x-jet-nav-link>
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('post')}}" :active="request()->routeIs('post')">Blog Post</x-jet-nav-link>
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('about')}}" :active="request()->routeIs('about')">About</x-jet-nav-link>
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('contact')}}" :active="request()->routeIs('contact')">Contact</x-jet-nav-link>
            @auth
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">Dashboard</x-jet-nav-link>
            @else
            <x-jet-nav-link class="px-10 pb-1 text-lg hover:border-yellow-400 hover:text-yellow-500 focus:border-yellow-800 focus:text-yellow-800" href="{{route('login')}}" :active="request()->routeIs('login')">Login</x-jet-nav-link>
            @endauth

        </nav>
    </div>
</div>
