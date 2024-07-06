<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 py-8">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4">
                            <a href="{{ route('admin.inventaris.index') }}" class="text-center">
                                <img src="{{asset('img/inventory.png')}}" alt="Elektronik" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Inventaris Barang</p>
                            </a>
                            <div class="text-center">
                                <img src="{{asset('img/menu.png')}}" alt="Menu" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Manajemen Menu</p>
                            </div>
                            <div class="text-center">
                                <img src="{{asset('img/laporan.png')}}" alt="Laporan Keuangan" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Laporan Keuangan</p>
                            </div>
                            <div class="text-center">
                                <img src="{{asset('img/waiter.png')}}" alt="Pakaian Pria" class="mx-auto mb-4 w-32 h-32" />
                                <p class="text-lg font-semibold">Manajemen Karyawan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
