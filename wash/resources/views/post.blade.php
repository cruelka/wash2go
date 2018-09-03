@extends('layouts.app')

@section('content')
 <div class=" container">
    <div class="news container">
        <div class="news__item">
            <div class="row">
                <div class="col-lg-2">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/M/y')}}
                </div>
                <div class="col-lg-10">
                    <div class="news__item-inner">

                        <a href="/post/water-supply-threats" class="news-card__img-wrapper">
                            <div class="news-card__img" style="background: url('/storage/{{$post->image}}')">
                            </div>
                        </a>

                        <div class="news-card__title">
                            {{$post->title}}
                        </div>

                        <div class="news-item__body">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection