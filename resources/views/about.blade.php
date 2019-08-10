<!DOCTYPE html>
<html lang="zh">

@include('layouts.header')

<body class="page-body boxed-container">
    <nav class="navbar horizontal-menu navbar-fixed-top">
        <div class="navbar-inner">
            <div class="navbar-brand">
                <a href="/" class="logo">
                    <img src="{{ asset('img/logo_dark@2x.png') }}" width="100%" alt="" class="hidden-xs">
                    <img src="{{ asset('img/logo@2x.png') }}" width="100%" alt="" class="visible-xs">
                </a>
            </div>
            <div class="navbar-mobile-clear"></div>
        </div>
    </nav>
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <div class="main-content" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- 关于项目 -->
                        <h4 class="text-gray">关于项目</h4>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <blockquote>
                                        <p>本站隶属于绅士世界-助手集。我们注重简单，快捷化培养一个绅士。零基础，快速变成老司机</p>
                                        <br />
                                        <p>如果您也想提供一些本站未收入的网站，欢迎发邮至 monkeyblacktech97@gmail.com</p>
                                        <p>也欢迎您加入我们的<a href="https://jq.qq.com/?_wv=1027&k=5vveZbr" target="_blank">咸鱼队伍</a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- 关于作者 -->
                            <h4 class="text-gray">关于作者</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://jq.qq.com/?_wv=1027&k=5vveZbr', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://jq.qq.com/?_wv=1027&k=5vveZbr">
                                        <div class="xe-comment-entry">
                                            <a class="xe-user-img">
                                                <img src="https://i.jpg.dog/img/f9dafca196680a8b6574b0e937170228.png" class="img-circle" width="40">
                                            </a>
                                            <div class="xe-comment">
                                                <a href="#" class="xe-user-name overflowClip_1">
                                                    <strong>Designer. hui-ho.| 提供方. 绅士世界</strong>
                                                </a>
                                                <p class="overflowClip_2"> monkeyblacktech97@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br />
                                            <blockquote>
                                                <p>
                                                    本站基于<a href="https://github.com/hui-ho/WebStack-Laravel"> 开源项目 </a>二次开发，如果您在使用中出现什么问题可以邮件联系 monkeyblacktech97@gmail.com
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer -->
            <footer class="main-footer sticky footer-type-1 fixed">
                <div class="footer-inner">
                    <div class="footer-text">
                        &copy; 2019
                        <a href="/"><strong>吾爱绅士导航</strong></a> 由<a href="https://github.com/hui-ho" target="_blank"><strong>hui-ho</strong></a>设计 | 由 <a href="https://jq.qq.com/?_wv=1027&k=5vveZbr" target="_blank"><strong>绅士世界</strong>提供</a>
                    </div>
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>