<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Inventaris Barang') }}
            </h2>
            <a href="{{ route('dashboard') }}" class="inline-flex items-center p-2 bg-gray-800 border border-transparent rounded-full text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring ring-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-8">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-3">
                            <a href="{{ route('admin.inventaris.cart') }}" class="text-center">
                                <img src="{{asset('img/chart.png')}}" alt="Elektronik" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Inventaris Bahan Baku</p>
                            </a>
                            <a href="{{ route('admin.bahanbaku.index') }}" class="text-center">
                                <img src="{{asset('img/bahan.png')}}" alt="Elektronik" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Pemasukan Bahan Baku</p>
                            </a>
                            <a href="{{ route('admin.inventaris.index') }}" class="text-center">
                                <img src="{{asset('img/masak.png')}}" alt="Elektronik" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Pengeluaran Bahan Baku</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

