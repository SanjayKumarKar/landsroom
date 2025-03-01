<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="jquery-validation/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.23/bundled/lenis.min.js"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>




<script src="js/nav.js"></script>
<script src="js/custom.js"></script>

<!-- <script>
    $('select').selectric();
</script> -->

<script>
    const lenis = new Lenis();
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
</script>
<script>
    $('.counter').counterUp({
        delay: 10,
        time: 500
    });
</script>
<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordField = document.getElementById('password');
        var icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

<!-- <script>
    $(document).ready(function() {
        $("#signupForm").validate({
            rules: {
                "user_type[]": { required: true },
                user_name: { required: true },
                user_email: { 
                    required: true, 
                    email: true,
                    remote: {
                        url: "<?= site_url('Authenticate/check_email') ?>",
                        type: "post",
                        data: {
                            user_email: function() {
                                return $("#signupForm input[name='user_email']").val();
                            }
                        }
                    }
                },
                user_password: { required: true, minlength: 6 },
                terms: { required: true }
            },
            messages: {
                "user_type[]": "Please select at least one user type.",
                user_name: "Please enter your name.",
                user_email: {
                    required: "Please enter a valid email address.",
                    email: "Enter a valid email address.",
                    remote: "This email is already registered."
                },
                user_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 6 characters long."
                },
                terms: "You must agree to the Terms and Conditions."
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("text-danger");
                element.closest("div").append(error);
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script> -->

<!-- signup Form validation jquery -->
<script>
$(document).ready(function() {
        $("#signupForm").validate({
            rules: {
                user_name: { required: true },
                user_email: { 
                    required: true, 
                    email: true,
                    remote: {
                        url: "<?= site_url('Authenticate/check_email') ?>",
                        type: "post",
                        data: {
                            user_email: function() {
                                return $("#signupForm input[name='user_email']").val();
                            }
                        }
                    }
                },
                user_password: { required: true, minlength: 6 },
                terms: { required: true }
            },
            messages: {
                user_name: "Please enter your name.",
                user_email: {
                    required: "Please enter a valid email address.",
                    email: "Enter a valid email address.",
                    remote: "This email is already registered."
                },
                user_password: {
                    required: "Please provide a password.",
                    minlength: "Your password must be at least 6 characters long."
                },
                terms: "You must agree to the Terms and Conditions."
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("text-danger");

                // If the element is the password field, append error to the parent div (input-group)
                if (element.attr("name") == "user_password") {
                    element.closest(".input-group").after(error);
                } else {
                    element.closest("div").append(error);
                }
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>


<!-- Login Form validation jquery -->
<script>
    $(document).ready(function() {
        // Show/Hide Password Toggle
        $("#togglePasswordlogin").click(function() {
            var passwordField = $("#password");
            var type = passwordField.attr("type") === "password" ? "text" : "password";
            passwordField.attr("type", type);
            $(this).find("i").toggleClass("fa-eye fa-eye-slash");
        });

        // jQuery Form Validation
        $("#loginForm").validate({
            rules: {
                user_email: {
                    required: true,
                    email: true
                },
                user_password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                user_email: {
                    required: "Please enter your email.",
                    email: "Enter a valid email address."
                },
                user_password: {
                    required: "Please enter your password.",
                    minlength: "Password must be at least 6 characters long."
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                if (element.attr("name") == "user_password") {
                    $("#password-error").html(error);
                } else {
                    error.addClass("text-danger");
                    element.closest("div").append(error);
                }
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>