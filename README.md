# QQ-IP
### 深邃灰色

> ## 本项目基于GitHub开源项目：[https://github.com/Alisummer/QQIPDetector] 与 [https://github.com/PrintNow/QQipTance] 二次开发，感谢原作者。

## 功能
探测某个或某些QQ用户的IP

## 用法
修改 `index.js` 的siteUrl，然后上传到服务器

## 深度解析
### index.js
#### 强制https
```javascript
<script type="text/javascript">
vartargetProtocol = "https:";
if(window.location.protocol != targetProtocol)
 window.location.href = targetProtocol +
  window.location.href.substring(window.location.protocol.length);
</script>
```
#### 修改你的url
```javascript
var siteUrl = "http://test.xuekirby.top/";//改成你的域名
</script>
```

#### 底部通知
```javascript
myApp.addNotification({
	message: '弹出的消息',
	hold: 3000 //保持时间，时间过了自动消失
});
```

### index.php
#### 设置颜色
修改三处
```php
<meta name="theme-color" content="#9e9e9e" />
<style>.statusbar-overlay{height:<?php echo $_GET['statusBarHeight']; ?>px;}.page{border-top:<?php echo $_GET['statusBarHeight']; ?>px solid #9e9e9e}.panel-left .list-block {margin:<?php echo $_GET['statusBarHeight']+2; ?>px 0;}</style>
<body class="theme-gray">
```
按钮颜色
```
<a id="collect-submit1" href="javascript:void(0);" class="button button-raised button-fill color-颜色">按钮显示的文字</a>
```
颜色请查阅Framework7文档进行修改，在此不做过多解释。

#### 修改文字
修改文字请与我写的版本进行对照

#### 默认音乐链接
```php
 <div class="item-inner">
     <div class="item-title label">音乐链接</div>
     <div class="item-input">
         <input id="music" type="text" name="music" /></div> //修改这里，在type="text"后面加个value="http://xxxxxx.xxxx/mp3"
 </div>
 <div class="item-media" onclick="myApp.addNotification({message: '直接在消息上播放音乐，可不填。',hold: 1500});">
     <i class="icon material-icons">help</i></div>
 </div>
```

## 执照
QQ-IP根据GNU通用公共许可证v3 (<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GPL-3</a>) 进行许可。

### 使用前务必将index.js第一行改成自己的域名。
格式 `http://xxx.xx/`务必不要忘记最后的“/”