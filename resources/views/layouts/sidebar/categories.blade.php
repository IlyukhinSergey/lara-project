<div class="sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
        <?php /** @var \App\Models\Category $category */?>
        <ul class="sidebar-category">
            @foreach($categories as $category)
            <li class="sidebar-category__item"><a href="{{ route('category', $category->id) }}" class="sidebar-category__item__link">{{ $category->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
