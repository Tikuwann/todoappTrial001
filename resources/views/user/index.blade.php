<x-app-layout>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/vue/3.0.2/vue.min.js"></script>
    <!-- CDNJS :: Sortable (https://cdnjs.com/) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>
    <!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/4.0.0/vuedraggable.umd.min.js"></script>


    <title>Hello, world!</title>
  </head>
  <body>

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


            </div>
        </div>
    </div>

    <div id="app">
        <my-component>
            <div class="flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div dropzone="true" class="flex flex-wrap m-8">
                   @foreach ( $uptasks as $task)



                   <div class="flex justify-center">
                       <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center text-wrap" style="width:20rem;">
                           <div
                               class="bg-white m-4 shadow-xl h-120 w-90 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in">
                               <div class="m-4 h-120 w-90" style="height: 10rem; width: 15rem;">
                                   <div class=" m-2 ">{{ $task-> task_date }}</div>
                                   <div class=" m-2 text-3xl ">{{ $task-> task_name }}</div>
                                   <div class=" m-2 mt-8 ">{{ $task-> task_info }}</div>

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

               </div>
       </div>
        </my-component>
      </div>



                <div class="flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">



                         <div dropzone="true" class="flex flex-wrap m-8">
                            @foreach ( $uptasks as $task)



                            <div class="flex justify-center">
                                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center text-wrap" style="width:20rem;">
                                    <div
                                        class="bg-white m-4 shadow-xl h-120 w-90 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in">
                                        <div class="m-4 h-120 w-90" style="height: 10rem; width: 15rem;">
                                            <div class=" m-2 ">{{ $task-> task_date }}</div>
                                            <div class=" m-2 text-3xl ">{{ $task-> task_name }}</div>
                                            <div class=" m-2 mt-8 ">{{ $task-> task_info }}</div>

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

                        </div>
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


                        <div draggable="true" class="flex justify-center">
                            <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center text-wrap "  style="width:20rem;">
                                <div
                                    class="bg-white m-4 shadow-xl vh-120 vw-90 flex flex-col justify-center text-black hover:border-t-8 hover:border-r-8 hover:border-yellow-500 rounded-lg transition duration-400 ease-in">
                                    <div class="m-8 vh-120 vw-90" style="height: 10rem; width: 15rem;">
                                        <div class=" m-2 ">{{ $task-> task_date }}</div>
                                        <div class=" m-2 text-3xl ">{{ $task-> task_name }}</div>
                                        <div class=" m-2 mt-8 ">{{ Str::limit( $task-> task_info , 70 ) }}</div>

                                    </div>
                                    <div class="flex justify-center">
                                        <a href="{{route('user.show',['id'=>$task->id])}}"
                                            class="bg-stone-900 text-white cursor-pointer m-4 px-8 py-1 rounded-2xl  hover:text-black hover:bg-yellow-500">
                                            Task Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach

                     </div>
            </div>



        </body>
        </html>

{{-- //script  DO not delete--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </x-app-layout>
{{-- //script --}}
