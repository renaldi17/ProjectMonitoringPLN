@extends('layout')

@section('title', 'Pengisian Form - UP2D Pasundan')
@section('bodyClass', 'bg-gray-50')

@section('content')
    <section class="relative h-64 md:h-80 bg-cover bg-center" style="background-image: url('data:image/svg+xml,%3Csvg width=%22600%22 height=%22400%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cdefs%3E%3ClinearGradient id=%22grad%22 x1=%220%25%22 y1=%220%25%22 x2=%22100%25%22 y2=%22100%25%22%3E%3Cstop offset=%220%25%22 style=%22stop-color:%234F9BD9;stop-opacity:1%22 /%3E%3Cstop offset=%22100%25%22 style=%22stop-color:%231E40AF;stop-opacity:1%22 /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=%22600%22 height=%22400%22 fill=%22url(%23grad)%22/%3E%3C/svg%3E');">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-80"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col justify-center">
            <div class="text-white text-sm mb-2">Home / Form</div>
            <h1 class="text-4xl md:text-6xl font-bold">
                <span class="text-white">Pengisian</span>
                <span class="text-yellow-400"> Form</span>
            </h1>
        </div>
    </section>

    <section class="py-12 px-4 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-wrap gap-2 mb-6">
                <button class="px-6 py-3 bg-blue-900 text-white font-semibold rounded-t-lg" id="peminjamanTab" onclick="showForm('peminjaman')">
                    Form Peminjaman
                </button>
                <button class="px-6 py-3 bg-gray-300 text-gray-700 font-semibold rounded-t-lg" id="pelaporanTab" onclick="showForm('pelaporan')">
                    Form Pelaporan
                </button>
            </div>

            <!-- Peminjaman Form - UPS (Default) -->
            <div id="peminjamanForm" class="bg-white rounded-lg shadow-lg p-6 md:p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Form Peminjaman</h2>
                <form class="space-y-6" id="peminjamanFormContent">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nama</label>
                            <input type="text" placeholder="Isi Nama" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email or No. Telepon</label>
                            <input type="text" placeholder="xxx@gmail.com/08xxxx" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Unit</label>
                            <select id="peminjamanUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" onchange="changePeminjamanUnit(this.value)">
                                <option value="">Pilih Unit</option>
                                <option value="UPS">UPS</option>
                                <option value="UKB">UKB</option>
                                <option value="Deteksi">Deteksi</option>
                            </select>
                        </div>
                        <div id="peminjamanJenisKapasitas">
                            <label class="block text-gray-700 font-medium mb-2">Jenis dan Kapasitas</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                <option>Pilih Jenis - Kapasitas</option>
                                <option>Mobile - 250 KVA</option>
                                <option>Portable - 110 KVA</option>
                                <option>Portable - 30 KVA</option>
                            </select>
                        </div>
                    </div>
                    <div id="peminjamanMerkNopol">
                        <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UPS</label>
                        <input type="text" placeholder="Merk UPS - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Lokasi Penggunaan</label>
                            <input type="text" placeholder="Isi Lokasi Penggunaan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Tanggal Mobilisasi</label>
                            <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Tujuan Penggunaan / Kegiatan</label>
                        <textarea rows="4" placeholder="Tujuan Penggunaan / Kegiatan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"></textarea>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Tanggal Demobilisasi</label>
                            <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Posko Pelaksana</label>
                            <input type="text" placeholder="Isi Posko Pelaksana" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">UP3</label>
                        <input type="text" placeholder="Isi UP3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <button type="submit" class="w-full md:w-auto bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Submit Form
                    </button>
                </form>
            </div>

            <!-- Pelaporan Form - UPS (Default) -->
            <div id="pelaporanForm" class="hidden bg-white rounded-lg shadow-lg p-6 md:p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Form Pelaporan</h2>
                <form class="space-y-6" id="pelaporanFormContent">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nama Pelapor</label>
                            <input type="text" placeholder="Isi Nama" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Unit</label>
                            <select id="pelaporanUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" onchange="changePelaporanUnit(this.value)">
                                <option value="">Pilih Unit</option>
                                <option value="UPS">UPS</option>
                                <option value="UKB">UKB</option>
                                <option value="Deteksi">Deteksi</option>
                            </select>
                        </div>
                    </div>
                    <div id="pelaporanJenisKapasitas">
                        <label class="block text-gray-700 font-medium mb-2">Jenis dan Kapasitas</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                            <option>Pilih Jenis - Kapasitas</option>
                            <option>Mobile - 250 KVA</option>
                            <option>Portable - 110 KVA</option>
                            <option>Portable - 30 KVA</option>
                        </select>
                    </div>
                    <div id="pelaporanMerkNopol">
                        <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UPS</label>
                        <input type="text" placeholder="Merk UPS - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Kondisi</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                <option>Pilih Kondisi</option>
                                <option>Baik</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Tanggal Kejadian</label>
                            <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Lokasi Penggunaan</label>
                        <input type="text" placeholder="Isi Lokasi Penggunaan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">No. BA</label>
                        <input type="text" placeholder="Isi No. BA" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Posko Pelaksana</label>
                            <input type="text" placeholder="Isi Posko Pelaksana" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">UP3</label>
                            <input type="text" placeholder="Isi UP3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Keterangan</label>
                        <textarea rows="3" placeholder="Isi Keterangan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent"></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Keperluan Anggaran</label>
                        <input type="text" placeholder="Rp 0,00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Bukti Foto</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                            <button type="button" class="bg-gray-200 px-4 py-2 rounded-lg mb-2">Upload File</button>
                            <p class="text-sm text-gray-500">File.jpg</p>
                        </div>
                    </div>
                    <button type="submit" class="w-full md:w-auto bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Submit Form
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
function showForm(formType) {
    const peminjamanForm = document.getElementById('peminjamanForm');
    const pelaporanForm = document.getElementById('pelaporanForm');
    const peminjamanTab = document.getElementById('peminjamanTab');
    const pelaporanTab = document.getElementById('pelaporanTab');

    if (formType === 'peminjaman') {
        peminjamanForm.classList.remove('hidden');
        pelaporanForm.classList.add('hidden');
        peminjamanTab.classList.remove('bg-gray-300', 'text-gray-700');
        peminjamanTab.classList.add('bg-blue-900', 'text-white');
        pelaporanTab.classList.remove('bg-blue-900', 'text-white');
        pelaporanTab.classList.add('bg-gray-300', 'text-gray-700');
    } else {
        peminjamanForm.classList.add('hidden');
        pelaporanForm.classList.remove('hidden');
        pelaporanTab.classList.remove('bg-gray-300', 'text-gray-700');
        pelaporanTab.classList.add('bg-blue-900', 'text-white');
        peminjamanTab.classList.remove('bg-blue-900', 'text-white');
        peminjamanTab.classList.add('bg-gray-300', 'text-gray-700');
    }
}

function changePeminjamanUnit(unit) {
    const formContent = document.getElementById('peminjamanFormContent');
    const jenisKapasitas = document.getElementById('peminjamanJenisKapasitas');
    const merkNopol = document.getElementById('peminjamanMerkNopol');

    if (unit === 'UKB') {
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Type dan Panjang Kabel</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Type - Panjang</option>
                <option>95 mm - 4 x 75</option>
                <option>1C x 60SQMM - 6 x 200</option>
                <option>150 mm - 4 x 50</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UKB</label>
            <input type="text" placeholder="Merk UKB - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;

        // Add Jenis & Volume UKB field
        if (!document.getElementById('peminjamanJenisVolume')) {
            const jenisVolume = document.createElement('div');
            jenisVolume.id = 'peminjamanJenisVolume';
            jenisVolume.className = 'mt-6';
            jenisVolume.innerHTML = `
                <label class="block text-gray-700 font-medium mb-2">Jenis dan Volume UKB</label>
                <input type="text" placeholder="Jenis - Volume" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
            `;
            merkNopol.after(jenisVolume);
        }
    } else if (unit === 'Deteksi') {
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Fitur dan Type Deteksi</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Fitur - Type</option>
                <option>Assesment & Deteksi - Mobil</option>
                <option>Deteksi - Mobil</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol Deteksi</label>
            <input type="text" placeholder="Merk Unit - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;
        const jenisVolume = document.getElementById('peminjamanJenisVolume');
        if (jenisVolume) jenisVolume.remove();
    } else {
        // UPS (default)
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Jenis dan Kapasitas</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Jenis - Kapasitas</option>
                <option>Mobile - 250 KVA</option>
                <option>Portable - 110 KVA</option>
                <option>Portable - 30 KVA</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UPS</label>
            <input type="text" placeholder="Merk UPS - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;
        const jenisVolume = document.getElementById('peminjamanJenisVolume');
        if (jenisVolume) jenisVolume.remove();
    }
}

function changePelaporanUnit(unit) {
    const jenisKapasitas = document.getElementById('pelaporanJenisKapasitas');
    const merkNopol = document.getElementById('pelaporanMerkNopol');

    if (unit === 'UKB') {
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Type dan Panjang Kabel</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Type - Panjang</option>
                <option>95 mm - 4 x 75</option>
                <option>1C x 60SQMM - 6 x 200</option>
                <option>150 mm - 4 x 50</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UKB</label>
            <input type="text" placeholder="Merk UKB - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;

        // Add Jenis & Volume UKB field
        if (!document.getElementById('pelaporanJenisVolume')) {
            const jenisVolume = document.createElement('div');
            jenisVolume.id = 'pelaporanJenisVolume';
            jenisVolume.className = 'mt-6';
            jenisVolume.innerHTML = `
                <label class="block text-gray-700 font-medium mb-2">Jenis dan Volume Kabel</label>
                <input type="text" placeholder="Jenis - Volume" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
            `;
            merkNopol.after(jenisVolume);
        }
    } else if (unit === 'Deteksi') {
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Fitur dan Type Deteksi</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Fitur - Type</option>
                <option>Assesment & Deteksi - Mobil</option>
                <option>Deteksi - Mobil</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol Deteksi</label>
            <input type="text" placeholder="Merk UKB - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;
        const jenisVolume = document.getElementById('pelaporanJenisVolume');
        if (jenisVolume) jenisVolume.remove();
    } else {
        // UPS (default)
        jenisKapasitas.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Jenis dan Kapasitas</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                <option>Pilih Jenis - Kapasitas</option>
                <option>Mobile - 250 KVA</option>
                <option>Portable - 110 KVA</option>
                <option>Portable - 30 KVA</option>
            </select>
        `;
        merkNopol.innerHTML = `
            <label class="block text-gray-700 font-medium mb-2">Merk dan Nopol UPS</label>
            <input type="text" placeholder="Merk UPS - NOPOL" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent">
        `;
        const jenisVolume = document.getElementById('pelaporanJenisVolume');
        if (jenisVolume) jenisVolume.remove();
    }
}
</script>
@endpush
