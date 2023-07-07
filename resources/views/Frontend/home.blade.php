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
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">About Me</span>
                    </a>
                </li>
                <li>
                    <a href="#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-anim">
                        <span class="menu-icon lnr lnr-briefcase"></span>
                        <span class="link-text">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
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

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <section data-id="home" class="animated-section start-page">
                    <div class="section-content vcentered">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>Si Thu Myo</h2>
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            <div class="sp-subtitle">Web Developer</div>
                                        </div>

                                        <div class="item">
                                            <div class="sp-subtitle">Andriod Developer</div>
                                        </div>
                                        <div class="item">
                                            <div class="sp-subtitle">Web Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->
                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="page-title">
                        <h2>About <span>Me</span></h2>
                    </div>

                    <div class="section-content">
                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <p>I am Si Thu Myo and I attended Computer Science Major From Dagon University. I
                                    learned web
                                    development since high school and I really interested in software engineering. I
                                    also worked as a
                                    assistant executive in yangon handmade creations and I got a lot of experiences
                                    within one year. I
                                    also got internship at Thuma Organization and served as a web developer over 3
                                    months. Now I am
                                    working as a developer at NextHop Co.LTd. </p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">Age</span>
                                            <span class="value">21</span>
                                        </li>

                                        <li>
                                            <span class="title">Residence</span>
                                            <span class="value">Burma, Myanmar</span>
                                        </li>

                                        <li>
                                            <span class="title">Address</span>
                                            <span class="value">No;(528), Innwa 4 Street, 6 block, South Okkalapa Tsp,
                                                Yangon,
                                                Myanmar</span>
                                        </li>

                                        <li>
                                            <span class="title">e-mail</span>
                                            <span class="value">sithumyo87@gmail.com</span>
                                        </li>

                                        <li>
                                            <span class="title">Phone</span>
                                            <span class="value">+959 779 795 112</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>What <span>I Do</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-flag"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Management</h4>
                                                <p>Implemented solutions to improve business efficiency, performance,
                                                    cost control, and
                                                    professionalization of employee base</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Web Development</h4>
                                                <p>I do design and create websites. I have responsible for the look of
                                                    the site.I also
                                                    responsible for the site's technical aspects, such as its
                                                    performance and capacity,
                                                    which are measures of a website's speed and how much traffic the
                                                    site can handle.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-pencil"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Freelancer</h4>
                                                <p>I did freelance in web development fields and I did website for
                                                    education, portfolio,
                                                    and other ecommerce.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Services -->

                        <div class="white-space-30"></div>

                        <div class="white-space-50"></div>

                        <!-- Fun Facts -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">

                                <div class="block-title">
                                    <h3>Fun <span>Facts</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-heart"></i>
                                    <h4>Happy Clients</h4>
                                    <span class="fun-fact-block-value">20</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-clock"></i>
                                    <h4>Working Hours</h4>
                                    <span class="fun-fact-block-value">4,780</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 ">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-star"></i>
                                    <h4>Awards Won</h4>
                                    <span class="fun-fact-block-value">4</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Fun Facts -->

                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="page-title">
                        <h2>Resume</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                <div class="block-title">
                                    <h3>Education</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2011-2019</h5>
                                            <span class="item-company">BEHS 2 Yankin</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">High School</h4>
                                            <p>I passed the matriculation from this school and got a lot of fun.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2019-2022</h5>
                                            <span class="item-company">University of Dagon (Computer Science)</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">BACHELOR OF COMPUTER SCIENCE</h4>
                                            <p>I attended computer science major from dagon university. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="white-space-50"></div>

                                <div class="block-title">
                                    <h3>Experience</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2020 - 2021</h5>
                                            <span class="item-company">Yangon Handmade Creations</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">ASSISTANT EXECUTIVE</h4>
                                            <p>I served customer complain, management labours, orders management and
                                                income outcome
                                                management.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2021 Sep - 2021 Nov</h5>
                                            <span class="item-company">Adobe</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Thuma Organization</h4>
                                            <p>We start to make website with team and got a lot knowledge within three
                                                months.</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2020 - present</h5>
                                            <span class="item-company">Freelance</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Web developer</h4>
                                            <p>I am working as a web developer and manage for both backend and frontend
                                                at Nexthop
                                                Co.Ltd.I can lead in the design, development, and implementation of the
                                                graphic, layout,
                                                and production communication materials</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Skills & Certificates -->
                            <div class="col-xs-12 col-sm-5">
                                <!-- Design Skills -->
                                <div class="block-title">
                                    <h3>Design <span>Skills</span></h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 1 -->
                                    @foreach($designSkills as $d)
                                    <div class="skill clearfix">
                                        <h4>{{$d->name}}</h4>
                                        <div class="skill-value">{{$d->percentage}}%</div>
                                    </div>
                                    <div class="progress skill-container" style="height: 10px" m>
                                        <div class="progress-bar skill-percentage" role="progressbar"
                                            style="width: {{$d->percentage}}%;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- End of Design Skills -->

                                <div class="white-space-10"></div>

                                <!-- Coding Skills -->
                                <div class="block-title">
                                    <h3>Coding <span>Skills</span></h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 5 -->
                                    @foreach($codingSkills as $c)
                                    <div class="skill clearfix">
                                        <h4>{{$c->name}}</h4>
                                        <div class="skill-value">{{$c->percentage}}%</div>
                                    </div>
                                    <div class="progress skill-container" style="height: 10px" m>
                                        <div class="progress-bar skill-percentage" role="progressbar"
                                            style="width: {{$c->percentage}}%;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    @endforeach

                                    <!-- End of Coding Skills -->

                                    <div class="white-space-10"></div>

                                    <!-- Knowledges -->
                                    <div class="block-title">
                                        <h3>Knowledges</h3>
                                    </div>

                                    <ul class="knowledges">
                                        @foreach($knowledges as $k)
                                        <li>{{$k->name}}</li>
                                        @endforeach
                                    </ul>
                                    <!-- End of Knowledges -->
                                </div>
                                <!-- End of Skills & Certificates -->
                            </div>

                            <div class="white-space-50"></div>

                            <!-- Certificates -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="block-title">
                                        <h3>Certificates</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Certificate 1 -->
                                @foreach($certificates as $c)
                                <div class="col-xs-12 col-sm-6">
                                    <div class="certificate-item clearfix">
                                        <div class="certi-logo">
                                            <img src="{{Storage::url($c->image)}}" alt="logo">
                                        </div>

                                        <div class="certi-content">
                                            <div class="certi-title">
                                                <h4>{{$c->name}}</h4>
                                            </div>
                                            <div class="certi-id">
                                                <span>Membership ID: XXXX</span>
                                            </div>
                                            <div class="certi-date">
                                                <span>19 April 2018</span>
                                            </div>
                                            <div class="certi-company">
                                                <span>USA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End of Certificate 1 -->

                            </div>
                            <!-- End of Certificates -->
                        </div>
                </section>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section data-id="portfolio" class="animated-section">
                    <div class="page-title">
                        <h2>Portfolio</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <!-- Portfolio Content -->
                                <div class="portfolio-content">


                                    <!-- Portfolio Grid -->
                                    <div class="portfolio-grid three-columns">
                                        @foreach($portfolios as $p)
                                        <figure class="item " data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="{{Storage::url($p->image)}}" height="200px" />
                                                <a href="{{$p->url}}"></a>
                                            </div>
                                            <h4 class="name">{{$p->name}}</h4>
                                        </figure>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End of Portfolio Content -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section data-id="blog" class="animated-section">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                    <ul class="portfolio-filters">
                        @foreach($categories as $category)
                        
                        <li class=<?php if($category->id == 2) echo "active"?>>
                            <a href="{{route('blog_search_by_cat',[$category->id])}}" class="filter btn btn-sm btn-link"
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


                </section>
                <!-- End of Blog Subpage -->
                <!-- blog Detail
                <section data-id="blog-details" class="animated-section">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                    @foreach($blogs as $b)
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry two-columns clearfix">
                                    <div>
                                        <img
                                            src="{{Storage::url($b->image)}}"
                                            class="img-fluid hover-shadow"
                                            alt=""
                                        />
                                    </div>
                                    <p class="pt-3" style="color: #0ba376"><i class="fas fa-user-edit"></i>Name - <span style="color: #0ba376">Si Thu Myo</span> </p>
                                    <p class="" style="color: #0ba376"><i class="fas fa-book"></i>Category - <span style="color: #0ba376">{{$b->category->title}}</span> </p>
                                    <p class="" style="color: #0ba376"><i class="fas fa-clock"></i>Category - <span style="color: #0ba376">21 Nov 2021</span> </p>
                                    <p class="text-light">{{$b->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section> -->
                <!-- End blog Detail -->

                <!-- Contact Subpage -->
                <section data-id="contact" class="animated-section">
                    <div class="page-title">
                        <h2>Contact</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <!-- Contact Info -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-map-marker"></i>
                                    <h4>Myanmar</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h4>+959 779 795 112</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4>sithumyo87@gmail.com</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-checkmark-circle"></i>
                                    <h4>Freelance Available</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>


                            </div>
                            <!-- End of Contact Info -->

                            <!-- Contact Form -->
                            <div class="col-xs-12 col-sm-8">
                                <div id="map" class="map">
                                    <div class="lmpixels-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7637.193524100519!2d96.17386660000003!3d16.8463489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1638002820655!5m2!1sen!2smm"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>
                                </div>
                                <div class="block-title">
                                    <h3>How Can I <span>Help You?</span></h3>
                                </div>

                                <form id="contact_form" class="contact-form"
                                    action="https://lmpixels.com/demo/breezycv/dark/2/contact_form/contact_form.php"
                                    method="post">

                                    <div class="messages"></div>

                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="" required="required"
                                                        data-error="Name is required.">
                                                    <label>Full Name</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="" required="required"
                                                        data-error="Valid email is required.">
                                                    <label>Email Address</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_subject" type="text" name="subject"
                                                        class="form-control" placeholder="" required="required"
                                                        data-error="Subject is required.">
                                                    <label>Subject</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="form_message" name="message" class="form-control"
                                                        placeholder="" rows="7" required="required"
                                                        data-error="Please, leave me a message."></textarea>
                                                    <label>Message</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                                            data-theme="dark"></div>

                                        <input type="submit" class="button btn-send" value="Send message">
                                    </div>
                                </form>
                            </div>
                            <!-- End of Contact Form -->
                        </div>

                    </div>
                </section>
                <!-- End of Contact Subpage -->

            </div>
        </div>

    </div>
</div>
@endsection