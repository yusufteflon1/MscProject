@extends('layouts.app')

@section('content')


<div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
            <div class="rounded-xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        <img src="{{ asset('assets2/images/logo.png') }}" loading="lazy" class="w-20" alt="AEA logo">
                        <h2 class="mb-8 text-2xl text-cyan-900 font-bold"> Hi {{ Auth::user()->social_name }}</h2>
                        <h2 class="mb-8 text-1xl text-cyan-900 font-semibold"> Complete your registration for the AEA CRM APP.</h2>
                    </div>
                    <div class="mt-8 grid space-y-4">
                    <form method="post" action="{{url('post-client-profile')}}">
                        @csrf
                        <input type="hidden" name="role" value="client">
                        <input type="hidden" name="social_name" value="{{ Auth::user()->social_name }}">
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <input type="hidden" name="completed" value="1">
            

                        <div class="flex flex-wrap mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                                <input id="first_name" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('first_name') bg-red-dark 
                                @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                <input id="last_name" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('last_name') bg-red-dark 
                                @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                                <input id="phone" type="tel" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('phone') bg-red-dark 
                                @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                        </div>
                        
                        <div class="flex flex-wrap mb-3">
                            <label for="education" class="col-md-4 col-form-label text-md-end">{{ __('Education') }}</label>

                            <select class="select block appearance-none w-full py-1 px-2 mb-1 text-base 
                            leading-normal bg-white text-grey-darker border border-grey rounded @error('education') bg-red-dark 
                            @enderror" name="education" value="{{ old('education') }}" required autocomplete="education" autofocus>
                                <option value="">--Select--</option>    
                                <option value="None">None</option>
                                <option value="Secondary school">Secondary school</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Postgraduate">Postgraduate</option>
                              </select>
                                @error('education')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div> 
                        <div class="flex flex-wrap mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <select class="select block appearance-none w-full py-1 px-2 mb-1 text-base 
                            leading-normal bg-white text-grey-darker border border-grey rounded @error('gender') bg-red-dark 
                            @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                                <option value="">--Gender--</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                              </select>
                                @error('gender')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                        </div> 

                        <div class="flex flex-wrap mb-3">
                            <label for="age_range" class="col-md-4 col-form-label text-md-end">{{ __('Age Range') }}</label>

                            <select class="select block appearance-none w-full py-1 px-2 mb-1 text-base 
                            leading-normal bg-white text-grey-darker border border-grey rounded @error('age_range') bg-red-dark 
                            @enderror" name="age_range" value="{{ old('age_range') }}" required autocomplete="age_range" autofocus>
                                <option value="">--Age Range--</option>
                                <option value="Below 20 years">Below 20 years</option>
                                <option value="21-25">21-25</option>
                                <option value="26-30">26-30</option>
                                <option value="31-40">31-40</option>
                                <option value="41-59">41-59</option>
                                <option value="60 and above">60 and above</option>
                              </select>
                                @error('age_range')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                        </div> 

                        <div class="row mb-3">
                            <label for="identification" class="col-md-4 col-form-label text-md-end">{{ __('Upload Identification') }}</label>

                            <div class="col-md-6">
                                <input id="identification" type="file" class="form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification" autofocus>

                                @error('identification')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="disability" class="col-md-4 col-form-label text-md-end">{{ __('Disability') }}</label>

                            
                                <input id="disability" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('disability') bg-red-dark 
                                @enderror" name="disability" value="{{ old('disability') }}" required autocomplete="disability" autofocus>
                                @error('disability')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                        </div> 

                        <div class="flex flex-wrap mb-3">
                            <label for="state_of_origin" class="col-md-4 col-form-label text-md-end">{{ __('State of origin') }}</label>

                            
                            <select class="select block appearance-none w-full py-1 px-2 mb-1 text-base 
                            leading-normal bg-white text-grey-darker border border-grey rounded @error('state_of_origin') bg-red-dark 
                            @enderror" name="state_of_origin" value="{{ old('state_of_origin') }}" required autocomplete="state_of_origin" autofocus>
                                <option value="">--Select--</option>
                                <option>FCT</option>  <option>Abia</option> <option>Adamawa</option>
                                <option>Akwa Ibom</option> <option>Anambra</option> <option>Bauchi</option>
                                <option>Bayelsa</option> <option>Benue</option> <option>Borno</option>
                                <option>Cross River</option> <option>Delta</option> <option>Ebonyi</option>
                                <option>Edo</option> <option>Ekiti</option> <option>Enugu</option>
                                <option>Gombe</option> <option>Imo</option> <option>Jigawa</option>
                                <option>Kaduna</option> <option>Kano</option> <option>Katsina</option>
                                <option>Kebbi</option> <option>Kogi</option> <option>Kwara</option>
                                <option>Lagos</option> <option>Nasarawa</option> <option>Niger</option>
                                <option>Ogun</option> <option>Ondo</option> <option>Osun</option>
                                <option>Oyo</option> <option>Plateau</option> <option>Rivers</option>
                                <option>Sokoto</option> <option>Taraba</option> <option>Yobe</option>
                                <option>Zamfara</option>
                              </select>

                                @error('state_of_origin')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                        </div> 

                        <div class="flex flex-wrap mb-3">
                            <label for="id_number" class="col-md-4 col-form-label text-md-end">{{ __('Id number') }}</label>

                            
                                <input id="id_number" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('id_number') bg-red-dark 
                                @enderror" name="id_number" value="{{ old('id_number') }}" required autocomplete="id_number" autofocus>

                                @error('id_number')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        
                        </div> 

                        <div class="flex flex-wrap mb-3">
                            <label for="id_issue_date" class="col-md-4 col-form-label text-md-end">{{ __('Id issue date') }}</label>

                            
                                <input id="id_issue_date" type="date" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('id_issue_date') bg-red-dark 
                                @enderror" name="id_issue_date" value="{{ old('id_issue_date') }}" required autocomplete="id_issue_date" max="<?= date('Y-m-d'); ?>" autofocus>

                                @error('id_issue_date')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    
                        </div> 
            

                        <div class="flex flex-wrap mb-3">
                            <label for="id_expiry" class="col-md-4 col-form-label text-md-end">{{ __('Id expiry date') }}</label>

                            
                                <input id="id_expiry" type="date" class="block appearance-none w-full py-1 px-2 mb-1 text-base 
                                leading-normal bg-white text-grey-darker border border-grey rounded @error('id_expiry') bg-red-dark
                                 @enderror" name="id_expiry" value="{{ old('id_expiry') }}" required autocomplete="id_expiry" min="<?= date('Y-m-d'); ?>" autofocus>

                                @error('id_expiry')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            
                        </div> 

                        <div class="flex flex-wrap mb-3">
                            <label for="nationality" class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>                            
                                <input id="nationality" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded @error('nationality') bg-red-dark @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>

                                @error('nationality')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror 
                        </div> 
            
                        <div class="flex flex-wrap mb-3">
                            <label for="qualification" class="col-md-4 col-form-label text-md-end">{{ __('Qualification') }}</label>

                            
                                <input id="qualification" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded @error('qualification') bg-red-dark @enderror" name="qualification" value="{{ old('qualification') }}" required autocomplete="qualification" autofocus>

                                @error('qualification')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                
                        </div> 
            

                        <div class="flex flex-wrap mb-3">
                            <label for="lga" class="col-md-4 col-form-label text-md-end">{{ __('LGA') }}</label>

                            
                                <input id="lga" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded @error('lga') bg-red-dark @enderror" name="lga" value="{{ old('lga') }}" required autocomplete="lga" autofocus>

                                @error('lga')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        
                        </div> 
            

                        <div class="flex flex-wrap mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                <input id="address" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded @error('address') bg-red-dark @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div> 
            
                        <div class="flex flex-wrap mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded @error('password') bg-red-dark @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="inhidden mt-1 text-sm text-green" role="relative px-3 py-3 mb-4 border rounded">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror        
                        </div>
            
                        <div class="flex flex-wrap mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-grey-darker border border-grey rounded" name="password_confirmation" required autocomplete="new-password">
                        
                        </div>
            
                        <div class="flex flex-wrap mb-0">
                            <div class="md:w-1/2 pr-4 pl-4 md:mx-1/3">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    {{ __('Register') }}
                                </button>
                        
                        </div>
                    </form>
                    <div class="mt-32 space-y-4 text-gray-600 text-center sm:-mb-8">
                        <p class="text-xs">By proceeding, you agree to our <a href="#" class="underline">Terms of Use</a> and confirm you have read our <a href="#" class="underline">Privacy and Cookie Statement</a>.</p>
                        <p class="text-xs">This site is protected by Google Email authentification and the <a href="#" class="underline">Google Privacy Policy</a> and <a href="#" class="underline">Terms of Service</a> apply.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
