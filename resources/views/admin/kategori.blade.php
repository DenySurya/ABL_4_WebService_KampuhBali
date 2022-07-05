<x-admin-layout>
@section('kategori','active-nav-link')

<h1 class="w-full text-3xl text-black pb-6">Kategori</h1>
<?php $no = 1?>

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
                                                Nama Kategori
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    
                                        @foreach($datakategori as $kategori)
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
                                                <div class="text-sm text-gray-900"> {{$kategori->nama}}</div>
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