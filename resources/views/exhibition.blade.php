<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= "{{asset('css/ex.css?v=').time()}}">
    <link rel="stylesheet" href= "{{asset('css/menuver.css?v=').time()}}">
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{asset('assets/images/logo.png') }}" alt="Logo" class="logo"> 
        </div>

        <ul class="menu">
            <li>HOME</li>
            <li>EXHIBITIONS</li>
            <li>EXHIBITS</li>
            <li>CONTACTS</li>
    </header>



    <h2 class="title">EXHIBITIONS OF THE MONTH</h2>

    <div class="container">
        <div class="slide">
            
            <div class="item" style="background-image: url({{asset('assets/exhibits/heroes.jpg') }}); border-radius: 20px;">
                <div class="content">
                    <div class="name">Painting</div>
                    <div class="des">123 Main Street, New York</div>
                    <div class="des">May 26, 2024</div>
                    <button>See More</button>
                </div>
            </div>

            <div class="item" style="background-image: url({{asset('assets/exhibits/rye.jpg') }}); border-radius: 20px;">
                <div class="content">
                    <div class="name">Nature</div>
                    <div class="des">21 Wall Street, Houston</div>
                    <div class="des">May 29, 2024</div>
                    <button>See More</button>
                </div>
            </div>

            <div class="item" style="background-image: url({{asset('assets/exhibits/composition.jpg') }}); border-radius: 20px;">
                <div class="content">
                    <div class="name">Сomposition</div>
                    <div class="des">789 Broadway, Chicago</div>
                    <div class="des">May 28, 2024</div>
                    <button>See More</button>
                </div>
            </div>

            <div class="item" style="background-image: url({{asset('assets/exhibits/moscow.jpg') }}); border-radius: 20px;">
                <div class="content">
                    <div class="name">Abstraction</div>
                    <div class="des">456 Park Avenue, Los Angeles</div>
                    <div class="des">May 27, 2024</div>
                    <button>See More</button>
                </div>
            </div>

        </div>

        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>

    </div>
    <script src="{{asset('js/slider.js?v=') }}"></script>



</body>
</html>