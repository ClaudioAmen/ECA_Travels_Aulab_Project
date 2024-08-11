<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECA_Travels.noi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    {{-- sistemare classe altezza per footer revisore --}}
    <div>
        {{$slot}}
    </div>
    
    <div class="mt-5">
        <x-footer/>
    </div>

    
</body>
</html>
