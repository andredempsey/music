@extends('layouts.master')

@section('head')
    <title>Music School of Universal City | Blog</title>
    <meta name="description" content="Music School of Universal City has been providing aspiring musicians tailored, private lessons since 2006">
    <meta name="keywords" content="universal city music guitar piano voice lessons"> 
@stop
@section('content')

    <section id="page-tree">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h1>Blog filter</h1>
                </div>
                <div class="col-md-7 col-sm-7">
                    <ol class="breadcrumb pull-right hidden-xs">
                        <li><a href="index.html"><i class="ion-home"></i> Home</a></li>
                        <li><a>Blog</a></li>
                        <li class="active"><a>Blog filter</a></li>
                    </ol>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--page-tree-->

    <section id="blog-grid" class="padding-60">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <ul class=" portfolio-filters text-center">
                        <li class="filter" data-filter="all">All</li>
                        <li class="filter" data-filter="rock">Rock</li>
                        <li class="filter" data-filter="pop">Pop</li>
                        <li class="filter" data-filter="classical">Classical</li>
                        <li class="filter" data-filter="community">Community</li>
                    </ul><!--portfolio filter lisr-->

                    <div id="grid" class="row">
                       @foreach ($posts as $post)
                        <div class="portfolio-item mix community col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <a href="{{action('PostsController@show', array($post->slug))}}">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="img/img-2.jpg" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="{{action('PostsController@show', array($post->slug))}}" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->
                        @endforeach
                        <div class="portfolio-item mix pop community col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <iframe class="audio" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/62974792&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true" height="166"></iframe>
                                <div class="blog-grid-desc">
                                    <h4><a href="blog-post.html" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->

                        <div class="portfolio-item mix classical pop rock col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <a href="blog-post.html">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="img/img-3.jpg" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="blog-post.html" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->

                        <div class="portfolio-item mix rock col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <a href="blog-post.html">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="img/img-4.jpg" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="blog-post.html" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->

                        <div class="portfolio-item mix pop classical col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <a href="blog-post.html">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="img/img-5.jpg" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="blog-post.html" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->

                        <div class="portfolio-item mix classical pop rock col-xs-12 col-sm-4">
                            <div class="blog-grid-box">
                                <a href="blog-post.html">
                                    <div class="image-sec">
                                        <img class="img-responsive" src="img/img-6.jpg" alt="Portfolio">
                                        <div class="image-overlay">
                                            <p><i class="ion-ios7-plus-empty"></i></p>
                                        </div>
                                    </div> <!--image-->
                                </a>
                                <div class="blog-grid-desc">
                                    <h4><a href="blog-post.html" class="hover-color">Amazing Layout</a></h4>
                                    <div class="blog-grid-meta">
                                        <span><a href="#" class="hover-color">By Author</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">Sports</a></span>
                                        <span>|</span>
                                        <span><a href="#" class="hover-color">2 Comments</a></span>
                                    </div>
                                    <p>
                                        In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                    </p>
                                    <p class="more-button"><a href="blog-post.html" class="btn btn-xs btn-dark">Read More</a></p>
                                    <div class="blog-grid-btm">
                                        <h3><span><a href="#" class="hover-color"><i class="ion-calendar"></i> 10 may 2014</a></span>
                                            <span class="pull-right"><a href="#" class="hover-color"><i class="ion-heart"></i> 2343</a></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!--portfolio-item -->                                                   
                    </div> <!--grid -->
                    <div class="divied-40"></div><!--divide by 40px -->

                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section><!--blog filter-->
@stop