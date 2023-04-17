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
            <div id="primary" class="content-area column two-thirds">
                <main id="main" class="site-main" role="main">
                    <div class="grid bloggrid">

                        @foreach($entities as $entity)
                            <article>
                                <header class="entry-header">
                                    <h1 class="entry-title"><a href="blog-single.html" rel="bookmark">{{$entity->title}}</a></h1>
                                    <div class="entry-meta">
                                        <span class="posted-on"><time class="entry-date published"> {{$entity->created_at->format('D d, Y')}}</time></span>
                                    </div>
                                </header>
                                <div class="entry-summary">
                                    <p>
                                        {{$entity->content}} <a class="more-link" href="blog-single.html">Read more</a>
                                    </p>
                                </div>
                                <footer class="entry-footer">
                        <span class="cat-links">
                            @if($entity->tags->isNotEmpty())
                            Posted in
                                @foreach($entity->tags as $tag)
                                    <a href="#" rel="category tag">{{$tag->tag}},</a>
                                @endforeach
                            @endif
                        </span>
                                </footer>
                            </article>
                        @endforeach

                    </div>
                    <div class="clearfix">
                    </div>
                    <nav class="pagination"></nav>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
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
