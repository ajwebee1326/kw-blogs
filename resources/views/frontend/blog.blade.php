@extends('frontend.layouts.app')
@section('title', 'Blogs')

@section('content')

 <!--- Blog Banner --->
 <section class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-title">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- Blog Content --->
<section class="blog sec-space">
    <div class="container">
        <div class="blog-wrap grid-style">
            <div class="row">
                @forelse ($blogs as $blog) 
                    <div class=" col-12 col-lg-6 col-xl-4">
                        <div class="blog-post-item">
                            <div class="blog-post-thumbnail">
                                <img src="{{$blog->thumbnail}}" alt="post-thumbnail">
                                <div class="post-mask"></div>
                                <div class="post-info">
                                    <div class="post-description">
                                        <div class="post-meta">
                                            <div class="post-date">
                                                    <a href="{{ route('viewBlogInner', $blog->slug) }}">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</a>                                                
                                                            {{-- <a href="" class="post-comment">
                                                                <span class="post-meta-number">0</span>
                                                                <span class="post-meta-label">comment</span>
                                                            </a> --}}
                                            </div>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="{{ route('viewBlogInner', $blog->slug) }}">{{$blog->title}}</a>
                                        </h4>
                                       <div class="arrow-hover">
                                         <a href="{{ route('viewBlogInner', $blog->slug) }}" class="post-link">Read More</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @if(request()->has('search') && request()->get('search') != '')
                        <h1 class="text-center text-warning">No blogs found with</h1>
                        <h1 class="text-center text-warning">"{{ request()->get('search') }}"</h1>
                    @else
                        <h1 class="text-center text-warning">No blogs found</h1>
                    @endif
                @endforelse
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</section>




@endsection