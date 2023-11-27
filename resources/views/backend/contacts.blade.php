<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto shadow-lg bg-white w-full text-sm">
                    <thead>
                        <tr>
                            <th class="border-b  font-medium px-4 py-4 text-left">Name</th>
                            <th class="border-b  font-medium px-4 py-4 text-left">Phone Number</th>
                            <th class="border-b  font-medium px-4 py-4 text-left">Description</th>
                            <th class="border-b  font-medium px-4 py-4 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="border-b px-4 py-4 ">{{ $contact->name }}</td>
                                <td class="border-b px-4 py-4 ">{{ $contact->phone_number }}</td>
                                <td class="border-b px-4 py-4 ">{{ $contact->description }}</td>
                                <td class="border-b px-4 py-4 ">{{ $contact->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
