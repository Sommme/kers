<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href= "{{asset('css/exhibitslist.css?v=').time()}}">
    <link rel="stylesheet" href= "{{asset('css/menuver.css?v=').time()}}">
    {{-- <link rel="stylesheet" href= "{{asset('css/albom.css?v=').time()}}"> --}}
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
    

    <div class="gallery">
        <div class="item">
            <img src="{{asset('assets/exhibits/heroes.jpg') }}" alt="Богатыри">
            <div class="caption">
                <h3>Богатыри</h3>
                <p>Васнецов Виктор</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('assets/exhibits/swan.jpg') }}" alt="Царевна-Лебедь">
            <div class="caption">
                <h3>Царевна-Лебедь</h3>
                <p>Врубель Михаил</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('assets/exhibits/anna.jpg') }}" alt="Н. Алексеева">
            <div class="caption">
                <h3>Н. Алексеева</h3>
                <p>Голубкина Анна</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('assets/exhibits/rye.jpg') }}"  alt="Рожь">
            <div class="caption">
                <h3>Рожь</h3>
                <p>Шишкин Иван</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('assets/exhibits/composition.jpg') }}"  alt="Композиция VII">
            <div class="caption">
                <h3>Композиция VII</h3>
                <p>Кандинский Василий</p>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('assets/exhibits/moscow.jpg') }}" alt="Москва">
            <div class="caption">
                <h3>Москва</h3>
                <p>Автор неизвестен</p>
            </div>
        </div>
    </div>


    
</body>
</html>