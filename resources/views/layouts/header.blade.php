<header class="bg-dark">
    <nav class="navbar navbar-expand-lg px-5 row">
        <a class="navbar-brand logo" href="{{ route('books.index') }}">BookMemo</a>

        @if(Auth::check())
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item text-white mr-5">
                <form method="POST" action="{{ route('books.index') }}" class="text-center">
                    @csrf
                    <div class="form-group m-0 header-search-container">
                        <input class="header-search" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="本棚からさがす">
                        <button type="submit" class="header-search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
            <li class="navbar-item dropdown">
                <a
                id="dropdown1"
                class="dropdown-toggle h5 text-white pr-2"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Menu</a>
                <div class="dropdown-menu dropdown-location" aria-labelledby="dropdown1">
                    <a class="dropdown-item" href="{{ route('books.index') }}">ホーム</a>
                    <a class="dropdown-item"  href="{{ route('user.edit', ['user' => Auth::user()]) }}">アカウント管理</a>
                    <button class="dropdown-item" form="logout-form" id="logout">ログアウト</button>
                </div>
            </li>
        </ul>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

        @else
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item"><a class="nav-text nav-link btn btn-md font-weight-bold text-white" href="{{ route('login') }}">ログイン</a></li>
            <li class="navbar-item"><a class="nav-text nav-link btn register-button text-white" href="{{ route('register') }}">新規会員登録(無料)</a></li>
        </ul>
        @endif
    </nav>
  </header>
