@extends('layouts.base')

@section('content')
<div class="main">
	<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		<div class="img-w3l-agile">
		<img src="{{ asset('images/form/1.jpg') }}" alt=" ">
		</div>
		<ul class="resp-tabs-list">
			<li class="resp-tab-item"><span>Sign In</span></li>
			<li class="resp-tab-item"><h2><span>Sign Up</span></h2></li>
		</ul>			
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content">
				<div class="login-top">
					<form action="{{ route('login') }}" method="post">
						{{ csrf_field() }}
						<input type="email" name="email" class="email" placeholder="Email" required=""/>
						<input type="password" name="password" class="password" placeholder="Password" required=""/>	
					
						<input type="submit" value="Sign In">
					</form>
					@if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
	                @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				</div>
			</div>
			<div class="tab-1 resp-tab-content">
				<div class="login-top sign-top">
					<form action="{{ route('register') }}" method="post">
						{{ csrf_field() }}
						<input type="text" name="name" class="name" placeholder="Name" required=""/>
						<input type="email" name="email" class="email" placeholder="Email" required=""/>
						<input type="password" name="password" class="password" placeholder="Password" required=""/>
						<input type="password" name="password_confirmation" class="password" placeholder="Password confirmation" required=""/>
						<input type="submit" value="Sign Up">							
					</form>
					@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				</div>
			</div>
		</div>	
	</div>
</div>


<!-- js-scripts -->			
<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<!-- tabs -->
<script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>


<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});

</script>
@endsection