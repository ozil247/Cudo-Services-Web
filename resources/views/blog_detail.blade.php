@extends('layouts.app')

@section('content')
<!-- Banner Area -->
<div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
        <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
        <div class="sf-banner-heading-wrap">
            <div class="sf-banner-heading-area">
                <div class="sf-banner-heading-large"> Blog</div>
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
            <div class="col-lg-12 col-md-12">

                <div class="sf-post-detail">

                    <div class="post blog-post blog-detail sf-blog-style-1">
                        <div class="post-bx">
                            <!-- Content section for blogs start -->
                            <div class="post-thum">
                                <img title="title" alt="" src="/storage/image/{{ $blog->image }}">
                                
                            </div>
                            <div class="post-info">
                                <div class="post-meta sf-icon-post-meta">
                                    <ul>

                                        <li class="post-comment">
                                            <a href="#" title="" rel=""><i
                                                    class="feather-message-square"></i>Comments</a>
                                        </li>
                                        <li class="post-views">
                                            <a href="#" title="" rel=""><i
                                                    class="feather-eye"></i>{{ $blog->views }}</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="post-text">
                                    <h4 class="post-title">
                                        {{ $blog->title }}
                                    </h4>
                                    {{ $blog->intro }}
                                    <ul class="sf-detail-disc-list">
                                        {{ $blog->body }}
                                    </ul>


                                    <p>{{ $blog->clossing }}</p>





                                    <div class="sf-pd-sm-media">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b30">
                                                <div class="sf-pd-img">
                                                    <img src="images/sf-blog-detail/thumb1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b30">
                                                <div class="sf-pd-img">
                                                    <img src="images/sf-blog-detail/thumb2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 m-b30">
                                                <div class="sf-pd-img">
                                                    <img src="images/sf-blog-detail/thumb3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- Content section for blogs end -->
                        </div>
                    </div>
                    <!-- Comment section for blogs start -->
                    <div class="clear sf-blog-comment-wrap" id="comment-list">
                        <div class="comments-area" id="comments">
                            <h2 class="comments-title m-t0"><span>{{ $blog->comments->count() }}</span> Comments
                            </h2>
                            <div>
                                <!-- COMMENT LIST START -->

                                <!-- COMMENT LIST START -->
                                <ol class="comment-list">
                                    @foreach($blog->comments as $comment)
                                        <li class="comment">
                                            <!-- COMMENT BLOCK -->
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img class="avatar photo"
                                                        src="/storage/image/{{ $comment->image }}" alt="">
                                                    <cite class="fn">{{ $comment->name }}</cite>
                                                    <span class="says">says:</span>
                                                </div>
                                                <div class="comment-meta">
                                                    <a
                                                        href="javascript:void(0);">{{ $comment->created_at->format('M d Y  H:i') }}</a>
                                                </div>
                                                <p>{{ $comment->message }}</p>

                                            </div>

                                        </li>

                                    @endforeach
                                </ol>

                                <!-- COMMENT LIST END -->

                                <!-- LEAVE A REPLY START -->
                                <div class="comment-respond m-t30" id="respond">
                                    <form action="{{ route('store_comment',$blog->id) }}"
                                        class="comment-form" id="commentform" method="POST"
                                        enctype="multipart/form-data">@csrf

                                        <div class="container">
                                            <div>
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input class="form-control" type="text" value="" name="name"
                                                    placeholder="Name" id="name">

                                            </div>

                                            <div>
                                                <label for="comment">Comment</label>
                                                <textarea class="form-control" rows="8" name="message"
                                                    placeholder="Comment" id="message"></textarea>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                    <button class="btn btn-success"
                                                        style="background-color:rgb(13, 13, 125)">Post</button>
                                                </div>

                                            </div>
                                        </div>



                                    </form>

                                </div>
                                <!-- LEAVE A REPLY END -->
                            </div>
                        </div>
                    </div>
                    <!-- Comment section for blogs start -->

                </div>


            </div>
            <!-- Left part END -->


            <!-- Side bar END -->

        </div>
    </div>
</div>

@endsection
