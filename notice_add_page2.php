<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+icons">
  <script defer src="https://code.getmdl.io/1.3.0/material/min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
        body{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #bad4f6;
        }
        main{
            margin-left: 180px;
            width: 100%;
            height: 100%;
        }
        .content_wrapper{
            width: 100%;
            margin-left: 20%;
        }
        .content_text{
            margin-top: 100px;
            margin-left: 160px;
            font-weight: bold;
            font-size: 20px;
            color: #301f5c;
        }
        .add_title h5 ,
        .add_content h5 {
            font-size: 20px;
            font-weight: bold;
            color: #301f5c;
         
        }
        .add_title {
          margin-top: 60px;
        }
        .add_title input,
        .add_content input{
            font-size: 20px;
            width: 600px;
            padding: 20px 10px;
            border-radius: 10px;
            border: dotted 1px #3ca1ff;
           
        }
        .button_content{
            margin-left: 499px;
            margin-top: 3%;
            font-weight: bold;
        }
	.button_content button:hover{
	background-color: #daebfa;
        font-weight: bold;
	}
        .button_content button{
            width: 100px;
            padding: 15px 5px;
            
            border: dotted #3ca1ff 1px;
            border-radius: 5px;
            background-color: white;
        }
	.orange:focus{
	background-color: #daebfa;
	}
      
       
  </style>
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <main>
    <div class="content_wrapper">
      <div class="content_text">
        <h2><b>공지사항 추가</b></h2>
      </div>
      <form action="notice_add2.php" method="POST">
        <div class="add_title">
	  <h5>제목</h5>
	  <input type="text" maxlength="20" placeholder="20자까지 입력가능" class="orange" name="title">
	</div>
	<div class="add_content">
	  <h5>내용</h5>
	  <input type="text" maxlength="100" placeholder="100자까지 입력가능" value="" class="orange" name="content">
	</div>
	<div class="button_content">
	  <button id="add">추가하기</button>
	</div>
      </form>
    </div> <!--content_wrapper-->
    </main>
  </div>
</body>
</html>




















