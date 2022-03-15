@if(Route::is('index') )
    <!-- Site Menu -->
    <ul class="nav site-menu d-none d-lg-flex">
        <li class="nav-item"><a href="{{ route('index') }}">Все</a></li>
        @foreach ($productCategories as $key=>$category)
            <li class="nav-item"><a
                    href="{{ route('filter.categories', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endif

