<!doctype html>

<html>
	<head>
		<title>함수의 활용</title>
		<meta charset="UTF-8">
	</head>

	<body>
  
      <!--
      
      **함수 검색 연습 할것
      본문을 저장해둘수 있는 data라는 파일 생성
      
      -->
   
        <h1>web</h1>
        
        <ul>
            <li><a href="index_fun.php?id=html">html</a></li>
            <li><a href="index_fun.php?id=css">css</a></li>
            <li><a href="index_fun.php?id=javascript">javascript</a></li>
        </ul>
        
        <h2>
            <?php
            echo $_GET["id"];
            ?>
        </h2>
        
        <!--아랫쪽에는 클릭했을때 해당하는 본문이 나와야함
        data/id 값에 해당하는 파일의 내용;
        
        파일을 읽는데 필요한 내장 함수
        file_get_contents("");
        
        경로 써줄때 변수 함께 써주어야 한다면
        "../data/".$_GET["id"]
        문자 연산자로 연결해서 써줄것
        
        현실에서는 이렇게 단순한 코드를 쓰면 안됩니당
        보안상의 문제로 ㅠㅠㅠ
        
        -->
        
        <?php
        
        echo file_get_contents("../data/".$_GET["id"]);
        
        ?>

	</body>
</html>