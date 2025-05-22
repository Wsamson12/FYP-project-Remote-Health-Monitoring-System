const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

$(document).ready(function() {


    $('#reset').click(function() {
      $('#username').val('');
      $('#welcome-message').empty();
    });

    $('#sign-up').click(function() {
      var name = $('#name').val();
      if (name !== '') {
        alert('You have successfully registered. Please verify your email.');
      }
    });
  });


  $(document).ready(function() {
    $('login').addClass('striped');

    $('tr').hover(
      function() {
        $(this).addClass('over');
      },
      function() {
        $(this).removeClass('over');
      }
    );
  });
