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




                <div class="flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">


                        {{-- <div class="row row-cols-3 flex justify-center">
                         <div class="col lg:w-1/3 lg:mb-0 mb-6 p-4">

                                <div
                                    class="bg-white m-4 shadow-xl min-h-20 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in">
                                    <div>
                                        <div class="  text-2xl">{{ $task-> task_date }} </div>


                                        <div class=" m-2 text-4xl">{{ $task-> task_name }} </div>


                                        <div class="flex">
                                            <p class="leading-relaxed">{{ $task-> task_info }}</p>
                                        </div>

                                    </div>
                                    <div class="flex justify-center">
                                        <a class="bg-stone-900 text-white cursor-pointer m-4 px-8 py-1 rounded-2xl hover:bg-white hover:text-stone-900 font-medium" href="{{route('user.show',['id'=>$task->id])}}" role="button">Link</a>
                                    </div>



                                </div>

                         </div> --}}

                         <div class="flex flex-wrap m-4">
                            @foreach ( $tasks as $task)

                            <div class="m-8 flex items-center  p-4 xl:w-75 md:w-80 ">


                              <div class="m-2 w-75 p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">

                                <div class="m-2 text-sm tracking-widest title-font mb-1 font-medium">{{ $task-> task_date }} </div>
                                <div class="m-2 text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">{{ $task-> task_name }} </div>
                                <div class="m-2 flex items-center text-gray-600 mb-2">

                                    {{ $task-> task_info }}
                                </div>

                                <div href="{{route('user.show',['id'=>$task->id])}}" role="button" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">View more information</div>

                              </div>
                            </div>
                         @endforeach

                         </div>
                </div>

                         <script src="https://cdn.tailwindcss.com"></script>
                         <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
                         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                         <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>








</x-app-layout>
