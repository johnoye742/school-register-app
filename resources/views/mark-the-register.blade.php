<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.1.2-web/css/all.min.css') }}">
    <livewire:styles></livewire:styles>
</head>
<body class="bg-gray-100">
    
    <nav class="p-6 shadow-lg w-full flex flex-row items-center justify-between">
        <div>
            <h1 class="text-2xl">Register</h1>
        </div>
        <ul>
            <li><a href="">Home</a></li>
        </ul>
    </nav>

    <main>
    <div class="flex flex-col pt-12 px-[10em]">
        <p class="hidden">Date</p>
        <input type="date" placeholder="Today" class="border rounded-lg p-3 bg-gray-200 hidden" value="02/27/2023" aria-placeholder="02/27/2023" placeholder="02/27/2023" id="currDate">
        <p class="mt-5 text-2xl">Today</p>
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
        
      <!-- <table class="table-auto my-10">
            <thead>
                <th class="px-2 py-2 border">S/N</th>
                <th class="px-5 py-2 border">Name</th>
                <th class="px-1 py-2 border">Mon</th>
                <th class="px-2 py-2 border">Tue</th>
                <th class="px-1 py-2 border">Wed</th>
                <th class="px-1 py-2 border">Thu</th>
                <th class="px-2 py-2 border">Fri</th>
            </thead>
            <tbody>
                <tr>
                    <td class="px-5 py-2 border">1</td>
                    <td class="px-5 py-2 border">Oye John Olugbenga</td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="px-5 py-2 border">2</td>
                    <td class="px-5 py-2 border">David Nwokoro</td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                    <td class="px-3 py-2 border"><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>

    -->
        <livewire:register></livewire:register>
    </div>
    </main>

    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
</body>
</html>