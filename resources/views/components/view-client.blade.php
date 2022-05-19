{{-- <div {{ $attributes->merge([]) }}>
    <button wire:click="viewClient" class="type' => 'update' bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none">
        {{ __('View client') }}
    </button>

    <x-jet-dialog-modal wire:model="modalClientVisible">
        <x-slot name="title">
            {{ __('Client Data') }}
        </x-slot>

        <x-slot name="content">
            {{ __('') }}

            <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                <x-jet-input type="password" class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                            x-ref="password"
                            wire:model.defer="password"
                            wire:keydown.enter="logoutOtherBrowserSessions" />

                <x-jet-input-error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalClientVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-3"
                        wire:click="logoutOtherBrowserSessions"
                        wire:loading.attr="disabled">
                {{ __('Log Out Other Browser Sessions') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>




</div>
    
     --}}










     <div class="mt-4" x-data="{}">
        <div style="background-image: radial-gradient(
        transparent 28px,
        #ffffff 28px,
        #ffffff 32px,
        transparent 32px
    );height: 150px;width: 100%; background-color: #d3730c;
    background-size: 53px 53px;" class="rounded-t-lg"></div>
        <div>
            <div class="text-center" style="margin-top: -44px">
                <span class="border-4 border-white rounded-full mx-auto inline-block">
                    <img class="rounded-full w-20 h-20" src="https://randomwordgenerator.com/img/picture-generator/51e6dc41434faa0df7c5d57bc32f3e7b1d3ac3e455517349762f72d794_640.jpg" alt="profile" />
                </span>
            </div>
            <p class="text-center"><span class="font-bold"> {{ $client->first_name }}</span> 
            <p class="text-xs text-center mb-5">{{ $client->last_name }}</p>
            <hr />
            {{-- <div class="flex justify-between px-10 py-5">
                <div class="text-center">
                    <p class="font-bold">100K</p>
                    <p class="text-xs">Followers</p>
                </div>
                <div class="text-center">
                    <p class="font-bold">903K</p>
                    <p class="text-xs">Likes</p>
                    
                </div>
                <div class="text-center">
                    <p class="font-bold">104K</p>
                    <p class="text-xs">Photos</p>
                    
                </div>
            </div> --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                        <div class="bg-green-500 text-gray-50 text-lg">
                        Email
                        </div>
                        <div>
                        {{ $client->email }}
                        </div>
                    
                </div>
                <div class="col-span-auto">
                        <div class="bg-green-500 text-gray-50 text-lg">
                            Age range 
                        </div>
                        <div>
                            {{ $client->age_range }}
                        </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                        <div class="bg-green-500 text-gray-50 text-lg">
                        Phone Number
                        </div>
                        <div>
                        {{ $client->telephone }}
                        </div>
                    
                </div>
                <div class="col-span-auto">
                        <div class="bg-green-500 text-gray-50 text-lg">
                            Address 
                        </div>
                        <div class="">
                            {{ $client->address }}
                        </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                        <div class="bg-green-500 text-gray-50 text-lg">
                        ID Type
                        </div>
                        <div>
                        {{ $client->identification }}
                        </div>
                    
                </div>
                <div class="col-span-auto">
                        <div class="bg-green-500 text-gray-50 text-lg">
                            ID Number 
                        </div>
                        <div class="">
                            {{ $client->id_number }}
                        </div>
                </div>
            </div>


    </div>