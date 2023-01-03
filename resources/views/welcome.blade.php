<x-layout title="Twitter Trends: Get Inida,Japan,United States and More County Twitter Trends">
    <div class="w-full">
        <h1 class="text-4xl mb-6">
            Know Twitter Trends in All Around World
        </h1>
        @foreach ($countys as $county)
            <h2 class="text-2xl py-1">
                <i class="bg-blue-500 text-white rounded-full p-2 fa fa-map-marker-alt"></i>
                <a href="/{{$county}}">{{$county}}</a>
            </h2>
        @endforeach
    </div>

</x-layout>