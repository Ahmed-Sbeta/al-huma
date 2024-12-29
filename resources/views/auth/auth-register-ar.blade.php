<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register with AlHuma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('auth_assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('auth_assets/css/main.css')}}">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap" rel="stylesheet">  

</head>
<style>
 h1,h2,h3,h4,h5,p,span,li,a,input,textarea,button{
          font-family: 'Cairo' !important;
        }

    .input100:focus + .focus-input100 + .symbol-input100 {
  color: #1e3333;
  padding-left: 28px;
}
.focus-input100 {
  display: block;
  position: absolute;
  border-radius: 25px;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 0px 0px;
  color: #1e3333;
}
a:hover {
	text-decoration: none;
  color: #1e3333;
}

select {
    -webkit-appearance: none;
  -moz-appearance: none;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: #9053c7;
  background: -webkit-linear-gradient(-135deg, #808080, #1e3333);
  background: -o-linear-gradient(-135deg, #808080, #1e3333);
  background: -moz-linear-gradient(-135deg, #808080, #1e3333);
  background: linear-gradient(-135deg, #808080, #1e3333);
}

input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
}
</style>
<body>
	
	<div class="limiter">
	
		<div class="container-login100">
		
			<div class="wrap-login100">
			
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('auth_assets/images/img-04.png')}}" alt="IMG">
				</div>
			
				<form id="password-form" class="login100-form validate-form" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
						انشاء حساب 
					</span>
					@if(session('msg'))
                <div class="alert text-right alert-success">
                {{ session('msg') }}
                </div>
                @endif
					<div class="wrap-input100 validate-input">
						<input class="input100 text-right" type="text" name="name" placeholder="الأسم الكامل">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100 text-right" type="email" name="email" placeholder="البريد الالكتروني">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100 text-right" type="text" name="phone_number" id="phone_number" placeholder="رقم الهاتف">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100 text-right" type="text" name="Age" placeholder="العـمـر">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<select class="input100 text-right" name="Gender" placeholder="الجنس" style="border: 0;">
							<option value="null" disabled selected>الجنس</option>
							<option value="Male">ذكر</option>
							<option value="Female">انثي</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-male" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 text-right" type="password" name="password" id="password" placeholder="الرمز السري">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 text-right" type="password" name="password_confirmation" id="password_confirmation" placeholder="اعادة الرمز السري">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" style="background-color: #1e3333;">
							إنشاء حساب
						</button>
					</div>
					</form>
					<div class="text-center p-t-12">
						<span class="txt1">
							هل لديك حساب بالفعل ؟
						</span>
						<a class="txt2" href="/ar/login">
							تسجيل الدخول
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/ar/login">
							تسجيل الدخول الي حسابك
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
			</div>
		</div>
	</div>
	

	<script>
    document.getElementById('password-form').addEventListener('submit', function(event) {
        // Get the values from the input fields
        var password = document.getElementById('password').value;
        var passwordConfirmation = document.getElementById('password_confirmation').value;
		var phone_number = document.getElementById('phone_number').value;

        // Create a function to display custom alerts
        function showAlert(message, type) {
            var alertDiv = document.createElement('div');
            alertDiv.classList.add('alert', 'text-right', type);
            alertDiv.textContent = message;
            
            // Insert the alert message before the form
            var form = document.getElementById('password-form');
            form.insertBefore(alertDiv, form.firstChild);
            
            // Remove the alert after 3 seconds
            setTimeout(function() {
                alertDiv.remove();
            }, 3000);
        }
        
		if(phone_number.length != 10){
			showAlert('رقم الهاتف يجب ان يتكون من 10 خانات 09########', 'alert-danger');
			event.preventDefault(); // Prevent form submission
			return false;
		}
        // Check if the password is at least 5 characters long
        if (password.length < 5) {
            showAlert('الرمز السري يجب أن يحتوي على 5 أحرف على الأقل', 'alert-danger');
            event.preventDefault(); // Prevent form submission
            return false;
        }

        // Check if the passwords match
        if (password !== passwordConfirmation) {
            showAlert('الرمز السري غير متطابق مع إعادة الرمز السري', 'alert-danger');
            event.preventDefault(); // Prevent form submission
            return false;
        }

        
        // If all conditions are met, allow the form to submit
        return true;
    });
</script>
	

	
<!--===============================================================================================-->	
	<script src="{{asset('auth_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('auth_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_assets/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('auth_assets/js/main.js')}}"></script>

</body>
</html>