<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <p>Token: {{request()->user()->token ?? 'N/A'}}</p>
            <form action="{{route('home')}}" method="POST">
                @csrf
             <input type="submit" class="btn btn-outline-primary mt-5" value="Generate Token">
             </form>
    </div>
</x-app-layout>
