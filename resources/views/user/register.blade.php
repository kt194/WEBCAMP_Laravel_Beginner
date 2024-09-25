@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザー登録</h1>
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="{{ route('user.register.post') }}" method="post">
                @csrf
                名前:<input name="name" value="{{ old('name') }}"><br>
                email:<input name="email" type="emeil" value="{{ old('email') }}"><br>
                パスワード:<input name="password" type="password">{{ old('password') }}</textarea><br>
                <button>登録する</button>
            </form>
@endsection