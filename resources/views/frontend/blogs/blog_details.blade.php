@extends('frontend.main_master')
@section('title')
    Blog Details
@endsection
@section('content')

 <!-- Page Banner Section Start -->
 <div class="section ">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Blog Details</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active" style="color: black" >Blog Details</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Blog Details Section Start -->
<div class="section section-padding mt-n10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <!-- Blog Details Wrapper Start -->
                <div class="blog-details-wrapper">

                    <img src="{{ url($blog->blog_image) }}" alt="Blog Details">

                    <ul class="blog-meta">
                        <li><i class="pe-7s-user"></i> <span> BY:<a href="#">{{ $blog->bloger_name }}</a></span> </li>
                        <li><i class="pe-7s-date"></i> <span>{{ $blog->created_at->diffForHumans() }}</span></li>
                    </ul>

                    <h3 class="title">{{ $blog->title }}</h3>

                    <p>{!! $blog->description !!}</p>

                </div>
                <!-- Blog Details Wrapper End -->

                <!-- Blog Author Social Start -->
                <div class="blog-auhtor-social">

                    <div class="blog-auhtor">
                        {{-- <div class="auhtor-thumb">
                            <img src="assets/images/author/author-1.png" alt="auhtor">
                        </div>
                        <div class="auhtor-content">
                            <p> BY:<a href="#">ADMIN</a></p>
                        </div> --}}
                    </div>

                    <div class="blog-social">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                        <span class="share-count"><a href="#">2 <i class="fa fa-comments"></i></a></span>
                    </div>

                </div>
                <!-- Blog Author Social End -->

                <!-- Blog next & Previous Post Start -->
                <div class="blog-next-previous-post">

                    <!-- Blog Previous Post Start -->
                    <div class="blog-previous-post">
                        <div class="post-arrow">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="#">Spatialize with decorations of Furns</a></h4>
                            <span class="date">27 Mar 2021</span>
                        </div>
                    </div>
                    <!-- Blog Previous Post End -->

                    <!-- Blog Next Post Start -->
                    <div class="blog-next-post">
                        <div class="post-content">
                            <h4 class="title"><a href="#">Contrary to popular belief simply text</a></h4>
                            <span class="date">27 Mar 2021</span>
                        </div>
                        <div class="post-arrow">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- Blog Next Post End -->

                </div>
                <!-- Blog next & Previous Post End -->

                <!-- Blog Comment & Form Start -->
                <div class="blog-comment-form">

                    <!-- Blog Comment Start -->
                    <div class="blog-comment section-padding-02 mt-n2">
                        <h3 class="comment-title">03 Comments</h3>

                        <ul class="comments-items">
                            <li>
                                <!-- Single Comment Start -->
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-1.png" alt="Auhtor">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-name-date">
                                            <h6 class="name">Aidyn Cody</h6>
                                            <span class="date">Jul 21,2021 at 15 hours ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuut labore et dol magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <!-- Single Comment End -->

                                <ul class="comments-reply">
                                    <li>
                                        <!-- Single Comment Start -->
                                        <div class="single-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author/author-2.png" alt="Auhtor">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-name-date">
                                                    <h6 class="name">Aidyn Cody</h6>
                                                    <span class="date">Jul 21,2021 at 15 hours ago</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo d tempor inci diduut labore et dol magna aliqua. </p>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                        <!-- Single Comment End -->
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <!-- Single Comment Start -->
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-3.png" alt="Auhtor">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-name-date">
                                            <h6 class="name">Aidyn Cody</h6>
                                            <span class="date">Jul 21,2021 at 15 hours ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuut labore et dol magna aliqua. Ut enim ad minim veniam quis nostrud</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <!-- Single Comment End -->
                            </li>
                        </ul>
                    </div>
                    <!-- Blog Comment End -->

                    <!-- Blog Comment Form Start -->
                    <div class="blog-comment-form section-padding-02 mt-n2">
                        <h3 class="comment-title">Leave a comment</h3>

                        <div class="comment-form-wrapper">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                            <input type="text" placeholder="Subject (Optinal) *">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-dark">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Blog Comment Form End -->

                </div>
                <!-- Blog Comment & Form End -->

            </div>
            <div class="col-lg-4">

                <!-- Sidebar Start -->
                <div class="sidebar">


                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget-02">

                        <h4 class="widget-title-02">Recent Post</h4>

                        <div class="widget-recent-post">
                            @foreach ($latestBlogs as $blog)
                                <div class="single-recent-post">
                                    <ul class="blog-meta">
                                        <li><i class="pe-7s-date"></i> <span>{{ $blog->created_at->diffForHumans() }}</span></li>
                                    </ul>
                                    <h5 class="title"><a href="{{ route('blog.details', [$blog->id, $blog->blog_slug]) }}">{{ $blog->title }}</a></h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Sidebar Widget End -->

                </div>
                <!-- Sidebar End -->

            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section End -->


@endsection


