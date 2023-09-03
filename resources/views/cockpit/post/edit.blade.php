<x-cockpit-layout title="お知らせ編集" :crumd="[['title' => 'ダッシュボード', 'url' => route('cockpit.dashboard')], ['title' => 'お知らせ一覧', 'url' => route('cockpit.post.index')], ['title' => $post->title]]">
    <form action="{{ route('cockpit.post.update', ['post' => $post->id]) }}" method="post">
        @csrf
        <div class="grid">
            <div class="col-12">
                <div class="card">
                    <div class="grid">
                        <div class="col-6">

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <x-input-text title="タイトル" name="title" :value="old('title') ?? $post->title" :error="$errors" placeholder="タイトル" required />
    
                            <x-text-area title="本文" name="contents" :value="old('contents') ?? $post->contents" :error="$errors" placeholder="本文" required />
                            
                            <x-input-text title="スラッグ" name="slug" :value="old('slug') ?? $post->slug" :error="$errors" placeholder="スラッグ" required />
    
                            <x-input-select title="公開状態" name="status" :value="old('status') ?? $post->states" :error="$errors" :options="$statuses" key="" show="" required />
    
                            <x-input-select title="カテゴリー" name="category_id" :value="old('category_id') ?? $post->category_id" :error="$errors" :options="$categories" key="id" show="name" required />
                        </div>
                    </div>
                    <div class="flex -end mt-3 mb-3">
                        <div class="bgroup -set">
                            <button type="submit" class="btn -info" >更新</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-cockpit-layout>