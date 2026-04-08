@extends('layouts.app') @section('title', 'EDS | Video Process')
@section('content')

<section
    class="bg-gray-900 min-h-screen flex items-center justify-center px-4 py-10"
>
    <div class="max-w-5xl w-full">
        <!-- Video Container -->
        <div
            class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-700"
        >
            <div class="w-full aspect-video">
                <iframe
                    class="w-full h-full"
                    src="https://www.youtube.com/embed/khnlNTmZ9Pc"
                    title="YouTube video"
                    frameborder="0"
                    allow="
                        accelerometer;
                        autoplay;
                        clipboard-write;
                        encrypted-media;
                        gyroscope;
                        picture-in-picture;
                    "
                    allowfullscreen
                >
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection
