<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Setting') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if (session('status'))
            <div class="px-4 text-green-800">
                {{ session('status') }}
            </div>
            @endif
            <table class="table-auto shadow-lg bg-white w-full text-sm">
              <thead>
                  <tr>
                      <th class="border-b  font-medium px-4 py-4 text-left">Key</th>
                      <th class="border-b  font-medium px-4 py-4 text-left">Name</th>

                      <th class="border-b  font-medium px-4 py-4 text-left">#</th>
                  </tr>
              </thead>
              <tbody class="bg-white">
                  @foreach ($settings as $setting)
                      <tr>
                          <td class="border-b px-4 py-4 ">{{ $setting->key }}</td>
                          <td class="border-b px-4 py-4 ">{{ $setting->name }}</td>
                          <td class="border-b px-4 py-4 w-20">
                            <a href="/dashboard/settings/{{$setting->id}}/edit"><i class="fa fa-edit cursor-pointer"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          </div>
      </div>
  </div>
</x-app-layout>
