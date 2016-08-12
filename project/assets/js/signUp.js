var signup = { //객체 signup

	doSignUp:function(){ //signup 시작
		var email 	= $('#exampleInputEmail1').val(); // 변수 이메일을 이메일 값으로 지정
		var name 		= $('#exampleInputName').val(); // 변수 네임을 네임 값으로 지정
		var password 	= $('#exampleInputPassword1').val(); //변수 패스워드를 패스워드 값으로 지정

		$.post( config.url+"signup", { email: email, name: name, password: password})
		//config.url = api url이 이미 들어가 있음. email, name, password 각각의 데이터를 보내고
		//$.post 메소드는 jquery 에서 서버페이지를 실행하고, 그 결과텍스트를 받아올 수 있게하는 ajax 메소드
		//$.post('호출할 서버 페이지 경로',
		//function(data) {
		//alert( data ); // 서버페이지가 실행된 후에 출력하는 값을 data 변수가 받아온다.});

		.done(function(data){ //signp이 제대로 실행 된 후 출력하는 값을 data 변수를 통해 받아온다.

				$('.custom_form').css('display', 'none'); // 실행 처음에는 성공 또는 실패 폼이 보이지 않음
				$('#confirmedForm').css('display', 'block'); // signup 성공 폼 출력
				$('#signUp_input_form').css('display', 'none'); //signup 입력창은 보이지 않음

		}).fail(function(data){ //signup에 실패한 경우

				$('.custom_form').css('display', 'none'); // 실행 처음 signup 성공/ 실패 폼이 보이않음
				$('#failedForm').css('display', 'block'); // 실패 폼 출력

		});
	},

	setEvent: function(){ //이벤트 초기화
		$('#doSignUp').click(signup.doSignUp);
	},
	init: function(){ //객체 초기화
		signup.setEvent();
	}

}
