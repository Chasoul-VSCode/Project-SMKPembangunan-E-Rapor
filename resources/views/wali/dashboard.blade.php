@extends('wali.layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-4 sm:p-6">
    <div class="border-b pb-4 mb-4">
        <h1 class="text-xl sm:text-2xl font-bold text-gray-800">Dashboard Wali Kelas</h1>
        <p class="text-sm sm:text-base text-gray-600">Selamat datang di sistem E-Rapor SMK Pembangunan Bogor</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <!-- Card Kelas dan Tahun Ajaran -->
        <div class="bg-blue-50 rounded-xl p-4 sm:p-6 shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 sm:p-3 bg-blue-100 rounded-lg">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <span class="text-2xl sm:text-3xl font-bold text-blue-600">X RPL 1</span>
                    <p class="text-xs sm:text-sm text-blue-500 mt-1">2023/2024</p>
                </div>
            </div>
            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Kelas yang Diampu</h3>
            <p class="text-sm text-gray-600 mt-1">Semester Ganjil</p>
        </div>

        <!-- Card Jumlah Siswa -->
        <div class="bg-green-50 rounded-xl p-4 sm:p-6 shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 sm:p-3 bg-green-100 rounded-lg">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <span class="text-2xl sm:text-3xl font-bold text-green-600">36</span>
                    <p class="text-xs sm:text-sm text-green-500 mt-1">Siswa</p>
                </div>
            </div>
            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Jumlah Siswa</h3>
            <p class="text-sm text-gray-600 mt-1">Laki-laki: 20 | Perempuan: 16</p>
        </div>

        <!-- Card Mata Pelajaran -->
        <div class="bg-purple-50 rounded-xl p-4 sm:p-6 shadow-md">
            <div class="flex items-center justify-between mb-4">
                <div class="p-2 sm:p-3 bg-purple-100 rounded-lg">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="text-right">
                    <span class="text-2xl sm:text-3xl font-bold text-purple-600">12</span>
                    <p class="text-xs sm:text-sm text-purple-500 mt-1">Mata Pelajaran</p>
                </div>
            </div>
            <h3 class="text-base sm:text-lg font-semibold text-gray-800">Mata Pelajaran</h3>
            <p class="text-sm text-gray-600 mt-1">Semester ini</p>
        </div>
    </div>

    <!-- Tabel Daftar Siswa -->
    <div class="mt-6 sm:mt-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 space-y-4 sm:space-y-0">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Daftar Siswa</h2>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full sm:w-auto">
                <button class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                    Nilai Siswa
                </button>
                <button class="w-full sm:w-auto px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm">
                    Cetak Rapor
                </button>
            </div>
        </div>
        
        <div class="bg-white rounded-lg border overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 sm:px-6 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">1</td>
                        <td class="px-4 sm:px-6 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-900">2024001</td>
                        <td class="px-4 sm:px-6 py-3 whitespace-nowrap text-xs sm:text-sm text-gray-900">Ahmad Fauzi</td>
                        <td class="px-4 sm:px-6 py-3 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Sudah Dicetak
                            </span>
                        </td>
                        <td class="px-4 sm:px-6 py-3 whitespace-nowrap text-xs sm:text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900">Detail</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection