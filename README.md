# QQ-IP（已失效）
### 深邃灰色
### Gray

> ## 本项目基于GitHub开源项目：[https://github.com/Alisummer/QQIPDetector] 与 [https://github.com/PrintNow/QQipTance] 二次开发，感谢原作者。
> ## This project is based on GitHub open source project：[https://github.com/Alisummer/QQIPDetector] and [https://github.com/PrintNow/QQipTance] twice developed.

## function
Snipe for IP addresses from qq users.

## usage
edit siteUrl from `index.js`, then upload to server.

## deep analysis
### index.js
#### force using https
```javascript
<script type="text/javascript">
vartargetProtocol = "https:";
if(window.location.protocol != targetProtocol)
 window.location.href = targetProtocol +
  window.location.href.substring(window.location.protocol.length);
</script>
```
#### edit your url
```javascript
var siteUrl = "http://test.xuekirby.top/";//change to your domain name.
</script>
```

#### notification from the bottom
```javascript
myApp.addNotification({
	message: 'message that pops up',
	hold: 3000 //the time the notification holds
});
```

### index.php
#### color set
edit more than 3 parts. Please read docs for Framework7.
```php
<meta name="theme-color" content="#9e9e9e" />
<style>.statusbar-overlay{height:<?php echo $_GET['statusBarHeight']; ?>px;}.page{border-top:<?php echo $_GET['statusBarHeight']; ?>px solid #9e9e9e}.panel-left .list-block {margin:<?php echo $_GET['statusBarHeight']+2; ?>px 0;}</style>
<body class="theme-gray">
```
Button color
```
<a id="collect-submit1" href="javascript:void(0);" class="button button-raised button-fill color-your color">text</a>
```

#### edit texts
please view mine to edit.

#### default music link.
```php
 <div class="item-inner">
     <div class="item-title label">音乐链接</div>
     <div class="item-input">
         <input id="music" type="text" name="music" /></div> //edit here, add "value="http://xxxxxx.xxxx/mp3"" after "type="text""
 </div>
 <div class="item-media" onclick="myApp.addNotification({message: '直接在消息上播放音乐，可不填。',hold: 1500});">
     <i class="icon material-icons">help</i></div>
 </div>
```

## 执照 License
Uses GNU v3
QQ-IP根据GNU通用公共许可证v3 (<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GPL-3</a>) 进行许可。
