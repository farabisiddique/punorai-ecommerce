
$(document).ready(function () {
    // Login Signup Modal Flipping
    function showSignupForm() {
      $('#loginForm').hide();
      $('#signupForm').show();
    }

    function showLoginForm() {
      $('#signupForm').hide();
      $('#loginForm').show();
    }

    $('#flipToSignup').click(showSignupForm);
    $('#flipToLogin').click(showLoginForm);
  
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#btn-back-to-top').fadeIn();
      } else {
        $('#btn-back-to-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#btn-back-to-top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 400);
      return false;
    });

    
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });


    // Signup Ajax
    $("#signupFormMain").submit(function(event){
        event.preventDefault(); 

        var email = $("#signupEmail").val();
        var password = $("#signupPassword").val();
        var confirmPassword = $("#confirmPassword").val();

        if(password !== confirmPassword) {
            $("#confirmPasswordHelpBlock").html("Passwords do not match.");
            return; 
        }

        $.ajax({
            type: "POST",
            url: "signup.php", 
            data: {
                email: email,
                password: password
            },
            success: function(data){
                if(data==0){
                  $("#emailHelpBlock").html("You have already created an account with this email.");
                }
                else if(data==1){
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
  
                    setTimeout(function() {
                        successModal.hide();
                        successModal._element.addEventListener('hidden.bs.modal', function () {
                            
                        }, { once: true }); 
                    }, 5000); 

                    showLoginForm();
                }
                else{
                  $("#emailHelpBlock").html("Error occurred! Please try again.");
                }
            },
            error: function(){
                $("#emailHelpBlock").html("Error occurred! Please try again.");
            }
        });
    });

    // Login Ajax
    $('#loginFormMain').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {loginEmail: email, loginPassword: password},
            success: function(response) {
                if (response == 1) {
                    window.location = 'index.php'; // Redirect to the dashboard if login is successful
                } 
                else if(response == 2){
                    $("#loginEmailHelpBlock").empty();
                    $("#loginPasswordHelpBlock").html("Wrong password.");
                }
                else if(response == 3){
                    $("#loginPasswordHelpBlock").empty();
                    $("#loginEmailHelpBlock").html("User not found.");
                }
                else if(response == 4){
                    $("#loginPasswordHelpBlock").empty();
                    $("#loginEmailHelpBlock").html("Please provide both email and password.");
                }
            }
        });
    });


    
    function adjustNavItems() {
      const nav = document.getElementById('dynamicNav');
      const moreDropdown = nav.querySelector('.dropdown');
      const dropdownMenu = moreDropdown.querySelector('.dropdown-menu');
      const navItems = Array.from(nav.querySelectorAll('.nav-link:not(.dropdown-toggle)'));
  
      // Reset by moving all dropdown items back to the nav
      dropdownMenu.querySelectorAll('.dropdown-item').forEach(item => {
          const a = document.createElement('a');
          console.log(item.textContent);
          a.className = 'nav-link text-light';
          a.href = item.href;
          a.textContent = item.textContent;
          nav.insertBefore(a, moreDropdown);
          item.remove();
      });
  
      let navWidth = nav.offsetWidth;
      const moreWidth = moreDropdown.offsetWidth;
      let totalItemsWidth = navItems.reduce((acc, link) => acc + link.offsetWidth, 0);
  
      // Move items to dropdown if total items width exceeds nav width
      while (totalItemsWidth + moreWidth > navWidth && navItems.length > 0) {
          const item = navItems.pop();
          totalItemsWidth -= item.offsetWidth;
          const li = document.createElement('li');
          li.innerHTML = `<a class="dropdown-item" href="${item.href}">${item.textContent}</a>`;
          dropdownMenu.insertBefore(li, dropdownMenu.firstChild);
          item.remove();
      }
  
      if (dropdownMenu.children.length === 0) {
          moreDropdown.classList.add('d-none');
      } else {
          moreDropdown.classList.remove('d-none');
      }
    }
  
    // Initial adjustment
    adjustNavItems();
  
    // Adjust on window resize
    window.addEventListener('resize', adjustNavItems);

  
  });






