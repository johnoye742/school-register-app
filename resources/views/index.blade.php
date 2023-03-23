<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./vendor/fontawesome-free-6.1.2-web/css/all.min.css">
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

    <div class="flex flex-col pt-12 lg:px-[6em] md:px-[3em] px-3">
        <h1 class="text-2xl">Welcome back, <b>Mrs. Hinata Hyuga</b></h1>
        <p class="text-gray-400">Learn about your students progress.</p>

        <div class="bg-white mt-5 rounded-lg shadow-lg lg:overflow-hidden overflow-scroll md:w-fit w-full">
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
                    <tr class="border-b">
                        <td class="px-3 py-4">#1</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3 items-center">
                                <img alt="" src="./images/naruto.png" class="h-12 w-12 object-cover rounded-full">
                                <span>John Oye</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">SS3A</td>
                        <td class="px-6 py-4">September 9, 2021</td>
                        <td class="px-6 py-4">0742</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-3 py-4">#2</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3 items-center">
                                <img alt="" src="./images/naruto.png" class="h-12 w-12 object-cover rounded-full">
                                <span>John Oye</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">SS1A</td>
                        <td class="px-6 py-4">September 9, 2021</td>
                        <td class="px-6 py-4">0472</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <button class="px-5 py-3 w-fit mt-5 rounded-lg bg-green-600 text-white" title="Mark the register"><i class="fas fa-check"></i> Tick</button>
    </div>
    </main>
    <script src="./vendor/tailwind.js"></script>
</body>
</html>