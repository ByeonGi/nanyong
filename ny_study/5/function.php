<!doctype html>

<html>
    <head>
		<title>함수의 사용</title>
		<meta charset="UTF-8">
	</head>
	<body>
       
        <!--
           
            php에서는 웹에서 사용할 수 있는 다양한 기능 제공
            행을 바꿀때 br태그 대신 nl2br 사용가능
           
            원래 텍스트에서 그냥 엔터 치면 줄바꿈 안됨
            br태그 써줬어야 했는데 그것을 안쓰고도 그대로 출력해주는 함수가 nl2br , 코드소스에서는 br이 나타나줌
            
            php 홈페이지에서, 구글에서 필요한 함수를 검색해서 사용할 수 있음       
            
         -->
         
        <h1>함수</h1>
         
        <?php
        
        $str = "In many household and offices, gossip about games and athletes breaks down along gender lines, 
        
        the men indulging in it and the women scoffing. Those on each side of the line may exaggerate their feelings";
        
        echo $str;
        
        ?>
        
        <h3>strlen(); 함수</h3>
        
        <?php
        
        echo strlen($str);
        
        ?>
        
        <h3>nl2br</h3>
        
        <?php
        
        echo nl2br($str);
        
        ?>

	</body>
</html>