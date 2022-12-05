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
                Up Comming Tasks
                </div>
            </div>
        </div>
    </div>



    <div class="flex justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">



         <div class="flex flex-wrap ">
            @foreach ( $tasks as $task)

            <div class="p-4 xl:w-1/12 md:w-1/3 w-full">


              <div class="min-h-900 h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">

                <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{ $task-> task_date }} </h2>
                <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">{{ $task-> task_name }} </h1>
                <p class="flex items-center text-gray-600 mb-2">

                    {{ $task-> task_info }}
                </p>

                <a href="{{route('user.show',['id'=>$task->id])}}" role="button" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">View more information</a>

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
