<!DOCTYPE HTML>
<html lang="zh-cmn-Hans" class="">
<head>
<meta charset="UTF-8">
<meta name="description" content="提供图书、电影、音乐唱片的推荐、评论和价格比较，以及城市独特的文化生活。">
<meta name="keywords" content="豆瓣,广播,登陆豆瓣">
<meta property="qc:admins" content="2554215131764752166375" />
<meta property="wb:webmaster" content="375d4a17a4fa24c2" />
<meta name="mobile-agent" content="format=html5; url=https://m.douban.com">
<title>豆瓣</title>
<script>
function set_cookie(t,e,o,n){var i,a,r=new Date;r.setTime(r.getTime()+24*(e||30)*60*60*1e3),i="; expires="+r.toGMTString();for(a in t)document.cookie=a+"="+t[a]+i+"; domain="+(o||"douban.com")+"; path="+(n||"/")}function get_cookie(t){var e,o,n=t+"=",i=document.cookie.split(";");for(e=0;e<i.length;e++){for(o=i[e];" "==o.charAt(0);)o=o.substring(1,o.length);if(0===o.indexOf(n))return o.substring(n.length,o.length).replace(/\"/g,"")}return null}window.Douban=window.Douban||{};var Do=function(){Do.actions.push([].slice.call(arguments))};Do.ready=function(){Do.actions.push([].slice.call(arguments))},Do.add=Do.define=function(t,e){Do.mods[t]=e},Do.global=function(){Do.global.mods=Array.prototype.concat(Do.global.mods,[].slice.call(arguments))},Do.global.mods=[],Do.mods={},Do.actions=[],Douban.init_show_login=function(t){Do("dialog",function(){var t="/j/misc/login_form";dui.Dialog({title:"登录",url:t,width:/device-mobile/i.test(document.documentElement.className)?.9*document.documentElement.offsetWidth:350,cache:!0,callback:function(t,e){e.node.addClass("dialog-login"),e.node.find("h2").css("display","none"),e.node.find(".hd h3").replaceWith(e.node.find(".bd h3")),e.node.find("form").css({border:"none",width:"auto",padding:"0"}),e.update()}}).open()})},Do(function(){function t(t,e){var o=["ref="+encodeURIComponent(location.pathname)];for(var n in e)e.hasOwnProperty(n)&&o.push(n+"="+e[n]);window._SPLITTEST&&o.push("splittest="+window._SPLITTEST),localStorage.setItem("report",(localStorage.getItem("report")||"")+"_moreurl_separator_"+o.join("&"))}!function(){"localStorage"in window||(window.localStorage=function(){var t=document;if(!t.documentElement.addBehavior)throw"don't support localstorage or userdata.";var e="_localstorage_ie",o=t.createElement("input");o.type="hidden";var n=function(n){return function(){t.body.appendChild(o),o.addBehavior("#default#userData");var i=new Date;i.setDate(i.getDate()+365),o.expires=i.toUTCString(),o.load(e);var a=n.apply(o,arguments);return t.body.removeChild(o),a}};return{getItem:n(function(t){return this.getAttribute(t)}),setItem:n(function(t,o){this.setAttribute(t,o),this.save(e)}),removeItem:n(function(t){this.removeAttribute(t),this.save(e)}),clear:n(function(){for(var t,o=this.XMLDocument.documentElement.attributes,n=0;t=o[n];n++)this.removeAttribute(t.name);this.save(e)})}}())}(),$(window).one("load",function(){var t=localStorage.getItem("report");if(t){t=t.split("_moreurl_separator_");var e=function(o){return""==o?void e(t.shift()):void $.get("undefined"==typeof _MOREURL_REQ?"/stat.html?"+o:_MOREURL_REQ+"?"+o,function(){return t.length?(e(t.shift()),void localStorage.setItem("report",t.join("_moreurl_separator_"))):void localStorage.removeItem("report")})};e(t.shift())}}),window.moreurl=t,$(document).click(function(e){var o=e.target,n=$(o).data("moreurl-dict");n&&t(o,n)}),$.ajax_withck=function(t){return"POST"==t.type&&(t.data=$.extend(t.data||{},{ck:get_cookie("ck")})),$.ajax(t)},$.postJSON_withck=function(t,e,o){return $.post_withck(t,e,o,"json")},$.post_withck=function(t,e,o,n){return $.isFunction(e)&&(n=o,o=e,e={}),$.ajax({type:"POST",url:t,data:$.extend(e,{ck:get_cookie("ck")}),success:o,dataType:n||"text"})},$("html").click(function(t){var e=$(t.target),o=e.attr("class");o&&$(o.match(/a_(\w+)/gi)).each($.proxy(function(e,o){var n=Douban[o.replace(/^a_/,"init_")];"function"==typeof n&&(t.preventDefault(),n.call(this,t))},e[0]))})});

Do.add('dialog', {path: 'https://img3.doubanio.com/f/shire/3d185ca912c999ee7f464749201139ebf8eb6972/js/ui/dialog.js', type: 'js', requires: ['https://img3.doubanio.com/f/shire/8377b9498330a2e6f056d863987cc7a37eb4d486/css/ui/dialog.css']});
Do.global('https://img3.doubanio.com/f/sns/b5793c2d7c298173d57ecf7d96708b5615336def/js/sns/fp/base.js', 'dialog');
</script>
<link rel="stylesheet" href="https://img3.doubanio.com/f/shire/25e3b87e05e5de459e1473fad35d25cafd392ad6/css/core/_init_.css">
<link rel="stylesheet" href="https://img3.doubanio.com/f/sns/024dd07167e74fe8d2ac2faaf2725333e6f7561b/css/sns/anonymous_home.css">
<style type="text/css">
.rec_topics_name{
    display: inline-block;
    margin-bottom: 6px;
    font-size: 13px;
    line-height: 1;
    color: #3377aa;
}
.rec_topics_subtitle{
    display: block;
    margin-bottom: 15px;
    font-size: 12px;
    line-height: 1;
    color: #aaaaaa;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.rec_topics_label{
    transform: translateY(-0.5px);
    display: inline-block;
    font-size: 12px;
    margin-left: 2px;
}
.rec_topics{
    line-height: 1;
    margin-bottom: 15px;
}
.rec_topics:last-child{
    margin-bottom: 0;
}
.rec_topics_label_ad{
    color: #DFDFDF;
    -moz-transform: scale(0.91);
    -webkit-transform: scale(0.91);
    transform: scale(0.91);
}

html[class*=ua-ff] .rec_topics_subtitle{
    line-height: 14px;
}

</style>
</head>

<body>


  <div id="anony-nav">
    <div class="anony-nav-links">
    <ul>
    <li> <a target="_blank" class="lnk-book" href="https://book.douban.com">豆瓣读书</a></li>
    <li> <a target="_blank" class="lnk-movie" href="https://movie.douban.com">豆瓣电影</a></li>
    <li> <a target="_blank" class="lnk-music" href="https://music.douban.com">豆瓣音乐</a></li>
    <li> <a target="_blank" class="lnk-group" href="https://www.douban.com/group/">豆瓣小组</a></li>
    <li> <a target="_blank" class="lnk-events" href="https://www.douban.com/location/">豆瓣同城</a></li>
    <li> <a target="_blank" class="lnk-fm" href="https://douban.fm">豆瓣FM</a></li>
    <li> <a target="_blank" class="lnk-shijian" href="https://www.douban.com/time/?dt_time_source=douban-web_anonymous_index_top_nav">豆瓣时间</a></li>
    <li> <a target="_blank" class="lnk-market" href="https://market.douban.com?utm_campaign=anonymous_top_nav&utm_source=douban&utm_medium=pc_web">豆瓣市集</a></li>
    </ul>
    </div>

    <h1><a href="https://www.douban.com">豆瓣</a></h1>

    <div class="anony-srh">
    <form action="https://www.douban.com/search" method="get">
      <span class="inp"><input type="text" maxlength="60" size="12" placeholder="书籍、电影、音乐、小组、小站、成员" name="q" autocomplete="off"></span>
    <span class="bn"><input type="submit" value="搜索"></span>
    </form>
    </div>
  </div>



<div id="anony-reg-new">
  <div class="wrapper">
    
<div class="login">
    <form id="lzform" name="lzform" method="post" action="https://www.douban.com/accounts/login">
        <fieldset>
            <legend>登录</legend>
            <input type="hidden" value="index_nav" name="source">
            <div class="item item-account">
                <input type="text" name="form_email" id="form_email" value="" class="inp" placeholder="邮箱 / 手机号" tabIndex="1">
            </div>
            <div class="item item-passwd">
                <input name="form_password" placeholder="密码" id="form_password" class="inp" type="password" tabIndex="2">
                <div class="opt">
                    <a href="https://www.douban.com/accounts/resetpassword">帮助</a>
                </div>
            </div>
            <div class="item item-submit">
                <input value="登录豆瓣" type="submit" class="bn-submit" tabIndex="4">
                <a href="/accounts/register" class="lnk-reg">注册帐号</a>
            </div>
            <div class="item-action">
                <label for="form_remember">
                    <input name="remember" type="checkbox" id="form_remember" tabIndex="4">记住我
                </label>
                <ul class="item-action-third">
                    <li><a class="wechat" href="https://www.douban.com/accounts/connect/wechat/?from=douban-web-anony-home" target="_blank" title="微信登录">微信登录</a></li>
                    <li><a class="weibo" href="https://www.douban.com/accounts/connect/sina_weibo/?from=douban-web-anony-home" target="_blank" title="微博登录">微博登录</a></li>
                </ul>
            </div>
        </fieldset>
    </form>
    <div style="display:none;">
        <img src="https://www.douban.com/pics/blank.gif" onload="(function(url){document.getElementById('lzform').action=url;})('https://www.douban.com/accounts/login')"/>
    </div>
</div>

    <div class="app">
      <p class="app-title">豆瓣<span>5.0</span></p>
      <p class="app-slogan"><span>我们的精神角落</span></p>
      <a href="https://www.douban.com/doubanapp/app?channel=nimingye" class="lnk-app">下载豆瓣 App</a>
      <div class="app-qr">
        <a href="javascript: void 0;" class="lnk-qr" id="expand-qr"><img src="https://img3.doubanio.com/f/sns/0c708de69ce692883c1310053c5748c538938cb0/pics/sns/anony_home/icon_qrcode_green.png" width="28" height="28" /></a>
        <div class="app-qr-expand">
          <img src="https://img3.doubanio.com/f/sns/1cad523e614ec4ecb6bf91b054436bb79098a958/pics/sns/anony_home/doubanapp_qrcode.png" width="160" height="160" />
          <p>iOS / Android 扫码直接下载</p>
        </div>
      </div>
    </div>
  </div>
  <script>
  Do(function() {
    var app_qr = $('.app-qr');
    app_qr.hover(function() {
      app_qr.addClass('open');
    }, function() {
      app_qr.removeClass('open');
    });
  });
  </script>
</div>







            
<div id="anony-sns" class="section">
  <div class="wrapper">
  
<!-- douban ad begin -->
<div id="dale_anonymous_homepage_top_for_crazy_ad"></div>
<!-- douban ad end -->

  
  <div class="side">
  <div style="margin:10px 0px;">
    <div id="dale_anonymous_homepage_right_top"></div>
  </div>
  <div class="online">
    <ul>
      






<div class="mod">
    
    <h2>
        热门话题
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="/gallery/" target="_self">去话题广场</a>
                ) </span>
    </h2>


    <ul>
        
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E5%AE%BF%E8%88%8D%E6%95%85%E4%BA%8B/?from=hot_topic_anony_sns" class="rec_topics_name">宿舍故事</a>
                        <span class="rec_topics_label" style="color: #4CC15F;">[新]</span>
                    <span class="rec_topics_subtitle">宿舍里的江湖 · 154人参与</span>
            </li>
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E5%81%B6%E5%83%8F%E5%9D%8D%E5%A1%8C/?from=hot_topic_anony_sns" class="rec_topics_name">偶像坍塌</a>
                    <span class="rec_topics_subtitle">是偶像变了，还是我们成长了？ · 1688人参与</span>
            </li>
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E4%BC%98%E7%A7%80%E7%9A%84%E5%88%91%E4%BE%A6%E5%89%A7%E6%98%AF%E4%BB%80%E4%B9%88%E6%A0%B7%E7%9A%84/?from=hot_topic_anony_sns" class="rec_topics_name">优秀的刑侦剧是什么样的</a>
                    <span class="rec_topics_subtitle">《白夜追凶》《无证之罪》热播之际 · 497人参与</span>
            </li>
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E5%BD%B1%E5%93%8D%E6%88%91%E4%B8%80%E7%94%9F%E7%9A%84%E6%89%8B%E6%9C%BA/?from=hot_topic_anony_sns" class="rec_topics_name">影响我一生的手机</a>
                    <span class="rec_topics_subtitle">有人问我你究竟是哪里好 · 2837人参与</span>
            </li>
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E5%88%86%E5%A8%A9%E8%BF%99%E5%85%B3%E6%80%8E%E4%B9%88%E8%BF%87/?from=hot_topic_anony_sns" class="rec_topics_name">分娩这关怎么过</a>
                    <span class="rec_topics_subtitle">不要让产妇一个人战斗 · 13970人参与</span>
            </li>
            <li class="rec_topics">
                    <a href="https://www.douban.com/gallery/topic/%E5%BC%A0%E7%88%B1%E7%8E%B2%E7%AC%94%E4%B8%8B%E6%9C%80%E6%89%93%E5%8A%A8%E6%88%91%E7%9A%84%E4%BA%BA%E7%89%A9/?from=hot_topic_anony_sns" class="rec_topics_name">张爱玲笔下最打动我的人物</a>
                    <span class="rec_topics_subtitle">纪念张爱玲逝世二十二周年 · 1408人参与</span>
            </li>
    </ul>
</div>

      <!-- douban ad begin -->
      <li>
        <div id="dale_homepage_online_activity_promo_1"></div>
      </li>
      <li>
        <div id="dale_anonymous_homepage_doublemint"></div>
      </li>
      <!-- douban ad end -->
    </ul>
  </div>
</div>
  <div class="main">
<div class="mod">

  
    <h2>
        热点内容
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://www.douban.com/explore/" target="_self">更多</a>
                ) </span>
    </h2>

  <div class="albums">
    <ul>
      <li>
      <div class="pic">
          <a href="https://www.douban.com/photos/album/1651580072/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/view/photo/albumcover/public/p2497284699.jpg" alt="" /></a>
      </div>
      <a href="https://www.douban.com/photos/album/1651580072/">[ 纽约折叠 x 废墟 ]</a>
      <span class="num">52张照片</span>
      <li>
      <div class="pic">
          <a href="https://www.douban.com/photos/album/1632225075/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/view/photo/albumcover/public/p2456421058.jpg" alt="" /></a>
      </div>
      <a href="https://www.douban.com/photos/album/1632225075/">Miya早餐练习册</a>
      <span class="num">45张照片</span>
      <li>
      <div class="pic">
          <a href="https://www.douban.com/photos/album/1628255920/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/photo/albumcover/public/p2394444231.jpg" alt="" /></a>
      </div>
      <a href="https://www.douban.com/photos/album/1628255920/">清道夫</a>
      <span class="num">66张照片</span>
      <li>
      <div class="pic">
          <a href="https://www.douban.com/photos/album/1651952379/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/photo/albumcover/public/p2498206775.jpg" alt="" /></a>
      </div>
      <a href="https://www.douban.com/photos/album/1651952379/">青海 | 在湖边的两天两夜</a>
      <span class="num">42张照片</span>
    </ul>
  </div>
  <div class="notes">
    <ul>
      <li class="first">
      <div class="title">
          <a href="https://www.douban.com/note/637129871/">柳树下的人家</a>
      </div>
      <div class="author">
        青崖白鹿的日记
      </div>
      <p>我们村里有两棵大柳树，村东头一棵，村西头一棵。 两棵柳树都是怀抱粗细，树根遒劲...</p>
      </li>

      <li><a href="https://www.douban.com/note/622718293/">香港扫货经验分享（衣着类）</a></li>
      <li><a href="https://www.douban.com/note/637378522/">从上游冲下来的故事和待占卜的叶子</a></li>
      <li><a href="https://www.douban.com/note/637313385/">当时的月亮</a></li>
      <li><a href="https://www.douban.com/note/637350320/">我的100件开架彩妆——什么值得买（1）</a></li>
      <li><a href="https://www.douban.com/note/637159642/">换季用什么？一些产品的个人使用心得</a></li>
      <li><a href="https://www.douban.com/note/637308976/">我做饭，就是为了拍照片</a></li>
      <li><a href="https://www.douban.com/note/334865008/">梨子罐头</a></li>
      <li><a href="https://www.douban.com/note/637062569/">分享丨七八月爱用品</a></li>
      <li><a href="https://www.douban.com/note/637276226/">海淀高校食堂鄙视链</a></li>
    </ul>
  </div>
</div>
</div>
  </div>
  

</div>








            
<div id="anony-time" class="section">
  <div class="wrapper">
  
  
    <div class="sidenav">
        <h2 class="section-title"><a href="/time">豆瓣时间</a></h2>
    </div>

  <div class="side"></div>
  <div class="main">
    
    <h2>
        热门专栏
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="/time?dt_time_source=douban-web_anonymous" target="_self">更多</a>
                ) </span>
    </h2>


    



<ul class="time-list">
        <li>
            
            <a class="cover listen  " href="https://m.douban.com/time/column/16?dt_time_source=douban-web_anonymous">
                <img src="https://img1.doubanio.com/dae/niffler/niffler/images/416add14-0254-11e7-8292-0242ac11002c.jpg" alt="醒来——北岛和朋友们的诗歌课">
            </a>
            <a class="title" href="https://m.douban.com/time/column/16?dt_time_source=douban-web_anonymous">醒来——北岛和朋友们的诗歌课</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen new " href="https://m.douban.com/time/column/53?dt_time_source=douban-web_anonymous">
                <img src="https://img1.doubanio.com/dae/niffler/niffler/images/044bb4c8-7688-11e7-b63f-0242ac110028.jpg" alt="一碗茶的款待——日本茶道的形与心">
            </a>
            <a class="title" href="https://m.douban.com/time/column/53?dt_time_source=douban-web_anonymous">一碗茶的款待——日本茶道的形与心</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen new " href="https://m.douban.com/time/column/55?dt_time_source=douban-web_anonymous">
                <img src="https://img3.doubanio.com/dae/niffler/niffler/images/95667170-874d-11e7-a14f-0242ac110020.png" alt="吃个宋代冰淇淋——随孟晖女史重觅古代生活">
            </a>
            <a class="title" href="https://m.douban.com/time/column/55?dt_time_source=douban-web_anonymous">吃个宋代冰淇淋——随孟晖女史重觅古代生活</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen  new" href="https://m.douban.com/time/column/50?dt_time_source=douban-web_anonymous">
                <img src="https://img3.doubanio.com/dae/niffler/niffler/images/5d4dd498-5676-11e7-bb3d-0242ac11002d.jpg" alt="以乐语教国子——叶嘉莹古诗词吟诵课">
            </a>
            <a class="title" href="https://m.douban.com/time/column/50?dt_time_source=douban-web_anonymous">以乐语教国子——叶嘉莹古诗词吟诵课</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover read  " href="https://m.douban.com/time/column/45?dt_time_source=douban-web_anonymous">
                <img src="https://img3.doubanio.com/dae/niffler/niffler/images/2621f522-50ad-11e7-a3d6-0242ac110041.png" alt="拍张好照片——跟七七学生活摄影">
            </a>
            <a class="title" href="https://m.douban.com/time/column/45?dt_time_source=douban-web_anonymous">拍张好照片——跟七七学生活摄影</a>
            <span class="type">图文专栏</span>
        </li>
        <li>
            
            <a class="cover listen  new" href="https://m.douban.com/time/column/52?dt_time_source=douban-web_anonymous">
                <img src="https://img1.doubanio.com/dae/niffler/niffler/images/513f432a-6545-11e7-a372-0242ac110018.png" alt="回到原典——细节里的中国美术史">
            </a>
            <a class="title" href="https://m.douban.com/time/column/52?dt_time_source=douban-web_anonymous">回到原典——细节里的中国美术史</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen  new" href="https://m.douban.com/time/column/41?dt_time_source=douban-web_anonymous">
                <img src="https://img3.doubanio.com/dae/niffler/niffler/images/6db31128-39dd-11e7-895e-0242ac110016.png" alt="歌词时光——姚谦写词课">
            </a>
            <a class="title" href="https://m.douban.com/time/column/41?dt_time_source=douban-web_anonymous">歌词时光——姚谦写词课</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen  " href="https://m.douban.com/time/column/39?dt_time_source=douban-web_anonymous">
                <img src="https://img1.doubanio.com/dae/niffler/niffler/images/54d34448-1dea-11e7-afa9-0242ac11002c.jpg" alt="古今——杨照史记百讲">
            </a>
            <a class="title" href="https://m.douban.com/time/column/39?dt_time_source=douban-web_anonymous">古今——杨照史记百讲</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover listen  " href="https://m.douban.com/time/column/43?dt_time_source=douban-web_anonymous">
                <img src="https://img1.doubanio.com/dae/niffler/niffler/images/7bea8578-3f69-11e7-8261-0242ac11001b.png" alt="人性皆有裂隙——理解人格的52堂心理课">
            </a>
            <a class="title" href="https://m.douban.com/time/column/43?dt_time_source=douban-web_anonymous">人性皆有裂隙——理解人格的52堂心理课</a>
            <span class="type">音频专栏</span>
        </li>
        <li>
            
            <a class="cover read  " href="https://m.douban.com/time/column/37?dt_time_source=douban-web_anonymous">
                <img src="https://img3.doubanio.com/dae/niffler/niffler/images/c3ab871e-2401-11e7-9fe8-0242ac110046.png" alt="邪典电影本纪——亚文化电影50讲">
            </a>
            <a class="title" href="https://m.douban.com/time/column/37?dt_time_source=douban-web_anonymous">邪典电影本纪——亚文化电影50讲</a>
            <span class="type">图文专栏</span>
        </li>
</ul>

</div>
  </div>
  
</div>








            
<div id="anony-video" class="section">
  <div class="wrapper">
  
  
    <div class="sidenav">
        <h2 class="section-title"><a href="javascript:void(0)">视频</a></h2>
    </div>

  <div class="side"></div>
  <div class="main">
    
    <h2>
        如是
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
    </h2>

    
    <ul class="video-list video-rushi">
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
    </ul>


    
    <h2>
        瓣嘴
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
    </h2>

    
    <ul class="video-list video-banzui">
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
        <li>
            <div class="video-cover"><a><span></span></a></div>
            <a class="video-title"></a>
        </li>
    </ul>

</div>
  </div>
  
</div>








            
<div id="anony-movie" class="section">
  <div class="wrapper">
  
  
<div class="sidenav">
  <h2 class="section-title"><a href="https://movie.douban.com">电影</a></h2>
  
  
  <div class="side-links nav-anon">
      <ul>
                          
                 <li><a href="https://movie.douban.com/nowplaying/">影讯&amp;购票</a></li>
             
                 <li class="site-nav-bt">
                     <a href="https://movie.douban.com/explore">选电影</a>
                     <img style="top: -5px; position: relative;" src="https://img3.doubanio.com/pics/new_menu.gif"/>
                 </li>
             
                 <li><a href="https://movie.douban.com/tv/">电视剧</a></li>
             
                 <li><a href="https://movie.douban.com/chart">排行榜</a></li>
             
                 <li><a href="https://movie.douban.com/tag/">分类</a></li>
             
                 <li><a href="https://movie.douban.com/review/best/">影评</a></li>
             
                 <li class="site-nav-bt"><a href="https://movie.douban.com/trailers">预告片</a></li>
             
                 <li><a href="https://movie.douban.com/askmatrix/hot_questions/all">问答</a></li>
      
      </ul>
  </div>
 
  


    <div class="apps-list">
    <ul>
    </ul>
    </div>

</div>

  <div class="side">
<div class="mod">


    <h2>
        影片分类
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://movie.douban.com/tag/?view=type" target="_self">更多</a>
                ) </span>
    </h2>

<div class="tags list">
  <ul>
    <li><a href="https://movie.douban.com/tag/爱情">爱情</a></li>
    <li><a href="https://movie.douban.com/tag/喜剧">喜剧</a></li>
    <li><a href="https://movie.douban.com/tag/剧情">剧情</a></li>
    <li><a href="https://movie.douban.com/tag/动画">动画</a></li>
    <li><a href="https://movie.douban.com/tag/科幻">科幻</a></li>
    <li><a href="https://movie.douban.com/tag/动作">动作</a></li>
    <li><a href="https://movie.douban.com/tag/经典">经典</a></li>
    <li><a href="https://movie.douban.com/tag/悬疑">悬疑</a></li>
    <li><a href="https://movie.douban.com/tag/青春">青春</a></li>
    <li><a href="https://movie.douban.com/tag/犯罪">犯罪</a></li>
    <li><a href="https://movie.douban.com/tag/惊悚">惊悚</a></li>
    <li><a href="https://movie.douban.com/tag/文艺">文艺</a></li>
    <li><a href="https://movie.douban.com/tag/搞笑">搞笑</a></li>
    <li><a href="https://movie.douban.com/tag/纪录片">纪录片</a></li>
    <li><a href="https://movie.douban.com/tag/励志">励志</a></li>
    <li><a href="https://movie.douban.com/tag/战争">战争</a></li>
    <li><a href="https://movie.douban.com/tag/恐怖">恐怖</a></li>
    <li><a href="https://movie.douban.com/tag/黑色幽默">黑色幽默</a></li>
    <li><a href="https://movie.douban.com/tag/美国">美国</a></li>
    <li><a href="https://movie.douban.com/tag/日本">日本</a></li>
    <li><a href="https://movie.douban.com/tag/香港">香港</a></li>
    <li><a href="https://movie.douban.com/tag/英国">英国</a></li>
    <li><a href="https://movie.douban.com/tag/中国">中国</a></li>
    <li><a href="https://movie.douban.com/tag/韩国">韩国</a></li>
    <li><a href="https://movie.douban.com/tag/法国">法国</a></li>
    <li><a href="https://movie.douban.com/tag/台湾">台湾</a></li>
    <li><a href="https://movie.douban.com/tag/中国大陆">中国大陆</a></li>
    <li><a href="https://movie.douban.com/tag/德国">德国</a></li>
  </ul>
</div>
</div>

<div class="mod">


    <h2>
        近期热门
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://movie.douban.com/chart" target="_self">更多</a>
                ) </span>
    </h2>

<div class="list1 movie-charts">
  <ol>
    <li>
    <a href="https://movie.douban.com/subject/26270502/">绣春刀II：修罗战场</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/26445216/">军舰岛</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/6311303/">加勒比海盗5：死无对证</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/26754513/">人生密密缝</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/25812712/">神偷奶爸3</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/26035290/">悟空传</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/11600078/">目击者之追凶</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/25824686/">变形金刚5：最后的骑士</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/26884892/">大病</a>
    </li>
    <li>
    <a href="https://movie.douban.com/subject/7154408/">猎杀星期一</a>
    </li>
  </ol>
</div>
</div>
</div>
  <div class="main">


    <h2>
        正在热映
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://movie.douban.com/showtimes/" target="_self">更多</a>
                ) </span>
    </h2>

<div class="movie-list list">
  <ul>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/25808075/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2494093630.jpg" alt="猩球崛起3：终极之战" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/25808075/">猩球崛起3：终...</a>
    </div>
    <div class="rating">
        <span class="allstar35"></span><i>7.1</i>
    </div>
    <a href="https://movie.douban.com/subject/25808075/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/27132379/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2499135562.jpg" alt="这一刻，我要世界看见" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/27132379/">这一刻，我要世...</a>
    </div>
    <div class="rating">
        <span class="txt-tip">暂无评分</span>
    </div>
    <a href="https://movie.douban.com/subject/27132379/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/24753477/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2497756471.jpg" alt="蜘蛛侠：英雄归来" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/24753477/">蜘蛛侠：英雄归...</a>
    </div>
    <div class="rating">
        <span class="allstar40"></span><i>7.5</i>
    </div>
    <a href="https://movie.douban.com/subject/24753477/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/26580232/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2498971355.jpg" alt="看不见的客人" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/26580232/">看不见的客人</a>
    </div>
    <div class="rating">
        <span class="allstar45"></span><i>8.7</i>
    </div>
    <a href="https://movie.douban.com/subject/26580232/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/22266126/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2498055621.jpg" alt="王牌保镖" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/22266126/">王牌保镖</a>
    </div>
    <div class="rating">
        <span class="allstar35"></span><i>7.1</i>
    </div>
    <a href="https://movie.douban.com/subject/22266126/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/26634179/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2498371582.jpg" alt="刀剑神域：序列之争" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/26634179/">刀剑神域：序列...</a>
    </div>
    <div class="rating">
        <span class="allstar35"></span><i>7.2</i>
    </div>
    <a href="https://movie.douban.com/subject/26634179/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/26607693/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2494950714.jpg" alt="敦刻尔克" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/26607693/">敦刻尔克</a>
    </div>
    <div class="rating">
        <span class="allstar45"></span><i>8.6</i>
    </div>
    <a href="https://movie.douban.com/subject/26607693/cinema/" class="bn-link bn-ticket">选座购票</a>
    <li>
    <div class="pic">
        <a href="https://movie.douban.com/subject/26363254/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/movie_poster_cover/spst/public/p2485983612.jpg" alt="战狼2" /></a>
    </div>
    <div class="title">
      <a href="https://movie.douban.com/subject/26363254/">战狼2</a>
    </div>
    <div class="rating">
        <span class="allstar40"></span><i>7.4</i>
    </div>
    <a href="https://movie.douban.com/subject/26363254/cinema/" class="bn-link bn-ticket">选座购票</a>
  </ul>
</div>
</div>
  </div>
  
    <div id="dale_anonymous_homepage_movie_bottom" class="extra"></div>

</div>








            
<div id="anony-group" class="section">
  <div class="wrapper">
  
  
<div class="sidenav">
  <h2 class="section-title"><a href="https://www.douban.com/group/">小组</a></h2>
  
  
  <div class="side-links nav-anon">
      <ul>
                          
                 <li><a href="/group/explore">精选</a></li>
             
                 <li><a href="/group/explore/culture">文化</a></li>
             
                 <li><a href="/group/explore/travel">行摄</a></li>
             
                 <li><a href="/group/explore/ent">娱乐</a></li>
             
                 <li><a href="/group/explore/fashion">时尚</a></li>
             
                 <li><a href="/group/explore/life">生活</a></li>
             
                 <li><a href="/group/explore/tech">科技</a></li>
      
      </ul>
  </div>
 
  


    <div class="apps-list">
    <ul>
    </ul>
    </div>

</div>

  <div class="side">
<div class="mod">

    <h2>
        小组分类
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
    </h2>

   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=兴趣">兴趣&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=旅行">旅行</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=摄影">摄影</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=影视">影视</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=音乐">音乐</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=文学">文学</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=游戏">游戏</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=动漫">动漫</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=运动">运动</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=戏曲">戏曲</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=桌游">桌游</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=怪癖">怪癖</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=生活">生活&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=健康">健康</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=美食">美食</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=宠物">宠物</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=美容">美容</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=化妆">化妆</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=护肤">护肤</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=服饰">服饰</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=公益">公益</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=家庭">家庭</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=育儿">育儿</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=汽车">汽车</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=购物">购物&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=淘宝">淘宝</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=二手">二手</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=团购">团购</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=数码">数码</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=品牌">品牌</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=文具">文具</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=社会">社会&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=求职">求职</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=租房">租房</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=励志">励志</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=留学">留学</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=出国">出国</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=理财">理财</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=传媒">传媒</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=创业">创业</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=考试">考试</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=艺术">艺术&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=设计">设计</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=手工">手工</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=展览">展览</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=曲艺">曲艺</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=舞蹈">舞蹈</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=雕塑">雕塑</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=纹身">纹身</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=学术">学术&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=人文">人文</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=社科">社科</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=自然">自然</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=建筑">建筑</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=国学">国学</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=语言">语言</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=宗教">宗教</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=哲学">哲学</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=软件">软件</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=硬件">硬件</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=互联网">互联网</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=情感">情感&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=恋爱">恋爱</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=心情">心情</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=心理学">心理学</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=星座">星座</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=塔罗">塔罗</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=LES">LES</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=GAY">GAY</a></li>
       </ul>
    </div>
   <div class="cate group-cate">
       <ul>
       <li class="cate-label"><a href="https://www.douban.com/group/explore?tag=闲聊">闲聊&raquo; </a></li>
       <li><a href="https://www.douban.com/group/explore?tag=吐槽">吐槽</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=笑话">笑话</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=直播">直播</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=八卦">八卦</a></li>
       <li><a href="https://www.douban.com/group/explore?tag=发泄">发泄</a></li>
       </ul>
    </div>
</div>
</div>
  <div class="main">


    <h2>
        热门小组
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://www.douban.com/group/explore" target="_self">更多</a>
                ) </span>
    </h2>

<div class="group-list list">
  <ul>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/407193/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g407193-15.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/407193/">帮帮组™加入这个组就有人帮你了！</a>
      </div>
      15274 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/echofans/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g10083-4.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/echofans/">我爱三毛</a>
      </div>
      44232 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/shafake/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/icon/g210869-9.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/shafake/">沙发客</a>
      </div>
      22205 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/liucixin/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/icon/g37688-27.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/liucixin/">刘慈欣</a>
      </div>
      21242 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/20618/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g20618-4.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/20618/">西双版纳</a>
      </div>
      10365 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/402725/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g402725-3.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/402725/">记事本圆梦小组</a>
      </div>
      109154 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/dashan/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g33120-3.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/dashan/">搭讪学</a>
      </div>
      92993 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/170177/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/icon/g170177-27.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/170177/">这辈子一定要做几件疯狂的事</a>
      </div>
      91222 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/cuthair/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g109498-1.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/cuthair/">自己给自己剪头发</a>
      </div>
      31723 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/83759/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/icon/g83759-2.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/83759/">我们就是要做衣服给自己穿</a>
      </div>
      3834 个成员
    </div>
    <li>
    <div class="pic">
        <a href="https://www.douban.com/group/362263/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/icon/g362263-7.jpg" alt="" width="48" /></a>
    </div>
    <div class="info">
      <div class="title">
        <a href="https://www.douban.com/group/362263/">对象太他妈难找了党-单身凸^-^凸</a>
      </div>
      15423 个成员
    </div>
  </ul>
</div>
</div>
  </div>
  
</div>








            
<div id="anony-book" class="section">
  <div class="wrapper">
  
  
<div class="sidenav">
  <div class="mod">
  <h2 class="section-title"><a href="https://book.douban.com">读书</a></h2>
  
  
  <div class="side-links nav-anon">
      <ul>
                                                    
                 <li><a href="https://book.douban.com/tag/">分类浏览</a></li>
             
                <li>
                    <a target="_blank" href="https://read.douban.com?dcn=entry&amp;dcs=book-nav&amp;dcm=douban">阅读</a>
                    <img style="top: 4px; position: absolute;" src="https://img3.doubanio.com/pics/new_menu.gif"/>
                </li>
             
                 <li><a href="https://book.douban.com/writers/">作者</a></li>
             
                 <li><a href="https://book.douban.com/review/best/">书评</a></li>
      
          <li class="site-nav-prom">
              <a class="lnk-buy" href="https://book.douban.com/cart">
                  <em>购书单</em>
              </a>
          </li>
      </ul>
  </div>
 
  </div>

  


    <div class="apps-list">
    <ul>
    <li><a href="https://read.douban.com/app/" class="lnk-icon"><i class="app-icon app-icon-read"></i></a><a href="https://read.douban.com/app/">豆瓣阅读</a></li>
    </ul>
    </div>

</div>

  <div class="side">

<div class="mod">

    <h2>
        热门标签
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://book.douban.com/tag/?view=type" target="_self">更多</a>
                ) </span>
    </h2>

<div class="book-cate-mod">
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[文学]</li>
  <li><a href="https://book.douban.com/tag/小说">小说</a></li>
  <li><a href="https://book.douban.com/tag/随笔">随笔</a></li>
  <li><a href="https://book.douban.com/tag/日本文学">日本文学</a></li>
  <li><a href="https://book.douban.com/tag/散文">散文</a></li>
  <li><a href="https://book.douban.com/tag/诗歌">诗歌</a></li>
  <li><a href="https://book.douban.com/tag/童话">童话</a></li>
  <li><a href="https://book.douban.com/tag/名著">名著</a></li>
  <li><a href="https://book.douban.com/tag/港台">港台</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#文学">更多</a></li>
  </ul>
</div>
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[流行]</li>
  <li><a href="https://book.douban.com/tag/漫画">漫画</a></li>
  <li><a href="https://book.douban.com/tag/推理">推理</a></li>
  <li><a href="https://book.douban.com/tag/绘本">绘本</a></li>
  <li><a href="https://book.douban.com/tag/青春">青春</a></li>
  <li><a href="https://book.douban.com/tag/科幻">科幻</a></li>
  <li><a href="https://book.douban.com/tag/言情">言情</a></li>
  <li><a href="https://book.douban.com/tag/武侠">武侠</a></li>
  <li><a href="https://book.douban.com/tag/奇幻">奇幻</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#流行">更多</a></li>
  </ul>
</div>
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[文化]</li>
  <li><a href="https://book.douban.com/tag/历史">历史</a></li>
  <li><a href="https://book.douban.com/tag/哲学">哲学</a></li>
  <li><a href="https://book.douban.com/tag/传记">传记</a></li>
  <li><a href="https://book.douban.com/tag/设计">设计</a></li>
  <li><a href="https://book.douban.com/tag/建筑">建筑</a></li>
  <li><a href="https://book.douban.com/tag/电影">电影</a></li>
  <li><a href="https://book.douban.com/tag/回忆录">回忆录</a></li>
  <li><a href="https://book.douban.com/tag/音乐">音乐</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#文化">更多</a></li>
  </ul>
</div>
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[生活]</li>
  <li><a href="https://book.douban.com/tag/旅行">旅行</a></li>
  <li><a href="https://book.douban.com/tag/励志">励志</a></li>
  <li><a href="https://book.douban.com/tag/职场">职场</a></li>
  <li><a href="https://book.douban.com/tag/教育">教育</a></li>
  <li><a href="https://book.douban.com/tag/美食">美食</a></li>
  <li><a href="https://book.douban.com/tag/灵修">灵修</a></li>
  <li><a href="https://book.douban.com/tag/健康">健康</a></li>
  <li><a href="https://book.douban.com/tag/家居">家居</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#生活">更多</a></li>
  </ul>
</div>
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[经管]</li>
  <li><a href="https://book.douban.com/tag/经济学">经济学</a></li>
  <li><a href="https://book.douban.com/tag/管理">管理</a></li>
  <li><a href="https://book.douban.com/tag/商业">商业</a></li>
  <li><a href="https://book.douban.com/tag/金融">金融</a></li>
  <li><a href="https://book.douban.com/tag/营销">营销</a></li>
  <li><a href="https://book.douban.com/tag/理财">理财</a></li>
  <li><a href="https://book.douban.com/tag/股票">股票</a></li>
  <li><a href="https://book.douban.com/tag/企业史">企业史</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#经管">更多</a></li>
  </ul>
</div>
<div class="cate book-cate">
  <ul>
  <li class="cate-label">[科技]</li>
  <li><a href="https://book.douban.com/tag/科普">科普</a></li>
  <li><a href="https://book.douban.com/tag/互联网">互联网</a></li>
  <li><a href="https://book.douban.com/tag/编程">编程</a></li>
  <li><a href="https://book.douban.com/tag/交互设计">交互设计</a></li>
  <li><a href="https://book.douban.com/tag/算法">算法</a></li>
  <li><a href="https://book.douban.com/tag/通信">通信</a></li>
  <li><a href="https://book.douban.com/tag/神经网络">神经网络</a></li>
  <li><a href="https://book.douban.com/tag/?view=type#科技">更多</a></li>
  </ul>
</div>
</div>
</div>
</div>
  <div class="main">

<div class="mod">

    <h2>
        新书速递
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://book.douban.com/latest" target="_self">更多</a>
                ) </span>
    </h2>

<div class="book-list list">
  <ul>
      <li>
      <div class="pic">
          <a href="https://book.douban.com/subject/27006491/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/mpic/s29494782.jpg" alt="戴上手套擦泪" /></a>
      </div>
      <div class="title">
        <a href="https://book.douban.com/subject/27006491/" >戴上手套擦泪</a>
      </div>
      <div class="author">〔瑞典〕乔纳斯...</div>
      <a href="https://read.douban.com/reader/ebook/37757414/" target="_blank" class="bn-link">免费试读</a>
      <li>
      <div class="pic">
          <a href="https://book.douban.com/subject/27102949/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/mpic/s29517146.jpg" alt="御伽草纸" /></a>
      </div>
      <div class="title">
        <a href="https://book.douban.com/subject/27102949/" >御伽草纸</a>
      </div>
      <div class="author">〔日〕太宰治</div>
      <a href="https://read.douban.com/reader/ebook/37942449/" target="_blank" class="bn-link">免费试读</a>
      <li>
      <div class="pic">
          <a href="https://book.douban.com/subject/26878903/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/mpic/s29493179.jpg" alt="废墟的花朵" /></a>
      </div>
      <div class="title">
        <a href="https://book.douban.com/subject/26878903/" >废墟的花朵</a>
      </div>
      <div class="author">〔法〕帕特里克...</div>
      <a href="https://read.douban.com/reader/ebook/38823107/" target="_blank" class="bn-link">免费试读</a>
      <li>
      <div class="pic">
          <a href="https://book.douban.com/subject/27031873/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/mpic/s29516960.jpg" alt="戏年" /></a>
      </div>
      <div class="title">
        <a href="https://book.douban.com/subject/27031873/" >戏年</a>
      </div>
      <div class="author">葛亮</div>
      <a href="https://read.douban.com/reader/ebook/38459578/" target="_blank" class="bn-link">免费试读</a>
  </ul>
</div>
</div>

<div class="mod">

    <h2>
        原创数字作品
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://read.douban.com/category/fiction?sort=top&amp;cat=article" target="_self">更多</a>
                ) </span>
    </h2>

<div class="book-list list">
  <ul>
    <li>
    <div class="pic">
        <a href="https://read.douban.com/ebook/36697665" target="_blank"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/ark_article_cover/large/public/36697665.jpg?v=1504238800.0" alt="革命物语" /></a>
    </div>
    <div class="title">
      <a href="https://read.douban.com/ebook/36697665" target="_blank">革命物语</a>
    </div>
    <div class="author">〔加〕天宫雁</div>
    <div class="price">
        5.99元
    </div>
    <a href="https://read.douban.com/reader/ebook/36697665/" target="_blank" class="bn-link">免费试读</a>
    <li>
    <div class="pic">
        <a href="https://read.douban.com/ebook/6290542" target="_blank"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/ark_article_cover/large/public/6290542.jpg?v=1416550774.0" alt="尽离欢" /></a>
    </div>
    <div class="title">
      <a href="https://read.douban.com/ebook/6290542" target="_blank">尽离欢</a>
    </div>
    <div class="author">陈胖皂</div>
    <div class="price">
        1.99元
    </div>
    <a href="https://read.douban.com/reader/ebook/6290542/" target="_blank" class="bn-link">免费试读</a>
    <li>
    <div class="pic">
        <a href="https://read.douban.com/ebook/20165020" target="_blank"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/ark_article_cover/large/public/20165020.jpg?v=1465204736.0" alt="感谢世界不曾看我一眼" /></a>
    </div>
    <div class="title">
      <a href="https://read.douban.com/ebook/20165020" target="_blank">感谢世界不曾看...</a>
    </div>
    <div class="author">子健</div>
    <div class="price">
        1.99元
    </div>
    <a href="https://read.douban.com/reader/ebook/20165020/" target="_blank" class="bn-link">免费试读</a>
    <li>
    <div class="pic">
        <a href="https://read.douban.com/ebook/35341510" target="_blank"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/ark_article_cover/large/public/35341510.jpg?v=1501227419.0" alt="背包客和文艺青年故事集" /></a>
    </div>
    <div class="title">
      <a href="https://read.douban.com/ebook/35341510" target="_blank">背包客和文艺青...</a>
    </div>
    <div class="author">梁朝辉</div>
    <div class="price">
        1.99元
    </div>
    <a href="https://read.douban.com/reader/ebook/35341510/" target="_blank" class="bn-link">免费试读</a>
  </ul>
</div>
</div>
</div>
  </div>
  
</div>








            
<div id="anony-music" class="section">
  <div class="wrapper">
  
  
  <div class="sidenav">
    <h2 class="section-title"><a href="https://music.douban.com">音乐</a></h2>
    
  
  <div class="side-links nav-anon">
      <ul>
                          
                 <li><a href="https://music.douban.com/artists/">音乐人</a></li>
             
                 <li><a href="https://www.douban.com/wetware/">潮潮豆瓣音乐周</a></li>
             
                 <li><a href="https://music.douban.com/artists/royalty/">金羊毛计划</a></li>
             
                 <li><a href="https://music.douban.com/topics/">专题</a></li>
             
                 <li><a href="https://music.douban.com/chart">排行榜</a></li>
             
                 <li><a href="https://music.douban.com/tag/">分类浏览</a></li>
             
                 <li><a href="https://music.douban.com/review/latest/">乐评</a></li>
             
                 <li><a href="https://douban.fm/?from_=music_nav">豆瓣FM</a></li>
             
                 <li><a href="https://douban.fm/explore/songlists/">歌单</a></li>
             
                 <li><a href="https://artist.douban.com/abilu/2016">阿比鹿音乐奖</a></li>
      
      </ul>
  </div>

    


    <div class="apps-list">
    <ul>
    <li><a href="https://douban.fm/app?from_=shire_anonymous_home" class="lnk-icon"><i class="app-icon app-icon-fm"></i></a><a href="https://douban.fm/app?from_=shire_anonymous_home">豆瓣FM</a></li>
    <li><a href="https://artist.douban.com/app" class="lnk-icon"><i class="app-icon app-icon-artists"></i></a><a href="https://artist.douban.com/app">豆瓣音乐人</a></li>
    </ul>
    </div>

  </div>

  <div class="side">
  <div class="mod">
    
    
    <h2>
        本周流行音乐人
            ······
            <span class="pl">&nbsp;(
                
                    <a href="https://music.douban.com/artists/" target="_self">更多</a>
                ) </span>
    </h2>

    <div class="list1 artist-charts">
      <ul>
          <li>
            <span class="num">1.</span>
            <div class="pic artist-song-play" data-sids="[&#34;710389&#34;, &#34;390071&#34;, &#34;401466&#34;]">
              <a href="https://site.douban.com/wpoxs/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/view/site/small/public/fc00cb95a9b74d9.jpg" width="48"></a>
              <i class="icon icon-bg"></i>
              <i class="icon icon-stat icon-play"></i>
            </div>
            <div class="content">
              <a href="https://site.douban.com/wpoxs/">放肆的肆</a>
              <div class="desc">
                流派: 流行 Pop
                <br>96844人关注
              </div>
            </div>
          </li>
          <li>
            <span class="num">2.</span>
            <div class="pic artist-song-play" data-sids="[&#34;600572&#34;, &#34;703967&#34;, &#34;706974&#34;]">
              <a href="https://site.douban.com/voodookungfu/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/site/small/public/7be3d68cec70863.jpg" width="48"></a>
              <i class="icon icon-bg"></i>
              <i class="icon icon-stat icon-play"></i>
            </div>
            <div class="content">
              <a href="https://site.douban.com/voodookungfu/">零壹乐队</a>
              <div class="desc">
                流派: 摇滚 Rock
                <br>8364人关注
              </div>
            </div>
          </li>
          <li>
            <span class="num">3.</span>
            <div class="pic artist-song-play" data-sids="[&#34;710770&#34;, &#34;20001&#34;, &#34;239336&#34;]">
              <a href="https://site.douban.com/wangwen/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/site/small/public/ce149a8c79cfda5.jpg" width="48"></a>
              <i class="icon icon-bg"></i>
              <i class="icon icon-stat icon-play"></i>
            </div>
            <div class="content">
              <a href="https://site.douban.com/wangwen/">惘闻</a>
              <div class="desc">
                流派: 摇滚 Rock
                <br>25570人关注
              </div>
            </div>
          </li>
          <li>
            <span class="num">4.</span>
            <div class="pic artist-song-play" data-sids="[&#34;710059&#34;, &#34;1791&#34;, &#34;1788&#34;]">
              <a href="https://site.douban.com/xiaoan/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/view/site/small/public/8f569d4e82790de.jpg" width="48"></a>
              <i class="icon icon-bg"></i>
              <i class="icon icon-stat icon-play"></i>
            </div>
            <div class="content">
              <a href="https://site.douban.com/xiaoan/">小安</a>
              <div class="desc">
                流派: 民谣 Folk
                <br>4189人关注
              </div>
            </div>
          </li>
          <li>
            <span class="num">5.</span>
            <div class="pic artist-song-play" data-sids="[&#34;101213&#34;, &#34;188287&#34;, &#34;230825&#34;]">
              <a href="https://site.douban.com/Just/"><img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/view/site/small/public/4cf28fad12f911c.jpg" width="48"></a>
              <i class="icon icon-bg"></i>
              <i class="icon icon-stat icon-play"></i>
            </div>
            <div class="content">
              <a href="https://site.douban.com/Just/">Just.Z</a>
              <div class="desc">
                流派: 民谣 Folk
                <br>110人关注
              </div>
            </div>
          </li>
      </ul>
    </div>
  </div>
</div>
  <div class="main">

  
    
    <h2>
        豆瓣新碟榜
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://music.douban.com#new1" target="_self">更多</a>
                ) </span>
    </h2>

    <div class="album-list list">
      <ul>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27146202/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29550661.jpg" alt="Kids Only" />
              </a>
            </div>
            <div class="title">
              1. <a href="https://music.douban.com/subject/27146202/">Kids Only</a>
            </div>
            <div class="artist">
              <a href="">窦靖童</a>
            </div>
            <div class="rating">
              <span class="allstar40"></span><i>7.8</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27140947/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29544603.jpg" alt="Before The Applause" />
              </a>
            </div>
            <div class="title">
              2. <a href="https://music.douban.com/subject/27140947/">Before The Applause</a>
            </div>
            <div class="artist">
              <a href="">重塑雕像的权利</a>
            </div>
            <div class="rating">
              <span class="allstar40"></span><i>8.1</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27113635/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29516630.jpg" alt="热带从未有过的风景" />
              </a>
            </div>
            <div class="title">
              3. <a href="https://music.douban.com/subject/27113635/">热带从未有过的风景</a>
            </div>
            <div class="artist">
              <a href="">吹万 Chui Wan</a>
            </div>
            <div class="rating">
              <span class="allstar40"></span><i>7.6</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27110166/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/spic/s29544799.jpg" alt="A.I. 爱" />
              </a>
            </div>
            <div class="title">
              4. <a href="https://music.douban.com/subject/27110166/">A.I. 爱</a>
            </div>
            <div class="artist">
              <a href="">王力宏</a>
            </div>
            <div class="rating">
              <span class="allstar15"></span><i>3.1</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27041191/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29476352.jpg" alt="Sleep Well Beast" />
              </a>
            </div>
            <div class="title">
              5. <a href="https://music.douban.com/subject/27041191/">Sleep Well Beast</a>
            </div>
            <div class="artist">
              <a href="">The National</a>
            </div>
            <div class="rating">
              <span class="allstar45"></span><i>8.6</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27076001/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29509376.jpg" alt="American Dream" />
              </a>
            </div>
            <div class="title">
              6. <a href="https://music.douban.com/subject/27076001/">American Dream</a>
            </div>
            <div class="artist">
              <a href="">LCD Soundsystem</a>
            </div>
            <div class="rating">
              <span class="allstar45"></span><i>8.2</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27123543/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img3.doubanio.com/spic/s29549345.jpg" alt="LOVE YOURSELF 承 [Her]" />
              </a>
            </div>
            <div class="title">
              7. <a href="https://music.douban.com/subject/27123543/">LOVE YOURSELF 承 [Her]</a>
            </div>
            <div class="artist">
              <a href="">방탄소년단 BTS</a>
            </div>
            <div class="rating">
              <span class="allstar35"></span><i>6.8</i>
            </div>
          </li>
          <li>
            <div class="pic">
              <a href="https://music.douban.com/subject/27139456/">
                <img src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" data-origin="https://img1.doubanio.com/spic/s29544027.jpg" alt="LOVE AND FALL" />
              </a>
            </div>
            <div class="title">
              8. <a href="https://music.douban.com/subject/27139456/">LOVE AND FALL</a>
            </div>
            <div class="artist">
              <a href="">BOBBY</a>
            </div>
            <div class="rating">
              <span class="allstar35"></span><i>6.9</i>
            </div>
          </li>
      </ul>
    </div>

  
  
    <h2>
        热门歌单
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://music.douban.com/programmes/" target="_self">更多</a>
                ) </span>
    </h2>

  <div class="programme-list list">
    <ul>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/21086887-2.jpg"><a href="https://music.douban.com/programme/21086887" target="_blank"><i></i></a></div>
            <div class="title"> ［每周三更新］榜单尝鲜 201...</div>
          </li>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/7547932-1.jpg"><a href="https://music.douban.com/programme/7547932" target="_blank"><i></i></a></div>
            <div class="title">中岛美雪豆瓣专辑一刷完毕</div>
          </li>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/3818870-1.jpg"><a href="https://music.douban.com/programme/3818870" target="_blank"><i></i></a></div>
            <div class="title">慧田经典轻音乐</div>
          </li>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/6686474-1.jpg"><a href="https://music.douban.com/programme/6686474" target="_blank"><i></i></a></div>
            <div class="title">❤</div>
          </li>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/359429-2.jpg"><a href="https://music.douban.com/programme/359429" target="_blank"><i></i></a></div>
            <div class="title">柔得跟头发一样拉</div>
          </li>
        
          <li>
            <div class="pic cover"><img width=80 src="https://img3.doubanio.com/img/songlist/large/837044-2.jpg"><a href="https://music.douban.com/programme/837044" target="_blank"><i></i></a></div>
            <div class="title">指弹吉他-8号</div>
          </li>
    </ul>
  </div>

</div>
  </div>
  
  <div id="dale_anonymous_home_page_middle_2" class="extra"></div>

</div>








            
<div id="anony-market" class="section">
  <div class="wrapper">
  
  
<div class="sidenav">
  <h2 class="section-title"><a href="https://market.douban.com?dcs=anonymous-home-sidenav&amp;dcm=douban">市集</a></h2>
  <ul>
    <li><a class="sidenav-link" href="https://market.douban.com/category/277/?dcs=anonymous-home-sidenav&amp;dcm=douban">美食</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/1/?dcs=anonymous-home-sidenav&amp;dcm=douban">服装</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/235/?dcs=anonymous-home-sidenav&amp;dcm=douban">配饰</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/151/?dcs=anonymous-home-sidenav&amp;dcm=douban">包袋</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/256/?dcs=anonymous-home-sidenav&amp;dcm=douban">鞋靴</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/115/?dcs=anonymous-home-sidenav&amp;dcm=douban">美容护肤</a></li>
    <li><a class="sidenav-link" href="https://market.douban.com/category/35/?dcs=anonymous-home-sidenav&amp;dcm=douban">家居生活</a></li>
  </ul>
</div>

  <div class="side">
  <div class="mod">
    
    <h2>
        热门店铺
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://market.douban.com?dcs=anonymous-home-more-shops&amp;dcm=douban#hot-shop-wrapper" target="_self">更多</a>
                ) </span>
    </h2>

    
    <div class="shop-list">
      <ul>
        <li class="first">
          <div class="content">
            <div class="pic">
              <a href="https://market.douban.com/shop/ericd/?dcs=anonymous-home-hot-shop&amp;dcm=douban">
                <img src="https://img3.doubanio.com/view/dianpu_shop_icon/medium/public/2e35f89d2c7990d.jpg" width="64" alt="ERICD官方旗舰店">
              </a>
            </div>
            <div class="title"><a href="https://market.douban.com/shop/ericd/?dcs=anonymous-home-hot-shop&amp;dcm=douban">ERICD官方旗舰店</a></div>
            <div class="desc">ERICD原创设计以传统服装制作工艺为主导，结合当下最流行的...</div>
          </div>
        </li>
        <li class="">
          <div class="content">
            <div class="pic">
              <a href="https://market.douban.com/shop/pisn/?dcs=anonymous-home-hot-shop&amp;dcm=douban">
                <img src="https://img3.doubanio.com/view/dianpu_shop_icon/medium/public/9d03efbf705887d.jpg" width="64" alt="PISN">
              </a>
            </div>
            <div class="title"><a href="https://market.douban.com/shop/pisn/?dcs=anonymous-home-hot-shop&amp;dcm=douban">PISN</a></div>
            <div class="desc">每周五定时上新，注意关注偶</div>
          </div>
        </li>
        <li class="">
          <div class="content">
            <div class="pic">
              <a href="https://market.douban.com/shop/nanazhome/?dcs=anonymous-home-hot-shop&amp;dcm=douban">
                <img src="https://img3.doubanio.com/view/dianpu_shop_icon/medium/public/169b1b76356f636.jpg" width="64" alt="Nanaz 家居百货">
              </a>
            </div>
            <div class="title"><a href="https://market.douban.com/shop/nanazhome/?dcs=anonymous-home-hot-shop&amp;dcm=douban">Nanaz 家居百货</a></div>
            <div class="desc">不用装修，NaNaZ home 也能你家变得更美一些。</div>
          </div>
        </li>
        <li class="">
          <div class="content">
            <div class="pic">
              <a href="https://market.douban.com/shop/huangxiaojie/?dcs=anonymous-home-hot-shop&amp;dcm=douban">
                <img src="https://img3.doubanio.com/view/dianpu_shop_icon/medium/public/7f37444b0a6a0e2.jpg" width="64" alt="黄小姐">
              </a>
            </div>
            <div class="title"><a href="https://market.douban.com/shop/huangxiaojie/?dcs=anonymous-home-hot-shop&amp;dcm=douban">黄小姐</a></div>
            <div class="desc">卖我会穿的打底，做你会爱的姑娘</div>
          </div>
        </li>
      </ul>
    </div>
    
  </div>
</div>
  <div class="main">
  
    <h2>
        热门商品
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://market.douban.com?dcs=anonymous-home-more-skus&amp;dcm=douban" target="_self">更多</a>
                ) </span>
    </h2>


  
  <div class="list sku-list first">
    <div class="main-sku">
      <div class="pic">
        <a href="https://market.douban.com/item/79302/?dcs=anonymous-home-main-sku&amp;dcm=douban">
          <img src="https://img1.doubanio.com/view/dianpu_product_item/medium/public/p1982227.jpg" width="250" height="250">
        </a>
      </div>
      <div class="footer">
        <div class="sku-headline">
          <a href="https://market.douban.com/item/79302/?dcs=anonymous-home-main-sku&amp;dcm=douban" title="桌面置物架">
            <span class="sku-title">
              桌面置物架
            </span>
            <span class="sku-price">
              88.00
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="other-skus">
      <ul>
        <li class="first">
          <div class="pic">
            <a href="https://market.douban.com/item/75225/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p458880.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/75225/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="木马逐风Mazur“三茶六味”牛轧糖礼盒">
              木马逐风Mazur“三茶六味”牛轧糖礼盒
            </a>
          </div>
        </li>
        <li class="first">
          <div class="pic">
            <a href="https://market.douban.com/item/52070/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p270364.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/52070/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="多功能U型枕 贴心护颈枕">
              多功能U型枕 贴心护颈枕
            </a>
          </div>
        </li>
        <li class="">
          <div class="pic">
            <a href="https://market.douban.com/item/103226/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p521646.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/103226/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="PISN  秋冬羊毛混纺不掉毛超软短款套头加粗长袖毛衣针">
              PISN  秋冬羊毛混纺不掉毛超软短款套头加粗长袖毛衣针
            </a>
          </div>
        </li>
        <li class="">
          <div class="pic">
            <a href="https://market.douban.com/item/104751/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img1.doubanio.com/view/dianpu_product_item/medium/public/p509169.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/104751/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="良朴商务中筒男女袜纯色袜情侣袜  五双混色装">
              良朴商务中筒男女袜纯色袜情侣袜  五双混色装
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="list sku-list ">
    <div class="main-sku">
      <div class="pic">
        <a href="https://market.douban.com/item/58955/?dcs=anonymous-home-main-sku&amp;dcm=douban">
          <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p377790.jpg" width="250" height="250">
        </a>
      </div>
      <div class="footer">
        <div class="sku-headline">
          <a href="https://market.douban.com/item/58955/?dcs=anonymous-home-main-sku&amp;dcm=douban" title="十四行诗 原味台湾手工黑糖茶 红糖姜茶姜母茶生姜冲绳工艺 黑糖原味">
            <span class="sku-title">
              十四行诗 原味台湾手工黑糖茶 红糖姜茶姜母茶生姜冲绳工艺 黑糖原味
            </span>
            <span class="sku-price">
              43.00
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="other-skus">
      <ul>
        <li class="first">
          <div class="pic">
            <a href="https://market.douban.com/item/79302/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img1.doubanio.com/view/dianpu_product_item/medium/public/p1982227.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/79302/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="桌面置物架">
              桌面置物架
            </a>
          </div>
        </li>
        <li class="first">
          <div class="pic">
            <a href="https://market.douban.com/item/58955/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p377790.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/58955/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="十四行诗 原味台湾手工黑糖茶 红糖姜茶姜母茶生姜冲绳工艺 黑糖原味">
              十四行诗 原味台湾手工黑糖茶 红糖姜茶姜母茶生姜冲绳工艺 黑糖原味
            </a>
          </div>
        </li>
        <li class="">
          <div class="pic">
            <a href="https://market.douban.com/item/75225/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p458880.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/75225/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="木马逐风Mazur“三茶六味”牛轧糖礼盒">
              木马逐风Mazur“三茶六味”牛轧糖礼盒
            </a>
          </div>
        </li>
        <li class="">
          <div class="pic">
            <a href="https://market.douban.com/item/52070/?dcs=anonymous-home-other-sku&amp;dcm=douban">
              <img src="https://img3.doubanio.com/view/dianpu_product_item/medium/public/p270364.jpg" width="110" height="110">
            </a>
          </div>
          <div class="footer">
            <a class="title" href="https://market.douban.com/item/52070/?dcs=anonymous-home-other-sku&amp;dcm=douban" title="多功能U型枕 贴心护颈枕">
              多功能U型枕 贴心护颈枕
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
  </div>
  
    <div id="dale_anonymous_home_page_middle" class="extra"></div>

</div>








            
<div id="anony-events" class="section">
  <div class="wrapper">
  
  
<div class="sidenav">
  <h2 class="section-title"><a href="https://www.douban.com/location/">同城</a></h2>
  
  
  <div class="side-links nav-anon">
      <ul>
        
  
    
    <li>
        <a
        href="https://beijing.douban.com/events">近期活动</a>
    </li>
    
    <li>
        <a
        href="https://beijing.douban.com/hosts">主办方</a>
    </li>
    
    <li>
        <a
        href="https://www.douban.com/location/drama/">舞台剧</a>
    </li>
    
    <li>
        <a
        href="https://www.douban.com/location/drama/annual2016">2016舞台剧榜单</a>
    </li>

      
      </ul>
  </div>
 
  


    <div class="apps-list">
    <ul>
    </ul>
    </div>

</div>

  <div class="side">

<div class="mod">

    <h2>
        活动标签
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
    </h2>

<div class="cate events-cate">
  <ul>
  <li class="cate-label"><a href="https://www.douban.com/location/beijing/events/week-music">音乐&raquo;</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1001">小型现场</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1002">音乐会</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1003">演唱会</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1004">音乐节</a></li>
  </ul>
</div>
<div class="cate events-cate">
  <ul>
  <li class="cate-label"><a href="https://www.douban.com/location/beijing/events/week-drama">戏剧&raquo;</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1101">话剧</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1102">音乐剧</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1103">舞剧</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1104">歌剧</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1105">戏曲</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1106">其他</a></li>
  </ul>
</div>
<div class="cate events-cate">
  <ul>
  <li class="cate-label"><a href="https://www.douban.com/location/beijing/events/week-party">聚会&raquo;</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1401">生活</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1402">集市</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1403">摄影</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1404">外语</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1405">桌游</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1406">夜店</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1407">交友</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1408">美食</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1409">派对</a></li>
  </ul>
</div>
<div class="cate events-cate">
  <ul>
  <li class="cate-label"><a href="https://www.douban.com/location/beijing/events/week-film">电影&raquo;</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1801">主题放映</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1802">影展</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-1803">影院活动</a></li>
  </ul>
</div>
<div class="cate events-cate">
  <ul>
  <li class="cate-label"><a href="https://www.douban.com/location/beijing/events/week-all">其他&raquo;</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-salon">讲座</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-exhibition">展览</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-sports">运动</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-travel">旅行</a></li>
    <li><a href="https://www.douban.com/location/beijing/events/week-commonweal">公益</a></li>
  </ul>
</div>
</div>
</div>
  <div class="main">


    <h2>
        北京 · 本周热门活动
            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
            <span class="pl">&nbsp;(
                
                    <a href="https://www.douban.com/location/" target="_self">更多</a>
                ) </span>
    </h2>

<div class="events-list list">
  <ul>
    <li>
      <div class="pic">
        <a href="https://www.douban.com/event/29348823/">
            <img data-origin="https://img3.doubanio.com/view/event_poster/small/public/e0d5e9c4692fbc0.jpg" src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="https://www.douban.com/event/29348823/" title="2017华晨宇火星演唱会">
            2017华晨宇火星演唱会
          </a>
        </div>
        <div class="datetime">
            10月13日 周五 - 10月14日 周六
        </div>
        <address title="五棵松体育馆">
          五棵松体育馆
        </address>
        <div class="follow">
          166人关注
        </div>
      </div>
    <li>
      <div class="pic">
        <a href="https://www.douban.com/event/29431525/">
            <img data-origin="https://img1.doubanio.com/view/event_poster/small/public/d324bd318ab5058.jpg" src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="https://www.douban.com/event/29431525/" title="【豆瓣周末去哪儿栏目福利】法比奥·路易斯演绎舒伯特与贝多芬">
            【豆瓣周末去哪儿栏目福利】法比奥·路易斯演绎舒伯特...
          </a>
        </div>
        <div class="datetime">
            9月24日 周日 19:30 - 21:30
        </div>
        <address title="国家大剧院">
          国家大剧院
        </address>
        <div class="follow">
          110人关注
        </div>
      </div>
    <li>
      <div class="pic">
        <a href="https://www.douban.com/event/27913267/">
            <img data-origin="https://img1.doubanio.com/view/event_poster/small/public/439eb73e32a26ec.jpg" src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="https://www.douban.com/event/27913267/" title="北京音乐厅2017国际古典音乐季 从巴赫到披头士—瑞典吉他大师格兰·索舍尔专场音乐会">
            北京音乐厅2017国际古典音乐季 从巴赫到披头士—瑞典...
          </a>
        </div>
        <div class="datetime">
            9月29日 周五 00:00 - 00:00
        </div>
        <address title="北京音乐厅">
          北京音乐厅
        </address>
        <div class="follow">
          56人关注
        </div>
      </div>
    <li>
      <div class="pic">
        <a href="https://www.douban.com/event/29301578/">
            <img data-origin="https://img1.doubanio.com/view/event_poster/small/public/dabcbfb00475fda.jpg" src="https://img3.doubanio.com/f/shire/a1fdee122b95748d81cee426d717c05b5174fe96/pics/blank.gif" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="https://www.douban.com/event/29301578/" title="KAMASI WASHINGTON 北京 Blue Note Beijing">
            KAMASI WASHINGTON 北京 Blue Note Beijing
          </a>
        </div>
        <div class="datetime">
            9月22日 周五 - 9月23日 周六
        </div>
        <address title="中国北京东城区前门23号">
          中国北京东城区前门23号
        </address>
        <div class="follow">
          40人关注
        </div>
      </div>
  </ul>
</div>
</div>
  </div>
  
</div>









<div class="wrapper">
  <div id="dale_anonymous_home_page_bottom" class="extra"></div>
  <div id="ft">
  
  
<span id="icp" class="fleft gray-link">
    &copy; 2005－2017 douban.com, all rights reserved 北京豆网科技有限公司
  <br>
  <a href="http://www.miibeian.gov.cn/">京ICP证090015号</a> 京ICP备11027288号 网络视听许可证<a href="https://www.douban.com/about?topic=licence" target="_blank">0110418</a>号
  <br>京网文[2015]2026-368号 <img src="https://img3.doubanio.com/pics/biaoshi.gif" align="absmiddle"> <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502000728">京公网安备11010502000728</a>&nbsp;&nbsp;新出网证(京)字129号
  <br>违法和不良信息举报电话：4008353331&nbsp;<img src="https://img3.doubanio.com/img/files/file-1423193113.png" height="16" align="top"/>
  <br><img src="https://img3.doubanio.com/pics/icon/jubao.png" align="absmiddle" width="15px"> <a href="http://www.12377.cn/">中国互联网举报中心</a> 电话：12377 <a href="https://img1.doubanio.com/img/files/file-1478594087.jpg">《食品流通许可证》许可证：SP1101051510347287</a>
  <br><a href="https://img3.doubanio.com/img/files/file-1495708840.jpg">新出发京批字第直160029号</a>
</span>

<a href="https://www.douban.com/hnypt/variformcyst.py" style="display: none;"></a>

<span class="fright">
    <a href="https://www.douban.com/about">关于豆瓣</a>
    · <a href="https://www.douban.com/jobs">在豆瓣工作</a>
    · <a href="https://www.douban.com/about?topic=contactus">联系我们</a>
    · <a href="https://www.douban.com/about?policy=disclaimer">免责声明</a>
    
    · <a href="https://help.douban.com/?app=main" target="_blank">帮助中心</a>
    · <a href="https://www.douban.com/doubanapp/">移动应用</a>
    · <a href="https://www.douban.com/partner/">豆瓣广告</a>
    <a href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank" style="display: block; margin-top: 20px; width: 150px">
      <img src="https://img3.doubanio.com/img/files/file-1489464722.jpg" alt="网上有害信息举报专区">
    </a>
</span>

  </div>
</div>






<script src="https://img3.doubanio.com/f/shire/4b1bbfaa49f8fb30d2719ec0ec08a11f24412ff5/js/core/do/_init_.js" data-cfg-corelib="https://img3.doubanio.com/f/shire/72ced6df41d4d158420cebdd254f9562942464e3/js/jquery.min.js"></script>
<script type="text/javascript" src="https://img3.doubanio.com/misc/mixed_static/7974a2b946c06224.js"></script>

    <!-- douban ad begin -->
    




    
<script type="text/javascript">
    (function (global) {
        var newNode = global.document.createElement('script'),
            existingNode = global.document.getElementsByTagName('script')[0],
            adSource = '//erebor.douban.com/',
            userId = '',
            browserId = 'puvLJ4aGIO8',
            criteria = '3:/',
            preview = '',
            debug = false,
            adSlots = ['dale_anonymous_homepage_top_for_crazy_ad', 'dale_anonymous_homepage_right_top', 'dale_anonymous_homepage_movie_bottom', 'dale_anonymous_home_page_top', 'dale_homepage_online_activity_promo_1', 'dale_anonymous_homepage_doublemint', 'dale_anonymous_home_page_middle', 'dale_anonymous_home_page_middle_2', 'dale_anonymous_home_page_bottom'];

        global.DoubanAdRequest = {src: adSource, uid: userId, bid: browserId, crtr: criteria, prv: preview, debug: debug};
        global.DoubanAdSlots = (global.DoubanAdSlots || []).concat(adSlots);

        newNode.setAttribute('type', 'text/javascript');
        newNode.setAttribute('src', 'https://img3.doubanio.com/f/adjs/ab170db2f16f982c80ed420846b14db43aa13721/dsps/gdt/ad.release.js');
        newNode.setAttribute('async', true);
        existingNode.parentNode.insertBefore(newNode, existingNode);
    })(this);
</script>










    <!-- douban ad end -->
    









<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5WP579" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5WP579');</script>
<!-- End Google Tag Manager -->


<script type="text/javascript">
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var p=(('https:' == document.location.protocol) ? 'https' : 'http'), u=p+'://fundin.douban.com/';
    _paq.push(['setTrackerUrl', u+'piwik']);
    _paq.push(['setSiteId', '100001']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript';
    g.defer=true;
    g.async=true;
    g.src=p+'://img3.doubanio.com/dae/fundin/piwik.js';
    s.parentNode.insertBefore(g,s);
})();
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7019765-1']);
_gaq.push(['_setCampNameKey', 'dcn']);
_gaq.push(['_setCampSourceKey', 'dcs']);
_gaq.push(['_setCampMediumKey', 'dcm']);
_gaq.push(['_setCampTermKey', 'dct']);
_gaq.push(['_setCampContentKey', 'dcc']);
_gaq.push(['_addOrganic', 'baidu', 'word']);
_gaq.push(['_addOrganic', 'soso', 'w']);
_gaq.push(['_addOrganic', '3721', 'name']);
_gaq.push(['_addOrganic', 'youdao', 'q']);
_gaq.push(['_addOrganic', 'so.360.cn', 'q']);
_gaq.push(['_addOrganic', 'vnet', 'kw']);
_gaq.push(['_addOrganic', 'sogou', 'query']);
_gaq.push(['_addIgnoredOrganic', '豆瓣']);
_gaq.push(['_addIgnoredOrganic', 'douban']);
_gaq.push(['_addIgnoredOrganic', '豆瓣网']);
_gaq.push(['_addIgnoredOrganic', 'www.douban.com']);
_gaq.push(['_setDomainName', '.douban.com']);


    _gaq.push(['_setCustomVar', 1, 'responsive_view_mode', 'desktop', 3]);

_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);

window._ga_init = function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
};
if (window.addEventListener) {
    window.addEventListener('load', _ga_init, false);
} else {
    window.attachEvent('onload', _ga_init);
}
</script>






</body>
</html>


