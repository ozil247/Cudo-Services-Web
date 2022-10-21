@extends('layouts.app')

@section('content')

  <!-- Banner Area -->
  <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
      <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
      <div class="sf-banner-heading-wrap">
        <div class="sf-banner-heading-area">
          <div class="sf-banner-heading-large">Blog</div>
          <div class="sf-banner-breadcrumbs-nav">
            <ul class="list-inline">
              <li><a href="{{route('welcome')}}"> Home </a></li>
              <li>Blog</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Area End -->


<div class="aon-page-jobs-wrap">
    <div class="container">
        <div class="row">



            <!-- Left part start -->
            <div class="col-lg-8 col-md-12">


                <div id="">
                    <div class="row">
                        <!--block 1-->
                        <div class="post blog-post blog-list col-md-12 sf-blog-style-1">
                            @foreach($blogs as $blog)
                                <div class="post-bx">
                                    <!-- Content section for blogs start -->
                                    <div class="post-thum">
                                        <a href="{{ route('blog_detail',[$blog->id, Str::slug($blog->title) ]) }}"><img
                                                title="title" alt="" src="/storage/image/{{ $blog->image }}"></a>
                                    </div>

                                    <div class="post-info">
                                        <div class="post-categories">{{ $blog->blogcategory->name }}
                                        </div>
                                        <div class="post-meta">
                                            <ul>
                                                <li class="post-date"><span>{{ $blog->created_at->format('d M, Y') }}</span></li>


                                            </ul>
                                        </div>

                                        <div class="post-text">
                                            <h4 class="post-title">
                                                <a
                                                    href="{{ route('blog_detail',[$blog->id, \Str::slug($blog->title)]) }}">{{ $blog->title }}</a>
                                            </h4>
                                            <p>{{ $blog->intro }}</p>
                                        </div>

                                    </div>
                                    <!-- Content section for blogs end -->
                                </div>

                            @endforeach
                        </div>
                        <!--block 2-->


                    </div>
                </div>



                <!-- pagination End-->

            </div>
            <!-- Left part END -->

            <!-- Side bar start -->
            <div class="col-lg-4 col-md-12">

                <aside class="side-bar ">



                    <!-- CATEGORY -->
                        <div class="widget widget_services rounded-sidebar-widget">
                            <div class="text-left m-b30">
                                <h3 class="widget-title">Categories</h3>
                            </div>
                            @foreach($categories as $category)
                                <ul>
                                    <li><a href="javascript:void(0);">{{ $category->name }}</a></li>

                                </ul>
                            @endforeach
                        </div>

                        <!-- RECENT POSTS -->
                        <div class="widget recent-posts-entry rounded-sidebar-widget">

                            <div class="widget-post-bx">
                                @foreach($blogs as $blog)
                                    <div class="widget-post clearfix">
                                        <div class="wt-post-media">
                                            <a href="{{route('blog_detail',[$blog->id, \Str::slug($blog->title)])}}">
                                                <img src="/storage/image/{ $blog->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h5 class="post-title">

                                                    <a href="{{route('blog_detail',[$blog->id, \Str::slug($blog->title)] )}}">{{ $blog->title }}</a>
                                                </h5>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-date">{{ $blog->created_at }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        </div>


                        <!-- TAGS -->




                </aside>

            </div>
            <!-- Side bar END -->

        </div>
    </div>
</div>


@endsection
