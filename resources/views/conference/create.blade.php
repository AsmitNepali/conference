<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Conference
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white">

                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        @if (session('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                <span class="font-medium">Success!</span> {{ session('success') }}
                            </div>
                        @endif
                        <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new conference</h2>
                        <form action="{{ route('conference.store') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="title"
                                           class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                                    <input type="text" name="title" id="title"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type conference title" required="" value="{{old('title')}}">
                                    @error('title')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="venue"
                                           class="block mb-2 text-sm font-medium text-gray-900 ">Venue</label>
                                    <input type="text" name="venue" id="venue"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type conference venue" required="" value="{{old('venue')}}">
                                    @error('venue')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="start_at" class="block mb-2 text-sm font-medium text-gray-900 ">Start
                                        At</label>
                                    <input type="datetime-local" name="start_at" id="start_at"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           required="" value="{{old('start_at')}}">
                                    @error('start_at')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="end_at" class="block mb-2 text-sm font-medium text-gray-900 ">End
                                        At</label>
                                    <input type="datetime-local" name="end_at" id="end_at"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           required="" value="{{old('end_at')}}">
                                    @error('end_at')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="speaker_name" class="block mb-2 text-sm font-medium text-gray-900 ">Speaker Name</label>
                                    <input type="text" name="speaker_name" id="speaker_name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type speaker name" required="" value="{{old('speaker_name')}}">
                                    @error('speaker_name')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="speaker_email" class="block mb-2 text-sm font-medium text-gray-900 ">Speaker
                                        Email</label>
                                    <input type="email" name="speaker_email" id="speaker_email"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type speaker email" required="" value="{{old('speaker_email')}}">
                                    @error('speaker_email')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="ticket_cost" class="block mb-2 text-sm font-medium text-gray-900 ">Ticket
                                        Cost</label>
                                    <input type="text" name="ticket_cost" id="ticket_cost"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="$2999" required="" value="{{old('ticket_cost')}}">
                                    @error('ticket_cost')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                    <textarea id="description" name="description" rows="8"
                                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                                              placeholder="Your description here">
                                        {{ old('description') }}
                                    </textarea>
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit"
                                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                                Add Conference
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
