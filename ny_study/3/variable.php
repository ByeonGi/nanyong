<!doctype html>

<html>
	<body>
       
        <!--
           
           php에서 변수 사용하기
           변수 이름 앞에 $ 붙여주기!!
           
           $var1 = "a";
           $var2 = "b";
           echo "$var1,$var2";
           
           => a,b
           
           변수는 왜 쓰는가?
           
           수많은 문자열 사이에서 특정 단어를 변경 해야하거나 찾아야 한다면?
           
           
           echo "Johnston suggest that the increase in blood flow to the brain caused by the"(변수로 잡아줄것 앞쪽으로 " 넣어 문장 끊어주고 뒤에 변수는 변수명으로 바꾸어 주기) ally(대신 $name/ 연산자를 넣어 줄때는 양쪽으로 . 연산자 넣어서 이어주기 아랫쪽에 바뀌지 않는다고 가정한 단어 하나 빼고 전부다 바꿔주기) chewing action is most likely the reason behind the subjects improved acdemic ally performance Johnston suggest that the increase in blood flow to the brain caused by the chewing ally action is most likely the reason behind the subjects improved acdemic performance by ally";
           
           => 이렇게 된다면 변수 내용만 바꿔줬을때 해당하는 모든 단어가 바뀌게됨 
            
         -->        
        <h1>변수(variable)</h1>
        
<!--    <php
        
            $a = 10;
            echo $a+1;
        
        >-->
        
        <?php
            
            $name = "rich";
        
            echo "Johnston suggest that the increase in blood flow to the brain caused by the ".$name." chewing action is most likely the reason behind the subjects improved acdemic ally performance Johnston suggest that the increase in blood flow to the brain caused by the chewing ".$name." action is most likely the reason behind the subjects improved acdemic performance by ".$name;
        
            
                
        ?>
	</body>
</html>