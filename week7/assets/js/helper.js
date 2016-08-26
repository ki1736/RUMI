function getParam(id){
	var values = {};//data 담는 json object
	//넘겨준 ID로 부터 file type이 아닌 모든 input 받아오기
	var elements = $(id + " input:not([type='file'])").get();
	//받아온 elements 전체 개수
	var len = elements.length;

	for(var i = 0; i<len; i++){
		// elements에서 값을 받아 올 수 있는 type만 처리
		switch (elements[i].type) {
			case "email":
			case "text":
			case "password":
			values[elements[i].name] = elements[i].value;  //똑같은 구문 반복하지 않고자 break 생략

				break;

		}
	}
	//만들어진 값 return
	return values;
}
