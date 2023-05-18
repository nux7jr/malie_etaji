@extends ("layouts.base")
@vite("resources/css/pages/error/error.css")
@section('head')

@endsection
@section ("content")
    <section class="error">
        <div class="error__text">
            <h1 class="error__heading">
                {{__('Эта страница на стадии разработки')}}
            </h1>
            <p class="error__paraf">
                {{__('Пожалуйста, выберите куда вы хотите перейти')}}</p>
                <div class="error__option">
                    <a class="default__button error__link" href="/">{{__('Вернуться на главную страницу')}}</a>
                    <a class="default__button error__link" href="/projects">{{__('Посмотреть проекты')}}</a>
                </div>
        </div>
        <img src="{{ Vite::asset('resources/images/error/illustration.png') }}" alt="error">
        </section>
@endsection