<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po. Rizky Putra 168 | Booking Bus Pariwisata Online</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    @vite('resources/css/app.css')
    {{-- @vite('resources/css/style.css') --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo_rizky_putra_168.svg') }}">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="flex flex-col h-screen">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full py-4 transition duration-300 bg-transparent h-20 z-50">
        <div class="flex items-center justify-between mx-9">
            <a href="#" class="flex items-center justify-start min-w-48 text-lg font-bold text-white">
                <img src="{{ asset('images/logo_rizky_putra_168.svg') }}" alt="Po. Rizky Putra 168"
                    class="navbar-logo inline-block w-10 h-12 text-white">
                <!-- Logo Teks -->
                <span class="navbar-text hidden">Po. Rizky Putra 168</span>
            </a>
            <ul class="flex-grow flex justify-center items-center">
                <li class="px-2 mr-4"><a href="#" class="text-white hover:text-gray-200 font-bold">Beranda</a></li>
                <li class="px-2"><a href="#" class="text-white hover:text-gray-200 font-bold">Bis</a></li>
                <li class="px-2 mr-4"><a href="#" class="text-white hover:text-gray-200 font-bold">Tentang Kami</a></li>
            </ul>
            <ul class="flex items-center justify-end min-w-48">
                <button type="button" class="navbar-btn px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-700 mx-1"
                    onclick="location.href='{{ route('chatbot') }}'">Masuk</button>
                <button type="button" class="navbar-btn px-4 py-2 font-bold text-white bg-blue-600 rounded hover:bg-blue-700 mx-1"
                    onclick="location.href='{{ route('chatbot') }}'">Daftar</button>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="w-screen min-h-screen z-10">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/bgimg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl font-bold text-white mb-6">Perjalanan Nyaman,<br>Momen Tak Terlupakan</h1>
                <p class="text-xl text-white mb-8">Dapatkan pengalaman perjalanan terbaik dengan armada bus modern kami</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="w-screen min-h-fit bg-gradient-to-b from-blue-50 to-white py-20">
        <div class="container mx-auto px-4">
            <h2 data-aos="fade-up" class="text-4xl font-bold text-center text-blue-600 mb-16">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 place-items-center mt-16">
                <!-- Interactive Feature Card -->
                <div class="feature-card group w-full max-w-sm bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div data-aos="fade-up" class="card-content">
                        <div class="icon-wrapper w-16 h-16 mx-auto mb-6 bg-blue-600 rounded-full flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4 group-hover:text-blue-600 transition-colors">Aman dan Terpercaya</h3>
                        <p class="text-gray-600 text-center transform group-hover:scale-105 transition-transform">Perjalanan Anda adalah prioritas keamanan kami</p>
                    </div>
                </div>
                <div class="feature-card group w-full max-w-sm bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div data-aos="fade-up" class="card-content">
                        <div class="icon-wrapper w-16 h-16 mx-auto mb-6 bg-blue-600 rounded-full flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4 group-hover:text-blue-600 transition-colors">Cepat dan Efisien</h3>
                        <p class="text-gray-600 text-center transform group-hover:scale-105 transition-transform">Kami membantu Anda mencari bus pariwisata dengan cepat dan efisien</p>
                    </div>
                </div>
                <div class="feature-card group w-full max-w-sm bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                    <div data-aos="fade-up" class="card-content">
                        <div class="icon-wrapper w-16 h-16 mx-auto mb-6 bg-blue-600 rounded-full flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-shield-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4 group-hover:text-blue-600 transition-colors">Harga Yang Kompetitif</h3>
                        <p class="text-gray-600 text-center transform group-hover:scale-105 transition-transform">Kami menawarkan harga terbaik untuk perjalanan pariwisata anda</p>
                    </div>
                </div>
                <!-- Add 2 more similar feature cards -->
            </div>
        </div>
    </section>

    <!-- Interactive Bus Showcase -->
    <section class="w-screen min-h-fit bg-gray-900 py-20 overflow-hidden">
        <div id="interactive-bg" class="absolute inset-0"></div>
        <div class="container mx-auto px-4 z-10">
            <h2 data-aos="fade-up" class="text-4xl font-bold text-center text-white mb-16">Armada Kami</h2>
            <div class="flex justify-center items-center mt-16">
                <!-- Interactive Bus Card -->
                <div data-aos="fade-up" class="bus-card w-full max-w-sm bg-white rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                    <div class="relative overflow-hidden group">
                        <img src="{{ asset('images/bus1.jpg') }}" alt="Bus" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                            <p class="text-white font-semibold">Lihat Detail</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Big Bus Executive</h3>
                        <p class="text-gray-600">Kapasitas 50 orang dengan fasilitas lengkap</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-blue-600 font-bold">Rp. 2.500.000/hari</span>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="w-screen min-h-screen bg-gray-50 py-20">
        <div class="container mx-auto px-4">
            <h2 data-aos="fade-up" class="text-4xl font-bold text-center text-blue-600 mb-16">Apa Kata Mereka?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Testimonial Card -->
                <div data-aos="fade-up" class="testimonial-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/avatar1.jpg') }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold">John Doe</h4>
                            <p class="text-gray-600 text-sm">Jakarta</p>
                        </div>
                    </div>
                    <p class="text-gray-700">"Pelayanan sangat memuaskan, bus nyaman dan tepat waktu."</p>
                    <div class="mt-4 flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <!-- Add more testimonial cards -->
            </div>
        </div>
    </section>

    <!-- Dynamic CTA Section Variants -->
    <!-- Variant 1: Split Content -->
    {{-- <section class="w-screen min-h-[50vh] bg-blue-600 py-20">
        <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
            <div class="text-white">
                <h2 class="text-4xl font-bold mb-4">Mulai Perjalanan Anda</h2>
                <p class="text-xl mb-8">Dapatkan pengalaman perjalanan terbaik bersama kami</p>
            </div>
            <div class="flex justify-center md:justify-end">
                <button class="px-8 py-4 bg-white text-blue-600 rounded-full font-bold hover:scale-105 transition">
                    Booking Sekarang
                </button>
            </div>
        </div>
    </section> --}}

    <!-- Variant 2: Centered with Background Pattern -->
    <section class="w-screen min-h-[50vh] bg-blue-600 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 data-aos="fade-up" class="text-4xl font-bold text-white mb-8">Siap Untuk Perjalanan?</h2>
            <p data-aos="fade-up" class="text-xl text-white mb-12 max-w-2xl mx-auto">Booking sekarang dan dapatkan pengalaman perjalanan tak terlupakan</p>
            <div class="flex gap-4 justify-center">
                <button data-aos="fade-right" class="px-8 py-4 bg-white text-blue-600 rounded-full font-bold hover:scale-105 transition">
                    Booking Sekarang
                </button>
                <button data-aos="fade-left" class="px-8 py-4 border-2 border-white text-white rounded-full font-bold hover:bg-white hover:text-blue-600 transition">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-gray-200">
        <div class="container p-4 mx-auto">
            <p class="text-gray-600">copyright {{ date('Y') }} Po. Rizky Putra 168. All rights reserved.</p>
        </div>
    </footer>

    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
