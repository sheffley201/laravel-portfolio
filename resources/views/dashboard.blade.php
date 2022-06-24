<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg text-gray-100">
                <div class='mx-auto w-fit'>
                    <h2 class='text-2xl mb-5'>Check out my projects!</h2>
                    <div class='grid grid-cols-3 gap-6'>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                        <x-project-card></x-project-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
