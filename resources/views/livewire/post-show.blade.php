<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-80 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="/uploads/images/posts/{{ $post->image }}">
      </div>
      <div class="flex flex-col sm:flex-row mt-10 bg-gray-400">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8 bg-gray-800">
          <div class="w-24 h-24 bg-cover rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400" style="background-image: url('https://i.gyazo.com/9e72a03549c61f3ac69e92d1967d29ba.png')">

          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-blue-50 text-lg">Diederik de Wit</h2>
            <div class="w-12 h-1 bg-yellow-500 rounded mt-2 mb-4"></div>
            <p class="text-base text-gray-400">{{ $post->created_at }}</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
        <h1 class="font-medium title-font mt-4 text-yellow-400 font-black text-3xl">{{ $post->title }}</h1>
            <br>
          <p class="leading-relaxed text-lg mb-4 text-blue-50">{{ $post->body }}</p>

        </div>
      </div>
    </div>
  </div>
</section>

<div>
   
</div>

<x-footer/>
