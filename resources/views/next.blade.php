<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <form action="isClient" method="post" enctype='multipart/form-data'>
            @csrf
 <div class=" flex justify-center">
     <input type="hidden" value="role">
    <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2 disabled:opacity-50">
        Sign in as a Client
      </button>
    </form>
    <form action="save_user" method="post" enctype='multipart/form-data'>
        @csrf
    <button type="submit" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
         <a href="#">Sign in as a Staff</a>
      </button>
    </form>
 </div>
    </x-jet-authentication-card>
</x-guest-layout>