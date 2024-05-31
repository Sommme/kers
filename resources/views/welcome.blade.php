<!DOCTYPE html>
<html>
<head>
    {{-- <link rel="stylesheet" href= "{{asset('css/main.css?v=').time()}}"> --}}
    <link rel="stylesheet" href= "{{asset('css/menuver.css?v=').time()}}">
    <link rel="stylesheet" href= "{{asset('css/ex.css?v=').time()}}">
    <link rel="stylesheet" href= "{{asset('css/albomex.css?v=').time()}}">
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

    {{-- <div class="image-container">
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
    </div> --}}


    {{-- <h2 class="title">EXHIBITIONS OF THE MONTH</h2> --}}
    <h1 class="title">EXHIBITIONS OF THE MONTH</h1>

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



    <div class="filter-bar">
        <a> FILTER: </a>
        <a href="#" data-filter="all">ALL</a>
        <a href="#" data-filter="sculpture">SCULPTURE</a>
        <a href="#" data-filter="painting">PAINTING</a>
        <a href="#" data-filter="craft">CRAFT</a>
    </div>

    <div class="exhibition-album">
        <div class="exhibition-item">
            <img src="{{asset('assets/exhibits/heroes.jpg') }}" alt="Exhibition Image">
            <div class="title">Heroes of the Past</div>
            <div class="details">123 Main Street, New York</div>
            <div class="details">Art Direction: Painting</div>
            <div class="details">May 26, 2024</div>
            <button>Buy Ticket</button>
        </div>
        <div class="exhibition-item">
            <img src="{{asset('assets/exhibits/rye.jpg') }}" alt="Exhibition Image">
            <div class="title">Nature's Beauty</div>
            <div class="details">21 Wall Street, Houston</div>
            <div class="details">Art Direction: Nature</div>
            <div class="details">May 29, 2024</div>
            <button>Buy Ticket</button>
        </div>
        <div class="exhibition-item">
            <img src="{{asset('assets/exhibits/composition.jpg') }}" alt="Exhibition Image">
            <div class="title">Modern Composition</div>
            <div class="details">789 Broadway, Chicago</div>
            <div class="details">Art Direction: Composition</div>
            <div class="details">May 28, 2024</div>
            <button>Buy Ticket</button>
        </div>
        <div class="exhibition-item">
            <img src="{{asset('assets/exhibits/moscow.jpg') }}" alt="Exhibition Image">
            <div class="title">Abstract Art</div>
            <div class="details">456 Park Avenue, Los Angeles</div>
            <div class="details">Art Direction: Abstraction</div>
            <div class="details">May 27, 2024</div>
            <button>Buy Ticket</button>
        </div>
    </div>




</body>
</html>
