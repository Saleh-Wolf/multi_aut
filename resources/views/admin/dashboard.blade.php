<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="p-6">

        <h3>Welcome {{ Auth::user()->name }}</h3>

        @if(Auth::user()->image)
<img src="{{ url('images/' . Auth::user()->image) }}" width="120">
        @endif
    </div>
    <p>{{ Auth::user()->image }}</p>

</x-app-layout>