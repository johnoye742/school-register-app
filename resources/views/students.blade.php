<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="flex flex-col pt-12 lg:px-[6em] md:px-[3em]">
            <h1 class="text-2xl">List Of Students</h1>
            <select title="Class" class="border rounded-lg bg-gray-200 p-3" placeholder="Class">
                <option>All Classes</option>
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
            <livewire:students-table></livewire:students-table>
        </div>
    </main>

    <!--SCRIPT-->
    <livewire:scripts></livewire:scripts>
    <script src="{{ asset('js/tailwind.js') }}"></script>
</body>
</html>