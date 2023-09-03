title: {{ $post->title }} <br>

content: {{ $post->content }} <br>

wp_posts: @foreach($post->relation_wp_posts as $wp_post) <a href="{{ route('wp-post.detail', ['wp_post' => $wp_post->id]) }}">{{ $wp_post->post_title }} </a> , @endforeach <br>