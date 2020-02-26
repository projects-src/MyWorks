<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BBS</title>

    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="{{url('')}}">
                BBS
            </a>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="検索" aria-label="検索"> -->
                <input type="text" name="keyword" value="{{$keyword ?? ''}}" class="form-control mr-sm-2" placeholder="検索" aria-label="検索">
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
            </form>
        </div>
        <div class="container">
            @if(count($posts) > 0)
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3">
                            {{ $post->name }}
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </header>
    
    <div>
        @yield('content')
    </div>
</body>
</html>