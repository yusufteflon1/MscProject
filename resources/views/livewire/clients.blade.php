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
                        <td class="px-4 py-4">{{ $user->name }} </td>
                        <td class="px-4 py-4">
                            <img class="h-6 w-6 rounded-full"
                            src=" {{ Auth()->user()->avatar }}">
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

           <x-clients-register class="flex item-center justify-end px-4 py-3 text-right sm:px-6" >
             <div>
               Createe
             </div>
           </x-clients-register>
        </div>
     </div>


