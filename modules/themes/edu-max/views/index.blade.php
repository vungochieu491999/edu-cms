<section class="main-box">
    <div class="main-box-header">
        <div class="btn-group">
            <button type="button"
                    class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                Select <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                @foreach ($category->children()->get() as $child_category)
                <li>
                    <a href="{{ $child_category->url }}"
                       title="{{ $child_category->name }}">
                        {{ $child_category->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <h2>
            <i class="fa fa-leaf"></i> {{ $category->name }}
        </h2>
    </div>
    <div class="main-box-content">
        <div class="box-style box-style-{{ $loop->index % 2 == 0 ? 2 : 1 }}">
            @foreach($posts as $post)
            <div class="media-news">
                <a href="{{ $post->url }}"
                   title="{{ $post->name }}"
                   class="media-news-img">
                    <img class="img-full img-bg"
                         src="{{ get_object_image($post->image, 'medium') }}"
                         style="background-image: url('{{ get_object_image($post->image) }}');"
                         alt="{{ $post->name }}">
                </a>
                <div class="media-news-body">
                    <p class="common-title">
                        <a href="{{ $post->url }}"
                           title="{{ $post->name }}">
                            {{ $post->name }}
                        </a>
                    </p>
                    <p class="common-date">
                        <time>{{ date_from_database($post->created_at, 'M d, Y') }}</time>
                    </p>
                    <div class="common-summary">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
