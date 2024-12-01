<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@500&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" />
  <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/favicon.png') }}" />
  <link rel="apple-touch-icon" type="image/png" sizes="16x16"  href="{{ asset('/favicon.png') }}" />
  <style type="text/css">
    body {
      background-color: #F2F3F2!important; /*F2F3F2 B5B5B5 C9CAC9 e9e9e9 d4d4d4 9a9a9a 707070 454545*/
      background-image: radial-gradient(#d4d4d4 1px, transparent 1px);
      background-size: 22px 22px;
      overflow-x: hidden;
      overflow-y: hidden;
      height: 100vh;
      margin: 0;
    }
    #errors {
      position: relative;
      height: 100vh;
    }
    #errors .errors {
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .errors {
      max-width: 920px;
      width: 100%;
      line-height: 1.4;
      text-align: center;
      padding-left: 15px;
      padding-right: 15px;
    }
    .errors .errors-code {
      position: absolute;
      height: 100px;
      top: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      z-index: -1;
    }
    .errors .errors-code h1 {
      font-family: 'Maven Pro', sans-serif;
      color: lightgray;
      font-weight: 900;
      font-size: 276px;
      margin: 0px;
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .errors h2 {
      font-family: 'Maven Pro', sans-serif;
      font-size: 46px;
      color: #000;
      font-weight: 900;
      text-transform: uppercase;
      margin: 0px;
      margin-top: 25px;
    }
    .errors p {
      font-family: 'Poppins', 'Maven Pro', sans-serif;
      font-size: 16px;
      color: #000;
      font-weight: 400;
      text-transform: uppercase;
      margin-top: 15px;
      opacity: .9!important;
    }
    .errors a {
      font-family: 'Poppins', 'Maven Pro', sans-serif;
      font-size: 14px;
      text-decoration: none;
      text-transform: uppercase;
      background-image: linear-gradient(to left, #5a3b2f, #b4813f);
      color: #f3f3f3!important;
      display: inline-block;
      padding: 10px 31px;
      border: 2px solid transparent;
      border-radius: 40px;
      font-weight: 400;
      cursor: pointer;
      margin-top: 25px;
    }
    .errors a:hover {
      background: transparent;
      border: 1px solid #5a3b2f;
      color: #000000!important;
    }
    .lower-case {
      text-transform: lowercase;
    }
    @media (max-width: 900px) {
      .errors .errors-code h1 {
        font-size: 220px;
        top: 15%;
      }
      .errors h2 {
        font-size: 40px;
      }
      .errors p {
        font-size: 15px;
      }
    }
    @media (max-width: 600px) {
      .errors .errors-code h1 {
        font-size: 180px;
        top: 20%;
      }
      .errors h2 {
        font-size: 30px;
      }
      .errors p {
        font-size: 14px;
      }
    }
    @media (max-width: 300px) {
      .errors .errors-code h1 {
        font-size: 120px;
        top: 10%;
      }
      .errors h2 {
        font-size: 20px;
      }
      .errors p {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>
  <div id="errors">
    <div class="errors">
      <div class="errors-code">
        <h1>@yield('code')</h1>
      </div>
      <h2>@yield('header')</h2>
      <p>@yield('message')</p>
      <a onclick="window.history.go(-1);">
        Back to previous page
      </a>
    </div>
  </div>
</body>
</html>