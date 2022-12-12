<?php require_once("header.php"); ?>
<div class="container">
<div class="col-md-6 center-block no-float mt30">
  <h2>Classic validation</h2>
  <form action="#" class="js-form form" novalidate="novalidate">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="name">Enter your name</label>
        <input type="text" class="form__input form-control" placeholder="Enter your name" autocomplete="off" data-validate-field="name" name="name" id="name">
      </div>
      <div class="form-group col-md-6">
        <label for="email">Enter your email</label>
        <input type="email" class="form__input form-control" placeholder="Enter your email" autocomplete="off" data-validate-field="email" name="email" id="email">
      </div>
    </div>
    <div class="form-group">
      <label for="password">Enter your password</label>
      <input type="password" class="form__input form-control" placeholder="Enter your password" autocomplete="off" data-validate-field="password" name="password" id="password">
    </div>
    <div class="form-group">
      <label for="password">Enter your text</label>
      <textarea name="msg" cols="30" rows="10" class="form__textarea form-control" data-validate-field="text" id="text"></textarea>
    </div>
    <div class="form-group">
      <input type="checkbox" id="checkbox" class="form__checkbox" data-validate-field="checkbox" checked=""><label for="checkbox">I agree</label>
    </div>
    <div class="form-group">
      <label><input type="checkbox" class="form__checkbox" data-validate-field="checkbox2" checked="">I agree</label>
    </div>

    <button class="form__btn btn btn-primary">SUBMIT</button>
  </form>
</div>
<script src="js/just-validate.min.js"></script>

<script>
  new window.JustValidate('.js-form', {
    rules: {
      checkbox: {
        required: true
      },
      checkbox2: {
        required: true
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: 'https://just-validate-api.herokuapp.com/check-correct',
          sendParam: 'email',
          successAnswer: 'OK',
          method: 'GET'
        }
      }
    },

    submitHandler: function (form, values, ajax) {
      ajax({
        url: 'https://just-validate-api.herokuapp.com/submit',
        method: 'POST',
        data: values,
        async: true,
        callback: function (response) {
          alert('AJAX submit successful! \nResponse from server:' + response)
        },
        error: function (response) {
          alert('AJAX submit error! \nResponse from server:' + response)
        }
      });
    },
  });

  new window.JustValidate('.js-form-2', {
            rules: {
              email: {
                required: true,
                email: true,
                remote: {
                  url: 'https://just-validate-api.herokuapp.com/check-correct',
                  sendParam: 'email',
                  successAnswer: 'OK',
                  method: 'GET'
                }
              }
            }
          }
  );
</script>
</div>
