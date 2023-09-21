## 1. public 目录下的资源都可以通过地址栏访问

![image-20230920225837928](../../source/images/thinkPhp学习笔记/image-20230920225837928.png)

## 2.开启调试模式，报错会提示报错信息在浏览器，告诉你在哪里报错

![image-20230920230140165](../../source/images/thinkPhp学习笔记/image-20230920230140165.png)

如果 项目上线就需要关闭掉他，这样的话，如果报错，页面只显示

![image-20230920230246122](../../source/images/thinkPhp学习笔记/image-20230920230246122.png)

## 3.数据库的配置可以不写端口号，默认就是3306

![image-20230920230324864](../../source/images/thinkPhp学习笔记/image-20230920230324864.png)

## 4.项目都写在 application 下，这里index目录下，可以多添加两个目录，model 和 view，如果只写接口，就不需要

![image-20230920230544655](../../source/images/thinkPhp学习笔记/image-20230920230544655.png)

## 5.项目的路径解释

![image-20230920230847455](../../source/images/thinkPhp学习笔记/image-20230920230847455.png)

![image-20230920231102127](../../source/images/thinkPhp学习笔记/image-20230920231102127.png)

## 6. hello方法的传参

```php
 public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
```

![image-20230920231212968](../../source/images/thinkPhp学习笔记/image-20230920231212968.png)

![image-20230920231241948](../../source/images/thinkPhp学习笔记/image-20230920231241948.png)

## 7. 视图的渲染

在 controller 下面新建view 文件夹 和index 文件，在index文件夹里面新建index.html, 在controller 中 return view(); 即可



![image-20230920231957816](../../source/images/thinkPhp学习笔记/image-20230920231957816.png)

![image-20230920231925496](../../source/images/thinkPhp学习笔记/image-20230920231925496.png)

 使用view()   也可以指定访问其他文件，view("hello") 表示访问 hello.html 文件，view("admin/hello") 表示 admin文件夹下面的hello.html 文件



使用 $this->fetch("hello") 和view 的使用一致，需要注意的是 必须继承 Controller，才行

![image-20230920232545581](../../source/images/thinkPhp学习笔记/image-20230920232545581.png)

```php
return $this->fetch("hello");
```

![image-20230920232601193](../../source/images/thinkPhp学习笔记/image-20230920232601193.png)

## 8.赋值 和 取值

![image-20230920233334251](../../source/images/thinkPhp学习笔记/image-20230920233334251.png)

![image-20230920233423928](../../source/images/thinkPhp学习笔记/image-20230920233423928.png)

## 9.页面跳转 success

![image-20230921225448493](../../source/images/thinkPhp学习笔记/image-20230921225448493.png)

![image-20230921225633777](../../source/images/thinkPhp学习笔记/image-20230921225633777.png)

## 10.页面跳转 error

error 失败后，会返回上一页，没有跳转页面

```php
 return $this->error('失败了');
```

