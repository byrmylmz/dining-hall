<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Özet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <x-dashboard :totalPerson="$totalPerson" :totalCompany="$totalCompany" :totalBalance="$totalBalance->balance" />
            </div>
        </div>
    </div>
</x-app-layout>
