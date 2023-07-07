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
                <a href="/" class="nav-anim">
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

              <article class="post">
                <a class="btn btn-sm btn-primary" href="{{ redirect()->getUrlGenerator()->previous() }}">Back</a>
                <div class="post-thumbnail">
                  <img src="{{Storage::url($blog->image)}}" alt="image">
                </div>

                <div class="post-content">
                  <!-- /Entry header -->
                  <header class="entry-header">
                    <!-- Entry meta -->
                    <div class="entry-meta entry-meta-top">
                      <span><a href="#" rel="category tag">{{$blog->category->name}}</a></span>        
                    </div>
                    <!-- /Entry meta -->

                    <h2 class="entry-title">{{$blog->title}}</h2>
                  </header>
                  <!-- /Entry header -->

                  <!-- Entry content -->
                  <div class="entry-content">
                    <div class="row">
                      <div class=" col-xs-12 col-sm-12 ">
                        <div class="col-inner">
                          <p>{{$blog->description}}</p>
                          
                          <!-- <blockquote class="quote">Maecenas id finibus felis. Etiam vitae nibh et felis efficitur pellentesque. Mauris suscipit sapien nunc, a lacinia nibh feugiat ut. In hac habitasse platea dictumst.
                            <footer class="quote-author">
                              <span>Larry L. Johnson</span>
                            </footer>
                          </blockquote> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Entry content -->
    
                  <div class="entry-meta entry-meta-bottom">
                    <div class="date-author">
                      <span class="entry-date">
                        <a href="#" rel="bookmark">
                          <i class="far fa-clock"></i> <span class="entry-date"> {{date('d-m-Y', strtotime($blog->created_at))}}</span>
                        </a>
                      </span>
                      <span class="author vcard">
                        <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> Dev Seeker</a>
                      </span>
                    </div>
      
                    <!-- Share Buttons -->
                    <div class="entry-share btn-group share-buttons">
                      <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      
                      <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>

                      <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </div>
                    <!-- /Share Buttons -->
                  </div>

                  <!-- <div class="post-tags">
                    <div class="tags">
                      <a href="#" rel="tag">animate</a>
                      <a href="#" rel="tag">bar</a>
                      <a href="#" rel="tag">design</a>
                      <a href="#" rel="tag">progress</a>
                      <a href="#" rel="tag">ui</a>
                    </div>
                  </div> -->
                </div>
              </article>

            </div>
          </div>

      </div>
    </div>
@endsection