@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template" class="text-blue-500">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="text-white mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Pakailah wifi ini. <br class="hidden sm:block">Maka kamu jadi keren.</p>

            
        </div>

        <img src="/assets/img/free.png" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 me-5 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/roket.svg" class="h-15 w-15" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Sangat Cepat </h3>

            <p>Rasakan Internet ngebut tanpa ngelag dengan kecepatan internet up to 50 mbps</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/dsikon.svg" class="h-15 w-15" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Harga Murah </h3>

            <p>Saturnus Home memberikan harga yang murah dibandingkan provider lainnya</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/globe.svg" class="h-15 w-15" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Jangkauan luas </h3>

            <p>Hadir di Seluruh Penjuru Kota Tak perlu khawatir kehilangan koneksi. Jangkauan luas kami memastikan Anda tetap terhubung dengan kecepatan maksimal</p>
        </div>
    </div>
</section>

{{-- Pricing Cards Section --}}
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-blue-900 mb-12">
            Paket Internet
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl mx-auto">
            
        @foreach ($packages as $package)
            {{-- Paket Hemat --}}
            <div class="bg-gray-800 rounded-2xl p-8 border border-gray-700 hover:border-gray-600 transition-all">
                <h2 class="text-2xl font-bold text-white mb-6">{{ $package->name }}</h2>
                
                <div class="mb-6">
                    <span class="text-5xl font-bold text-cyan-400">Rp {{ $package->price }}</span>
                    <span class="text-gray-400">/bulan</span>
                </div>

                <div class="mb-8">
                    <span class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full text-sm font-semibold">
                        Up to {{ $package->speed }} Mbps
                    </span>
                </div>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-start text-gray-300">
                        <svg class="w-5 h-5 text-cyan-400 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Unlimited Kuota</span>
                    </li>
                    <li class="flex items-start text-gray-300">
                        <svg class="w-5 h-5 text-cyan-400 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>{{ $package->description }}</span>
                    </li>
                </ul>

                <button class="w-full bg-gray-700 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                    Pilih Paket
                </button>
            </div> 
             @endforeach    
        </div>
       
    </div>
</section>

@endsection