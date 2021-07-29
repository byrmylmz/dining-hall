
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Kişiler
      </h2>
  </x-slot>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col container max-w-6xl  mt-5">
  <div class="flex items-center mb-2">
    <a href="{{ route('person.create') }}">
      <x-button>Kişi Ekle</x-button>   
     </a>  
  </div>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                İSİM
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                ŞİRKET
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                POZİSYON
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                DURUM
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                EMAIL
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Kart Id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                BAKIYE
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      Jane Cooper
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
              
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class=" text-sm text-gray-900">
                  Developer
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-sm text-gray-900">
                  janecooper@gmail.com
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-sm text-gray-900">
                  102585
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap ">
                <span class="text-sm text-gray-900">
                  50
                </span>
              </td>
              <td class="">
                <div class="flex   ">
                  <!-- add balance  -->
                  <a href="{{ route('person.balance') }}" class=" text-indigo-600 hover:text-indigo-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  hover:text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </a>
                  <!-- edit -->
                  <a href="{{ route('person.create') }}" class=" text-indigo-600 hover:text-indigo-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                  </a>
                    <!--delete-->
                  <a href="#" class=" text-indigo-600 hover:text-indigo-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </a>
              </div>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



</x-app-layout>



