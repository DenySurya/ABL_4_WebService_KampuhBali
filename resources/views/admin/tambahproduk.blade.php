
<x-admin-layout>
@section('produk','active-nav-link')

<h1 class="w-full text-3xl text-black pb-6">Tambah Data Produk</h1>

            <?php $no = 1?>



<div class="flex flex-col">

                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-lg">
                                <h1 class="text-center mb-4"></h1>
                               
                                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <form action="/tambahdata" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div>
            <div class="mb-2">

              <input wire:model="postid" type="hidden" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Nama">
            </div>
            <div class="mb-2">
              <label for="title" class="block">Nama </label>
              <input wire:model="nama" name="nama" type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Nama">
              <div class="mb-2">
              <label for="title" class="block">Id_kategori </label>
              <input wire:model="id_kategori" name="id_kategori" type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input id_kategori">
              <div class="mb-2">
              <div class="mb-2">
                <label for="title" class="block">Deskripsi</label>
                <textarea wire:model="deskripsi" name:"deskripsi" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Deskripsi"></textarea>

              </div>
              <label for="title" class="block">Harga </label>
              <input wire:model="harga" name="harga" type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Harga">
              <div class="mb-2">
              <label for="title" class="block">Stok </label>
              <input wire:model="stok" name="stok" type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Stok">
              <div class="mb-2">
              <label for="title" class="block">Gambar </label>
              <input wire:model="gambar" name="gambar" type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Gambar">


        
            </div>


            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <button wire:click.prevent="tambahdata()" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                Submit
              </button>
              <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
              </button>
            </div>
      </form>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
</x-admin-layout>