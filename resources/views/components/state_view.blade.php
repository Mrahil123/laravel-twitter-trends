<div class="w-full bg-gray-200">
    <h2 class="text-2xl mb-2">{{$c_datas["county"]}} States Availible Trending Now</h2>

    @foreach ($c_datas["staets"] as $state)
    <i class="bg-blue-500 text-white rounded-full p-2 fa fa-map-marker-alt"></i>
    <h3 class="text-1xl py-1">
        <a href="/{{$c_datas["county"]}}/{{$state}}">{{$state}}</a>
    </h3>
    @endforeach
</div>