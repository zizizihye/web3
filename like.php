<!doctype html>
<html>
<head>
  <title> Laputa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
  a:HOVER {     /* 마우스 커서 올렸을때 */
      color: #8161FF; font-weight: bold;
    }
  </style>
</head>
<body>
      <p>
        <p style="background:rgba(255,255,255,0.8); padding-top:20px; padding-bottom:20px;">
        　no　　　　day　　　　　　　　　　　subject
        </p>
        <hr>

        <script>
        var space=['  　　 　 ','　　　　　　　　　'];
        var list_day=['141004','130518','170920'];
        var list_sub=['더크라이 젠틀맨','블락비 단콘','군산대 딘'];
        var link=[''];
        </script>

        <script>
        var i=0;
        while(i<list_day.length){
          document.write('　',i+1,'<a href="'+link[i]+'">'+space[0]+list_day[i]+space[1]+list_sub[i]+'</a>');
          document.write('<hr>');
          i=i+1;
        }
        </script>
      </p>

</body>
</html>
