@extends('frontend.layouts.app')


@section('title',$blog->meta_title)

@section('content')

 <!--- Left Side --->


<section class="blog sec-space">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pe-md-4 pe-0">
                <div class="blog-post-header">
                    <div class="blog-post-thumbnail">
                        <img src="{{$blog->banner}}">
                    </div>
                    <div class="blog-post-category">
                        <a href="#">
                            <span class='bx bx-chevrons-right text-pink'></span>
                            <span class="cat-name">{{$blog->category->name}}</span>
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h1>{{$blog->title}}</h1>
                    </div>
                    <div class="blog-post-meta">
                        <div class="blog-post-author">
                            <span class='bx bx-chevrons-right text-secondary'></span>
                            <span class="meta-value">Webeesocial</span>
                        </div>
                        <div class="blog-post-date">
                            <span class='bx bx-chevrons-right text-yellow'></span>
                            <span class="meta-value">{{ \Carbon\Carbon::parse($blog->publish_date)->format('d M y') }}</span>
                        </div>
                        <div class="blog-post-comment">
                            <span class='bx bx-chevrons-right text-pink'></span>
                            <span class="meta-value">0 Comments</span>
                        </div>
                    </div>
                </div>
                <div class="blog-post-content">
                        {!! $blog->description !!}
                </div>
                <div class="blog-post-footer">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="blog-post-tag">
                                @foreach ($blog->tags as $tag)
                                <a href="#">
                                    <span class="tag-shape">#</span>
                                    <span class="tag-name">{{$tag->name}}</span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-post-share">
                                <div class="post-share">
                                    <div class="post-share-heading">Share this post</div>
                                    <div class="post-share-media">
                                        <span class=' share-icon bx bx-share-alt'></span>
                                        <div class="share-list">
                                            <a href="https://twitter.com/?lang=en">
                                                <span class='bx bxl-twitter'></span>
                                            </a>
                                            <a href="https://www.facebook.com/reel/1411633062763319">
                                                <span class='bx bxl-facebook'></span>
                                            </a>
                                            <a href="https://www.instagram.com/">
                                                <span class='bx bxl-instagram'></span>
                                            </a>
                                            <a href="https://www.linkedin.com/checkpoint/lg/sign-in-another-account?trk=guest_homepage-basic_nav-header-signin">
                                                <span class='bx bxl-linkedin'></span>
                                            </a>
                                            <a href="#">
                                                <span class='bx bxl-pinterest-alt'></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-post">
                    <h3 class="related-post-title">You May Also Like</h3>
                    <div class="post-slider">
                        <div class="row">

                            @foreach($related_blogs as $blog)
                            <div class="col-md-6">
                                <div class="post-slider-item">
                                    <div class=" post-wrap card">
                                        <div class="post-wrap-thumbnail">
                                            <img src="{{ $blog->thumbnail }}"
                                                class="card-img-top" alt="...">

                                        </div>
                                        <div class="card-body">
                                            <div class="post-caption">
                                                <div class="blog-post-category">
                                                    <a href="#">
                                                        <span class='bx bx-chevrons-right text-pink'></span>
                                                        <span class="cat-name">{{ $blog->category->name }}</span>
                                                    </a>
                                                </div>
                                                <h6 class="post-title">
                                                    <a href="{{ route('viewBlogInner',$blog->slug) }}">{{ $blog->title  }}</a>
                                                </h6>
                                                <div class="post-meta">
                                                    <div class="post-date">
                                                        <span>
                                                           {{ \Carbon\Carbon::parse($blog->publish_date)->format('d,M Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <!--- Right Sidebar--->
                <div class="blog-sidebar">
                    <div class="page-sidebar-inner">
                        <div class="page-sidebar-content">
                            <div id="search" class="blog-search">
                                <div class="blog-search-title widget-title">
                                    <span>Search</span>

                                </div>
                                <form action="" class="search-form">
                                    <label for="">
                                        <input type="search" class="search-field" placeholder="Search…" value="">
                                    </label>
                                    <button type="submit" class="search-submit">
                                        <span class="search-btn-icon bx bx-search"></span>
                                        <span class="search-btn-text">
                                            Search		</span>
                                    </button>
                                </form>
                            </div>
                            <div id="recent-post" class="recent-post">
                                <div class="blog-search-title widget-title">
                                    <span>Recent Post</span>
                                </div>
                                
                                <div class="recent-post-item">
                                    <div class="recent-post-thumbnail">
                                        <a href="{{ route('viewBlogInner', ['id' => $recentBlog->id]) }}"><img src="{{$recentBlog->thumbnail}}" alt="thumbnail"></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <div class="recent-post-meta">
                                            <div class="recent-post-category">
                                                <a href="{{ route('viewBlogInner', ['id' => $recentBlog->id]) }}">{{$recentBlog->category->name}}</a>
                                            </div>
                                            <div class="recent-post-date">{{ \Carbon\Carbon::parse($blog->publish_date)->format('d M y') }}</div>
                                        </div>
                                        <div class="recent-post-title">
                                        <h6>{{$recentBlog->title}}</h6>
                                    </div>
                                    
                                </div>
                               
                                
                            </div>
                            <div id="category" class="blog-category">
                                <div class="blog-search-title widget-title">
                                    <span>Category</span>
                                </div>
                                <ul>

                                    @foreach($categoryies as $category)
                                    <li class="cat-item">
                                        <a href="">
                                            {{$category->name}}
                                            <span class="count">({{$category->blog->count()}})</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                            <div id="popular-tag" class="blog-tag">
                                <div class="blog-search-title widget-title">
                                    <span>Popular Tag</span>
                                </div>

                                @foreach ($tags as $tag)
                                <div class="multi-tag">
                                    <a href="" class="tag-link">{{$tag->name}}</a>

                                    {{-- {{ $tag->name }}@if(!$loop->last), @endif --}}
                                    {{-- <a href="" class="tag-link">Business</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Marketing</a>
                                    <a href="" class="tag-link">Activity</a>
                                    <a href="" class="tag-link">Business</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Marketing</a>
                                    <a href="" class="tag-link">Activity</a>
                                    <a href="" class="tag-link">Business</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Career</a>
                                    <a href="" class="tag-link">Marketing</a> --}}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--- Contact Modal Popup --->
            <div class="modal fade"  id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="text-end">
                       
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-4 pt-0 pb-4">
                            <div class="form-header">
                                <img src="{{asset('frontend')}}/images/form-icon.png" alt="img-fluid form-icon">
                                <h5 class="text-dark mb-2">Welcome  to Kaykewalk</h5>
                            </div>
                            <form method="POST" action="{{route('viewContactUs')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                           <label for="" class="pb-2"><strong>Full Name</strong></label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" required>
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="" class="pb-2"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" placeholder="Work Email" required>
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label class="pb-2"><strong>Company Name</strong></label>
                                            <input type="text" class="form-control" id="number" placeholder="Enter Your Company Name" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="" class="pb-2"><strong>Phone No</strong></label>
                                            <input type="number" class="form-control" id="number" placeholder="Enter Your Number" required>
                                           
                                        </div>
                                    </div>
                                     <div class="col-md-12 mb-4">
                                       <div class="form-group">
                                            <label for="" class="pb-2"><strong>Message</strong></label>
                                            <textarea name="" id="" cols="4" rows="3" class="form-control" placeholder="Enter Your Message Here"></textarea> 
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-md-6 mx-auto">
                                        <Button class="btn btn-primary btn-subscribe" >Subscribe</Button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection