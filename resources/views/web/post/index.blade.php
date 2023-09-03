<ul>
    @foreach ($posts as $post)
        <li><a href="{{ route('post.detail', ['post' => $post->id]) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>