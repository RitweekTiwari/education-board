<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <form action="<?php echo base_url('admin/course/update') ?>" method="POST">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="product-status-wrap drp-lst">

              <h4>Edit Course</h4>
              <div class="form-group">
                <label class="login2">Course Name</label>
                <input name="coursename" type="text" class="form-control" value="<?php echo $course->name; ?>">
              </div>

              <div class="form-group">
                <label class="login2">Course Description</label>
                <textarea name="description" id="summernote1"><?php echo  $course->description ?></textarea>
              </div>
              <h4>This Course Include</h4>
              <div class="form-group">
                <div class='row'>
                  <div class="col-lg-6  col-xs-12">
                    <label class="login2">Course Duration(Hrs)</label>
                    <input name="duration" type="number" class="form-control" value="<?php echo $course->duration; ?>">
                  </div>
                  <div class="col-lg-6  col-xs-12">
                    <label class="login2">Number of Articles </label>
                    <input name="article" type="number" class="form-control" value="<?php echo $course->article; ?>">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label class="login2">Certificate</label>
                <input name="certificate" type="checkbox" <?php if ($course->certificate == 1) {
                                                            echo "checked";
                                                          } ?>>
                <label class="login2">Lifetime Access</label>
                <input name="lifetime" type="checkbox" <?php if ($course->lifetime == 1) {
                                                          echo "checked";
                                                        } ?>>
                <label class="login2">Watch Offline</label>
                <input name="offline" type="checkbox"  <?php if ($course->offline == 1) {
                                                                echo "checked";
                                                              } ?>>

              </div>
              <h4>Edit Course Planning</h4>


              <div class="form-group">
                <label class="login2">Planning Description</label>
                <textarea name="plan_description" id="summernote1"><?php echo  $course->plan_description ?></textarea>
              </div>
              <div class="form-group res-mg-t-15">
                <label class="login2">ADD PDF</label>
                <select class="select2_demo_2 form-control" name='pdf' data-placeholder="Choose a PDF...">
                  <?php foreach ($pdf as $row) { ?>
                    <option value="<?php echo $row['docid'] ?>" <?php if ($course->docid == $row['docid']) {
                                                                  echo "selected";
                                                                } ?>> <?php echo $row['name'] ?> </option>
                  <?php } ?>
                </select>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="product-status-wrap drp-lst">
              <?php if (isset($image->thumb)) : ?>
                <span id="addfeaturepreview">
                  <img src="<?php echo base_url() . $image->thumb; ?>" alt="">
                  <input type="hidden" name="featureImage" value="<?php echo $image->thumb; ?>">
                </span>
                <button id="removepreview" type="button" class="btn btn-link">remove</button>
                <button id="addfeatureimage" type="button" class="btn btn-link" name="button">change feature image</button>
              <?php else : ?>
                <span id="addfeaturepreview">
                </span>
                <button id="removepreview" type="button" class="btn btn-link hide">remove</button>
                <button id="addfeatureimage" type="button" class="btn btn-link" name="button">Add feature image</button>
              <?php endif; ?>
              <div class="form-group">
                <label class="login2">Slug</label>
                <input name="slug" type="text" class="form-control" placeholder="slug" value="<?php echo  $course->slug; ?>">
              </div>
              <div class="form-group res-mg-t-15">
                <label class="login2">Course Level</label>
                <select class="form-control" name='course_type' data-placeholder="Choose a Level..." required>
                  <?php if ($course->course_type == 'beginner') : ?>
                    <option selected value="beginner">Beginner</option>
                    <option value="entermidate">Entermidate</option>
                    <option value="expert">Expert</option>
                  <?php elseif ($course->course_type == 'entermidate') : ?>
                    <option value="beginner">Beginner</option>
                    <option selected value="entermidate">Entermidate</option>
                    <option value="expert">Expert</option>
                  <?php else : ?>
                    <option value="beginner">Beginner</option>
                    <option value="entermidate">Entermidate</option>
                    <option selected value="expert">Expert</option>
                  <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label class="login2">Course Category</label>
                <select class="select2_demo_2 form-control" name='category[]' data-placeholder="Choose a Category..." multiple="multiple">
                  <?php foreach ($category as $row) { ?>
                    <?php if (in_array($row['id'], $indexcategory)) : ?>
                      <option selected value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?> </option>
                    <?php else : ?>
                      <option value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?> </option>
                    <?php endif; ?>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label class="login2">Course Tag</label>
                <select class="select2_demo_2 form-control" name='tag[]' data-placeholder="Choose a Tags..." multiple="multiple">
                  <?php foreach ($tag as $row) { ?>
                    <?php if (in_array($row['id'], $indextags)) : ?>
                      <option selected value="<?php echo $row['id'] ?>"> <?php echo $row['title'] ?> </option>
                    <?php else : ?>
                      <option value="<?php echo $row['id'] ?>"> <?php echo $row['title'] ?> </option>
                    <?php endif; ?>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label class="login2">Create Date:</label>
                <span><?php echo my_date_show_time($course->created); ?></span>
              </div>
              <div class="form-group">
                <label class="login2">Status:</label>
                <?php if ($course->is_publish) : ?>
                  <span>Publish</span>
                <?php else : ?>
                  <span>Save in Draft</span>
                <?php endif; ?>
              </div>
              <div class="payment-adress">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                <input type="hidden" name="course_id" value="<?php echo $course->course_id; ?>">

                <?php if ($course->is_publish) : ?>
                  <button type="submit" name='submit' value="save" class="btn btn-primary pull-left ">Draft</button>
                <?php else : ?>
                  <button type="submit" name='submit' value="publish" class="btn btn-primary pull-left ">Publish</button>
                <?php endif; ?>
                <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
              </div>


            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>