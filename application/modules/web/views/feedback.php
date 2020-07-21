<!-- content -->
<div class="page-content">


    <div class="container">


        <div class="mt-lg-11 container-small">

            <div class="text-center my-4">
                <h1 class="uk-heading-line text-center"><span>Feedback
                    </span></h1>
            </div>


        </div>
        <form class="uk-grid-small" uk-grid action="<?php echo base_url('web/Home/send_message'); ?>" method="post">
            <div class="uk-width-1-2@s">
                <label class="uk-form-label">Name</label>
                <input class="uk-input" type="text" name="name" value="<?php echo $this->session->userdata('username'); ?>" required>
            </div>
            <input type="hidden" name="user" value='<?php echo $this->session->userdata('userID'); ?>'>
            <input type="hidden" name="type" value="feedback">
            <div class="uk-width-1-2@s">
                <label class="uk-form-label">Email</label>
                <input class="uk-input" type="text" name="email" value="<?php echo $this->session->userdata('email'); ?>" required>
            </div>
            <div class="uk-width-1-1@s">
                <label class="uk-form-label">Comment</label>
                <textarea class="uk-textarea" name="comment" placeholder="Enter Your Comments her..." style=" height:160px" required></textarea>
            </div>
            <div class="uk-grid-margin">
                <input type="submit" value="submit" class="btn btn-default">
            </div>
        </form>

        <!-- footer
       ================================================== -->
        <?php get_footer(); ?>


    </div>

</div>