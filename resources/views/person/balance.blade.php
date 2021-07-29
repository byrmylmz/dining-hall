
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Balance Ekle
      </h2>
  </x-slot>

<div class="container mt-5 max-w-6xl">
<div class=" mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-2 md:gap-6">
    <div class="mt-5 md:mt-0 md:col-span-2">
     
      <form action="#" method="POST">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              
              <div class="col-span-6 sm:col-span-6">
                <label for="title" class="block  font-semibold text-gray-700">Bakiye</label>
                <input type="text" name="title" id="title" autocomplete="family-name" class="mt-1 hover:ring-1 hover:ring-indigo-500 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

            </div>
          </div>
          <div class="flex justify-between px-4 py-3 bg-gray-50  sm:px-6 ">
            <a href="{{ route('person.index') }}">
              <x-button>Geri</x-button>             
            </a>
            <x-submit-button>Kaydet</x-submit-button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
</div>


</x-app-layout>



