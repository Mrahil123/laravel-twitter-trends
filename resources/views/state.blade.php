<x-layout title="{{$state}} Twitter Trending Now" >
    <h1 class="text-4xl text-center mb-6">
        {{$state}} Trending On Twitter
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
            <td>{{$trend->title}}</td>
            <td>{{$trend->volium}}</td>
            <td>
                <button>
                    Copy
                </button>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{-- <div class="w-full bg-gray-200">
        <h2 class="text-2xl mb-2">{{$county}} States Availible Trending Now</h2>
        <h3 class="text-1xl py-1">Kerala</h3>
    </div> --}}
</x-layout>