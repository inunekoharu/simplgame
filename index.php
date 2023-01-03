<html>
  <head>
    <meta charset="utf-8">
    <title>〇×ゲーム</title>
    <style>
      #contauner{
        width:306px;
        heigt:306px;
        background: black;
        margin:20px auto;
      }
      .box { 
          width:100px;
          height:100px;
          border:1px solid red;
          background: white;
          float: left;
      }
    </style>
  </head>
  <body>
  <div id="container">
  <?php for ($x =0; $x<3; $x++) ?>
    <div class ="box"></div>
    </div>
  </body>
</html>


