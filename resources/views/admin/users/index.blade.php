<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-900 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h1 class="text-4xl font-extrabold text-gray-800 mb-6 border-b pb-3">All Users</h1>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse table-auto">
                        <thead class="bg-gray-100 border-b border-gray-300">
                            <tr>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">ID</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Name</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Phone Number</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Address</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Comment</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Date</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Time</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Number of People
                                </th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Is Admin</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Created At</th>
                                <th class="text-left text-sm font-semibold text-gray-700 px-4 py-3">Updated At</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->id }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">{{ $user->full_name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->phone_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->branche }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->comment }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->booking_date }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">{{ $user->booking_time }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">
                                        {{ $user->number_of_people }}</td>
                                    <td class="px-4 py-3 text-sm whitespace-nowrap">
                                        @if ($user->is_admin)
                                            <span
                                                class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Yes</span>
                                        @else
                                            <span
                                                class="inline-block px-2 py-1 text-xs font-semibold text-red-800 bg-red-200 rounded-full">No</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">
                                        {{ $user->created_at->format('Y-m-d') }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 whitespace-nowrap">
                                        {{ $user->updated_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Optional pagination --}}
                <div class="mt-6">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>