<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href= "{{asset('css/main.css?v=').time()}}">
</head>
<body>

    <div class="logo-container">
        <img src="{{asset('assets/images/logo.png') }}" alt="Logo" class="logo"> <!-- Добавьте эту строку -->
    </div>

    <div class="menu">
        <a href="#">HOME</a>
        <a href="#">EXHIBITIONS</a>
        <a href="#">EXHIBITS</a>
        <a href="#">CONTACTS</a>
    </div>

    <div class="image-container">
        <img src="{{asset('assets/images/1.png') }}" alt="1">
        <div class="overlay-image">
            <img src="{{asset('assets/images/Rectangle 1.png') }}" alt="2">
            <div class="overlay-text">WE PRESERVE HISTORY TO BUILD FUTURE</div>
        </div>
    </div>
    <div class="overlay-global-text">THE WORLD’S <br> LEADING MUSEUM</div>
    <div class="overlay-global-text-small">

        <a> In the very heart of our city there is a museum, <br> which is a symbol of the human desire for knowledge and art.<br> It is a place where the past meets the present,<br> and art connects with science. </a>

        </div>
    <div class="image-container-two">
        <img src="{{asset('assets/images/w.png') }}" alt="1">
        <div class="overlay-image-two">
            <img src="{{asset('assets/images/Frame 9.png') }}" alt="2">
        </div>
    </div>
</body>
</html>
