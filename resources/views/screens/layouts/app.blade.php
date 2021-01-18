<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
  <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('dist/css/AdminLTE.min.css')}}">
  <!--  AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL::asset('dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dist/css/skins/all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/morris.js/morris.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{URL::asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!--http://aimodu.org:7777/admin/index_iframe.html?q=audio&search=#-->
    <style type="text/css">
        html {
            overflow: hidden;
        }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Konta') - 琼台</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('include')

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<!-- <body class="hold-transition sidebar-mini sidebar-collapse"> -->
<div id="app" class="{{ route_class() }}-page">
    <div class="wrapper">
        @include('screens.layouts._header')
        @include('screens.layouts._sidebar')

        <div class="content-wrapper text-sm">
            <!--bootstrap tab风格 多标签页-->
            <div class="content-tabs">
                <button class="roll-nav roll-left tabLeft" onclick="scrollTabLeft()">
                    <i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs menuTabs tab-ui-menu" id="tab-menu">
                    <div class="page-tabs-content" style="margin-left: 0px;">

                    </div>
                </nav>
                <button class="roll-nav roll-right tabRight" onclick="scrollTabRight()">
                    <i class="fa fa-forward" style="margin-left: 3px;"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown tabClose" data-toggle="dropdown">
                        页签操作<i class="fa fa-caret-down" style="padding-left: 3px;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" style="min-width: 128px;">
                        <li><a class="tabReload" href="javascript:refreshTab();">刷新当前</a></li>
                        <li><a class="tabCloseCurrent" href="javascript:closeCurrentTab();">关闭当前</a></li>
                        <li><a class="tabCloseAll" href="javascript:closeOtherTabs(true);">全部关闭</a></li>
                        <li><a class="tabCloseOther" href="javascript:closeOtherTabs();">除此之外全部关闭</a></li>
                    </ul>
                </div>
                <button class="roll-nav roll-right fullscreen" onclick="App.handleFullScreen()"><i
                        class="fa fa-arrows-alt"></i></button>
            </div>
            <div class="content-iframe " style="background-color: #ffffff; ">
                <div class="tab-content " id="tab-content">
<!-- 
  
            @yield('section')

            <section class="content container-fluid">
                @yield('content')

            </section> -->
                </div>
            </div> 
        </div>

        @include('screens.layouts._footer')
        <div class="control-sidebar-bg"></div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

 <!-- @yield('script')

 <script>
    $(function(){
        $('.nav-sidebar a').each(function(){
            if(this.href === window.location.href){
                $(this).addClass('active');
                $(this).parent().parent().parent().addClass('active');
                $(this).parent().parent().parent().children(":first").addClass('active');
            }
        });
    }); */
</script> -->

<!-- jQuery 3 -->
<script type="text/javascript" src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="{{URL::asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script type="text/javascript" src="{{URL::asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{URL::asset('dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script type="text/javascript" src="{{URL::asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script type="text/javascript" src="{{URL::asset('jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script type="text/javascript" src="{{URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script type="text/javascript" src="{{URL::asset('bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="dist/js/pages/dashboard2.js"></script>-->
<!-- AdminLTE App -->
<script type="text/javascript" src="{{URL::asset('dist/js/app.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript"  src="{{URL::asset('dist/js/demo.js')}}"></script>
<!--tabs-->
<script type="text/javascript"  src="{{URL::asset('dist/js/app_iframe.js')}}"></script>

<script type="text/javascript">
  /**
   * 本地搜索菜单
   */
  function search_menu() {
      //要搜索的值
      var text = $('input[name=q]').val();

      var $ul = $('.sidebar-menu');
      $ul.find("a.nav-link").each(function () {
          var $a = $(this).css("border", "");

          //判断是否含有要搜索的字符串
          if ($a.children("span.menu-text").text().indexOf(text) >= 0) {

              //如果a标签的父级是隐藏的就展开
              $ul = $a.parents("ul");

              if ($ul.is(":hidden")) {
                  $a.parents("ul").prev().click();
              }

              //点击该菜单
              $a.click().css("border", "1px solid");

//                return false;
          }
      });
  }

  $(function () {
      //console.log(window.location);

      App.setbasePath("../");
      App.setGlobalImgPath("dist/img/");

      addTabs({
          id: '10008',
          title: '欢迎页',
          close: false,
          url:'root',
          urlType: "relative"
      });

     // App.fixIframeCotent();

      /*addTabs({
       id: '10009',
       title: '404',
       close: true,
       url: 'UI/buttons_iframe2.html'
       });*/

      /*
       <li class="treeview">
       <a href="#">
       <i class="fa fa-edit"></i> <span>Forms</span>
       <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
       </span>
       </a>
       <ul class="treeview-menu">
       <li><a href="forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
       <li><a href="forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
       <li><a href="forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
       </ul>
       </li>
       */
      var menus = [
          // {
          //     id: "9000",
          //     text: "header",
          //     icon: "",
          //     isHeader: true
          // },
          {
              id: "9001",
              text: "UI Elements",
              icon: "fa fa-laptop",
              children: [
                  {
                      id: "90011",
                      text: "buttons",
                      icon: "fa fa-circle-o",
                      url: "UI/buttons_iframe.html",
                      targetType: "iframe-tab"
                  },
                  {
                      id: "90012",
                      text: "icons",
                      url: "UI/icons_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90013",
                      text: "general",
                      url: "UI/general_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90014",
                      text: "modals",
                      url: "UI/modals_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90015",
                      text: "sliders",
                      url: "UI/sliders_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90016",
                      text: "timeline",
                      url: "UI/timeline_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  }
              ]
          },
          {
              id: "9002",
              text: "Forms",
              icon: "fa fa-edit",
              children: [
                  {
                      id: "90021",
                      text: "advanced",
                      url: "forms/advanced_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90022",
                      text: "general",
                      url: "forms/general_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90023",
                      text: "editors",
                      url: "forms/editors_iframe.html",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o"
                  },
                  {
                      id: "90024",
                      text: "百度",
                      url: "https://www.baidu.com",
                      targetType: "iframe-tab",
                      icon: "fa fa-circle-o",
                      urlType: 'abosulte'
                  }
              ]
          }
      ];
      $('.sidebar-menu').sidebarMenu({data: menus});

      // 动态创建菜单后，可以重新计算 SlimScroll
      // $.AdminLTE.layout.fixSidebar();

      /*if ($.AdminLTE.options.sidebarSlimScroll) {
          if (typeof $.fn.slimScroll != 'undefined') {
              //Destroy if it exists
              var $sidebar = $(".sidebar");
              $sidebar.slimScroll({destroy: true}).height("auto");
              //Add slimscroll
              $sidebar.slimscroll({
                  height: ($(window).height() - $(".main-header").height()) + "px",
                  color: "rgba(0,0,0,0.2)",
                  size: "3px"
              });
          }
      }*/

  });
</script>
</body>

</html>