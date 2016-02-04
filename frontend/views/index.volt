<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    {{ stylesheet_link('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900', false) }}

    {{ stylesheet_link('assets/css/icons/icomoon/styles.css') }}
    {{ stylesheet_link('assets/css/bootstrap.css') }}
    {{ stylesheet_link('assets/css/core.css') }}
    {{ stylesheet_link('assets/css/components.css') }}
    {{ stylesheet_link('assets/css/colors.css') }}
    <!-- /global stylesheets -->

    {{ assets.outputCss() }}

    <!-- Core JS files -->
    {{ javascript_include('assets/js/plugins/loaders/pace.min.js') }}
    {{ javascript_include('assets/js/core/libraries/jquery.min.js') }}
    {{ javascript_include('assets/js/core/libraries/bootstrap.min.js') }}
    {{ javascript_include('assets/js/plugins/loaders/blockui.min.js') }}
    <!-- /core JS files -->

    <!-- Theme JS files -->
    {{ javascript_include('assets/js/core/app.js') }}
    <!-- /theme JS files -->

    {{ assets.outputJs() }}
</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url() }}"><img src="{{ static_url('assets/images/logo_light.png') }}" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    {% if session.get('uid') %}
    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/assets/images/demo/users/face11.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge badge-warning pull-right">58</span>
                            <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    {% endif %}

</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                {{ content() }}

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="{{ url() }}">{{ tag._('Website Name') }}</a> by
                    <a href="{{ url(tag._('Author Link')) }}" target="_blank">{{ tag._('Author Name') }}</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>