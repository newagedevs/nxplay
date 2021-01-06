@extends('frontend.layouts.app')

@section('content')
    @include('frontend.partials._home')

    <!-- content -->
    <section class="content">
        <div class="content__head">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- content title -->
                        <h2 class="content__title">New items</h2>
                        <!-- end content title -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- content tabs -->
            <div class="tab-content">
                <div class="row">
                    @foreach($videos as $video)
                    <!-- card -->
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <img src="{{asset('storage/images/'.$video->poster)}}" alt="{{ $video->title }}"/>
                                <a href="{{ route('frontend.videos.show', $video->slug) }}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                                <span class="card__rate @if($video->imdb_rating>=7)card__rate--green @else card__rate--red @endif">{{ $video->imdb_rating }}</span>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">
                                    <a href="{{ route('frontend.videos.show', $video->slug) }}">{{ $video->title }}</a>
                                </h3>
                                <span class="card__category">
                                    @foreach(json_decode($video->genres) as $genre)
                                        <a href="#">{{ ucfirst($genre) }}</a>
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    @endforeach
                </div>
            </div>
            <!-- end content tabs -->
        </div>
    </section>
    <!-- end content -->
@endsection
