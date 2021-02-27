@extends('layouts.app')
@section('content')
    <h2>Contact file </h2>

    <form action="{{route("contact-form")}}"  method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <div></div>
            <input type="text" class="form-control" name="name" placeholder="введите имя" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div></div>
            <input type="text" class="form-control" name="email" placeholder="введите email" id="name">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <div></div>
            <input type="text" class="form-control" name="subject" placeholder="Тема сообщения" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <div></div>
            <textarea name="message" class="form-control" id="message" cols="10" rows="10"
                      placeholder="Введите сообщение"> </textarea>
        </div>
        <button type="submit" class="btn btn-success">ОТПРАВИТЬ</button>
    </form>
@endsection
@section('title')
    Contact page
@endsection

