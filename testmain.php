<!doctype html>
<html>
<head>
  <title> Laputa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript">
    var img=new Array();
    img[0]=new Image(); img[0].src="images/zico1.jpg";
    img[1]=new Image(); img[1].src="images/zico2.jpg";
    img[2]=new Image(); img[2].src="images/zico3.jpg";
    var interval=2000;
    var n=0;
    var imgs = new Array("images/zico1.jpg","images/zico2.jpg","images/zico3.jpg");
    function rotate()
    {
    if(navigator.appName=="Netscape" && document.getElementById)
    {
    document.getElementById("slide").src=imgs[n];
    }
    else document.images.slide.src=imgs[n];
    (n==(imgs.length-1))?n=0:n++;
    setTimeout("rotate()",interval);
    }
</script>
</head>
<body onload="rotate()">
        <img src="images/zico1.jpg" id="slide">
          <br>
            <p style="font-size:15px;" >
              ▶INSTAGRAM :
              <a href="https://www.instagram.com/zhmadeinkorea/" target="_blank" style="font-size:15px;">@지혜</a>
              <a href="https://www.instagram.com/zh1oveszm/" target="_blank" style="font-size:15px;">@지미</a><br>
              ▶E-AIL : j_hye1996@naver.com
            </p>

            <input type="button" value="white" onclick="
              var target=document.querySelector('body');
              if(this.value === 'white'){
                target.style.color = 'white';
                this.value='black';
              }
              else{
                target.style.color = 'black';
                this.value='white';
              }
            ">
</body>
</html>
