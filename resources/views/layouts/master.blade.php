<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developer\'s Best Friend')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/friend.css' type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <!-- logo links to homepage -->
        <a href='/'>
        <img
        src='/images/friend_icon_noun_cc.png'
        style='width:150px'
        alt='Friend Logo'>
    </header>

    <nav>
        <ul>
            <li><a href='/text/create'> Generate Lorem Ipsum text</a></li>
            <li><a href='/friend/create'>Give me some friends</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/rsimpson3/p3' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        <a href='http://p3.digitalbiolab.me/' class='fa fa-link' target='_blank'> View Live</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
