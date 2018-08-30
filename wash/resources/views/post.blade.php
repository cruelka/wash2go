@extends('layouts.app')

@section('content')
 <div class=" container">
    <div class="news container">
        <div class="row">
        
        <div class="col-xs-12 col-md-6">

        <div class="news__item">
            <div class="">
            <!--
                <div class="col-lg-2">
                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/M/y')}}
                </div>
            -->
                <div class="">
                    <div class="news__item-inner">
                        <img class="news__item-img" src="/storage/{{$post->image}}" alt="Image">

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

    </div>
 </div>
@endsection