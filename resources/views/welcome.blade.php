<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>快递查询</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    </head>
    <body>
        <form action="/" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
            <span class="input-group-addon" id="basic-addon1">使用者账号</span>
            <input name="account" type="text" class="form-control" placeholder="你的账户名，测试时用test" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="form-group">
            <span class="input-group-addon" id="basic-addon1">快递数据</span>
            <input name="data" type="text" class="form-control" placeholder="你的快的数据" aria-describedby="basic-addon1">
        </div>
        <p><span class="glyphicon glyphicon-asterisk">你输入的数据结构应该为：申通,668390930489,123
            第一个参数为 快递公司名称
            第二个参数为快递单号
            第三个参数(可选)为“自定义参数”(长度不超过40个字符),该数据将在回调时以“state”参数推送回去(注意：回调时state参数不参与生成sign验证)，例如：您可以将订单ID之类的数据以这种方式传递到快刀云系统，在收到回调数据时，就可以使用该订单ID来匹配交易数据。</span></p>
        <br>
        <div class="form-group">
            <span class="input-group-addon" id="basic-addon1">签名</span>
            <input name="appsecret" type="text" class="form-control" placeholder="你的签名码" aria-describedby="basic-addon1">
        </div>
        <p><span class="glyphicon glyphicon-asterisk">测试时用“kd8cctestsecret”</span></p>
        
        <button type="submit" class="btn btn-default">查询</button>
        </form>
        

        
    </body>
</html>
