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
                Edit Page
                </div>
            </div>
        </div>
    </div>
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
                        <div class="flex flex-col justify-center text-center space-y-1 my-9">
                            <h1 class="text-xl md:text-2xl font-semibold">Create Page</h1>

                        </div>
                        <div class="flex flex-col justify-center lg:flex-row  items-center lg:space-x-10 xl:space-x-24 ">
                            <div
                                class=" shadow-lg  flex flex-col justify-center space-y-3 md:w-full  mb-7 md:mx-16 lg:mx-0 px-8 py-4 lg:px-4">
                                <div class="flex flex-col justify-between lg:flex-row space-y-1 lg:space-y-0 ">
                                    <h1>予定</h1>
                                    <input type="text" name="task_name" id="task_name"
                                        class="bg-slate-100 rounded-lg px-2 py-1 placeholder:text-gray-600 w-[80%] lg:w-[60%] focus:border focus:outline-none focus:border-blue-500">
                                </div>

                                <div class="flex flex-col justify-between lg:flex-row space-y-1 lg:space-y-0">
                                    <h1>予定日時</h1>
                                    <input type="date" name="task_date" id="task_date"
                                        class="bg-slate-100 rounded-lg px-2 py-1 placeholder:text-gray-600 w-[80%] lg:w-[60%] focus:border focus:outline-none focus:border-blue-500">
                                </div>

                                <div class="flex flex-col justify-between lg:flex-row space-y-1 lg:space-y-0">
                                    <h1>予定情報</h1>
                                    <textarea name="task_info" id="task_info" cols="10" rows="3"
                                        class="bg-slate-100 rounded-lg px-2 py-1 placeholder:text-gray-300 w-[80%] lg:w-[60%] focus:border focus:outline-none focus:border-blue-500"></textarea>
                                </div>
                                <div class="text-center md:text-left lg:text-right">
                                    {{-- <button onclick="location.href='{{route('user.index')}}" class="bg-blue-500 my-2 px-3 py-1 text-white rounded-md hover:bg-blue-600">Back
                                    </button> --}}

                                    <button onclick="location.href='{{route('user.create')}}" class="bg-blue-500 my- px-3 py-1 text-white rounded-md hover:bg-blue-600">send
                                    </button>
                                </div>
                            </div>
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
