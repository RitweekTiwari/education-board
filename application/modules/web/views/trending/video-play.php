<div class="page-content">
  <div class="container pt-4">
    <div uk-grid>
      <div class="uk-width-3-4@m">
        <video id="video" controls preload="none" class="lazy" poster="<?php echo base_url($thumb->thumb) ?>">
          <source data-src="<?php echo $views->url ?>" type="video/<?php echo $views->videotype ?>">
        </video>
        <div class="p-3">
          <h2 class="mt-lg-5 "> <?php echo $trending->name; ?> </h2>
          <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
              <span>299 views </span> • <span> <?php echo my_date_show($trending->created_at); ?> </span>
            </div>
            <div class="uk-width-expand">
              <nav class="responsive-tab">
                <ul class="text-right">
                  <li><a href="#"> <i class="uil-cloud-download"></i> <span class="uk-visible@s"> Download </span></a></li>
                  <li><a href="#" uk-toggle="target: #code">
                      <i class="icon-feather-code">
                      </i> <span class="uk-visible@s"> Source code </span> </a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="uk-card-default rounded px-3 pb-md-3" uk-toggle="cls: uk-flex uk-flex-between@m uk-flex-middle; mode: media; media: @m">
            <div class="user-details-card">
              <div class="user-details-card-avatar">
                <img src="../assets/images/avatars/avatar-2.jpg" alt="">
              </div>
              <div class="user-details-card-name">
                Stella Johnson <span> Developer <span> 1 year ago </span> </span>
              </div>
            </div>
            <div>
              <strong class="mx-3 uk-visible@s"> Share on </strong>

              <a href="#" class="btn btn-facebook  rounded-circle btn-icon-only transition-3d-hover">
                <span class="btn-inner--icon">
                  <i class="icon-brand-facebook-f"></i>
                </span>
              </a>

              <a href="#" class="btn btn-twitter rounded-circle btn-icon-only transition-3d-hover">
                <span class="btn-inner--icon">
                  <i class="icon-brand-twitter"></i>
                </span>
              </a>

              <a href="#" class="btn btn-google-plus rounded-circle btn-icon-only transition-3d-hover">
                <span class="btn-inner--icon">
                  <i class="icon-brand-google-plus-g"></i>
                </span>
              </a>

            </div>
          </div>
          <h4 class="mt-3"> Description</h4>
          <p class="lead"><?php echo $trending->slug; ?></p>
          <?php echo $trending->description; ?>
          <!--  off canvas  code-->
          <div id="code" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar uk-width-xlarge p-0">

              <div class="p-4 pb-0">
                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Source code</h3>

                <div class="uk-flex uk-flex-between">
                  <nav class="mb-0">
                    <ul uk-switcher="connect : #code-snipt ; animation: uk-animation-fade" class="mb-0" uk-tab>
                      <li class="uk-active"><a href="#">JavaScript</a></li>
                      <li><a href="#">Html</a></li>
                      <li><a href="#">Css </a></li>
                    </ul>



                  </nav>
                  <div class="uk-flex">

                    <a href="#" class="iconbox iconbox-sm button circle mr-2" uk-tooltip="title: Preview; pos: top">
                      <i class="icon-feather-eye"></i>
                    </a>

                    <a href="#" class="iconbox iconbox-sm button circle" uk-tooltip="title: Downlaod; pos: top">
                      <i class="uil-cloud-download"></i>
                    </a>

                  </div>
                </div>
              </div>

              <ul class="uk-switcher" id="code-snipt">
                <!-- javascript-->
                <li>
                  <pre class="brush: javascript" id="starter-page">
                </li>
                <li>
                  <pre class="brush: html" id="starter-page"></pre>
                </li>
                <li>
                  <pre class="brush: html" id="starter-page"></pre>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-width-expand@m">
        <?php get_related('video', 'trending', 'web/trending/related-tutorials'); ?>
      </div>
    </div>
    <!-- footer
           ================================================== -->
    <?php get_footer(); ?>


  </div>

</div>

<script>
var video = document.getElementById('video');
  video.addEventListener('loadedmetadata', function() {
    if (video.buffered.length === 0) return;
    var bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
  });
  document.addEventListener("DOMContentLoaded", function() {
    var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

    if ("IntersectionObserver" in window) {
      var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(video) {
          if (video.isIntersecting) {
            for (var source in video.target.children) {
              var videoSource = video.target.children[source];
              if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
                videoSource.src = videoSource.dataset.src;
              }
            }

            video.target.load();
            video.target.classList.remove("lazy");
            lazyVideoObserver.unobserve(video.target);
          }
        });
      });

      lazyVideos.forEach(function(lazyVideo) {
        lazyVideoObserver.observe(lazyVideo);
      });
    }
  });

</script>