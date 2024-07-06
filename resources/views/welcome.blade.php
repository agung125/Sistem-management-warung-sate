<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warung Sate</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        .carousel-item {
            display: none;
        }

        .carousel-item.active {
            display: block;
        }
    </style>

</head>

<body>
    <header>
        <div
            class="bg-gradient-to-r from-orange-600 via-red-600 via-25% via-yellow-500 via-50% via-red-600 via-75% to-orange-600 mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-white sm:text-3xl">Warung Sate</h1>

                    <p class="mt-1.5 text-sm text-white">Cabang : 🎉</p>
                </div>

                <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
                    <button
                        class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 px-5 py-3 text-white transition hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:ring"
                        type="button">
                        <span class="text-sm font-medium">Keranjang</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l1-2H6m5 2V8a2 2 0 012-2h6m-6 0V6m0 0H9m0 2v2m0 0H7m5 2H7m10-6h2a2 2 0 012 2v2m-2 10a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h2">
                            </path>
                        </svg>
                    </button>


                    <button
                        class="block rounded-lg bg-black px-5 py-3 text-sm font-medium text-white transition hover:bg-yellow-400 focus:outline-none focus:ring"
                        type="button">
                        Tentang kami
                    </button>
                </div>
            </div>
        </div>
    </header>


    <div id="carousel-example" class="relative w-full">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div id="carousel-item-1" class="carousel-item active duration-700 ease-in-out">
                <img src="https://media.istockphoto.com/id/1142009675/id/foto/sate-ayam-diasinkan-di-atas-panggangan-barbekyu.jpg?s=612x612&w=0&k=20&c=O--BqGbLVxVwMRHiRn3Ax5VMaJZY5mnozSRCUgmziWY="
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="Slide 1">
            </div>
            <!-- Item 2 -->
            <div id="carousel-item-2" class="carousel-item duration-700 ease-in-out">
                <img src="https://media.istockphoto.com/id/957203360/id/foto/sate-ayam-mendesis-dipanggang-dengan-api.jpg?s=612x612&w=0&k=20&c=piWIvPJMXL4Xef44_QdUTW42UiL7Hul-BH9FKWno6sE="
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div id="carousel-item-3" class="carousel-item duration-700 ease-in-out">
                <img src="https://media.istockphoto.com/id/1187122581/id/foto/berbagai-sate.jpg?s=612x612&w=0&k=20&c=qLa7aNm2ExIzPIcaYpGcK-t8Sr3NN0ltsC1KpZMag-g="
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="Slide 3">
            </div>
            <!-- Item 4 -->
            <div id="carousel-item-4" class="carousel-item duration-700 ease-in-out">
                <img src="https://media.istockphoto.com/id/1187122581/id/foto/berbagai-sate.jpg?s=612x612&w=0&k=20&c=qLa7aNm2ExIzPIcaYpGcK-t8Sr3NN0ltsC1KpZMag-g="
                    class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="Slide 4">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
            <button id="carousel-indicator-1" type="button" class="h-3 w-3 rounded-full bg-white" aria-current="true"
                aria-label="Slide 1"></button>
            <button id="carousel-indicator-2" type="button" class="h-3 w-3 rounded-full bg-white/50"
                aria-current="false" aria-label="Slide 2"></button>
            <button id="carousel-indicator-3" type="button" class="h-3 w-3 rounded-full bg-white/50"
                aria-current="false" aria-label="Slide 3"></button>
            <button id="carousel-indicator-4" type="button" class="h-3 w-3 rounded-full bg-white/50"
                aria-current="false" aria-label="Slide 4"></button>
        </div>
        <!-- Slider controls -->
        <button id="carousel-prev" type="button"
            class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button id="carousel-next" type="button"
            class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none">
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <section class="bg-gray-50">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Daftar Menu
                </h2>

                <p class="hidden text-gray-500 sm:mt-4 sm:block">
                    Silahkan pilih warung terlebih dahulu
                </p>
            </div>

            <div class="mx-auto mt-8 max-w-xl">
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <label for="email" class="sr-only">Email</label>

                        <input type="text" placeholder="Warung"
                            class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-yellow-400" />
                    </div>

                    <button type="submit"
                        class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-gradient-to-r from-orange-600 via-red-600 via-30% via-yellow-500 to-orange-600 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-gray-400 sm:mt-0 sm:w-auto">
                        <span class="text-sm font-medium">Cari </span>
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>

                </form>
            </div>
        </div>
    </section>

    <div
        class="container mb-8 bg-gradient-to-r from-orange-600 via-red-600 via-30% via-yellow-500 to-orange-600 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-4xl mx-auto">
        <a href="#" class="group block">
            <img src="https://media.istockphoto.com/id/1477141756/id/foto/sate-babi-singapura.jpg?s=612x612&w=0&k=20&c=bNmdbVbEnKMOk2i0uV2ncrRYQoUsEH2WAFSnqYFzo-0="
                alt="" class="aspect-square w-full rounded object-cover" />

            <div class="mt-3">
                <h3 class="font-medium text-white group-hover:underline group-hover:underline-offset-4">
                    Satay
                </h3>

                <p class="mt-1 text-sm text-white">Rp. 120.000</p>
            </div>
        </a>
        <a href="#" class="group block">
            <img src="https://media.istockphoto.com/id/1319751711/id/foto/sate-ayam-dengan-saus-kacang-dan-lontong.jpg?s=612x612&w=0&k=20&c=xBjNNN7Qbda5Tyn9nZ3IVWfLPUwldASL-OchXilPYYo="
                alt="" class="aspect-square w-full rounded object-cover" />

            <div class="mt-3">
                <h3 class="font-medium text-white group-hover:underline group-hover:underline-offset-4">
                    Satay
                </h3>

                <p class="mt-1 text-sm text-white">Rp. 120.000</p>
            </div>
        </a>
        <a href="#" class="group block">
            <img src="https://media.istockphoto.com/id/1918855131/id/foto/balinese-satay.jpg?s=612x612&w=0&k=20&c=D1W0-Ymv3akO5TUctbFfR1rKnbrWIT2DrCOE_yVudF8="
                alt="" class="aspect-square w-full rounded object-cover" />

            <div class="mt-3">
                <h3 class="font-medium text-white group-hover:underline group-hover:underline-offset-4">
                    Satay
                </h3>

                <p class="mt-1 text-sm text-white">Rp. 120.000</p>
            </div>
        </a>
        <a href="#" class="group block">
            <img src="https://media.istockphoto.com/id/466489621/id/foto/sate-indonesia.jpg?s=612x612&w=0&k=20&c=uIODIqexf-nVvVXv8Lb9mqaEiwtNvbnr4s9_FNbN1cY="
                alt="" class="aspect-square w-full rounded object-cover" />

            <div class="mt-3">
                <h3 class="font-medium text-white group-hover:underline group-hover:underline-offset-4">
                    Satay
                </h3>

                <p class="mt-1 text-sm text-white">Rp. 120.000</p>
            </div>
        </a>

    </div>



    <footer class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div
                class="flex flex-col items-center gap-4 rounded-lg bg-gradient-to-r from-orange-600 via-red-600 via-30% via-yellow-500 to-orange-600 p-6 shadow-lg sm:flex-row sm:justify-between">
                <strong class="text-xl text-white sm:text-xl">Yukk Buruan Reservasi Sekarang Juga..!!</strong>

                <a class="inline-flex items-center gap-2 rounded-full border border-white bg-white px-8 py-3 text-indigo-600 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:bg-white/90"
                    href="#">
                    <span class="text-sm font-medium"> Reservasi </span>

                    <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Alamat Cabang 1</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                                <div class="p-4">
                                    <!-- Menyematkan iframe Google Maps -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0246645355282!2d109.1861007735648!3d-6.887648967395187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc78a13932239%3A0xb035d60b185a1e3a!2sJl.%20Pengayoman%202%2C%20Babakan%2C%20Kec.%20Kramat%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah%2052181!5e0!3m2!1sid!2sid!4v1716271468139!5m2!1sid!2sid"
                                        width="450" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="bg-gray-100 px-4 py-2">
                                    <p class="text-gray-700 text-sm">Cabang 1</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Alamat Cabang 2</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                                <div class="p-4">
                                    <!-- Menyematkan iframe Google Maps -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0246645355282!2d109.1861007735648!3d-6.887648967395187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc78a13932239%3A0xb035d60b185a1e3a!2sJl.%20Pengayoman%202%2C%20Babakan%2C%20Kec.%20Kramat%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah%2052181!5e0!3m2!1sid!2sid!4v1716271468139!5m2!1sid!2sid"
                                        width="450" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="bg-gray-100 px-4 py-2">
                                    <p class="text-gray-700 text-sm">Cabang 2</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Alamat Cabang 3</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                                <div class="p-4">
                                    <!-- Menyematkan iframe Google Maps -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0246645355282!2d109.1861007735648!3d-6.887648967395187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc78a13932239%3A0xb035d60b185a1e3a!2sJl.%20Pengayoman%202%2C%20Babakan%2C%20Kec.%20Kramat%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah%2052181!5e0!3m2!1sid!2sid!4v1716271468139!5m2!1sid!2sid"
                                        width="450" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="bg-gray-100 px-4 py-2">
                                    <p class="text-gray-700 text-sm">Cabang 3</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="text-center sm:text-left">
                    <p class="text-lg font-medium text-gray-900">Alamat Cabang 4</p>

                    <ul class="mt-8 space-y-4 text-sm">
                        <li>
                            <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                                <div class="p-4">
                                    <!-- Menyematkan iframe Google Maps -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0246645355282!2d109.1861007735648!3d-6.887648967395187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc78a13932239%3A0xb035d60b185a1e3a!2sJl.%20Pengayoman%202%2C%20Babakan%2C%20Kec.%20Kramat%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah%2052181!5e0!3m2!1sid!2sid!4v1716271468139!5m2!1sid!2sid"
                                        width="450" height="150" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="bg-gray-100 px-4 py-2">
                                    <p class="text-gray-700 text-sm">Cabang 1</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="mt-16">
                <ul class="flex justify-center gap-6 sm:justify-end">
                    <li>
                        <a href="#" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" rel="noreferrer" target="_blank"
                            class="text-teal-700 transition hover:text-teal-700/75">
                            <span class="sr-only">Dribbble</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </footer>



    <script>
        const carouselItems = document.querySelectorAll('.carousel-item');
        const indicators = document.querySelectorAll('[id^="carousel-indicator"]');
        let currentIndex = 0;
        const slideInterval = 3000;

        function showSlide(index) {
            carouselItems.forEach((item, i) => {
                item.classList.toggle('active', i === index);
                indicators[i].classList.toggle('bg-white', i === index);
                indicators[i].classList.toggle('bg-white/50', i !== index);
            });
            currentIndex = index;
        }

        function nextSlide() {
            const nextIndex = (currentIndex + 1) % carouselItems.length;
            showSlide(nextIndex);
        }

        function prevSlide() {
            const prevIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showSlide(prevIndex);
        }

        document.getElementById('carousel-next').addEventListener('click', nextSlide);
        document.getElementById('carousel-prev').addEventListener('click', prevSlide);

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
            });
        });

        // Auto slide
        setInterval(nextSlide, slideInterval);
    </script>
</body>

</html>
