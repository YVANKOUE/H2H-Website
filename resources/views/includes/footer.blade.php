<footer class="main-footer">
    <div class="footer-left">
        <a href="#"> {{ date('Y') }}© {{ __('Powered By') }} H2H</a></a>
    </div>
    <div class="footer-right"></div>
</footer>

<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function showConfirmPassword() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function showCurrentPassword() {
        var x = document.getElementById("current_password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function() {
        setTimeout(() => {
            $('div.alert').remove();
        }, 8000);
    } 
</script>