<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Inventaris Bahan Baku') }}
            </h2>
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center p-2 bg-gray-800 border border-transparent rounded-full text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring ring-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        </div>
    </x-slot>
    <div class="container mx-auto py-12">
        <h2 class="text-1xl font-bold mb-4" >Inventaris Bahan</h2>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4">Nama Bahan</th>
                    <th class="py-2 px-4">Tanggal Kedaluwarsa</th>
                    <th class="py-2 px-4">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bahan as $item)
                <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="py-2 px-4" style="text-align: center">{{ $item->nama }}</td>
                    <td class="py-2 px-4" style="text-align: center">{{ \Carbon\Carbon::parse($item->tanggal_kadaluarsa)->format('d F') }}</td>
                    <td class="py-2 px-4" style="text-align: center">
                        <span class="{{ $item->status == 'Segar' ? 'text-green-500' : 'text-red-500' }}">
                            {{ $item->status }}
                        </span>
                    </td>
                @endforeach
            </tbody>
        </table>

        <h2 class="text-1xl font-bold mt-8 py-2">Grafik Kedaluwarsaan Bahan</h2>
        <canvas id="chartKadaluarsa" class="w-full" height="200"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('chartKadaluarsa').getContext('2d');
            var labels = [];
            var data = [];
            var backgroundColors = [];

            @foreach($bahan as $item)
                labels.push('{{ $item->nama }}');
                var status = '{{ $item->status }}';
                var isFresh = status == 'Segar';
                data.push(isFresh ? 1 : 0);
                backgroundColors.push(isFresh ? 'green' : 'red');
            @endforeach

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Status Kedaluwarsa',
                        data: data,
                        backgroundColor: backgroundColors,
                        borderColor: 'rgba(0, 0, 0, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value == 1 ? 'Segar' : 'Kadaluarsa';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>
