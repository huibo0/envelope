<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>登陆</title>
    <meta name="author" content="DeathGhost" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href={{\Illuminate\Support\Facades\URL::asset("css/style.css" ) }}/>
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src={{\Illuminate\Support\Facades\URL::asset("js/jquery.js")}}></script>
    <script src={{\Illuminate\Support\Facades\URL::asset("js/verificationNumbers.js")}}></script>
    <script src={{\Illuminate\Support\Facades\URL::asset("js/Particleground.js")}}></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            //验证码
            createCode();
            //测试提交，对接程序删除即可
            $(".submit_btn").click(function(){
                location.href="javascrpt:;"/*tpa=http://***index.html*/;
            });
        });
    </script>
</head>
<body>
<form class="form-horizontal" method="POST" action="{{ route('login')}}">
    {{ csrf_field() }}
    <dl class="admin_login">
        <dt>
            <strong>envelope</strong>
            <em>欢迎登陆</em>
        </dt>
        <dd class="user_icon">
            <input name="email" type="email" placeholder="账号" class="login_txtbx" value="{{ old('email') }}" required autofocus>
        </dd>
        @if ($errors->has('email'))
            <span class="help-block">
   <strong>{{ $errors->first('email') }}</strong>
  </span>
        @endif

        <dd class="pwd_icon">
            <input name="password" type="password" placeholder="密码" class="login_txtbx"/>

        </dd>
        @if ($errors->has('password'))
            <span class="help-block">
   <strong>{{ $errors->first('password') }}</strong>
  </span>
        @endif

        <dd class="val_icon">
            <div class="checkcode">
                <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
                <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
            </div>
            <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
        </dd>
        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
    </dl>
</form>
</body>
</html>
