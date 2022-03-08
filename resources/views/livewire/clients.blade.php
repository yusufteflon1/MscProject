<div class="p-6">

    <div class="bg-white rounded-lg shadow-lg py-6">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="text-gray-800 border border-b-0">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Avatar</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="text-center px-4 py-3">Action </th>
                    </tr>
                </thead>
                <tbody>

                       
                   
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">1</td>
                        <td class="px-4 py-4">{{ $user->name }}</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="{{ asset('images/profile_pictures/jose.jpg') }}">
                        </td>
                        <td class="px-4 py-4">{{ $user->email }}</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Active</span>
                        </td>
                        <td class="text-center py-4">
                            <button type="button" class="bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none">Approve</button>
                            <button type="button" class="bg-red-600 text-gray-200 text-xs rounded hover:bg-red-500 px-4 py-3 focus:outline-none">Reject</button>
                        </td>
                    </tr>
                   

                    <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
                        <td class="px-4 py-4">2</td>
                        <td class="px-4 py-4">Taylor Otwel</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="{{ asset('images/profile_pictures/zoe.jpg') }}">
                        </td>
                        <td class="px-4 py-4">taylow@laravel.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-yellow-500 text-white rounded-full px-2 py-1">Pending</span>
                        </td>
                        <td class="text-center py-4">
                            <button type="button" class="bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none">Approve</button>
                            <button type="button" class="bg-red-600 text-gray-200 text-xs rounded hover:bg-red-500 px-4 py-3 focus:outline-none">Reject</button>
                        </td>
                    </tr>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4">3</td>
                        <td class="px-4 py-4">Adam wathan</td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                                src="{{ asset('images/profile_pictures/jose.jpg') }}">
                        </td>
                        <td class="px-4 py-4">tmgbedu@gmail.com</td>
                        <td class="px-4 py-4">
                            <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1">Not Active</span>
                        </td>
                        <td class="text-center py-4">
                            <button type="button" class="bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none">Approve</button>
                            <button type="button" class="bg-red-600 text-gray-200 text-xs rounded hover:bg-red-500 px-4 py-3 focus:outline-none">Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>


                            {{-- "Create button" logic here --}}

            <div class="flex item-center justify-end px-4 py-3 text-right sm:px-6">
                <x-jet-button wire:click="createShowModal">
                    {{ __('Create') }}
                </x-jet-button>
                    </div>
                    <div>
                    {{-- model form --}}
                    <x-jet-dialog-modal wire:model="modelFormVisible">
                        <x-slot name="title">
                            {{ __('Save page') }}
                        </x-slot>
            
                        <x-slot name="content">
                    {{-- Test area --}}
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
                        {{-- <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div> --}}
                    </x-slot>
            
                    <x-slot name="footer">
                        <x-jet-secondary-button wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
            
                        <x-jet-button class="ml-3">
                            {{ __('Register') }}
                        </x-jet-button>
                    </x-slot>
                    </form>            
                    </x-jet-dialog-modal>
                </div>
        </div>
    </div>


