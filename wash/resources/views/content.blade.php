
@extends('layouts.app')

@section('content')

    <div class="news container">
        <div class="news__item">
            <div class="row">

                <div class="col-xs-12 col-md-7">
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

                <div class="col-xs-12 col-md-5">
                    <div class="sidebar">

                        <div class="sidebar__item">
                            <div class="sidebar__item-header">
                                Last news
                            </div>
                            <div class="sidebar__item-body">
                                <a href="/" class="sidebar__news">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                    <div class="sidebar__news-tags">Some tags</div>
                                </a>
                                <a href="/" class="sidebar__news">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                    <div class="sidebar__news-tags">Some tags</div>
                                </a>
                                <a href="/" class="sidebar__news">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                    <div class="sidebar__news-tags">Some tags</div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <div class="sidebar__item-header">
                                New shop items
                            </div>
                            <div class="sidebar__item-body">
                                <a href="/" class="sidebar__news sidebar__news_squ">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                </a>
                                <a href="/" class="sidebar__news sidebar__news_squ">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                </a>
                                <a href="/" class="sidebar__news sidebar__news_squ">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                </a>
                                <a href="/" class="sidebar__news sidebar__news_squ">
                                    <div class="sidebar__news-img" style="background:url(/storage/pages/August2018/Mw0I0BoZHeUJ0IFNnQlE.png)"></div>
                                    <div class="sidebar__news-title">Some news</div>
                                </a>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-xs-12" style="display: block;margin: 0 auto;">
                    
                    <div class="subscribe__inner">
                        
                    <div class="subscribe__heading text-center">
                            Sign up for monthly news <br>
                            <span class="text-success">and ways to help save earth!</span>
                        </div>
                    
                    <form class="form-inline subscribe__form">

                        <div class="form-group mb-2">


                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">E-Mail</label>
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Confirm</button>
                    
                        </form>
                    </div>

                </div>

                </div>
        </div>
    </div>
    </div>

@endsection
