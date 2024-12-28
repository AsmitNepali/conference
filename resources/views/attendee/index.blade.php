<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                All Attendees
            </h2>
            <div class="flex justify-end">
                <a href="{{route('attendee.create')}}"
                   class="bg-blue-600 text-white hover:bg-blue-700 font-bold py-2 px-4 rounded">
                    Add Attendee
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
