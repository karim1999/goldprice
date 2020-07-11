<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تسجل دخول</title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<section class="d-flex" id="fullWidth">
    <div class="loaderScreen">
        <div class="loader"></div>
    </div>
    <div class="bodyLeft d-flex h-100 flex-column justify-content-center align-items-md-end">
        <div class="innerContent innerContentLeft d-flex flex-column">
            <h4>تسجيل الدخول</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                                
                </div>
                <input type="submit" class="btn btn-primary submit" value="تسجيل دخول">
            </form>
            <div class="innerVertical d-flex flex-column">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span>
            </div>
            <div class="outerVertical d-flex flex-column">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span>
            </div>
            <div class="innerHorizontal d-flex">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span>
            </div>
            <div class="outerHorizontal d-flex">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span>
            </div>
            <div class="innerVerticalMirror  d-flex flex-column">
                <span class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2 dot2"></span>
            </div>
            <div class="outerVerticalMirror  d-flex flex-column">
                <span class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span>
            </div>
            <div class="innerHorizontalMirror  d-flex">
                <span class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span>
            </div>
            <div class="outerHorizontalMirror  d-flex">
                <span class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span><span
                    class="dot dot2"></span><span class="dot dot2"></span><span class="dot dot2"></span>
            </div>

        </div>
    </div>
    <div class="bodyRight d-flex h-100 flex-column justify-content-center">
        <div class="innerContent innerContentRight d-flex flex-column justify-content-center align-items-center">
            <h3>!أهلا بعودتك</h3>
            <h5>قم بإدخال معلومات حسابك الشخصي</h5>
            <div class="innerVertical d-flex flex-column">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span>
            </div>
            <div class="outerVertical d-flex flex-column">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span>
            </div>
            <div class="innerHorizontal d-flex">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span>
            </div>
            <div class="outerHorizontal d-flex">
                <span class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span><span
                    class="dot"></span><span class="dot"></span><span class="dot"></span>
            </div>
        </div>
    </div>
</section>

<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/login.js"></script>
</body>
</html>