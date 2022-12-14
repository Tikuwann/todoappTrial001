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

    @foreach ( $tasks as $task)




    <section class=" text-gray-600 body-font overflow-hidden">
        <div class="container  px-5 py-12 mx-auto">
          <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg -my-8 divide-y-4 divide-gray-500">
            <div class="py-8 flex flex-wrap md:flex-nowrap">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="font-semibold title-font text-gray-700">{{ $task-> task_date }}</span>
                {{-- <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span> --}}
              </div>
            <div class="md:flex-grow">
                <h2 class="text-3xl font-medium text-gray-900 title-font mb-2">{{ $task-> task_name }}</h2>
                <p class="leading-relaxed">{{ $task-> task_info }}</p>
                <a href="{{route('user.edit',['id'=>$task->id])}}" role="button" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>

            </div>


            </div>

          </div>
        </div>
    </section>
      @endforeach








         </div>
</div>

         <script src="https://cdn.tailwindcss.com"></script>
         <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</x-app-layout>
