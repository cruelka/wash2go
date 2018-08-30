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
                                <a  href="/post/{{ $post->slug }}">
                                    <img class="news__item-img" src="/storage/{{$post->image}}" alt="Image">
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