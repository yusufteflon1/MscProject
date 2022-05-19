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
                @foreach ($clients as $client )
                <tbody>
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4">{{ $client->first_name }} {{ $client->last_name }} </td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                            src=" ">
                        </td>
                        <td class="px-4 py-4">{{ $client->email }}</td>
                        <td class="px-4 py-4">
                            @if ($client->verified == '')
                            <span class="text-sm bg-red-500 text-white rounded-full px-2 py-1"> Not Verified</span>
                            @else
                            <span class="text-sm bg-green-500 text-white rounded-full px-2 py-1">Verified</span>
                            @endif
                            
                        </td>
                        <td class="text-center py-4">
                          <a href="/client/{{ $client->id }}">
                              <x-button  class="bg-blue-600 text-gray-200 text-xs flex item-center justify-end px-4 py-3">View client</x-button>
                                
                              </a>

                            {{-- <x-view-client>
                               
                            </x-view-client> --}}
                            {{-- <button wire:click="viewClient" type="button" class="bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none" value="update">View Client</button> --}}
                            
                            {{-- Veryfy modal goes here  --}}
                            {{-- <button type="button" class="bg-green-600 text-gray-200 text-xs rounded hover:bg-green-500 px-4 py-3 focus:outline-none">Verify</button>
                            <button type="button" class="bg-red-600 text-gray-200 text-xs rounded hover:bg-red-500 px-4 py-3 focus:outline-none">Reject</button> --}}


                        </td>
                    </tr>
                </tbody>
                @endforeach
                
            </table>

                            {{-- "Create button" logic here --}}

           <x-clients-register class="flex item-center justify-end px-4 py-3 text-right sm:px-6" >
             <div>
               Create
             </div>
           </x-clients-register>
        </div>
     </div>


