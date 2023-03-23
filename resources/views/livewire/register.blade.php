    <div>
    <div class="bg-white mt-5 rounded-lg shadow-lg lg:overflow-hidden w-full">
                <table class="table-auto p-5 rounded-t-lg w-full">
                    <thead class="bg-gray-200 rounded-t-lg">
                        <tr>
                            <th class="px-4 py-4 text-left">S/N</th>
                            <th class="px-6 py-4 text-left">Name</th>
                            <th class="px-6 py-4 text-left">Admission No.</th>
                            <th class="px-6 py-4 text-left">Gender</th>
                            <th class="px-6 py-4 text-left"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-500">
                        @foreach ($students as $student)
                            
                        
                        <tr class="border-b">
                            <td class="px-4 py-4">{{ $student -> id }}</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3 items-center">
                                    <img alt="" src="{{ asset('images/profile.png') }}" class="h-12 w-12 object-cover rounded-full">
                                    <span>{{ $student -> name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $student -> admission_no }}</td>
                            <td class="px-6 py-4">{{ $student -> gender }}</td>
                            <td class="px-6 py-4 text-red-500"><input type="checkbox" value="{{ $student -> id }}" placeholder="mark" wire:model="attend" wire:change="mark" :disabled="checkboxState"></td>
                        </tr>
    
    
                        @endforeach
                        
                    </tbody>
                </table>
                
    </div>
    <div class="mt-3">{{ $marked }}</div>
    <div class="mt-3">{{ $message }}</div>
    <button class="px-5 py-3 w-fit mt-5 rounded-lg bg-green-600 text-white" title="Mark the register" wire:click="submit"><i class="fas fa-check"></i> Save</button>
</div>