<?php require_once("header.php"); ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <style>
  body { background-color:#fafafa;}
    .no-float {
      float: none;
    }

    .mt30 {
      margin-top: 30px;
    }

    .js-validate-error-label {
      margin-top: 5px;
    }
    .container { margin-top:150px}
  </style>
</head>
<div class="container">
<h1>Just-validate Demo</h1>
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
      <input type="checkbox" id="checkbox" class="form__checkbox" data-validate-field="checkbox" checked=""><label for="checkbox">I agree to the terms and conditions</label>
    </div>

    <button class="form__btn btn btn-primary">SUBMIT</button>
  </form>
  <br>
  <h2>Default validation</h2>
  <div>For success validation email must be equal ok@test.com</div>
  <br>
  <form action="#" class="js-form-2 form" novalidate="novalidate">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="name">Enter your name</label>
        <input type="text" class="form__input form-control" placeholder="Enter your name" autocomplete="off" data-validate-field="name" name="name" id="name-1">
      </div>
      <div class="form-group col-md-6">
        <label for="email">Enter your email</label>
        <input type="email" class="form__input form-control" placeholder="Enter your email" autocomplete="off" data-validate-field="email" name="email" id="email-1">
      </div>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>

</body>
</html>