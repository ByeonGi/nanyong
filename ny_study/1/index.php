<!doctype html>

<html>	
	<body>
   
    <!--1. php는 무엇인가?
    - html과 차이
    : html은 브라우저에서 html 파일을 요청했을때 서버에서 그것을 그대로 인식해서 정보가 쓰여진 그대로 보여주게됨, 한번 만들어지면 언제나 똑같이 동작함, 정적임
    그러나 확장자가 php면 서버에서 처리할수 없다고 판단하여 php에 넘겨줌, 그러면 열어보고 php에 해당되는 부분만 php의 문법에 따라 읽고 해석해서 보여주게됨, 리로드 할때마다 달라지게 만들수 있음, 코드가 동적임

    php의 시작과 끝을 알리는것
    < ?php? >
    html과 섞어서 쓸수 있음

    언어를 사용하는 이유?
    어떠한 데이터를 의도에 따라 처리하는 것
    어떻게 처리하는 방법을 그 언어가 제공하는가

    php라는 언어가 지원하는 데이터 타입?
    살펴보면 좋아요
    -> php data type 검색하면
    공식문서 https://www.php.net/manual/en/language.types.intro.php
    integer, float : 숫자
    string : 문자-->
    
    <?php
        echo date('Y-m-d H:i:s');
    ?>
	</body>
</html>