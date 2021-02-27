@section('head')
    <header style="margin-left: 8%;margin-right: 8%;" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <p class="h5 my-0 me-md-auto fw-normal my-header-company">Company name</p>
        <nav style="margin-left: 57%;" class="my-2 my-md-0 me-md-3">

            <a  class="p-2 text-dark" href="#"></a>
            <a class="p-2 text-dark" href="{{route('home')}}">Главная</a>
            <a class="p-2 text-dark" href="{{route('about')}}">Про нас</a>
            <a class="p-2 text-dark" href="{{route('contact')}}">Контакты</a>
            <a class="p-2 text-dark" href="{{route('contact-data')}}">Сообщения</a>
            <a href="#"><button class="btn btn-warning">Детальние</button></a>
        </nav>
    </header>
