<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moschino | Minimalist Free HTML Portfolio by WowThemes.net</title>
    <link rel='stylesheet' href="{{asset('/css/woocommerce-layout.css')}}" type='text/css' media='all'/>
    <link rel='stylesheet' href="{{asset('/css/woocommerce-smallscreen.css')}}" type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' href="{{asset('/css/woocommerce.css')}}" type='text/css' media='all'/>
    <link rel='stylesheet' href="{{asset('/css/font-awesome.min.css')}}" type='text/css' media='all'/>
    <link rel='stylesheet' href="{{asset('style.css')}}" type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
    <link rel='stylesheet' href="{{asset('css/easy-responsive-shortcodes.css')}}" type='text/css' media='all'/>
</head>
<body class="blog">
<div id="page">
    <div class="container">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <h1 class="site-title"><a href="index.html" rel="home">Moschino</a></h1>
                <h2 class="site-description">Minimalist Portfolio HTML Template</h2>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle">Menu</button>
                <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
                <div class="menu-menu-1-container">
                    <ul id="menu-menu-1" class="menu">
                        <li><a href="/blogs">Blog</a></li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- #masthead -->
        <div id="content" class="site-content">
            <form method="POST" action="/blogs">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Tags</label>
                    <input type="text" name="tags" class="form-control" id="exampleFormControlInput1" placeholder="comma seperated tag list">
                </div>

                <button type="submit">Hey! Create me!!</button>
            </form>
        </div>
        <!-- #content -->
    </div>
    <!-- .container -->
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="site-info">
                <h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
                <a target="blank" href="https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net</a>
            </div>
        </div>
    </footer>
    <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/plugins.js')}}"></script>
<script src="{{asset('/js/scripts.js')}}"></script>
<script src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
</body>
</html>
