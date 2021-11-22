<div class="max-w-2xl flex items-center lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
  <div id="profile" class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-lg shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
    <section class="text-gray-600 body-font">
      <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col">
        <img class="object-cover object-center rounded" alt="hero" src="{{ asset('/images/logo.png') }}">
        <div class="text-center lg:w-2/3 w-full">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Snowboard Blog</h1>
          <p class="mb-8 leading-relaxed text-black"><h2>Welkom op mijn webblog over het worden van een snowboard leraar!</h2>
            <p>Hier vind je blogs en artikelen over vinden over hoe ik snowboard leraar word.</p>
          <div class="flex justify-center">
            <a href="{{route('post')}}" :active="request()->routeIs('post')"><button class="inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-500 rounded text-lg">Blogs</button></a>
            <a href="{{route('login')}}" :active="request()->routeIs('login')"><button class="ml-4 inline-flex text-white bg-yellow-600 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-800 rounded text-lg">Login</button></a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
