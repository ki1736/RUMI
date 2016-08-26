var config = {
	baseUrl: window.location.origin + "/week7",
	url:"http://128.199.188.157:7000/api/",
	req:{
		post:function(uri, param, success, fail) { //post 까지는 일반함수
			$.post(config.url+uri, param) //uri uninform resoruce identifier
			.done(success == undefined ? config.success : success) //삼항 연산자 단순 if문과 같음 if(success == undefined){...}
			.fail(fail == undefined ? config.fail : fail)
 		},
		get:function(uri, param, success, fail){
			$.get(config.url+uri, param)
			.done(success == undefined ? config.req.success : success) // 앞의 조건이 맞을 경우에는 앞의 config.success 실행(디폴트)/ 아닌 경우 success
			.fail(fail == undefined ? config.req.fail : fail)
		},
		success: function(res){
			console.log(res);

		},
		fail: function(res){
			console.log(res);
			}
		}
	}


$(config.init);
