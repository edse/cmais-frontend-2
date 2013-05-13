//signin
$('#signup-btn').click(function() {
  $(this).hide();
  $('#signup-btn').prev().hide();
  $('#signup-form').show();
  $('#signup_name').focus();
});
$('#signup-cancel-btn').click(function() {
  $('#signup-btn').show();
  $('#signup-btn').prev().show();
  $('#signup-form').hide();
  $('#login_email').focus();
});

$('#login-btn').click(function() {
  login({
    email: $('#login_email').val(),
    password: $('#login_password').val(),
    app: "secondscreenqss"
  });
});

$('#signup-form-btn').click(function() {
  $.ajax({
    url: "sign-up.php",
    data: {
      name: $('#signup_name').val(),
      email: $('#signup_email').val(),
      password: $('#signup_password').val(),
      avatar: $('input:radio[name=signup_avatar]:checked').val(),
      app: "secondscreenqss"
    },
    type: "POST",
    dataType: "json",
    success:function(json){
      $('.alert').hide();
      if(json.status == "success"){
        $('#alert-success').fadeIn('slow');
        login({
          email: $('#signup_email').val(),
          password: $('#signup_password').val(),
          app: "secondscreenqss"
        });
      }
      else if(json.status == "taken"){
        $('#alert-email-taken').fadeIn('slow');
        $('#alert-message').html(json.message);
        $('#signup_email').select();
      }
      else
        $('#alert-error').fadeIn('slow');
      console.log(json);
    }
  });
});

function login(data){
  $.ajax({
    url: "sign-in.php",
    data: data,
    type: "POST",
    dataType: "json",
    success:function(json){
      $('.alert').hide();
      if(json.status == "success"){
        self.location.href="../?token="+json.token;
        /*
        var form = $('<form action="http://qss/site/" method="post">'+
        '<input type="text" name="token" value="' + json.token + '" />'+
        '<input type="text" name="name" value="' + json.name + '" />'+
        '<input type="text" name="email" value="' + json.email + '" />'+
        '<input type="text" name="avatar" value="' + json.avatar + '" />'+
        '</form>');
        $('body').append(form);
        $(form).submit();
        */
      }
      else{
        $('#login-alert-error').fadeIn('slow');
        $('#login-alert-message').html(json.message);
      }
      console.log(json);
    }
  });
}
