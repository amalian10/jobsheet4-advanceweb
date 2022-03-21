@extends('layouts.main')

@section('content')
<div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="main-template-about">
         <div class="section-gradient">
            <div class="map"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="wow fadeIn" data-wow-delay="0.0s">
                        <h1>Expand business.
                           Inspiring you to success.
                        </h1>
                        <p class="lead">Here at Chamb, we want you to find new connections, grow profitable relationships, and make more money than you could ever dream of making. Sound like something you’d like to do? Then what are you reading this for?
                           <br>
                           <br>
                           Go sign up and get inspired!
                        </p>
                     </div>
                     <div class="about-icons row">
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.0s"><img src="images/about-icon-1.png" alt=""/></div>
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.2s"><img src="images/about-icon-2.png" alt=""/></div>
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.4s"><img src="images/about-icon-3.png" alt=""/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section do">
            @foreach($abouts as $about)
            <div class="blue-light"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="does-box">
                        <div class="panel-body">
                           <h2>{{$about -> title}}</h2>
                           <p>{{$about -> deskripsi1}}
                           </p>
                           <p>{{$about -> deskripsi2}}
                           </p>
                           <p>{{$about -> deskripsi3}}
                           </p>
                           <p>{{$about -> deskripsi4}}
                           </p>
                        </div>
                        <img class="wow fadeIn" src="images/{{$about -> image}}" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="seciton create">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>Why Create Chamb</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     </p>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
                        voluptatem quia dolore magnam aliquam quaerat voluptatem.
                     </p>
                     <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                        consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel 
                        illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                     </p>
                     <p>We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between 
                        businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website 
                        that helps discover and build profitable long-lasting networks amongst businesses around the world.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="section account-box">
            <div class="blue-dark"></div>
            <div class="light-blue-grad"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="blue-form">
                        <h2>Start a free account today</h2>
                        <form class="form-inline">
                           <input type="email" placeholder="Enter your e-mail" />
                           <button type="submit" class="btn btn-primary">Continue</button>
                        </form>
                        <p>Easy setup - no payment fees - up to 100 products for free</p>
                        <div class="blue-form_question"><strong>Questions?</strong> Call us on 12 34 56 78 for help.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>{{$about -> title}}</h2>
                     <p>{{$about -> deskripsi1}}</p>
                     <p>{{$about -> deskripsi2}}</p>
                     <p>{{$about -> deskripsi3}}</p>
                     <p>{{$about -> deskripsi4}}</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
                     <img class="img-responsive" src="images/{{$about -> image}}" alt="" />
                  </div>
                  @endforeach
                  <div class="col-lg-8 col-lg-offset-2">
                     <p>Chamb is the brainchild of Bayram Filikci. Danish born with Turkish descent, like the famously business savvy Ottomans of old, Bayram has a flair for creativity and business growth hacking. And along with Chamb’s team, we all count ourselves as passionate entrepreneurs who live for the sole purpose of finding solutions to your problems.</p>
                     <p>After gaining much experience in building business from scratch and nurturing them to fruition, the team set its sights on creating a gateway that could help fledgling companies establish new relationships that will propel them forward to unrivalled riches.</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
                     <img src="images/lag-61.png" alt="" />
                  </div>
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>The ball is now yours.</h2>
                     <p>Over the coming years, the way that business through the web works will change at a great level - and Chamb is the gamebreaker. Customers will expect options of where and how to buy: in-store or online, delivered or for pick-up. It’s an incredibly exciting time for this industry, and we’re going to be right at the centre of it.</p>
                     <p>So what are you waiting for? Sign up and create oppurtinities for your business.</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="row">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="rectange">
                              <h3 class="rectange_title">Career opportunities</h3>
                              <p class="rectange_text">We’re growing, and we’re looking for talented people who can make commerce better.</p>
                              <a href="" class="rectange_link">See open positions</a>
                           </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                           <div class="rectange">
                              <h3 class="rectange_title">Contact us</h3>
                              <p class="rectange_text">Have questions or any requests for us? Contact our team and we will get back to you.</p>
                              <a href="" class="rectange_link">Contact Chamb</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>