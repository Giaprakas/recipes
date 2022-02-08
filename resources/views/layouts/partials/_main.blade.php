<!-- start: main-container -->
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- start: BREADCRUMB -->
                <ol class="breadcrumb">
                    <li>
                        <i class="clip-home-3"></i>
                        <a href="/">Home
                        </a>
                    </li>
                    <li class="active">
                        @yield('title')
                    </li>
                    <li class="search-box">
                        <form class="sidebar-search">
                            <div class="form-group">
                                <input type="text" placeholder="Start Searching...">
                                <button class="submit">
                                    <i class="clip-search-3"></i>
                                </button>
                            </div>
                        </form>
                    </li>
                </ol>
                <!-- end: BREADCRUMB -->
            </div>
        </div>
    </div>
</div>
<!-- end: main-container -->

<!-- start: TITLE & CONTENT -->
<div class="main-content">
    <div class="container">
        <div class="page-header">
            <h1>@yield('title')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div> 
</div>
<!-- end: TITLE & CONTENT -->
    

