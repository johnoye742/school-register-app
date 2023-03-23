<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <livewire:styles></livewire:styles>
</head>
<body>
    <main>
        <div class="flex flex-col pt-12 px-[10em]">
            <livewire:attendance-register></livewire:attendance-register>
        </div>
    </main>

    <!--SCRIPTS-->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <livewire:scripts></livewire:scripts>
</body>
</html>