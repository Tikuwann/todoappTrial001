<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                Index Page
                </div>


            </div>
        </div>
    </div>
{{--
    <section class="text-gray-600 body-font">
        @foreach($tasks as $task)

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -mx-4 -my-8">
            <div class="py-8 px-4 lg:w-1/3">
              <div class="h-full flex items-start">
                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                  <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                  <span class="font-medium text-lg text-gray-800 title-font leading-none">{{ $task -> task_date}}</span>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $task -> task_name}}</h1>
                  <p class="leading-relaxed mb-5">{{ $task -> task_info}}</p>
                  <a class="inline-flex items-center">
                    <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-3">
                      <span class="title-font font-medium text-gray-900">Alper Kamu</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="py-8 px-4 lg:w-1/3">
              <div class="h-full flex items-start">
                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                  <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                  <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
                  <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <a class="inline-flex items-center">
                    <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-3">
                      <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="py-8 px-4 lg:w-1/3">
              <div class="h-full flex items-start">
                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                  <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                  <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
                  <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <a class="inline-flex items-center">
                    <img alt="blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                    <span class="flex-grow flex flex-col pl-3">
                      <span class="title-font font-medium text-gray-900">Henry Letham</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        @endforeach
    </section>

 --}}
    @foreach($tasks as $task) {{--Index 一覧画面--}}


        <section class="text-gray-600 body-font overflow-hidden">
            <section class="text-gray-600 body-font">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container px-5 py-12 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                        <div class="py-4 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">

                            <span class="font-semibold title-font text-gray-700">{{$task -> task_date}}</span>
                        </div>

                        <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $task-> task_name }} </h2>
                                <p class="leading-relaxed">{{ $task-> task_info }}</p>
                                {{-- <a class="text-indigo-500 inline-flex items-center mt-4">Edit
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                                </a> --}}
                                <a href="{{route('user.show',['id'=>$task->id])}}">Edit</a>
                            </div>
                    </div>
            </div>
            </div>
            </div>
        </section>
    @endforeach




</x-app-layout>
