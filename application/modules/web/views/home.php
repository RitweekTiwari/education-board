 <div class="page-content-inner">

   <?php if (is_array($slider)) : ?>
     <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">
       <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@m">
         <?php foreach ($slider as $value) : ?>
           <li>
             <?php if ($value['buttonUrl'] != "") : ?>
               <a href="<?php echo $value['buttonUrl']; ?>">
                 <img src="<?php echo base_url($value['source']); ?>" alt="">
                 <div class="uk-position-center uk-panel">
                   <h1 uk-slideshow-parallax="x: 200,0,0"><?php echo $value['heading']; ?></h1>
                   <h4 uk-slideshow-parallax="x: 200,0,0" class="my-lg-4"> <?php echo $value['details']; ?> <br> </h4>
                 </div>
               </a>
             <?php else : ?>
               <img src="<?php echo base_url($value['source']); ?>" alt="">
               <div class="uk-position-center uk-panel">
                 <h1 uk-slideshow-parallax="x: 200,0,0"><?php echo $value['heading']; ?></h1>
                 <h4 uk-slideshow-parallax="x: 200,0,0" class="my-lg-4"> <?php echo $value['details']; ?> <br> </h4>
               </div>
             <?php endif; ?>

           </li>
         <?php endforeach; ?>
       </ul>
       <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
       <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
     </div>
   <?php else : ?>
     <div class="home-hero" data-src="<?php echo base_url() ?>/assets/images/home-hero.png" uk-img>
       <div class="uk-width-1-1">
         <div class="page-content-inner uk-position-z-index">
           <h1>Learn HTML , CSS , iphone <br> Apps & More</h1>
           <h4 class="my-lg-4"> Learn how to build websites & apps <br> write a code or start a business </h4>
           <a href="#" class="btn btn-default">Free trailer </a>
         </div>
       </div>
     </div>
   <?php endif; ?>
   <div class="section-small pt-0">
     <div class="uk-flex-middle uk-card uk-card-default uk-card-body" uk-grid>
       <div class="uk-width-2-3@m">
         <h1>Prep Smart. Score Better.</h1>

         <p>Join India’s largest exam preparation platform.</p>
       </div>
       <div class="uk-width-1-3@m uk-flex-first"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Image"> </div>
     </div>
   </div>

   <div class="container">

     <div class="section-small">

       <div class="course-grid-slider" uk-slider="finite: true">

         <div class="grid-slider-header">
           <div>
             <h4 class="uk-text-truncate"> Trending Videos
               <a href="" class="text-muted">(Popular Courses)</a> </h4>
           </div>
           <div class="grid-slider-header-link">
             <a href="" class="button transparent uk-visible@m"> View all </a>
             <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
             <a href="#" class="slide-nav-next" uk-slider-item="next"></a>
           </div>
         </div>

         <!-- Tranding Videos -->

         <?php get_section('web/layout/get_trending'); ?>

       </div>

     </div>

     <div class="section-small pt-0">

       <div class="course-grid-slider" uk-slider="finite: true">

         <div class="grid-slider-header">
           <div>
             <h4 class="uk-text-truncate"> popular <a href="#" class="text-muted">Courses</a> </h4>
           </div>
           <div class="grid-slider-header-link">

             <a href="<?php echo base_url('courses'); ?>" class="button transparent uk-visible@m"> View all </a>
             <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
             <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

           </div>
         </div>

         <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
           <?php foreach ($category as $value) : ?>
             <li>
               <a href="<?php echo base_url('courses'); ?>" class="skill-card">
                 <i class="icon-brand-angular skill-card-icon" style="color:#dd0031"></i>
                 <div>
                   <h2 class="skill-card-title"> <?php echo ucfirst($value['name']); ?> Courses</h2>
                   <p class="skill-card-subtitle"> <?php echo $value['course']; ?> courses <span class="skill-card-bullet"></span> 3
                     bundles
                   </p>
                 </div>
               </a>
             </li>
           <?php endforeach; ?>
         </ul>

       </div>

     </div>
     <div class="section-small pt-0">
       <div class="uk-flex-middle uk-card uk-card-default uk-card-body" uk-grid>
         <div class="uk-width-2-3@m">
           <h4>Get Best Counselling By Our Expert Faculty and Achieve Your Dream </h4>
           <h4>Expert Faculty से परामर्श करे आज ही</h4>
           <p>Totally FREE of Cost </p>
         </div>
         <div class="uk-width-1-3@m uk-flex-first"> <img src="<?php echo base_url('assets/images/3.jpg'); ?>" alt="Image"> </div>
         <a href="<?php echo base_url('counselling'); ?>" class='btn btn-primary'>Register Here</a>
       </div>
     </div>
     <div class="section-small pt-0">

       <div class="course-grid-slider" uk-slider="finite: true">

         <div class="grid-slider-header">
           <div>
             <h4 class="uk-text-truncate"> Popular <a href="<?php echo base_url('test'); ?>" class="text-muted">Test Series</a> </h4>
           </div>
           <div class="grid-slider-header-link">

             <a href="<?php echo base_url('test'); ?>" class="button transparent uk-visible@m"> View all </a>
             <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
             <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

           </div>
         </div>

         <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
           <?php foreach ($test as $value) : ?>
             <li>
               <a href="<?php echo base_url('test/show/') . $value['testid']; ?>" class="skill-card">
                 <i class="icon-brand-vuejs skill-card-icon" style="color:#dd0031"></i>
                 <div>
                   <h2 class="skill-card-title"> <?php echo ucfirst($value['title']); ?> </h2>
                   <p class="skill-card-subtitle"> <?php echo $value['totalno']; ?> questions
                   </p>
                 </div>
               </a>
             </li>
           <?php endforeach; ?>
         </ul>

       </div>

     </div>


     <div class="section-small pt-0">
       <div class="uk-flex-middle uk-card uk-card-default uk-card-body" uk-grid>
         <div class="uk-width-2-3@m">
           <h1>Why Join KALKA IAS Zone Test Series :-</h1>

           <ul class="uk-list uk-list-bullet">
             <li>
               Accuracy of answer
             </li>
             <li>
               Based on latest exams
             </li>
             <li>
               All india rank
             </li>
             <li>
               Detail Solution of question
             </li>
             <li>
               Regular updated question
             </li>
             <li>
               Design by expert faculty
             </li>

           </ul>

         </div>
         <div class="uk-width-1-3@m uk-flex-first"> <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Image"> </div>
         <a href="<?php echo base_url('test'); ?>" class='btn btn-success'>Test Series</a>
       </div>

     </div>

     <div class="section-small pt-0">

       <div class="course-grid-slider" uk-slider="finite: true">

         <div class="grid-slider-header">
           <div>
             <h4 class="uk-text-truncate"> Demo Videos & PDF
               <a href="#" class="text-muted">(Free Access)</a> </h4>
           </div>
           <div class="grid-slider-header-link">

             <a href="" class="button transparent uk-visible@m"> View all </a>
             <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
             <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

           </div>
         </div>

         <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid" ng-controller="coursesController">
           <li ng-repeat='course in courses'>
             <a href="<?php echo base_url('course/') . '{{course.course_id}}' ?>">
               <div class="course-card">
                 <div class="course-card-thumbnail ">
                   <img class="lazyload blur-up" src="{{course.image}}">
                   <span class="play-button-trigger"></span>
                 </div>
                 <div class="course-card-body">
                   <h4> {{course.name}} </h4>
                   <p> {{course.slug}} </p>
                   <div class="course-card-footer">
                     <h5> <i class="icon-feather-film"></i> {{course.course_type}} level </h5>
                     <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                   </div>
                 </div>

               </div>
             </a>

           </li>
         </ul>

       </div>

     </div>

     <div class="section-small pt-0">

       <div class="course-grid-slider" uk-slider="finite: true">

         <div class="grid-slider-header">
           <div>
             <h4 class="uk-text-truncate"> Testimonials
             </h4>
           </div>
           <div class="grid-slider-header-link">

             <a href="" class="button transparent uk-visible@m"> View all </a>
             <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
             <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

           </div>
         </div>

         <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid" ng-controller="coursesController">
           <li>

             <div class="course-card">
               <div class="course-card-thumbnail ">
                 <img class="lazyload blur-up rounded-circle" src="<?php echo base_url('assets/images/avatars/avatar-2.jpg') ?>">
                 <span class="play-button-trigger"></span>
               </div>
               <div class="course-card-body text-center">
                 <h4> Name </h4>
                 <p> Content </p>
                 <div class="course-card-footer">
                   <h5> <i class="icon-feather-film"></i> Student </h5>

                 </div>
               </div>

             </div>


           </li>
         </ul>

       </div>

     </div>
     <div class="section-small pt-0">
       <p>Kalka ias zone is an online/offline platform to turn your dreams into reality and get a best job in the government sector. Kalka ias zone provides daily current affairs, study material, notes, preparation tips, mock test, online coaching and more to help you crack the government job exams effortlessly. We provide you month-long structured coaching classes for competition exam preparation at affordable tuition fees, with an exclusive session for clearing doubts, ensuring that neither you nor the topics remain unattended.
       </p>

       <p>
         Practice papers, online/offline coaching classes, online/offline test series and pdf notes are key for any competitive exam preparation. Thus, Kalka ias zone personalised your learning and provide all the required materials for Teaching, UPSC, MPPSC, S.I., VYAPAM, NEET and other competitive exams.
       </p>
       Our platform encourages your Online/Offline engagement with the Master Teachers. Revision notes and formula sheets are shared with you, for grasping the toughest concepts. Assignments, Regular works, Subjective & Objective Tests promote your regular practice of the topics. Sessions get recorded for you to access for quick revision later, just by a quick login to your account. Interactive approach establishes a well-deserved academic connect between you and Master Teachers.
       </p>

       <p>
         Engaging online classrooms allow you to formulate your preparation strategy and get a real classroom environment. To put your progress in action, numerous practice questions with in-depth solutions are mapped here in accordance with the latest syllabus & exam pattern. 24*7 support by our faculties is provided to keep your productivity on track and spend your time wisely.
       </p>

       <p class='text-center'>
         Therefore, download the Kalka ias zone app today to find your dream job and make your career in the government sector. Access the current affairs and stay updated along with brainstorming and collaborative notes to make progress towards a better position.
       </p>
       <div class="section-small pt-0">
         <div class="uk-flex-middle uk-card uk-card-default uk-card-body" uk-grid>
           <div class="uk-width-2-3@m">
             <h1>Download our App</h1>

             <p>Join India’s largest exam preparation platform.</p>
           </div>
           <div class="uk-width-1-3@m uk-flex-first"> <a href="https://play.google.com/store/apps/details?id=co.classplus.kalka "><img src="<?php echo base_url('assets/images/googleplay.png'); ?>" alt=""></a> </div>
         </div>
       </div>
     </div>
     <!-- Footer  -->
     <?php
      get_footer();
      ?>
   </div>
 </div>

 <script type="text/javascript">
   app.controller('coursesController', function($scope, $http) {
     $scope.courses = [];
     $http.get('<?php echo base_url('courses/get_list/all/1'); ?>')
       .then(function($data) {
         console.log($data);
         $scope.courses = $data.data.products;
       });
   });
 </script>