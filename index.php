<?php
$count=0;
if(file_exists("count.txt"))
{
    $count=file_get_contents("count.txt");
}
$count++;
file_put_contents("count.txt",$count);
?>

<!DOCTYPE html>

<html lang="zh-cn">

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/global.css" />
</head>

<body>
<div class="header">
    <div class="logo f_left">
        <a href="http://www.neu.edu.cn/">
            <img src="images/logo.png">
        </a>
    </div>
    <div class="title f_left">
        <h2>二手交易平台</h2>
    </div>
    <div class="f_right search_1">
        <div class="f_left search_2">
            <input id="search_input" name="" type="text">
        </div>
        <div class="f_left search_3">
            <a id="btn_search" href="javascript:">搜索</a>
        </div>
    </div>
</div>

<div class="bk_1">
</div>

<div class="menu">
    <ul>
        <li><a href="index.php">首页</a></li>
        <li><a href="math_web/1.html">专业书</a></li>
        <li><a href="math_web/1.html">思政书</a></li>
        <li><a href="math_web/1.html">英语书</a></li>
        <li><a href="math_web/1.html">四六级</a></li>
        <li><a href="math_web/1.html">计算机二级</a></li>
        <li><a href="math_web/1.html">考研</a></li>
        <li><a href="math_web/1.html">课外</a></li>
    </ul>
</div>

<div class="main">
    <div class="left_bar">
        <div class="bar_title">
            <b class="f_left">最新上架书籍</b>
        </div>
        <div class="bar_content">
            <ul>
                <li>
                    <a href="math_web/1.html">
                        <img src="images/goods1.jpeg" width="48" height="48">
                    </a>
                </li>
                <li>
                    <a href="math_web/1.html">
                        <p class="compact">数学分析</p>
                    </a>
                    <p class="compact" style="color: red;">5.00元</p>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="math_web/1.html">
                        <img src="images/goods2.jpeg" width="48" height="48">
                    </a>
                </li>
                <li>
                    <a href="math_web/1.html">
                        <p class="compact">高等代数</p>
                    </a>
                    <p class="compact" style="color: red;">5.00元</p>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="math_web/1.html">
                        <img src="images/goods4.jpeg" width="48" height="48">
                    </a>
                </li>
                <li>
                    <a href="math_web/1.html">
                        <p class="compact">解析几何</p>
                    </a>
                    <p class="compact" style="color: red;">5.00元</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="contents">
        <div class="content_head">
            <h3>书籍推荐</h3>
        </div>
        <div class="content">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <th class="f_left center" width="30%">书目名称</th>
                    <th class="f_left center" width="15%">作者</th>
                    <th class="f_left center" width="15%">原价</th>
                    <th class="f_left center" width="15%">现价</th>
                    <th class="f_left center" width="15%">数量</th>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">数学分析（上）</a></td>
                    <td class="f_left center" width="15%">欧阳光中等</td>
                    <td class="f_left center" width="15%">23.70元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">48</td>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">高等代数</a></td>
                    <td class="f_left center" width="15%">王萼云等</td>
                    <td class="f_left center" width="15%">25.90元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">56</td>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">解析几何</a></td>
                    <td class="f_left center" width="15%">邱维声</td>
                    <td class="f_left center" width="15%">38.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">39</td>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">近世代数</a></td>
                    <td class="f_left center" width="15%">杨子胥</td>
                    <td class="f_left center" width="15%">18.90元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">49</td>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">思想道德修养与法律基础</a></td>
                    <td class="f_left center" width="15%">编写组</td>
                    <td class="f_left center" width="15%">18.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">87</td>
                </tr>
                <tr>
                    <td class="f_left center" width="30%"><a href="math_web/1.html" target="_blank" style="color: #049">中国近现代史纲要</a></td>
                    <td class="f_left center" width="15%">编写组</td>
                    <td class="f_left center" width="15%">26.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">5.00元</td>
                    <td class="f_left center" width="15%" style="color: red;">98</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<p class="end">
    <?php
    echo "点击量: ".$count;
    ?>
</p>

</body>

</html>