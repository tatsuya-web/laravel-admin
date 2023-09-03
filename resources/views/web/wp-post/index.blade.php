<ul>
    @foreach ($wp_posts as $wp_post)
        <li><a href="{{ route('wp-post.detail', ['wp_post' => $wp_post->id]) }}">{{ $wp_post->post_title }}</a></li>
    @endforeach
</ul>