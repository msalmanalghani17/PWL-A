<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite ('resources/css/app.css')
</head>
<body>
    <x-navbar/>
    {{-- <div class="flex justify-items-stretch">
    <div class="flex">
        <div class="w-1/4">
            <x-sidebar/>    
        </div>
    </div>
    </div> --}}
    <div>
        <x-halamantambahdata/>
        <div class="p-2 m-3 border-spacing-8">
            <x-tabel/>    
        </div>
    </div>
        
</body>
<div class="bottom-100">
    <x-footer/>
</div>
</html>