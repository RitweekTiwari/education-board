  <!doctype html>
  <html lang="en">


  <!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 12:31:46 GMT -->
  <head>

      <!-- Basic Page Needs
      ================================================== -->
      <title>Courseplus Learning HTML Template</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

      <!-- Favicon -->
      <link href="<?php echo base_url() ?>/assets/images/favicon.png" rel="icon" type="image/png">

      <!-- CSS
      ================================================== -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/night-mode.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/framework.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

      <!-- icons
      ================================================== -->
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icons.css">

      <!-- JQuery -->

      <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>


      <!-- Anguler Js
        ================================================ -->

      <script src="<?php echo base_url('assets/js/angular.min.js'); ?>" charset="utf-8"></script>




      <style>
          .flex-wrapper {
              display: flex;
              flex-flow: row nowrap;
          }

          .single-chart {
              width: 33%;
              justify-content: space-around;
          }

          .circular-chart {
              display: block;
              margin: 10px auto;
              max-width: 80%;
              max-height: 250px;
          }

          .circle-bg {
              fill: none;
              stroke: #eee;
              stroke-width: 3.8;
          }

          .circle {
              fill: none;
              stroke-width: 2.8;
              stroke-linecap: round;
              animation: progress 1s ease-out forwards;
          }

          @keyframes progress {
              0% {
                  stroke-dasharray: 0 100;
              }
          }

          .circular-chart.orange .circle {
              stroke: #ff9f00;
          }

          .circular-chart.green .circle {
              stroke: #4CC790;
          }

          .circular-chart.blue .circle {
              stroke: #3c9ee5;
          }

          .percentage {
              fill: #666;
              font-family: sans-serif;
              font-size: 0.5em;
              text-anchor: middle;
          }
          .blur-up {
            -webkit-filter: blur(5px);
            filter: blur(5px);
            transition: filter 400ms, -webkit-filter 400ms;
          }

          .blur-up.lazyloaded {
            -webkit-filter: blur(0);
            filter: blur(0);
          }
      </style>

      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/preloder.css">

      <script type="text/javascript">
          setTimeout(function(){
            $('body').addClass('loaded');
          }, 1200);
      </script>

  </head>

  <body>
    <div class="loader-wrapper">
     <div class="loader"></div>
     <div class="loader-section section-left"></div>
     <div class="loader-section section-right"></div>
   </div>
