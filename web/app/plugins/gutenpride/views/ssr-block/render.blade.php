<p>Hello {{$title}}</p>
@while ( $albums->have_posts()) @php $albums->the_post() @endphp
	@php(the_title())
@endwhile
