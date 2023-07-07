@extends('Frontend.index')
@section('title','Home Page')
@section('content')
<div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{asset('img/profile.jpg')}}" alt="Alex Smith">
              </div>
              <div class="header-titles">
                <h2>Si Thu Myo</h2>
                    <h4>Web Developer</h4>
              </div>
            </div>

            <ul class="main-menu">
                
              <li class="active">
                <a href="/"  class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="/#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="/#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="/#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="/#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
            </div>
          
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <div class="content-area single-page-area">
            <div class="single-page-content">

            <!-- Blog Subpage -->
            <article class="post">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                    <ul class="portfolio-filters">
                        @foreach($categories as $category)
                        
                        <li>
                            <a href="{{route('blog_search_by_cat',[$category->id])}}"  class=<?php if($category->id == $category_active->id) echo "active filter btn btn-sm btn-link"?>
                                data-group="category_all">{{$category->name}}</a>
                        </li>
                       
                        @endforeach
                    </ul>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry two-columns clearfix">

                                    <!-- Blog Post 1 -->
                                    @foreach($blogs as $b)
                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <div class="category">
                                                    <a href="#" title="">{{$b->category->name}}</a>
                                                </div>
                                                <a href="{{ url('/blog-details',['id' => $b->id]) }}">
                                                    <img src="{{Storage::url($b->image)}}" height="200px"
                                                        class="size-blog-masonry-image-two-c"
                                                        alt="Why I Switched to Sketch For UI Design" title="" />
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">05 Mar 2020</div>
                                                <a href="#">
                                                    <h5 class="blog-item-title">{{$b->title}}</h5>
                                                    <p class="blog-item-title">{{substr($b->description,0,150)}}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End of Blog Post 1 -->

                                </div>
                            </div>
                        </div>
                    </div>


</article>
                <!-- End of Blog Subpage -->

            </div>
          </div>

      </div>
    </div>
@endsection