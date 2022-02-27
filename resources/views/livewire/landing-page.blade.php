{{-- <div>
    <div class="flex flex-col bg-orange-900 
    w-full h-screen"
    x-data="{
        showSubscriber: false,
        showSuccess: false,
    }">
        <nav class="flex pt-5 justify-between 
        container mx-auto text-orange-200">
            <a class="text-4xl font-bold" href="/">
               <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>

        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">
                    Dashboard </a>
            @else
                <a href="{{ route('login') }}">
                    Login </a>
            @endauth
        </div>
        </nav>
        <div class="flex container mx-auto items-center h-full">
            <div class=" flex flex-col w-1/3 items-start">
                <h1 class=" text-white font-bold text-5xl leading-tight mb-4"> 
                    Simple page to see
                </h1>
                <p class="text-orange-200 text-xl mb-10"> 
                    Just checking this <span class="font-bold underline">TALL</span>  stack 
                    lets see how this thing works 
                    and finally get to some work
                </p>
                <x-button class="py-3 px-8 bg-blue-500 hover:bg-blue-800"
                                x-on:click="showSubscriber = true"
                                >
                     check out
                </x-button>
            </div>
        </div>
       <x-model class="bg-green-500" trigger="showSubscriber">
        <p class=" text-white text-5xl font-extrabold text-center">
            Let's go!!!!
        </p>
        <form class="flex flex-col items-center p-24"
                wire:submit.prevent="subscribe">
            <x-input
            class="px-5 py-3 w-80 border border-blue-400"
            type="email"
            name="email"
            placeholder="Email address"
            wire:model="email"
            ></x-input>
            <x-input
            class="px-5 py-3 w-80 border border-blue-400"
            type="string"
            name="name"
            placeholder="name"
            wire:model="name"
            ></x-input>
            <x-input
            class="px-5 py-3 w-80 border border-blue-400"
            type="string"
            name="password"
            placeholder="password"
            wire:model="password"
            ></x-input>
            <span class="text-gray-100 text-xs">
                {{ $errors->has('email')
                    ? $errors->first('email')
                    :'text text text text'
                }}
                
            </span>
            <x-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">
                Get in 
            </x-button>
        </form>

       </x-model>
          <x-model class="bg-red-500" trigger="showSuccess">
                <p class="animate-pulse text-white text-9xl font-extrabold text-center">
                    &check;
                </p>
                <p class=" text-white text-5xl font-extrabold text-center mt-16">
                    Great!
                </p>
                <p class="text-white text-3xl text-center">
                    See you there. 

                </p>
          </x-model>

          




          {{-- Test from this part --}}









{{-- </div> --}}




{{-- Test that here  --}}


<main class="flex flex-col bg-white 
w-full h-screen h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">

{{-- insert custom left nav here green--}}
        <x-custom-nav class="h-screen hidden lg:block shadow-lg relative w-80">

        </x-custom-nav>


        <div class="flex flex-col w-full md:space-y-4 mt-6">
           
            <div class="overflow-auto h-screen pb-24 px-4 md:px-6">
                <h1 class="text-4xl font-semibold text-orange-600 text-orange-900">
                    Good afternoon,
                </h1>
                <h2 class="text-md text-orange-600">
                    Here&#x27;s what&#x27;s happening today.
                </h2>

                {{-- Top bar with amb and commission  --}}
                <div class="flex my-6 items-center w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
                    
                    
                    {{-- Show level 2 amb --}}
                    <div class="w-full md:w-6/12">
                        <div class="shadow-lg w-full bg-white dark:bg-green-900 relative overflow-hidden">
                            <a href="#" class="w-full h-full block">
                                <div class="flex items-center justify-between px-4 py-6 space-x-4">
                                    <div class="flex items-center">
                                        <span class="rounded-full relative p-5 bg-yellow-100">
                                            <svg width="40" fill="currentColor" height="40" class="text-yellow-500 h-5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                                                </path>
                                            </svg>
                                        </span>
                                        <p class="text-sm text-gray-700 dark:text-white ml-2 font-semibold border-b border-gray-200">
                                            Level 2 Ambassador
                                        </p>
                                    </div>
                                    <div class="border-b border-gray-200 mt-6 md:mt-0 text-black dark:text-white font-bold text-xl">
                                        $44,453.39
                                        <span class="text-xs text-gray-400">
                                            /$100K
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full h-3 bg-gray-100">
                                    <div class="w-2/5 h-full text-center text-xs text-white bg-green-400">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- show active projects here  --}}
                    <div class="flex items-center w-full md:w-1/2 space-x-4">
                        <div class="w-1/2">
                            <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-green-900 relative">
                                <p class="text-2xl text-black dark:text-white font-bold">
                                    12
                                </p>
                                <p class="text-gray-400 text-sm">
                                    Active projects
                                </p>
                            </div>
                        </div>


                        {{-- show approvals --}}
                        <div class="w-1/2">
                            <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-green-900 relative">
                                <p class="text-2xl text-black dark:text-white font-bold">
                                    $93.76
                                </p>
                                <p class="text-gray-400 text-sm">
                                    Commission in approval
                                </p>
                                <span class="rounded-full absolute p-4 bg-purple-500 top-2 right-4">
                                    <svg width="40" fill="currentColor" height="40" class="text-white h-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Select date section here --}}

                <div class="flex items-center space-x-4">
                    <button class="flex items-center text-gray-400 text-md border-gray-300 border px-4 py-2 rounded-tl-sm rounded-bl-full rounded-r-full">
                        <svg width="20" height="20" fill="currentColor" class="mr-2 text-gray-400" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z">
                            </path>
                        </svg>
                        Last month
                        <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                    <span class="text-sm text-gray-400">
                        Compared to oct 1- otc 30, 2020
                    </span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-4">


                    {{-- insert all statistics here  --}}
                    <x-box-stat></x-box-stat>
                    <x-box-stat></x-box-stat>
                    <x-box-stat></x-box-stat>
                    <x-box-stat></x-box-stat>
                    <x-box-stat></x-box-stat>
                    <x-box-stat></x-box-stat>
                  
                </div>
            </div>
        </div>
    </div>
</main>

