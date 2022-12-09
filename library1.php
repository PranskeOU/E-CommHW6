<?php require_once("header.php"); ?>
<div class="bs-callout bs-callout-warning hidden">
  <form id="demo-form" data-parsley-validate="" novalidate="">
  <label for="fullname">Full Name * :</label>
  <input type="text" class="form-control" name="fullname" required="">

  <label for="email">Email * :</label>
  <input type="email" class="form-control" name="email" data-parsley-trigger="change" required="">

  <label for="contactMethod">Preferred Contact Method *:</label>
  <p>
    Email: <input type="radio" name="contactMethod" id="contactMethodEmail" value="Email" required="" data-parsley-multiple="contactMethod">
    Phone: <input type="radio" name="contactMethod" id="contactMethodPhone" value="Phone" data-parsley-multiple="contactMethod">
  </p>

  <label for="hobbies">Hobbies (Optional, but 2 minimum):</label>
  <p>
    Skiing <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" data-parsley-multiple="hobbies"><br>
    Running <input type="checkbox" name="hobbies[]" id="hobby2" value="run" data-parsley-multiple="hobbies"><br>
    Eating <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" data-parsley-multiple="hobbies"><br>
    Sleeping <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" data-parsley-multiple="hobbies"><br>
    Reading <input type="checkbox" name="hobbies[]" id="hobby5" value="read" data-parsley-multiple="hobbies"><br>
    Coding <input type="checkbox" name="hobbies[]" id="hobby6" value="code" data-parsley-multiple="hobbies"><br>
  </p>

  <p>
  <label for="heard">Heard about us via *:</label>
  <select id="heard" required="">
    <option value="">Choose..</option>
    <option value="press">Press</option>
    <option value="net">Internet</option>
    <option value="mouth">Word of mouth</option>
    <option value="other">Other..</option>
  </select>
  </p>

  <p>
  <label for="message">Message (20 chars min, 100 max) :</label>
  <textarea id="message" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." data-parsley-validation-threshold="10"></textarea>
  </p>

  <br>
  <input type="submit" class="btn btn-default" value="validate">
</form>
<script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>
