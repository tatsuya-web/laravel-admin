<aside id="side" class="side">
    <a class="side_logo" href="{{ route('cockpit.dashboard') }}" title="{{ config('app.name', 'Laravel-Admin') }}">
        <svg class="side_logo_img" viewBox="0 0 55 46.5">
            <polygon class="-path01" points="54.5,0.5 36.54,5.34 36.67,46 54.5,46 "></polygon>
            <polygon class="-path02" points="0.5,15.04 18.5,10.2 54.3,46 36.67,46 18.46,27.79 18.46,46 0.5,46 "></polygon>
        </svg>
        <span class="side_logo_ttl">NMS</span>
    </a>
    <div class="side_cnt">
        <nav class="side_nav">
            <ul class="side_nav_list">
                <li><a href="{{ route('cockpit.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>ダッシュボード</span></a></li>
                <li class="mt-3">
                    <a href="aaa"><i class="fa-solid fa-newspaper"></i><span>お知らせ</span></a>
                    <ul class="side_nav_slist">
                        <li class="-current"><a href="{{ route('cockpit.post.index') }}"><span>お知らせ一覧</span></a></li>
                        <li><a href="aaa"><span>新規追加</span></a></li>
                    </ul>
                </li>
                <li class="mt-3">
                    <a href="aaa"><i class="fa-solid fa-user"></i></i><span>管理ユーザー</span></a>
                    <ul class="side_nav_slist">
                        <li class="-current"><a href="aaa"><span>管理ユーザー一覧</span></a></li>
                        <li><a href="aaa"><span>新規追加</span></a></li>
                    </ul>
                </li>
                <li><a href="aaa"><i class="fa-solid fa-gear"></i><span>設定</span></a></li>
                <li><form action="{{ route('logout') }}" method="POST">@csrf<i class="fa-solid fa-right-from-bracket"></i><button type="submit">ログアウト</button></form></li>
            </ul>
        </nav>
    </div>
</aside>