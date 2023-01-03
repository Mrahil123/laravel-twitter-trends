<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url("/")}}/</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($datas as $data)
        <url>
            <loc>{{url("/")}}/{{$data["county"]}}</loc>
            <changefreq>hourly</changefreq>
            <priority>0.8</priority>
        </url>
        @foreach ($data["states"] as $state)
        <url>
            <loc>{{url("/")}}/{{$data["county"]}}/{{$state}}</loc>
            <changefreq>hourly</changefreq>
            <priority>0.8</priority>
        </url>
        @endforeach
    @endforeach
</urlset>