<div id="book_area">
    <div class="inner">
    @foreach($arBook as $book)
        <div class="item">

            <a href="{{ route('book.item', $book->id) }}" class="preview_area">
                <img src="{{ $book->preview }} " alt="" class="preview bimg">
            </a>

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
                                        <path d="M14.83 9.17999C14.2706 8.61995 13.5576 8.23846 12.7813 8.08386C12.0049 7.92926 11.2002 8.00851 10.4689 8.31152C9.73758 8.61453 9.11264 9.12769 8.67316 9.78607C8.23367 10.4444 7.99938 11.2184 8 12.01C7.99916 13.0663 8.41619 14.08 9.16004 14.83" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 16.01C13.0609 16.01 14.0783 15.5886 14.8284 14.8384C15.5786 14.0883 16 13.0709 16 12.01" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.61 6.39004L6.38 17.62C4.6208 15.9966 3.14099 14.0944 2 11.99C6.71 3.76002 12.44 1.89004 17.61 6.39004Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.9994 3L17.6094 6.39" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.38 17.62L3 21" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.5695 8.42999C20.4801 9.55186 21.2931 10.7496 21.9995 12.01C17.9995 19.01 13.2695 21.4 8.76953 19.23" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </form>
                        <a href="{{ route('book.destroy.hard', $book->id) }}">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8L8 16M12 12L16 16M8 8L10 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        @endif
                    @endif
                    </div>
                @endauth
            </div>

        </div>
    @endforeach
    </div>

    @if($arBook instanceof \Illuminate\Pagination\LengthAwarePaginator)
    <div class="pagination_area">
        {{ $arBook->links('vendor.pagination.default') }}
    </div>
    @endif



</div>
