<header>

    <div class="green-row">

    </div>

    <div class="container">

        <div class="row">
            <div class="left-side">
                <img class="logo" src="img/logo.png" alt="">

            </div>

            <div class="right-side">

                <ul class="menu">

                    @foreach (config('main.menu') as $item) 

                    <li class={{Route::currentRouteName() == $item['pathId'] ? 'active' : ''}}>
                        <a href="{{ route($item['pathId']) }}">{{ $item['displayText'] }} </a>
                    </li>
                        
                    @endforeach

                    <li>
                        <button class="btn">
                            Candidati Ora
                        </button>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</header>