<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8661773991678521"
     crossorigin="anonymous"></script>
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    
<x-nav />
<div class="lg:flex w-full justify-around">
    <div class="lg:w-1/4 sm:none md:none"><x-ads.left /></div>
    <div class="lg:w-">{{$slot}}</div>
    <div class="lg:w-2/4"><x-ads.right /></div>
</div>

{{-- <x-ads.sticky /> --}}

</body>
</html>