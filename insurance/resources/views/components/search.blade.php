<!-- Overlay Search Form -->
<div class="search-overlay-wrap">
    <a href="#" class="abs-trigger-right overlay-search-close overlay-search-trigger"><span
            class="ti-close text-light"></span></a>
    <div class="search-overlay-inner">
        <form class="search-form" action="{{ route('index') }}" method="get">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Введите то, что ищете..">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit"><span class="ti-search"></span></button>
                </div>
            </div>
        </form>
    </div>
</div><!-- .search-overlay-wrap -->
