<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>공지사항 리스트</title>
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
        }
        p{
            margin: 0;
        }
        main{
            width: 100%;
            height: 100%;
        }
        .excel_header{
            width: 80%;
            margin-top: 5%;
            margin-left: 10%;
	    border-radius: 10px;
            
            border: dashed #a45bea 3px;
            background-color: #cdbef4;
            display: flex;
        }
        .excel_header div:nth-child(1){
            width: 40%;
            padding: 30px 20px;
 
         
        }
        .excel_header h3{
            margin: 0;
            color: #0d253d;
            font-weight: bold;
            font-size: 25px;
        }
        .excel_header div:nth-child(2){
            width: 80%;
            text-align: right;
            margin-right: 50px;
            padding-top: 30px;
        }
        .excel_header div:nth-child(2) button{
            width: 100px;
            padding: 10px 0;
            border: dotted #7bbffd 5px;
	    font-size: 14px;
            font-weight: bold;
            color: #379dea;
            cursor:pointer;
            border-radius: 10px;
        }
	.excel_header div:nth-child(2) button:hover{
    
	background-color: #ffefdb;
        }

        .excel_wrapper{
            width: 80%;
            margin-left: 10%;
            margin-top: 3%;
        }
        .excel_wrapper table{
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .excel_wrapper thead,
        .excel_wrapper tbody{
            width: 100%;
        }
        .excel_wrapper th{
            padding: 5px 20px;
            border-bottom: solid black 2px;
            border-radius: 5px 5px 0 0;
            font-size: 20px;
            text-align: left;
        }
        .excel_wrapper td:nth-child(1){
            width: 7%;
        }
        .excel_wrapper td:nth-child(2){
            width: 18%;
        }
        .excel_wrapper td:nth-child(3){
            width: 45%;
            text-align: left;
        }
	.excel_wrapper td:nth-child(4){
            width: 20%;
            text-align: left;
        }
        .excel_wrapper td{
            padding: 7px 5px 17px 20px;
            border-bottom: dotted gray 1px;
            font-size: 18px;
        }
        .excel_wrapper td:nth-child(3) button{
            padding: 5px 10px;
            border: solid gray 1px;
            border-radius: 5px;
            background-color: white;
            outline: none;
            cursor: pointer;
        }
        .excel_wrapper td:nth-child(3) button:hover{
            border: solid black 1px;
            background-color: orange;
        }
        /* 엑셀 버튼 */
        .excel_button{
            width: 100%;
            text-align: center;
            margin-top: 2%;
            /* margin-left: -2%; */
        }
        .excel_button button{
            padding: 15px;
            background-color: white;
            color: black;
            font-size: 15px;
            border: solid black 2px;
            cursor: pointer;
        }
        .excel_button button:nth-child(1),
        .excel_button button:nth-child(5){
            margin: 0 20px;
        }
        .excel_button button:nth-child(2),
        .excel_button button:nth-child(3),
        .excel_button button:nth-child(4){
            margin: 0 5px;
        }
        a{
            color: red;
        }
  </style>

</head>
<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <main>
    <div class="excel_header">   
      <div>
        <h3>공지사항 관리</h3>
      </div>
    <div> 
      <button onclick="location.href='notice_add_page2.php'">추가하기</button>
    </div>
  </div>  <!-- excel_header -->
  <div class="excel_wrapper">
    <table>
      <thead>
        <tr>
	  <th>번호</th>
	  <th>제목</th>
	  <th>내용</th>
 	  <th>업데이트날짜</th>
	  <th>수정/삭제</th>
        </tr>
      </thead>
      <tbody>
        <?php
	  include "dbconn2.php";
	  
 	  $query = "select * from $table";
	  $stmt = $conn->query($query);
	  while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){?>
	    <tr>
	      <td><?php echo $row['idx'];?></td>
  	      <td><?=$row['title'];?></td>
	      <td><?=$row['content'];?></td>
	      <td><?=$row['up_time'];?></td>
	      <td><a href="notice_edit_page2.php?idx=<?php echo $row['idx'];?>">수정/삭제</a></td>		
	    </tr>
        <?php  } ?>
      <tbody>
    </table>
  </div>
 </main>
     <script>
        const Searching = Search.prototype;

function Search(){
    this.keyword = document.querySelector('input[name = "search"]');
    this.engine = document.querySelector('.SelectSearch');
    this.button = document.querySelector('.img-button');
    this.form = document.querySelector('.search');

    this.Engine();
}
Searching.Engine = function(){
    this.form.addEventListener('submit', e => {
   
        e.preventDefault();
       
        let engine = this.engine.value; 
        let keyword = this.keyword.value;

        if(engine === 'google'){
            location.href = 'https://www.google.co.kr/search?q=' + keyword;
        }else if(engine === 'naver'){
            location.href = 'https://search.naver.com/search.naver?query=' + keyword;
        }
    });
}

new Search();
    </script>


</body>
</html>
