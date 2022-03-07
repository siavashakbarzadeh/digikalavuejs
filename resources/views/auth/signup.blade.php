<html>
<head>

    <title>ورود به پنل مدیریت</title>

<link rel="stylesheet" href="/css/login.css">
</head>

<body>


<span href="#" class="button" id="toggle-login">ورود</span>

<div id="login">
    <div id="triangle"></div>
    <h1>ورود به پنل مدیریت</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" placeholder="ایمیل" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" value="{{ old('email') }}" required autofocus   />
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <input type="password" placeholder="کلمه عبور"  class="{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required  />
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <input type="submit" value="ورود" />
    </form>
</div>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>


<script type="text/javascript">
    $('#toggle-login').click(function(){
        $('#login').toggle();
    });
</script>

</body>

</html>
