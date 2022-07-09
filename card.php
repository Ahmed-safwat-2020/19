<?php



if (isset($_POST['name']) && !empty($_POST['name']) ) {
      ?>
      <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
         <link href="style/style.css" rel="stylesheet" type="text/css" />
      </head>
      <?php
            if ( $_POST['img'] == "1.jpg"  ){
               ?>
                <body style="text-align: center;">
                    <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                    z-index: -3;
                    top: -100px;
                    left: -100px;
                    opacity: 0;
                    width:0'>
                        <canvas id="idCanvas" width="1772" height="1772" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                        <div style="    font-size: 25pt;
                    background-color: #cf6b22;
                    color: #fff;
                    padding: 0.6rem;
                    text-align: center;
                    line-height: 55px;
                    cursor: pointer;
                    width: 290px;
                    margin: 22px auto;" onclick="download()">
                        تحميل البطاقة
                        </div>
                    <script>
                        var name = "<?php echo $_POST['name'] ; ?>";
                        var canvas = document.getElementById('idCanvas');
                        var context = canvas.getContext('2d');
                        var link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.type = 'text/css';
                        link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                        document.getElementsByTagName('head')[0].appendChild(link);
                        var imageObj = new Image();
                        imageObj.src ="<?php echo $_POST['img']; ?>";
                        context.drawImage(imageObj, 0, 0,1772,1772);
                        context.font = "bold 40px 'Cairo', sans-serif";
                        context.textAlign = 'center'; 
                        context.fillStyle  = '#2a307e';
                        context.fillText(name, canvas.width/2, 1625);
                        function download(){
                        var canvas = document.getElementById('idCanvas');
                        var link = document.createElement('a');
                        var dataURL = canvas.toDataURL();
                        link.download = "my-image.jpeg";
                        link.href = dataURL;
                        link.click();
                        }
                        </script>
      </body>
               <?php
            }
            if ( $_POST['img'] == "2.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1772" height="1772" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1772,1772);
                                    context.font = "bold 40px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#2a307e';
                                    context.fillText(name, canvas.width/2, 1700);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "3.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 25px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#fff';
                                    context.fillText(name, canvas.width/2, 915);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "4.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 25px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000';
                                    context.fillText(name, canvas.width/2, 900);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "5.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 25px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#8b1813';
                                    context.fillText(name, canvas.width/2, 550);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "6.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 45px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#48474f';
                                    context.fillText(name, canvas.width/2, 900);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "7.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="5557" height="5557" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,5557,5557);
                                    context.font = "bold 150px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#48474f';
                                    context.fillText(name, canvas.width/2, 4500);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "8.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 25px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000027';
                                    context.fillText(name, canvas.width/1.4, 725);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "9.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="2251" height="2591" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,2251,2591);
                                    context.font = "bold 65px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000027';
                                    context.fillText(name, canvas.width/2, 2400);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "10.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1098" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1098,1080);
                                    context.font = "bold 35px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#fff';
                                    context.fillText(name, canvas.width/2, 910);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "11.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="2000" height="2000" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,2000,2000);
                                    context.font = "bold 40px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#fff';
                                    context.fillText(name, canvas.width/1.35, 1650);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "12.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="3000" height="3000" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,3000,3000);
                                    context.font = "bold 80px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#fff';
                                    context.fillText(name, canvas.width/2, 2500);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "13.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1074" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1074,1080);
                                    context.font = "bold 25px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000';
                                    context.fillText(name, canvas.width/2, 980);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "14.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="3000" height="3000" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,3000,3000);
                                    context.font = "bold 75px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000';
                                    context.fillText(name, canvas.width/2, 2750);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "15.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 35px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#ac9d6b';
                                    context.fillText(name, canvas.width/2, 925);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "16.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="8333" height="8333" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,8333,8333);
                                    context.font = "bold 230px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#2c3f79';
                                    context.fillText(name, canvas.width/2, 7650);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "17.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1080" height="1080" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1080,1080);
                                    context.font = "bold 35px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#fff';
                                    context.fillText(name, canvas.width/2, 680);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "18.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="1567" height="1567" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,1567,1567);
                                    context.font = "bold 45px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#36672f';
                                    context.fillText(name, canvas.width/2, 1100);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
            if ( $_POST['img'] == "19.jpg" ){
                ?>
                     <body style="text-align: center;">
                                <img src="<?php echo $_POST['img']; ?>" style='position: absolute;
                                z-index: -3;
                                top: -100px;
                                left: -100px;
                                opacity: 0;
                                width:0'>
                                    <canvas id="idCanvas" width="8333" height="8333" style="padding:0;font-family:myfont" dir="rtl"> </canvas>
                                    <div style="    font-size: 25pt;
                                background-color: #cf6b22;
                                color: #fff;
                                padding: 0.6rem;
                                text-align: center;
                                line-height: 55px;
                                cursor: pointer;
                                width: 290px;
                                margin: 22px auto;" onclick="download()">
                                    تحميل البطاقة
                                    </div>
                                <script>
                                    var name = "<?php echo $_POST['name'] ; ?>";
                                    var canvas = document.getElementById('idCanvas');
                                    var context = canvas.getContext('2d');
                                    var link = document.createElement('link');
                                    link.rel = 'stylesheet';
                                    link.type = 'text/css';
                                    link.href = 'https://fonts.googleapis.com/css2?family=Cairo&display=swap';
                                    document.getElementsByTagName('head')[0].appendChild(link);
                                    var imageObj = new Image();
                                    imageObj.src ="<?php echo $_POST['img']; ?>";
                                    context.drawImage(imageObj, 0, 0,8333,8333);
                                    context.font = "bold 245px 'Cairo', sans-serif";
                                    context.textAlign = 'center'; 
                                    context.fillStyle  = '#000';
                                    context.fillText(name, canvas.width/2, 7900);
                                    function download(){
                                    var canvas = document.getElementById('idCanvas');
                                    var link = document.createElement('a');
                                    var dataURL = canvas.toDataURL();
                                    link.download = "my-image.jpeg";
                                    link.href = dataURL;
                                    link.click();
                                    }
                                    </script>
      </body>
                <?php
            }
      ?>
     
      <?php
} else {
    die();
}



?>