<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Attendee
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
                        <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add a new Attendee</h2>
                        <form action="{{ route('attendee.store') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="title"
                                           class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                    <input type="text" name="name" id="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type attendee name"  value="{{old('name')}}">
                                    @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="email"
                                           class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                    <input type="email" name="email" id="email"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="Type attendee email"  value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="phone"
                                           class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
                                    <input type="text" name="phone" id="phone"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                           placeholder="+910000000000"  value="{{old('phone')}}">
                                    @error('phone')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="conference" class="block mb-2 text-sm font-medium text-gray-900 ">Conference</label>
                                    <select id="conference" name="conference"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected="" value="">Select conference</option>
                                        @foreach($conferences as $conferences)
                                            <option value="{{ $conferences->id }}">{{ $conferences->title }} - <span>${{ $conferences->ticket_cost }}</span></option>
                                        @endforeach
                                    </select>
                                    @error('conference')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value=""
                                           name="is_paid"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900">Is
                                        Paid</label>
                                </div>
                            </div>
                            <button type="submit"
                                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                                Add Attendee
                            </button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
