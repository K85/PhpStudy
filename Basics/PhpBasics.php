<?php

/* 简介 */
// Php代码需要在特殊的标签块内书写
echo "Hello World";

// Php是一种弱类型的脚本语言, 需要下载Interpreter来解析代码.
// .php文件可以包含 文本, HTML, JavaScript 和 Php代码.
// Php代码在服务器(Apache, IIS等)执行, 将HTML返回给浏览器.

/* 变量 */
// Php中使用 $ 符号来定义变量
// 变量有4种作用域: local, global, static, parameter
// local 局部作用域: 变量的默认作用域
// global 全局作用域: 所有在函数外部定义的变量均为global变量, 作用域从定义处到文件尾. (注意: 若要在函数内访问global变量, 则需要使用global关键字.) (Php将所有的全局变量保存在GLOBALS数组中)
// static 静态作用域: 在函数内部定义static变量, 可以使该变量在函数结束时不被删除.
// parameter 函数参数作用域: 该作用域表示函数的参数列表中的变量.
$x = 5;
$y = 6;
echo $x + $y;

/* 标准输出 */
// Php的标准输出可以使用 echo 和 print
// echo可以输出多个字符, 没有返回值, 比print更快. print总是返回1, 且只能输出单个字符.

/* EOF (heredoc) */

// heredoc是Php中类似Raw String的一种支持, 其中 EOF可以使用任何字符串代替 (只要保证开始标记和结束标记 相同即可)
echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;

/* 数据类型 */
// Php中的数据类型有String, Integer, Float, Boolean, Array, Object, NULL
// Php中的对象声明方式类似于C++, 使用class关键字声明, 同时类中可以包含 属性 和 方法.

/* 类型比较 */
// Php的比较分为 松散比较 和 严格比较.
// 松散比较 ==: 只比较值, 不比较类型.
// 严格比较 ===: 比较 值 和 类型.

/* 常量 */
// Php中使用define()函数来定义常量 (在较高版本的Php中, 可以直接使用const关键字进行常量定义)
// bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
// 常量默认是global的.

// define("PI", 3.1415926);
const PI = 3.1415926;

/* 字符串 */
// 可以使用 单引号 或者 双引号 来定义字符串.
// 在Php中, 可以使用 并置运算符(.) 来连接两个字符串.

/* 运算符 */
// 与其他语言一样, Php也提供算术运算符, 赋值运算符, 比较运算符, 逻辑运算符, 三目运算符.
// 此外, Php还对数组提供了专门的 数组运算符. (可用于集合的操作)

/* 条件语句 */
// 与Java相同的 if语句 和 switch语句

/* 数组 */
// 使用array()来创建数组, 使用count()获取数组长度.
// Php中支持 关联数组(这类似于 Map结构)
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// 可以使用foreach来遍历 关联数组
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

/* 超级全局变量 */
// 超级全局变量 (Super Globals): 在一个脚本的所有作用域中都可见.
// Php中预定义了一些超级全局变量, 我们可以通过这些变量来获取一些信息.

/* 循环语句 */
// 类似Java.

/* 函数 */
// 类似JavaScript.

/* 魔术常量 */
// Php提供了大量的预定义常量. 大部分常量由不同的拓展库定义, 只有在加载了这些库之后才可以使用.
// 在Php中, 有8个魔术常量的值随着他们在代码中的位置而改变: __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __TRAIT__, __METHOD__, __NAMESPACE__,
// 可以通过这些 魔术常量 动态地获取一些信息.

/* 命名空间 */
// Php中支持命名空间. 在没有定义命名空间的情况下, 默认使用 全局空间.
// 此外, Php也支持 子命名空间 (这有点像目录分层关系)
/* namespace MyProject\Sub\Level {
   $ok = 1;
}*/

// 可以使用 关键字namespace 来显式访问当前命名空间 或 子命名空间 中的元素. (等价于类的self操作符)
// 可以使用 关键字use引入命名空间.

/* 面向对象 */
// 类似C++, 使用class关键字定义对象.
// 支持 构造函数 __construct 和 析构函数 __destruct
// 使用 extends 来继承类 (Php不支持多继承)
// Php支持 函数重写 Override, 但被final关键字修饰的方法在子类中无法被重写.
// Php的 访问权限修饰符 类似Java, 有3种: public(默认), protected, private.
// Php支持 接口 Interface, 使用implements来实现.
// Php支持 抽象类 和 抽象方法, 使用abstract关键字来定义 类 和 方法.
// Php支持 匿名类
// 可以使用parent来调用父类方法(类似Java的super)

/* 表单验证 */
// 请使用htmlspecialchars()来避免PHP_SELF变量遭受XSS攻击.

/* 多维数组 */
// 利用 嵌套关联数组可以实现 多维数组.

/* 包含文件 */
// 在Php中可以使用 require(出错会停止执行) 和 include(出错会继续执行) 来包含其他文件.

/* 文件 */
// 类似C语言.

/* 错误处理 */
// Php中支持两种错误处理方式
// die语句: 在出错后终止脚本
// 编写和设置自定义的错误处理程序: 使用set_error_handler(处理函数名称, [错误级别])来设置 错误处理程序

// 同时, 使用trigger_error()可以抛出错误.

/* 异常处理 */
// 类似Java使用 try-catch语句
// 在Php中, 可以使用set_exception_handler()来设置 顶层异常处理器, 用于处理 所有未捕获的异常.

/* 过滤器 */
// Php提供了 过滤器函数 来方便地检验 用户的输入是否合法.
// filter_var(): 指定一个过滤器来过滤单一变量
// Php中存在两种过滤器: Validating过滤器 和 Sanitizing过滤器.
// Validating过滤器: 用于验证用户输入, 有严格的数据格式规则, 如果成功返回预期的类型, 失败返回FALSE。
// Sanitizing过滤器: 用于允许或禁止某些字符, 没有数据格式规则, 返回字符串.
// 此外, Php也支持通过传入 Filter Callback来使用 自定义的过滤器函数.

/* JSON */
// Php对JSON提供了更为便捷的支持, 可以使用json_encode()和json_decode()进行JSON与Php对象之间的转化.

/* 标量类型 */
// 默认情况下, Php处于弱类型校验模式.
// 但是可以使用declare(strict_types=1);来声明标量类型, 启用严格模式, 使得 函数调用和返回的类型严格检验.

/* NULL合并运算符 */
// NULL合并运算符 ?? 会判断 变量是否存在 且 值不是NULL. 若是, 则会返回自身, 否则返回它的第二个操作数 (类似Kotlin)

/* 太空船运算符 (组合比较符) */
// 组合比较符 <=>: 用于在两个变量小于, 等于, 大于时分别返回-1, 0, 1

/* Closure::call() */
// Closure::call()可以将一个 闭包函数 动态地绑定到 一个新的对象实例 并调用该函数.

/* 依赖管理软件 */
// Composer: Php的一个依赖管理软件
?>
