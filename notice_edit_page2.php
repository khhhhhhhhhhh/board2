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
  <title>공지사항 수정/삭제</title>
 <style>
        body{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #ffe4e1;
        }
        main{
            width: 100%;
            height: 100%;
        }
        .content_wrapper{
            width: 80%;
            margin-left: 20%;
        }
        .content_text{
            color: #9a2b46;
            margin-top: 100px;
            margin-left: 310px;
            font-weight: bold;
            font-size: 30px;
        }
       
        .edit_title ,
        .edit_content {
            color: #9a2b46;
            margin-top: 10px;
            font-size: 20px;
            margin-left: 150px;
        }
        .edit_title input,
        .edit_content input{
            font-size: 20px;
            width: 55%;
            padding: 20px 10px;
            border: 1px dotted  ;
            border-radius: 10px;
        }
	.orange:focus{
	background-color: #ffdaed;
  
	}
        .button_content{
            margin-left: 375px;
            margin-top: 3%;
        }
        #edit {
          font-size: 15px;
          font-weight: bold;
        }
        .button_content button{
            width: 130px;
            padding: 15px 0;
            margin-left: 16%;
            margin-top: 10px;
            border: dotted 1px;
            border-radius: 5px;
            background-color: white;
        }
       .button_content button:hover{
	background-color: #ffdaed;
	}
    </style>
</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <main>
    <div class="content_wrapper">
      <div class="content_text">
        <h2><b>공지사항 수정</b></h2>
      </div>
      <?php   
        include "dbconn2.php";
	$idx = $_GET['idx'];
	$query = "select * from $table where idx='$idx'";
	$stmt = $conn->query($query);
      ?>
      <?php
	while( $row = $stmt->fetch( PDO::FETCH_ASSOC )){
      ?>
      <form action="notice_edit2.php" method="POST">
        <div class="edit_title">
	  <h5><b>제목</b></h5>
	  <input type ="text" class="orange" value="<?=$row['title'];?>" name="title">
	</div>  <!--제목 -->
	<div class="edit_content">
	  <h5><b>내용</b></h5>
	  <input type="text" class="orange" value="<?=$row['content'];?>" name="content">
	  <input type="hidden" value="<?=$idx;?>" name="idx">
	  <div class="button_content">
            <button id="edit"><b>수정완료</b></button>
	  </div>
	  <a href="delete2.php?idx=<?=$idx;?>"><b>삭제</b></a>
	</div> <!--edit_content-->
      </form>
      <?php } ?>
    </div>
  </main>
  <script>
    $('#edit').click(function(){
      confirm('수정 하시겠습니까?');
    });
  </script>
  </div> 
</body>
</html>
























