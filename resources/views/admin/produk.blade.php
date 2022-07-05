
<x-admin-layout>
@section('produk','active-nav-link')

<h1 class="w-full text-3xl text-black pb-6">Produk</h1>
<!-- <div class="flex flex-wrap">
    <div class="w-full lg:w-full my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Contact Form
        </p>
        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
        <div class="leading-loose">
        <table class="table-fixed ">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1?>
                @foreach($data as $product)
                <tr>
                <td>{{ $no}}</td>
                <td>{{ $product->nama}}</td>
                <td>{{ $product->id_kategori}}</td>
                <td>{{ $product->deskripsi}}</td>
                <td>{{ $product->harga}}</td>
                <td>{{ $product->stok}}</td>
                <td>{{ $product->gambar}}</td>
                <td>
                    <form action=""></form>
                </td>
                </tr>
               
                @endforeach
            </tbody>
            </table>
        </div>
    </div>


</div> -->


<div class="flex flex-col">
<div class="pb-5">
                            <a href="tambahproduk" class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded ">
                                                    Tambah Data
</a>
                            </div>
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-lg">
                          
                                <table class=" min-w-full divide-y divide-gray-400 pt-20 ">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                No
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nama
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Kategori
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Deskripsi
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Harga
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Stok
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Gambar
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    
                                        @foreach($data as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="">

                                                        <div class="text-sm font-medium text-gray-900 text-center">
                                                            {{$no}}
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"> {{$product->nama}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"> {{$product->id_kategori}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 text-justify">{{ $product ->deskripsi}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 text-justify">{{$product ->harga}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 text-justify">{{ $product->stok}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 text-justify">{{ $product ->gambar}}
                                                </div>
                                            </td>
                                            <td class="px-6 block py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button wire:click="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded ">
                                                    Edit
                                                </button>
                                                <button wire:click="#" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded ">
                                                    Delete
                                                </button>

                                            </td>

                                        </tr>
                                        <?php $no++; ?>
                                        @endforeach

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</x-admin-layout>