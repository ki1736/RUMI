var login = { //객체 login

  doLogin:function(){ //로그인 시작
    var email 		= $('#exampleInputEmail1').val(); // 변수 이메일을 이메일 값으로 지정
    var password 	= $('#exampleInputPassword1').val(); // 변수 패스워드를 패스워드 값으로 지정

    $.post(config.url+"signin",{ email: email, password: password})
    //config.url = api url이 이미 들어가 있음. email 과 password 각각의 데이터를 보내고
    //$.post 메소드는 jquery 에서 서버페이지를 실행하고, 그 결과텍스트를 받아올 수 있게하는 ajax 메소드
    //$.post('호출할 서버 페이지 경로',
    //function(data) {
    //alert( data ); // 서버페이지가 실행된 후에 출력하는 값을 data 변수가 받아온다.});

    .done(function(data){ //로그인이 제대로 실행 된 후 출력하는 값을 data 변수를 통해 받아온다.
      $('.custom_form').css('display', 'none'); // 실행 처음에는 로그인 성공/ 실패 폼이 보이지 않은 상태
      $('.login_info p.email').text(data.email); // data 변수의 email 값 출력
			$('.login_info p.password').text(data.password); // data 변수의 password 값 출력

      $('#confirmedForm').css('display', 'block'); // 로그인 성공 폼 출력
      $('#login_input_form').css('display', 'none'); // 이메일과 패스워드 입력창은 보이지 않음

    }).fail(function(data){ // 로그인에 실패한 경우
			$('.custom_form').css('display', 'none'); // 실행 후 처음에는 로그인 성공/ 실패 폼이 보이지 않고
			$('#failedForm').css('display', 'block'); // 실패 폼이 출력됨
		});
	},


  setEvent: function(){ //이벤트 초기화
    $('#doLogin').click(login.doLogin);

  },
  init: function(){ //객체 초기화

    login.setEvent();
  }
}

//login.setEvent/ login.init



/*
  author: RUMI LEE
  date: 2016.08.07
  param: none;
  return: none;
  description: when the login button has been clicked, the alert is shown.

function login(){
  var url="http://128.199.188.157:7000/api/signin";
  //1.find email node
  //2.get node value
  //3.define var
  //4.assign value
  var email = $('#exampleInputEmail1').val();
  var password = $('#exampleInputPassword1').val();

  //$('selector')
  //jquery in-built method
  $.post(url, {email:email, password:password}) //key:value

  .done(function(){
    //요청이 성공했을때 status code 200
    reset();
    $('.confirmedForm').css('display','block');

  })

  .fail(function(){
    reset();
    //요청이 실패했을때 status code 404:user not found/ code 500: internet server error
    //1.find failedForm
    //2.form need to be shown css display block(none to block)
    $('.failedForm').css('display','block');
  });


  //get email password var
  //1.call alert window
  //updated by RUMI 2016.08.07
  //alert(email + " : " +password);

}
function reset(){
  $('.failedForm').css('display','none');
  $('.confirmedForm').css('display','none');
}
function init()
{
  reset();
}

*/
