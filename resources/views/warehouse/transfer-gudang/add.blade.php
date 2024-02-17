@extends('template.main')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-4 px-4">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Transfer Gudang</h2>
                <form action="{{ route('warehouse.transfer-gudang.tambah') }}" method="post">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="brand" class="flex items-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Bukti <div class="m-2 h-2.5 w-2.5 rounded-full bg-red-600 me-2"></div></label>
                            <input type="text" name="no_bukti" value="{{ $no_bukti }}" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Gudang" required="">
                        </div>
                        <div class="w-full">
                            <label for="brand" class="flex items-center block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Transfer <div class="m-2 h-2.5 w-2.5 rounded-full bg-red-600 me-2"></div></label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input datepicker datepicker-format="yyyy/mm/dd" id="datepicker" type="text" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
                            </div>


                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gudang Asal</label>
                            <select id="gudangAsal" name="gudang_asal_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Gudang</option>
                                @foreach($gudang as $wh)
                                <option value="{{ $wh->id }}">{{ $wh->nama_gudang }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gudang Tujuan</label>
                            <select id="gudangTujuan" name="gudang_tujuan_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Gudang</option>
                                @foreach($gudang as $wh)
                                <option value="{{ $wh->id }}">{{ $wh->nama_gudang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-2">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="description" name="keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keterangan"></textarea>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                    <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                        <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                            Update stocks 1/250
                                        </button>
                                        <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                            </svg>
                                            Export
                                        </button>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table id="barang-table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            
                                            <th scope="col" class="px-4 py-3">No</th>
                                            <th scope="col" class="px-4 py-3">Nama Barang</th>
                                            <th scope="col" class="px-4 py-3">Qty</th>
                                            <th scope="col" class="px-4 py-3">Satuan</th>
                                            <th scope="col" class="px-4 py-3">Jenis</th>
                                            <th scope="col" class="px-4 py-3">Keterangan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Data barang akan dimasukkan di sini menggunakan JavaScript -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                                <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                  Showing
                  <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                  of
                  <span class="font-semibold text-gray-900 dark:text-white">1000</span>
              </span>
                                    <ul class="inline-flex items-stretch -space-x-px">
                                        <li>
                                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only">Previous</span>
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only">Next</span>
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit" class=" text-green-500 inline-flex items-center hover:text-white border border-green-500 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-500 dark:focus:ring-green-500">
                                Simpan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">

        </section>

    </div>





@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var gudangAsal = document.getElementById('gudangAsal');
        var gudangTujuan = document.getElementById('gudangTujuan');

        gudangAsal.addEventListener('change', function() {
            var selected = this.value;
            var options = gudangTujuan.options;
            for (var i = 0; i < options.length; i++) {
                var option = options[i];
                if (option.value === selected) {
                    option.style.display = 'none'; // Menyembunyikan opsi gudang tujuan yang dipilih sebagai gudang asal
                } else {
                    option.style.display = ''; // Mengembalikan opsi gudang tujuan yang tidak dipilih sebagai gudang asal
                }
            }
            if (selected == gudangTujuan.value) {
                gudangTujuan.value = '';
            }
        });
    });

</script>


<script>
// Temukan elemen gudang asal
const gudangAsalSelect = document.getElementById('gudangAsal');

// Tambahkan event listener untuk mendeteksi perubahan gudang asal
gudangAsalSelect.addEventListener('change', async function() {
    // Ambil nilai gudang asal yang dipilih
    const selectedGudangAsalId = this.value;

    // Lakukan permintaan AJAX ke server untuk mendapatkan daftar barang
    const response = await fetch(`/transfer-gudang/getBarang/${selectedGudangAsalId}`);
    const data = await response.json();

    // Dapatkan elemen tbody dari tabel
    const tbody = document.querySelector('#barang-table tbody');

    // Bersihkan isi tbody
    tbody.innerHTML = '';

    // Iterasi melalui data barang dan tambahkan ke dalam tabel
    data.forEach((barang, index) => {
        const row = `<tr>
                        <td class="p-4">
                            <div class="flex items-center">
                                <input type="checkbox" name="barang_ids[]" value="${barang.id}" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </td>
                        <td class="px-4 py-3">${index + 1}</td>
                        <td class="px-4 py-3">${barang.nama_barang}</td>
                        <td class="px-4 py-3">${barang.stock}</td>
                        <td class="px-4 py-3">${barang.satuan}</td>
                        <td class="px-4 py-3">${barang.jenis_barang}</td>
                        <td class="px-4 py-3">${barang.keterangan}</td>
                    </tr>`;
        tbody.insertAdjacentHTML('beforeend', row);
    });
});

</script>





@endsection
