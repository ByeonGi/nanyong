<!doctype html>

<html>
	<body>
       
        <!--
           
           만약 이름 1개당 1개의 주소가 주어진다고 가정하자
           그랬을때 내용을 동시에 한번에 바꾸어 주어야 할때 html만 존재 한다면 굉장히 많은 html파일을 수정해주어야 한다
           이때 php를 사용하면 한번만 작업 해주면 된다
           
           php에 입력값을 주고 싶을때
           ex) parameter.php?name=ally
           -> parameter.php는 name이라는 값에 ally를 출력한다
           
           .php? -> 입력값 넣어주는 방법
           
           < ?php echo url로 넘어온 name값 ? >
           php에서 약속된 이름 변수 : $_GET["name"];
           
           주소창에 연결해서 써주는법
           parameter.php?name=taeho&add=busan
           
           
           파일 이름뒤에 ? 는 입력값 
           입력값과 입력값 사이 구분 할때는 & 써주기
            
         -->        
        <h1>PHP의 URL 파라미터</h1>
        안녕하세요 <?php echo $_GET["add"]; ?>에 사시는
        <?php echo $_GET["name"]; ?>님
        

	</body>
</html>