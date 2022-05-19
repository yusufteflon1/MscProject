<div class="grid justify-items-center max-h-full">
    <div class="flex item-center justify-center max-h-80">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="flex item-center justify-center">
        <x-jet-button wire:click="createShowModal" class="type' => 'submit'">
            {{ __('Complete my registration') }}
        </x-jet-button>
            </div>
            <div>
            {{-- model form --}}
            <x-jet-dialog-modal wire:model="modalFormVisible">
                <x-slot name="title">
                    {{ __('Register Client') }}
                </x-slot>
    
                <x-slot name="content">
            {{-- Test area --}}
    
            <form wire:submit.prevent="submit">
                @csrf
    
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        First Name
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                      focus:bg-white" id="grid-first-name" type="text" placeholder="Jane" wire:model="first_name">
                      @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                      {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
                      focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" wire:model="last_name">
                      @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Education
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none
                      focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="education" wire:model="education">
                      @error('client_id') <span class="text-danger">{{ $message }}</span> @enderror
                      <p class="text-gray-600 text-xs italic">Check your email for ID details </p>
                    </div>
                  </div>
    
    
                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                        Phone Number
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
                      focus:bg-white focus:border-gray-500" id="grid-phone" type="text" placeholder="08098818001" wire:model="telephone">
                      @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-gender">
                        Gender
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
                        text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500" id="grid-gender" wire:model="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-age">
                            Age Range
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border 
                            border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight 
                            focus:outline-none focus:bg-white focus:border-gray-500" id="grid-age" wire:model="age_range">
                              <option value= "0" >Bellow 20</option>
                              <option value= "1" >21 - 25</option>
                              <option value= "2" >26 - 30</option>
                              <option value= "2" >31 - 40</option>
                              <option value= "2">41 - 59</option>
                              <option value= "0" >Over 51</option>
                            </select>
                            @error('age_range') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            </div>
                          </div>
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Disability
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
                      focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Disability" wire:model="disability">
                      @error('disability') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        State
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200
                         text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                         focus:bg-white focus:border-gray-500" id="grid-state" wire:model="state_of_origin">
                          <option>FCT</option>
                          <option>Lagos</option>
                          <option>Kano</option>
                        </select>
                        @error('state_of_origin') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        House condition
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200
                         text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                         focus:bg-white focus:border-gray-500" id="grid-house" wire:model="house_condition">
                          <option value="1">Owner</option>
                          <option value="0">Rented</option>
                        </select>
                      @error('house_condition') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6 py-3">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-address">
                        Address
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                      border border-gray-200 rounded py-3 px-4 mb-3 leading-tight 
                      focus:outline-none focus:bg-white focus:border-gray-500" id="grid-address" type="text" 
                      placeholder="GF 07 AEA Complex Abuja" wire:model="address">
                      @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  

                      <input type="hidden" 
                      value="{{$user->google_id }}" wire:model="google_id">
                      

                      <input type="hidden" 
                      value="test@email.com" wire:model="email">
                      



                  

                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-lga">
                        Local Govenment
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 
                      text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight 
                      focus:outline-none focus:bg-white focus:border-gray-500" id="grid-lga" type="text" placeholder="AMAC" wire:model="lga">
                      @error('lga') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-id">
                        ID type 
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border
                         border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none 
                         focus:bg-white focus:border-gray-500" id="grid-id" wire:model="identification">
                          <option>National ID</option>
                          <option>Drivers Licence</option>
                          <option>Int Passport</option>
                          <option>Other</option>
                        </select>
                        @error('identification') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        </div>
                      </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-id">
                        ID Number
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
                       border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white
                        focus:border-gray-500" id="grid-id" type="text" placeholder="AO90210"wire:model="id_number">
                      @error('id_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-lga">
                        ID Issue Date
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border
                       border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white 
                       focus:border-gray-500" id="grid-lga" type="date" placeholder="" wire:model="id_issue_date">
                      @error('id_issue_date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-id">
                        ID Expiry Date
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-id" type="date" placeholder="" wire:model="id_expiry">
                      @error('id_expiry') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-qualification">
                          Qualification 
                        </label>
                        <div class="relative">
                          <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-qualification" wire:model="qualification">
                            <option>Primary School</option>
                            <option>Secondary School</option>
                            <option>Deploma</option>
                            <option>Undergraduate and above </option>
                          </select>
                          @error('qualification') <span class="text-danger">{{ $message }}</span> @enderror
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          </div>
                        </div>
                      </div>

                      
                      
                  </div>
                  

    
                  
    
                  
    
                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
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
                @endif --}}
                {{-- <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div> --}}
                  <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
    
                <x-jet-button type="submit" class="ml-3">
                    {{ __('verify') }}
                </x-jet-button>
            </x-slot>
    
            <x-slot name="footer">
            </x-slot>
            </form>            
            </x-jet-dialog-modal>    
    </div>
        
</div>
