<x-cockpit-layout title="お知らせ一覧" :crumd="[['title' => 'ダッシュボード', 'url' => route('cockpit.dashboard')], ['title' => 'お知らせ一覧']]">
    <div class="grid">
        <div class="col-12">
            <div class="card">
                <div class="flex -end mt-3 mb-3">
                    <div class="bgroup -set">
                        <a href="{{ route('cockpit.post.create') }}" class="btn -info" >新規作成</a>
                    </div>
                </div>
                <h2 class="card_ttl">お知らせ一覧</h2>
                <table id="table" class="-striped responsive display nowrap" style="width: 100%">
                    <thead>
                        <tr>
                            <th data-priority="2">#</th>
                            <th data-priority="1">タイトル</th>
                            <th data-priority="2">カテゴリー</th>
                            <th data-priority="2">投稿者</th>
                            <th data-priority="3">公開日</th>
                            <th data-priority="4">更新日</th>
                            <th data-priority="1">アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>
                                <div class="bgroup">
                                    <a class="ibtn" href="{{ route('cockpit.post.edit', ['post' => $post->id]) }}"><i class="fa-solid fa-pen"></i></a>
                                    <button class="ibtn" onclick="delete_dialog({{ $post->id }})"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-dialog title="お知らせ削除" message="お知らせを削除しますか？" cancel="キャンセル" action="削除する" />
    <x-table />
</x-cockpit-layout>