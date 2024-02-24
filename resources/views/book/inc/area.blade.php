<div id="book_area">
    <div class="inner">
    @foreach($arBook as $book)
        <div class="item">
            <div class="hover_area">
                <div class="title">{{ $book->name }}</div>
                @auth
                    <div class="ico_area">
                    @if(Auth::user()->is_admin OR Auth::user()->id == $book->user_id)
                        <a href="{{ route('book.edit', $book->id) }}" class="ico edit">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 10L14 6M18 10L21 7L17 3L14 6M18 10L17 11M14 6L8 12V16H12L14.5 13.5M20 14V20H12M10 4L4 4L4 20H7" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        @if(Auth::user()->is_admin)
                        <form action="{{ route('book.delete', $book->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="ico delete">
                                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8L8 16M12 12L16 16M8 8L10 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </form>
                        @endif
                    @endif
                    </div>
                @endauth
            </div>
            <a href="{{ route('book.item', $book->id) }}"><img src="{{ $book->preview }} " alt="" class="preview bimg"></a>
        </div>
    @endforeach
    </div>
</div>
