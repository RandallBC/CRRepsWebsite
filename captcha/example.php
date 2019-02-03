<link href="captcha/style.css" media="screen" rel="stylesheet" type="text/css" />
<script src="captcha/jCaptcha.min.js"></script>

<form class="form" action="">
  <br>
  <input class="jCaptcha" type="text" placeholder="Type in result">
  <button class="button" type="submit">Submit</button>
</form>

<script>
  var myCaptcha = new jCaptcha({

    callback: function(response, $captchaInputElement) {
      if (response == 'success') {
        $captchaInputElement[0].classList.remove('error');
        $captchaInputElement[0].classList.add('success');
        $captchaInputElement[0].placeholder = 'Submit successful!';
      }
      if (response == 'error') {
        $captchaInputElement[0].classList.remove('success');
        $captchaInputElement[0].classList.add('error');
        $captchaInputElement[0].placeholder = 'Please try again!';
      }
    }
  });

  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    myCaptcha.validate();
  });

</script>
