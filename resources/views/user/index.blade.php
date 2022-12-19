<x-app-layout>
    <html lang="en">
      <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
      </head>
      <body>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>


        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Index') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    Upcomming Tasks
                    </div>
<h3>hahahahah</h3>
<div id="app">
    <sample-component></sample-component>
</div>

<script src="{{ mix('/js/app.js') }}"></script>


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



                            <div class="flex flex-wrap m-8"> {{-- //TaskCard Start --}}
                                @foreach ( $uptasks as $task)



                                <div class="flex justify-center">
                                    <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center text-wrap" style="width:20rem;">
                                        <div
                                            class="bg-white m-4 shadow-xl h-120 w-90 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in text-break">
                                            <div class="m-4 h-120 w-90" style="height: 10rem; width: 15rem;">
                                                <div class=" m-2 "> {{ $task-> task_date }} </div>
                                                <div class=" m-2 text-3xl ">{{ $task-> task_name }}</div>
                                                <div class=" m-2 mt-8 ">
                                                {{ Str::limit( $task-> task_info , 70 ) }}
                                                </div>


                                            </div>
                                            <div class="flex justify-center">
                                                <a href="{{route('user.show',['id'=>$task->id])}}"
                                                    class="bg-stone-900 text-white cursor-pointer m-4 px-8 py-1 rounded-2xl hover:bg-white hover:text-stone-900 font-medium">
                                                    Task Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <script src="https://cdn.tailwindcss.com"></script>
                                 <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
                                 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





                                @endforeach

                            </div> {{-- //TaskCard end --}}
                    </div>




                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                Past Tasks
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">




                         <div class="flex flex-wrap m-4">
                            @foreach ( $endtasks as $task)
                            <div class="flex justify-center">
                                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center text-wrap" style="width:20rem;">
                                    <div
                                        class="bg-white m-4 shadow-xl h-120 w-90 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in text-break">
                                        <div class="m-4 h-120 w-90" style="height: 10rem; width: 15rem;">
                                            <div class=" m-2 "> {{ $task-> task_date }} </div>
                                            <div class=" m-2 text-3xl ">{{ $task-> task_name }}</div>
                                            <div class=" m-2 mt-8 ">
                                            {{ Str::limit( $task-> task_info , 70 ) }}
                                            </div>


                                        </div>
                                        <div class="flex justify-center">
                                            <a href="{{route('user.show',['id'=>$task->id])}}"
                                                class="bg-stone-900 text-white cursor-pointer m-4 px-8 py-1 rounded-2xl hover:bg-white hover:text-stone-900 font-medium">
                                                Task Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach

                         </div>
                </div>

    {{-- //script  DO not delete--}}

                </body>
            </html>

    {{-- //script  DO not delete--}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        </x-app-layout>
    {{-- //script --}}


