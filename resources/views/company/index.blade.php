
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Şirketler
      </h2>
  </x-slot>


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col container max-w-6xl  mt-5">
  <div class="flex items-center mb-2">
    <a href="{{ route('company.create') }}">
      <x-button>Şirket Ekle</x-button>    
   </a>  
  </div>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Şirket Sahibi
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Şirket Adı
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Durum
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-500 uppercase tracking-wider">
                Telefon
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($companies as $company)
                
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex flex-col  justify-center h-10 w-10 bg-blue-100 rounded-full text-center">
                    <div class="text-sm text-blue-400 uppercase ">
                      {!! Str::limit($company->name, 2, '') !!}
                    </div>
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $company->owner }}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                  {{ $company->name }}
                </div>
               
              </td>
              <td class="px-6 py-4 whitespace-nowrap">

                @if (($company->status)==='Aktif')
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">              
                    {{ $company->status }}
                  </span>
                @else
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">              
                    {{ $company->status }}
                  </span>
                @endif

              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-sm text-gray-800">
                  {{ $company->mail }}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $company->phone }}
              </td>
              <td class="">
                <div class="flex justify-between pr-5 ">
                  <!-- show  -->
                <!--
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                  </svg>
                </a>
                -->
                <!-- edit -->
                <a href="{{ route('company.edit',$company->id) }}" class="text-indigo-600 hover:text-indigo-900">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>
                </a>
                  <!--delete-->
                  <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-indigo-600 hover:text-indigo-900">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                </form>
               
                  
                </a>
              </div>
              </td>
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



</x-app-layout>



