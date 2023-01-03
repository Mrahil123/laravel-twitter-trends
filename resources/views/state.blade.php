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
</x-layout>