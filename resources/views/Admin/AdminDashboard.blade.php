<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <button style="border:1px solid #111;"><a href="{{url('/registers')}}">Register user</a></button>
                    <button style="border:1px solid #111;"><a href="{{url('/addTask')}}">Add New Task</a></button>
                    <button style="border:1px solid #111;"><a href="{{url('/TaskList')}}">Task Board</a></button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
