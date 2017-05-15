# thinkphpBlog

边学边用thinkphp,基于thinkphp5.0 的web项目

### [thinkphp5.0开发手册](http://www.kancloud.cn/manual/thinkphp5/118008)
### [慕课网视频教程](http://www.imooc.com/video/14764)

### apache 下隐藏入口文件

```
1. 打开 apache 下的 httpd.conf 文件
2. 将 `LoadModule rewrite_module modules/mod_rewrite.so` 前面的注释去掉
3. 将根目录配置中的
      AllowOverride None
   改成
      AllowOverride All
```
