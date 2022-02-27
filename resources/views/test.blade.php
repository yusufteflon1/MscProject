{{-- <x-guest-layout>
   <div class="grid gap-4 grid-cols-3 grid-rows-3 bg-blue-200">
    <span class="inline-grid grid-cols-3 gap-4">
        <span>01</span>
        <span>02</span>
        <span>03</span>
        <span>04</span>
        <span>05</span>
        <span>06</span>
      </span>
      <span class="inline-grid grid-cols-3 gap-4">
        <span>01</span>
        <span>02</span>
        <span>03</span>
        <span>04</span>
        <span>05</span>
        <span>06</span>
      </span>
    </div>
</x-guest-layout>

<nav class="flex justify-center space-x-4"> --}}
    {{-- <a href="/dashboard" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
    <a href="/team" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Team</a>
    <a href="/projects" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Projects</a>
    <a href="/reports" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Reports</a>
  </nav> --}}


  <x-guest-layout>
    <livewire:dashtest-page>
    </livewire:dashtest-page> 
</x-guest-layout>