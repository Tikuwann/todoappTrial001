<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Page') }}
        </h2>
    </x-slot>


{{-- <form  name="task_create"  method="post"  action="{{ route('user.update') }}">
        @csrf
        <input class="btn  btn-warning"  type="submit"  name="reset"  value="reset"> --}}

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section>
            <form method="post" action="{{route('user.store')}}">
                @csrf
                <div class="flex justify-center w-full">
                    <div class="flex flex-col justify-center items-center max-w-7xl w-[90%]">

                            <section class="text-gray-600 body-font relative">
                                <div class="container px-5 py-24 mx-auto">
                                  <div class="flex flex-col text-center w-full mb-12">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Create Page</h1>
                                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
                                  </div>
                                  <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                      <div class="p-2 w-1/2">
                                        <div class="relative">
                                          <label for="task_name" class="leading-7 text-sm text-gray-600">予定タイトル</label>
                                          <input type="text" id="task_name" name="task_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                      </div>

                                      <div class="p-2 w-1/2">
                                        <div class="relative">
                                          <label for="task_date" class="leading-7 text-sm text-gray-600">予定日時</label>
                                          <input type="date" id="task_date" name="task_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                      </div>



                                      <div class="p-2 w-full">
                                        <div class="relative">
                                          <label for="task_info" class="leading-7 text-sm text-gray-600">予定詳細</label>
                                          <textarea name="task_info" id="task_info" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                        </div>
                                      </div>
                                      <div class="p-2 w-full">
                                        <button onclick="location.href='{{route('user.create')}}" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">作成</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </section>


                            {{-- <div class="text-gray-800  px-4 py-2 lg:px-7 lg:py-4  flex flex-col md:w-full space-y-3  mb-5 lg:mb-0">
                                <h1>With Stripe you can:</h1>
                                <div class="flex">
                                    <input type="checkbox" class="" name="" id="">
                                    <p class="text-justify ml-4">Focus critical developer resources on your core business</p>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" class="" name="" id="">
                                    <p class="text-justify ml-4">Launch new products faster with less payments code.</p>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" class="" name="" id="">
                                    <p class="text-justify ml-4">Improve conversion from international customers.</p>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
            </form>
        </section>
            </div>
        </div>
    </div>
{{-- </form> --}}



</x-app-layout>
