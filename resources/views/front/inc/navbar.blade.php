<div class="header">
    <div class="nav">
        <div class="logo"><img src="{{asset('assets/images/img/Logo 2.png')}}" alt="Logo" /></div>
        <div class="navbar">
            <ul>
                <li><a href="workspage">@lang('Works')</a></li>
                <li><a href="aboutpage">@lang('About')</a></li>
                <li><a href="blogpage">@lang('Blog')</a></li>
                <li><a href="contactpage">@lang('Contact')</a></li>
            </ul>
        </div>
        <div class="right-header">
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
                <div class="menu-dropdown-content">
                    <a href="#workspage">@lang('Works')</a>
                    <a href="#aboutpage">@lang('About')</a>
                    <a href="#blogpage">@lang('Blog')</a>
                    <a href="#contactpage">@lang('Contact')</a>
                </div>
            </div>
            <div class="forlanguage">
                <div class="language">
                    <i class="fa-solid fa-globe"></i>
                    <div class="dropdown-content">
                        <a href="{{ route('locale', ['locale' => 'az']) }}">Az</a>
                        <a href="{{ route('locale', ['locale' => 'ru']) }}">Ru</a>
                        <a href="{{ route('locale', ['locale' => 'en']) }}">En</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>