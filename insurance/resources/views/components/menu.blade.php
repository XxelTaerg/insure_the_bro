@if(Route::is('account.*') )
    <!-- Site Menu -->
    <ul class="nav site-menu d-none d-lg-flex">
        <li class="nav-item {{ request()->routeIs('account.index') ? 'active' : '' }}"><a href="{{ route('account.index') }}">Товары</a></li>
        <li class="nav-item {{ request()->routeIs('account.feedbacks') ? 'active' : '' }}"><a href="{{ route('account.feedbacks') }}">Отклики</a></li>
    </ul>
@else
    @isset($productCategories)
        <!-- Site Menu -->
        <ul class="nav site-menu d-none d-lg-flex">
            <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Все</a></li>
            @foreach ($productCategories as $key=>$category)
                <li class="nav-item {{ request()->routeIs('filter.categories') && request()->category_id == $category->id ? 'active' : '' }}"><a
                        href="{{ route('filter.categories', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    @endisset
@endif



