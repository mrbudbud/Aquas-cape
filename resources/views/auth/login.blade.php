<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>
<body>
<div class="container">
	<section id="content">
		<form  method="POST" action="{{ route('login') }}">
            @csrf
			<h1>Login Admin</h1>
			<div>
				<input type="email" placeholder="Email" name="email" required="" id="username" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" id="password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="{{ route('password.request') }}">Lost your password?</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>