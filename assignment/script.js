document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('show-register').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('register-container').classList.remove('hidden');
    document.getElementById('login-containers').classList.add('hidden');


  });

  document.getElementById('show-login').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('register-container').classList.add('hidden');
    // document.getElementById('register-container').classList.add('hidden');
    document.getElementById('login-containers').classList.remove('hidden');


  });
});




$(document).ready(function(){
  $('#login-form').submit(function(event){
      event.preventDefault();
      var username = $('#username').val();
      var password = $('#password').val();

      $.ajax({
          url: 'login.php',
          method: 'POST',
          data: {username: username, password: password},
          success: function(response){
              if(response === 'success'){
                  window.location.href = 'dashboard.php';
              } else {
                  $('#error-message').text(response);
              }
          }
      });
  });
});

function validateImage() {
  var fileInput = document.getElementById('profilePicture');
  var errorMessage = document.getElementById('errorMessage');
  
  // Check if file input has a value
  if (fileInput.files.length === 0) {
    errorMessage.textContent = 'Please select an image file.';
    return;
  }
  
  // Get the file object
  var file = fileInput.files[0];
  
  // Check if file type is valid (JPEG or PNG)
  var validExtensions = ['image/jpeg', 'image/jpg', 'image/png'];
  if (validExtensions.indexOf(file.type) === -1) {
    errorMessage.textContent = 'Invalid file type. Please select a JPEG or PNG image.';
    fileInput.value = ''; // Clear the file input
    return;
  }
  
  // Reset error message if validation passes
  errorMessage.textContent = '';
}


$(document).ready(function(){
  $('#registrationForm').submit(function(event){
      event.preventDefault();
      var formData = new FormData($(this)[0]);
      $.ajax({
          url: 'registersave.php',
          type: 'POST',
          data: formData,
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function(response){
              $('#message').text(response);
          }
      });
      return false;
  });
});
