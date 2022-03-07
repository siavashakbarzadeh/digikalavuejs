<!DOCTYPE html>
<html>
<head>
    <title>دیجی کالا</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/css/jquery_ui.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/jquery.mobile-1.4.5.min.css">

    <script>

        function Func() {
            var city = document.getElementById('city');
            var state=document.getElementById('state');
            var val=state.options[state.selectedIndex].getAttribute('data_city');
            var arr=val.split(',');
            city.options.length = 0;
            for(i = 0; i < arr.length; i++)
            {
                if(arr[i] != "")
                {
                    city.options[city.options.length]=new Option(arr[i],arr[i]);
                }
            }
        }


    </script>




</head>
<body id="body">
<header>


    <nav id="header_shoping">

<img src="/img/header.jpg" style="width: 100%;height: 82px;">

        <span>

            <img src="/img/logo.png" style="position: absolute;left: 46%;width: 174px;top: 10px;">

        </span>

    </nav>


</header>

