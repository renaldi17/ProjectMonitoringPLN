@extends('layout')

@section('title', 'Layanan Pengadaan Alat Listrik - UP2D Pasundan')
@section('bodyClass', 'bg-white')

@section('content')
    <section class="relative h-96 bg-cover bg-center" style="background-image: url('data:image/svg+xml,%3Csvg width=%22600%22 height=%22400%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cdefs%3E%3ClinearGradient id=%22grad%22 x1=%220%25%22 y1=%220%25%22 x2=%22100%25%22 y2=%22100%25%22%3E%3Cstop offset=%220%25%22 style=%22stop-color:%234F9BD9;stop-opacity:1%22 /%3E%3Cstop offset=%22100%25%22 style=%22stop-color:%231E40AF;stop-opacity:1%22 /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%22600%22 height=%22400%22 fill=%22url(%23grad)%22/%3E%3C/svg%3E');">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-70"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col justify-center">
            <div class="text-white text-sm mb-4">Home / Services</div>
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                <span class="text-white">Layanan Pengadaan</span><br>
                <span class="text-yellow-400">Alat Listrik</span>
            </h1>
            <p class="text-white text-lg max-w-2xl">
                Jelajahi berbagai layanan pengadaan alat listrik yang membantu operasional distribusi PLN lebih efisien.
            </p>
        </div>
    </section>

    <section class="py-20 px-4">
        <div class="container mx-auto">
            <div class="bg-blue-900 rounded-2xl p-6 md:p-12">
                <div class="flex flex-wrap gap-2 mb-8 border-b border-blue-800 justify-center items-center">
                    <button class="px-6 py-3 bg-white text-blue-900 rounded-t-lg active-tab" data-tab="jenis">
                        Jenis Alat
                    </button>
                    <button class="px-6 py-3 text-blue-300 hover:text-white transition rounded-t-lg" data-tab="cara">
                        Cara Kerja Layanan
                    </button>
                </div>

                <!-- Jenis Alat Content -->
                <div id="jenisContent" class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <div class="w-20 h-20 bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-bolt text-white text-3xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Uninterruptible Power Supply</h3>
                            <p class="text-gray-600 text-sm">Alat cadangan daya yang menjaga sistem tetap aktif saat pemadaman, memastikan peralatan penting PLN seperti SCADA dan kontrol distribusi terus berfungsi tanpa gangguan.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <div class="w-20 h-20 bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-plug text-white text-3xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Unit Kabel Bergerak (UKB)</h3>
                            <p class="text-gray-600 text-sm">Peralatan untuk distribusi listrik sementara saat perawatan atau gangguan, membantu menjaga pasokan listrik tetap berjalan dan mempercepat normalisasi jaringan.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <div class="w-20 h-20 bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-magnifying-glass text-white text-3xl"></i>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Deteksi</h3>
                            <p class="text-gray-600 text-sm">Sistem yang mendeteksi gangguan jaringan listrik, seperti korsleting atau anomali beban, melalui sensor dan sistem monitoring seperti SCADA dan FMS.</p>
                        </div>
                    </div>
                </div>

                <!-- Cara Kerja Layanan Content -->
                <div id="caraContent" class="grid md:grid-cols-4 gap-6" style="display: none;">
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <img src="{{ asset('assets/image/placeholder.jpg') }}" alt="Cari Alat" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop'">
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-wrench text-blue-900"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Cari Alat</h3>
                            <p class="text-gray-600 text-sm">Jelajahi daftar alat listrik yang tersedia sesuai kebutuhan Anda melalui website dengan mudah dan cepat.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <img src="{{ asset('assets/image/placeholder.jpg') }}" alt="Isi Formulir" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop'">
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-file-lines text-blue-900"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Isi Formulir</h3>
                            <p class="text-gray-600 text-sm">Masukkan informasi diri dan detail kebutuhan alat agar proses peminjaman dapat diproses dengan tepat.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <img src="{{ asset('assets/image/placeholder.jpg') }}" alt="Verifikasi" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop'">
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-check text-blue-900"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Verifikasi oleh Admin</h3>
                            <p class="text-gray-600 text-sm">Admin akan memeriksa dan mengonfirmasi ketersediaan alat sesuai dengan pengajuan Anda.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl overflow-hidden">
                        <div class="h-48 flex items-center justify-center bg-blue-100">
                            <img src="{{ asset('assets/image/placeholder.jpg') }}" alt="Ambil Alat" class="w-full h-full object-cover" onerror="this.src='https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop'">
                        </div>
                        <div class="p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-truck text-blue-900"></i>
                            </div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Ambil & Gunakan Alat</h3>
                            <p class="text-gray-600 text-sm">Setelah disetujui, alat dapat diambil dan digunakan untuk mendukung operasional lapangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-blue-100">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center items-end h-full">
                    <div class="w-full h-full flex items-end">
                        <img
                            src="{{ asset('assets/omage/Frame CTA Ilustrasi.png') }}"
                            alt="Ilustrasi Ajukan Alat"
                            class="w-96 h-96 object-contain mx-auto block"
                            style="margin-bottom:0;display:block;"
                        />
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">
                        Sudah menemukan alat yang Anda butuhkan?
                    </h2>
                    <a href="{{ route('form') }}" class="inline-flex items-center bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Isi Formulir
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('[data-tab]');
    const jenisContent = document.getElementById('jenisContent');
    const caraContent = document.getElementById('caraContent');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabType = tab.getAttribute('data-tab');

            // Update tab styles
            tabs.forEach(t => {
                t.classList.remove('bg-white', 'text-blue-900', 'active-tab');
                t.classList.add('text-blue-300');
            });
            tab.classList.add('bg-white', 'text-blue-900', 'active-tab');
            tab.classList.remove('text-blue-300');

            // Show/hide content
            if (tabType === 'jenis') {
                jenisContent.style.display = 'grid';
                caraContent.style.display = 'none';
            } else if (tabType === 'cara') {
                jenisContent.style.display = 'none';
                caraContent.style.display = 'grid';
            } else {
                jenisContent.style.display = 'grid';
                caraContent.style.display = 'none';
            }
        });
    });
});
</script>
@endpush

