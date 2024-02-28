@extends('frontend.layouts.app')


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
            @foreach ($blogs as $blog) 
                <div class="col-md-4">
                    <div class="blog-post-item">
                        <div class="blog-post-thumbnail">
                            <img src="{{$blog->thumbnail}}" alt="post-thumbnail">
                            <div class="post-mask"></div>
                            <div class="post-info">
                                <div class="post-description">
                                    <div class="post-meta">
                                        <div class="post-date">
                                                <a href="{{ route('viewBlogInner', ['id' => $blog->title]) }}">{{ \Carbon\Carbon::parse($blog->publish_date)->format('d M y') }}</a>
                                                
                                        {{-- <a href="" class="post-comment">
                                            <span class="post-meta-number">0</span>
                                            <span class="post-meta-label">comment</span>
                                        </a> --}}
                                    </div>
                                </div>
                                <h4 class="post-title"><a href="{{route('viewBlogInner')}}">{{$blog->title}}</a>
                            <span class="arrow-hover"></span></h4>
                                <a href="" class="post-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {{-- <div class="col-md-4">
                    <div class="blog-post-item">
                        <div class="blog-post-thumbnail">
                            <img src="https://ness.themerex.net/wp-content/uploads/2023/07/image-25-copyright-890x664.jpg" alt="post-thumbnail">
                            <div class="post-mask"></div>
                            <div class="post-info">
                                <div class="post-description">
                                    <div class="post-meta">
                                        <div class="post-date">
                                            <span>
                                            <a href="">26 Feb 2024</a>
                                            </span>
                                        </div>
                                        <a href="" class="post-comment">
                                            <span class="post-meta-number">0</span>
                                            <span class="post-meta-label">comment</span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="post-title"><a href="">Ramp up sales with a creative promotion</a>
                            <span class="arrow-hover"></span></h4>
                                <a href="" class="post-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-item">
                        <div class="blog-post-thumbnail">
                            <img src="https://ness.themerex.net/wp-content/uploads/2023/07/image-25-copyright-890x664.jpg" alt="post-thumbnail">
                            <div class="post-mask"></div>
                            <div class="post-info">
                                <div class="post-description">
                                    <div class="post-meta">
                                        <div class="post-date">
                                            <a href="">26 Feb 2024</a>
                                        </div>
                                        <a href="" class="post-comment">
                                            <span class="post-meta-number">0</span>
                                            <span class="post-meta-label">comment</span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="post-title"><a href="">Ramp up sales with a creative promotion</a>
                            <span class="arrow-hover"></span></h4>
                                <a href="" class="post-link"></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name" required>
                                        </div>
                                        @error('name')    
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="" class="pb-2"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Work Email" required>
                                         
                                        </div>
                                        @error('email')    
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label class="pb-2"><strong>Company Name</strong></label>
                                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Your Company Name" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="" class="pb-2"><strong>Phone No</strong></label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Your Number" required>
                                           
                                        </div>
                                        @error('phone')    
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                     <div class="col-md-12 mb-4">
                                       <div class="form-group">
                                            <label for="" class="pb-2"><strong>Message</strong></label>
                                            <textarea name="message" id="" cols="4" rows="3" class="form-control" placeholder="Enter Your Message Here"></textarea> 
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