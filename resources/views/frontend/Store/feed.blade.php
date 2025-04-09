@extends('frontend.home')
@section('hero')
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 p-6">

        @foreach ($links as $link)
            <div style="max-width: 400px; max-height: 600px; overflow: auto;">
                <blockquote class="instagram-media" data-instgrm-permalink="{{ $link }}" data-instgrm-version="14">
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
            </div>
        @endforeach



    </div>
@endsection
