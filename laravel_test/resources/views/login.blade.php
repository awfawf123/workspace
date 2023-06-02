@extends('layout.layout')

@section('title','Login')

@section('contents')
    @include('layout.errors')
    <form action="{{route('user.loginpost')}}" method="post">
        @csrf
        <label for="email">이메일</label>
        <input type="text" id="email" name="email">
        <label for="password">패스워드</label>
        <input type="text" id="password" name="password">
        <button type="submit">로그인</button>
    </form>
@endsection