<div class="flex flex-col pt-12 px-[10em]">
    <p>Date</p>
    <input type="date" placeholder="Today" class="border rounded-lg p-3 bg-gray-200" wire:model="date" id="currDate">
    <p class="mt-5">Class</p>
    <select title="Class" class="border rounded-lg bg-gray-200 p-3" placeholder="Class">
        <option>SS3C</option>
        <option>SS3B</option>
        <option>SS3A</option>
        <option>SS2C</option>
        <option>SS2B</option>
        <option>SS2A</option>
        <option>SS1C</option>
        <option>SS1B</option>
        <option>SS1A</option>
    </select>
    
    
    <livewire:register></livewire:register>
</div>