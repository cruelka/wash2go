
@extends('layouts.app')

@section('content')

    <div class="news container">
        <div class="news__item">
            <div class="row">
                <div class="col-lg-2">
                    {{$data->created_at}}
                </div>
                <div class="col-lg-10">
                    <div class="news__item-inner">
                        <img class="news__item-img" src="/storage/{{$data->image}}" alt="Image">

                        <div class="news-card__title">
                            {{$data->title}}
                        </div>

                        <div class="news-item__body">
                            {!! $data->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
