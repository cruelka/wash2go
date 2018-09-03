@extends('layouts.app')

@section('content')

<div class="container">

    <div class="news container">
                <div class="row">
        @foreach($posts as $post)

         
                    <div class="col-sx-12 col-md-6">
                <div class="news__item">
                    
                        <!--<div class="col-lg-2">
                            {{ \Carbon\Carbon::parse($post->created_at)->format('d/M/y')}}
                        </div>-->
                        <div class="">
                            <div class="news__item-inner">

                                <a href="/post/{{ $post->slug }}" class="news-card__img-wrapper">
                                    <div class="news-card__img" style="background: url('/storage/{{$post->image}}')">
                                    </div>
                                </a>

                                <div class="news-card__lable">
                                    {{ $post->meta_keywords }}
                                </div>
                                <a href="/post/{{ $post->slug }}" class="news-card__title">
                                    {{ $post->title }}
                                </a>


                            </div>
                        </div>
                        </div>
                    </div>
               


        @endforeach
       {{ $posts->links() }}
       </div>
            </div>

</div>

@endsection