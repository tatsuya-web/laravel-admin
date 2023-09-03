title: {{ $wp_post->post_title }} <br>

cat: @foreach($wp_post->wpPostCategories as $wpPostCategory) {{ $wpPostCategory->name . ',' }} @endforeach <br>

content: {{  $wp_post->post_content }} <br>

laravel_post: {{ $wp_post->meta->post_title }}