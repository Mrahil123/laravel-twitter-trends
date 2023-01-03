<x-layout title="{{$county}} Twitter Trending Now" >
    <h1 class="text-4xl text-center mb-6">
        {{$county}} Trending On Twitter
    </h1>
    <table>
        <tr>
            <th>Trending #</th>
            <th>Trend</th>
            <th>volium</th>
            <th>Copy</th>
        </tr>
        @foreach ($trends as $trend)
        <tr>
            <td>{{$trend->id}}</td>
            <td id="titleId">{{$trend->title}}</td>
            <td>{{$trend->volium}}</td>
            <td>
                <button onclick="navigator.clipboard.writeText(document.getElementById('titleId').text)">
                    Copy
                </button>
            </td>
        </tr>
        @endforeach
    </table>
    
    <div class="w-full bg-gray-200">
        <h2 class="text-2xl mb-2">{{$c_datas["county"]}} States Availible Trending Now</h2>
    
        @foreach ($c_datas["states"] as $state)
        <i class="bg-blue-500 text-white rounded-full p-2 fa fa-map-marker-alt"></i>
        <h3 class="text-1xl py-1">
            <a href="/{{$c_datas["county"]}}/{{$state}}">{{$state}}</a>
        </h3>
        @endforeach
    </div>
</x-layout>