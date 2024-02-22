<div id="book_area">
    @foreach($arBook as $book)
        <div class="item">
            <div class="hover_area">
                <div class="title">{{ $book->name }}</div>
            </div>
            <a href="{{ route('book.item', $book->id) }}"><img src="{{ $book->preview }} " alt="" class="preview bimg"></a>
        </div>
    @endforeach
</div>
