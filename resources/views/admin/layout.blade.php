<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン機能付きタスク管理サービス　管理画面 @yield('title')</title>
    </head>
    <body>
    @auth('admin')
        <a href="/admin/user/list">ユーザ一覧</a><br>
        管理画面機能 1<br>
        管理画面機能 2<br>
        管理画面機能 3<br>
        管理画面機能 4<br>
        <a href="/admin/logout">ログアウト</a><br>
        </menu>
    @endauth
        @yield('contets')
    </body>
</html>