<div>
    {{-- @foreach ($approvals as $approval)
    @livewire('next', ['client' => $approval], key($approval->name))
    @endforeach --}}
    <div class="sm:px-6 w-full">
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Approvals</p>
                <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                    <p>Sort By:</p>
                    <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                        <option class="text-sm text-indigo-800">Latest</option>
                        <option class="text-sm text-indigo-800">Oldest</option>
                        <option class="text-sm text-indigo-800">Latest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="sm:flex items-center justify-between">
                <div class="flex items-center">
                    <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                        <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                            <p>All</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Approved</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Pending</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div>
                <table class="w-full text-left rounded-lg">
                    <thead>
                        <tr class="text-gray-800 border border-b-0">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Business Name</th>
                            <th class="px-4 py-3">Credit Rating</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="text-center px-4 py-3">Action </th>
                        </tr>
                    </thead>
                    @foreach ($clients as $client ) 
                        @if ($client->verified == 1)
                        <tbody>
                            <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                <td class="px-4 py-4">{{ $loop->iteration }}</td>
                                <td class="px-4 py-4">{{ $client->first_name }} {{ $client->last_name }} </td>
                                <td class="px-4 py-4">
                                    Example business name 
                                <td class="px-4 py-4">50% Good</td>
                                <td class="px-4 py-4">
                                    $2,000,000.00
                                </td>
                            
                                <td class="text-center py-4">
                                    <button type="button" class="bg-blue-600 text-gray-200 text-xs rounded hover:bg-blue-500 px-4 py-3 focus:outline-none">View</button>
                                    <button type="button" class="bg-red-600 text-gray-200 text-xs rounded hover:bg-red-500 px-4 py-3 focus:outline-none">Reject</button>
                                </td>
                            </tr>
                        </tbody>
                        @else
                            
                        @endif
                            
                    @endforeach
                </table>
            </div>



        </div>
    </div>
</div>
