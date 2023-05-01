<div class="w-full bg-white overflow-hidden rounded-lg shadow-lg">
    <div class="px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
        <h1 class="font-bold">{{ $title }}</h1>
    </div>

    <div class="w-full overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-white text-gray-700 text-sm">
                    @foreach ($headers as $header)
                        <th class="py-3 px-4 text-left">
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    {{ $slot }}
                </tr>
            </tbody>
        </table>
    </div>
</div>
