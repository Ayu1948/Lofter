# Lofter

## 1. 项目录结构
```
LOFTER.....................项目文件
    ├─libs ..................... 待定库文件夹
    ├─controlers ..................... 控制器
    ├─libs ..................... 库文件夹（每个库一个文件夹,参考public/lib）
    │   └─smarty ..................... 
    ├─modules .................. 模块文件夹
    ├─views .................... 视图文件夹
    ├─public ................... 静态资源文件夹
    │  ├─css ................... css样式文件夹
    │  ├─img ................... 图片文件夹（最好模块文件分开）
    │  ├─js .................... js文件夹
    │  └─lib ................... 前端静态库文件夹
    │      ├─bootstrap-3.3.7-dist ....... bootstrap 文件夹
    │      │  ├─css .....................  
    │      │  ├─fonts ...................
    │      │  └─js ...................... 
    │      └─jq ......................... 要用到的jq文件夹
    │ 
    └─upload ..................... 用户上传媒体数据的文件夹
        ├─img ..................... 图片文件夹（每个用户一个文件夹）
        │  └─user_1 ..................... user_id =1 的用户文件夹
        ├─music ................... 音乐文件夹 （每个用户一个文件夹）
        │  └─user_1 ..................... user_id = 1 的用户文件夹
        └─video .................... 视屏文件文件夹（每个用户一个文件夹）
            └─user_1 .................... user_id = 1 的用户文件夹   
``` 
### 1.1.约定编码规范
#### 1.1.1.HTML约定

- 在head中引入必要的CSS文件，优先引用第三方的CSS，方便我们自己的样式覆盖
- 在body末尾引入必要的JS文件，优先引用第三方的JS，注意JS文件之间的依赖关系，比如bootstrap.js依赖jQuery，那就应该先引用jquery.js 然后引用bootstrap.js  

```html
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="my.css">
...
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
<script src="my.js"></script>
```

### 1.2.文件命名规则 (均用驼峰命名)

- PHP
  + class文件： 类名+“Class.php”  
    > 例如： pdoClass.php;  
  + Model文件: 模型名+‘Model.php'
  + Control文件： 控制器名+'Controler.php'
    > 例如：userControler.php;
- js
  + 如果考虑到模块化的话，命名：模块+‘.js’;
    > 例如：
  + 不考虑模块化的话，就直接命名为： index.js
- css 
  +  公共样式问价 main.css 用来存储个模版文件的公共样式设置，可以给用网上的 
    > 例如： *{}，body{}，ul{}，a{}
  + 重构第三方库的样式表 命名为：修改的第三方库+‘-re.css’
    > 例如： 重构第三方库 bootstarp-re.css
  + 模块样式文件同上 命名：模块+‘.css’;
  + 没有模块化就直接命名为 index.js
  + 所以css 样式表至少有三个文件
- html（视图文件）
  + 分块 模块+'.html';
    > 例如： header.html , show.html .....  

### 1.3.变量命名规则

- css类名（必要时，用’-‘ 来连接连个单词）两个不同模块可以存在相同子类类名

- id名（必要时，用’_‘来连接两个单词）     

### 1.4.CSS约定

- 除了公共级别样式，其余样式全部由 模块前缀 id 来命名
  > 例如： #header>.nav
- 尽量使用直接子代选择器， 少用间接子代 避免错杀   
  > 例如： #header>div.nav>.box{}

### 1.5.favicon（站点图标）

文件放在lofter目录下
```html
<link rel="shortcut icon" type="image/x-icon" href="">
```

### 1.6.外挂字体图标
```css
@font-face {
  font-family: 'itcast';
  src: url('../font/MiFie-Web-Font.eot') format('embedded-opentype'), url('../font/MiFie-Web-Font.svg') format('svg'), url('../font/MiFie-Web-Font.ttf') format('truetype'), url('../font/MiFie-Web-Font.woff') format('woff');
}

[class^="icon-"],
[class*=" icon-"] {
  /*注意上面选择器中间的空格*/
  /*我们使用的名为itcast的字体就是上面的@font-face的方式声明的*/
  font-family: itcast;
  font-style: normal;
}

.icon-mobilephone::before{
  content: '\e908';
}
```

```html
<div class="col-md-2 text-center">
  <a class="mobile-link" href="#">
    <i class="icon-mobile"></i>
    <!-- 这里使用的是bootstrap中的字体图标 -->
    <i class="glyphicon glyphicon-chevron-down"></i>
    <img src="..." alt="">
  </a>
</div>
```

#### 字体文件格式

- eot : embedded-opentype
- svg : svg
- ttf : truetype
- woff : woff



