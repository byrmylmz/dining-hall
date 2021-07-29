
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Kişi Ekle
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
              
              <div class="col-span-6 sm:col-span-3">
                <label for="name" class="block  font-semibold text-gray-700">İsim Soyisim</label>
                <input type="text" name="name" id="name" autocomplete="given-name" class="hover:ring-1 hover:ring-indigo-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              
              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block  font-semibold text-gray-700">Email Adres</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class=" hover:ring-1 hover:ring-indigo-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="phone" class="block  font-semibold text-gray-700">Telefon</label>
                <input type="text" name="phone" id="phone" autocomplete="phone" class="hover:ring-1 hover:ring-indigo-500 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              
              
              <div class="col-span-6 sm:col-span-3">
                <label for="status" class="block  font-semibold text-gray-700">Durum</label>
                <select id="status" name="status" autocomplete="status" class="hover:ring-1 hover:ring-indigo-500 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Aktif</option>
                  <option>Pasif</option>
                </select>
              </div>
              
              
              <div class="col-span-6 sm:col-span-3">
                <label for="company" class="block  font-semibold text-gray-700">Şirket</label>
                <select id="company" name="company" autocomplete="company" class="hover:ring-1 hover:ring-indigo-500 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Limak</option>
                  <option>Cengiz</option>
                  <option>Kolin</option>
                </select>
              </div>
              
              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block  font-semibold text-gray-700">Pozisyon</label>
                <input type="text" name="title" id="title" autocomplete="family-name" class="mt-1 hover:ring-1 hover:ring-indigo-500 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block  font-semibold text-gray-700">Kart Id</label>
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



