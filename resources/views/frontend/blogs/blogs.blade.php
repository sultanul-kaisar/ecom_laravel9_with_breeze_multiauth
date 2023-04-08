@extends('frontend.main_master')
@section('title')
    All Blogs
@endsection
@section('content')

<!-- Page Banner Section Start -->
<div class="section ">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Blog</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active" style="color: black">Blog</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Blog Section Start -->
<div class="section section-padding mt-n10">
    <div class="container">

        <!-- Blog Wrapper Start -->
        <div class="blog-wrapper">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <a href="{{ route('blog.details', [$blog->id, $blog->blog_slug]) }}"><img src="{{ $blog->blog_image }}" alt="Blog"></a>

                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="pe-7s-user"></i> <span> BY:<a href="#">{{ $blog->bloger_name }}</a></span> </li>
                                    <li><i class="pe-7s-date"></i> <span>{{ $blog->created_at->diffForHumans() }}</span></li>
                                </ul>
                                <h4 class="title"><a href="{{ route('blog.details', [$blog->id, $blog->blog_slug]) }}">{{ $blog->title }}</a></h4>
                                <a href="{{ route('blog.details', [$blog->id, $blog->blog_slug]) }}" class="btn btn-dark btn-hover-primary">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->

                    </div>
                @endforeach
            </div>
        </div>
        <!-- Blog Wrapper End -->

        <!-- Page pagination Start -->
        <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item active">{!! $blogs->links() !!}</li>
            </ul>
        </div>
        <!-- Page pagination End -->

    </div>
</div>
<!-- Blog Section End -->


@endsection
