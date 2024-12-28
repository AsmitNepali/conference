<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Conferences
            </h2>
            <div class="flex justify-end">
                <a href="{{route('conference.create')}}"
                   class="bg-blue-600 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                    Add Conference
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    <span class="font-medium">Success!</span> {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Conference title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Venue
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Speaker Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Speaker Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start At
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End At
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ticket Cost
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only"></span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($conferences as $conference)
                            <tr class="bg-white border-b hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $conference->title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $conference->venue }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $conference->speaker_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $conference->speaker_email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $conference->start_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $conference->end_at }}
                                </td>
                                <td class="px-6 py-4">
                                    ${{ $conference->ticket_cost }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{route('conference.edit', $conference->id)}}"
                                       class="font-medium text-indigo-600  hover:underline">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <form action="{{ route('conference.destroy', $conference->id) }}"
                                          method="POST" onsubmit="return confirmCancel()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="font-medium text-red-600  hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
