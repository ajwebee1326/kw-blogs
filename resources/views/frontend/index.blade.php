@extends('frontend.layouts.app')

{{-- @section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description) --}}

@section('content')

          <!-- Main Banner --->
    <section class="sec-space sec-space-m main-banner pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div>
                        <span class="circle-1"></span>
                        <span class="circle-2"></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="banner-img">
                        <img src="{{asset('frontend')}}/images/yellow-banner-gif.gif" alt="animated-gif">
                    </div>
                    <div class="banner-content text-center">
                        <p class="sub-text">Launching Soon...</p>
                        <p class="sub-text">One place to make all yours tasks</p>
                        <h1>A PIECE OF CAKE !</h1>
                    </div>
                </div>
                <div class="col-md-2">
                    <div>
                        <span class="circle-3"></span>
                        <span class="circle-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Grid Section --->
    <section class="sec-content sec-space">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="card">
                        <img src="{{asset('frontend')}}/images/1.gif" alt="animated-gif-content">
                        <div>
                            <h5 class="mt-4">Blast Off to Productivity</h5>
                            <p class="mb-0">Because life’s too short for boring tools! We believe in turning “Ugh,
                                work!” to “Let’s do some work!”. Don’t believe that’s possible? Let us introduce you to
                                Kaykewalk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                    <div class="card">
                        <img src="{{asset('frontend')}}/images/2.gif" alt="animated-gif-content2">
                        <div>
                            <h5 class="mt-4">Go with the Work-flow</h5>
                            <p class="mb-0">Kaykewalk is crafted for rebels, dreamers, and those who appreciate a touch of flair and simplicity in their workflow—essentially, straightforward efficiency with no unnecessary frills!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('frontend')}}/images/3.gif" alt="animated-gif-content3">
                        <div>
                            <h5 class="mt-4">Gear up for collaboration</h5>
                            <p class="mb-0">We are currently in the development stage, perfecting every screw so that
                                this ultimate organizing & management tool redefines the way you conquer your day with
                                its easy-to-use and lively interface.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Animated Section --->
    <section class="animated-sec sec-space sec-space-m">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <span class="circle-1"></span>
                        <span class="circle-2"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <span class="circle-3"></span>
                    </div>
                    <div>
                        <p class="mb-0 sub-text">We promise your productivity will soar. Prepare for Kaykewalk and turn every project into a piece of cake.</p>
                    </div>
                    <div>
                        <span class="circle-4"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <span class="circle-5"></span>
                        <span class="circle-6"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!--- Join Us --->
    <div class="bg-light sec-space sec-space-m">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="join-us text-center">
                        <p class="mb-0 sub-text">Ready to join a buzzing community of like-minded pros where creativity thrives? Dive in with our newsletter for an exclusive pass!</p>
                        <button class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#subscribeModal">Subscribe</button>
                    </div>
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
    </div>
@endsection