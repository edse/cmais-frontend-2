<script src='http://cmais.com.br/portal/js/jquery-1.7.2.min.js' type='text/javascript'></script><script type='text/javascript'>
        $(document).ready(function() {

          $.ajax({
            type : 'GET',
            dataType : 'jsonp',
            url: 'http://app.cmais.com.br/actions/captcha/ip.php',
            success: function(data){
              //alert(data.ip);
              showRecaptcha('recaptcha_div');

              $('#captcha').click(function() {
                $.ajax({
                  type : 'GET',
                  dataType : 'jsonp',
                  data : 'privatekey=6LeZxOkSAAAAAAIfODCsLpQ3EMiU3jVv6HwvTUCc&remoteip='+data.ip+'&challenge='+$('#recaptcha_challenge_field').val()+'&response='+$('#recaptcha_response_field').val(),
                  url: 'http://www.google.com/recaptcha/api/verify',
                  success: function(data){
                    alert(data);
                  }
                });
              });

            }
          });
        });
      </script><script type='text/javascript' src='http://www.google.com/recaptcha/api/js/recaptcha_ajax.js'></script><!-- Wrapping the Recaptcha create method in a javascript function --><script type='text/javascript'>
         function showRecaptcha(element) {
           Recaptcha.create('6LeZxOkSAAAAAGU0TsbGWao8ILCwrOv_xKyosh4I', element, {
             theme: 'clean',
             callback: Recaptcha.focus_response_field});
         }
      </script>
<div id="recaptcha_div">
  &nbsp;</div>
<p>
  <button id="captcha" type="button">Test</button></p>
