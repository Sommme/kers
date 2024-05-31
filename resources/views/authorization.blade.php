<!DOCTYPE html>
<html>
<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN </title>
    <link rel="stylesheet" href= "{{asset('css/authorization.css?v=').time()}}">
    {{-- <link rel="stylesheet" href= "{{asset('css/menuver.css?v=').time()}}"> --}}
</head>
<body>
    {{-- <header>
        <div class="logo">
            <img src="{{asset('assets/images/logo.png') }}" alt="Logo" class="logo"> 
        </div>

        <ul class="menu">
            <li>HOME</li>
            <li>EXHIBITIONS</li>
            <li>EXHIBITS</li>
            <li>CONTACTS</li>
        </ul>


    </header> --}}


    
    <div class="container">
        <a href="/" class="back-link">&#8592;</a>
        <div class="tab-container">
            <div id="signInTab" class="tab active">SIGN IN</div>
            <div id="signUpTab" class="tab">SIGN UP</div>
        </div>
        <div class="form-container">
            <form id="signInForm" class="form active" action="#" method="POST">
                <input type="email" name="email" placeholder="Email" required />
                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" required />
                    <span class="toggle-password">&#128065;</span>
                </div>
                <button type="submit">SIGN IN</button>
            </form>
            <form id="signUpForm" class="form" action="#" method="POST">
                <input type="text" name="firstname" placeholder="Firstname" required />
                <input type="text" name="lastname" placeholder="Lastname" required />
                <input type="email" name="email" placeholder="Email" required />
                <div class="password-container">
                    <input type="password" name="password" placeholder="Password" required />
                    <span class="toggle-password">&#128065;</span>
                </div>
                <div class="password-container">
                    <input type="password" name="confirm_password" placeholder="Сonfirm password" required />
                    <span class="toggle-password">&#128065;</span>
                </div>
                <button type="submit">SIGN UP</button>
            </form>
        </div>
    </div>
    <script src="{{asset('js/authorization.js?v=') }}"></script>
</body>
</html>
