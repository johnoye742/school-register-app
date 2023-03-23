<div class="bg-white mt-5 rounded-lg shadow-lg lg:overflow-hidden w-full">
    <table class="table-auto p-5 rounded-t-lg w-full">
        <thead class="bg-gray-200 rounded-t-lg">
            <tr>
                <th class="px-3 py-4 text-left"><a title="Punctuality Rank" class="cursor-help">Rank</a></th>
                <th class="px-6 py-4 text-left">Name</th>
                <th class="px-6 py-4 text-left">Class</th>
                <th class="px-6 py-4 text-left">Registeration Date</th>
                <th class="px-6 py-4 text-left">Admission No.</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
            @foreach ($students as $student)
                <tr class="border-b">
                    <td class="px-3 py-4"># {{ $student -> id }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-3 items-center">
                            <img alt="" src="./images/naruto.png" class="h-12 w-12 object-cover rounded-full">
                            <span>{{ $student -> name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">{{ $student -> class }}</td>
                    <td class="px-6 py-4">{{ $student -> date }}</td>
                    <td class="px-6 py-4">{{ $student -> admission_no }}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
                
</div>
