<!doctype html>

<html>
	<body>
       
        <!--
                     
        string:문자열
        -> single quoted
        
        문자열 안쪽으로 어떠한 기호를 넣고 싶은데
        역할이 있어 에러가 난다면 그 기호 앞쪽으로 \(백슬래쉬) 넣어줌 => 기호의 역할 일시적으로 상실하고 문자로 사용됨
           
        ex) echo "hello \"w\"orld"
           
        문자 연산자 한가지 존재
        . 으로 연결해주기 **많이 쓰이니 기억해두기
           
        문자열의 길이 알고 싶다?
        string length로 감싸주면 문자열이 몇개로 이루어져 있는지 알려줌
           
        strlen("문자열")
            
         -->
          
        <h1>string &amp; Operator</h1>
           
        <?php
        
        echo "hello world";
        
        ?>
        
        <h3>문자 연산자(concatenation operator)</h3>
        
        <?php 
        
        echo "hello"."world";
        
        ?>
        
        <h3>string lenfth function (문자열이 몇개인지 알아내는 함수)</h3>
        
        <?php
        
            echo strlen("hello world");
        
        ?>
        
	</body>
</html>