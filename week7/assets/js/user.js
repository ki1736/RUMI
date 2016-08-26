var user = {
  auth:{},
  onLoadEvent: function()
  {
    //1.hash data
    var hashData = window.location.hash;
    //2.remove hash protocol data (# index 번호 0번 제외한 hashData를 담아온다.)
    var strBase64 = hashData.substr(1);
    //3.hash to decode (base64 to data)
    var decodedData = atob(strBase64); // a to b 압축을 푸는것으로, b to a 압축 하는것 으로
    //4.convert string to object
    var objData = $.parseJSON(decodedData);
    user.auth._id = objData._id;
    user.auth.name = objData.name;  //auth는 변수
    user.auth.email = objData.email;
    user.auth.password = objData.password;

    //setname data
    $('.loggedin').text(objData.name); //네비바 오른쪽 상단에 사용자 이름을 보여주기 위함
    //사용자 전체 로딩
    user.findUserAll();

  },
  findUserAll: function(){
    //search
    config.req.get("search"
              ,{}
              ,user.successCallback
              ,user.failCallback);

  },
  findUserByEmail: function(){
    config.req.post("search"
              ,{email:$('.keyword').val()}
              ,user.successCallback
              ,user.failCallback);

  },

  successCallback: function(res){ //res result 서버에서 넘어오는 데이터
    //1.node table
    var tbody = $('.table tbody')
    tbody.children().not('.tr-temp').remove();//
    //$.each 1st param data
    //2nd param function 데이터 가공할 함수
    $.each(res.result,function(index, value){//object 형식의 데이터 가져올 때
      var objTr = $('.tr-temp').clone();
      objTr.find('#id').text(value._id);
      objTr.find('#email').text(value.email);
      objTr.find('#name').text(value.name);
      objTr.find('#password').text(value.password);

      objTr.removeClass('tr-temp');

      tbody.append(objTr);// 데이터를 붙이는 역할



    });
  },
  failCallback: function(res){

  },

  saveUserInfo: function()
  {
    //1.Modal 창에서 사용자 를 수정해야함.
    //2.저장 버튼 클릭시, Server에 변경된 데이터를 저장 해야함.
        config.req.post("update"
            ,getParam('.modal-body')
            ,user.successSaveUserInfoCallback
            ,user.failSaveUserInfoCallback);
    //3.저장 후 Callback Method를 이용하여 Modal을 닫아야함.

    //4.이미 조회된 테이블에 변경한 사용자가 있으면 테이블 데이터도 변경해야함.

  },

  successSaveUserInfoCallback: function(res)
  {
    alert("success");
    // 1.success경고창이 뜨고 ok 버튼으로 알림창이 닫히면 모달창이 닫힌다.
    $('#myModal').modal("hide");
    // 2.navbar의 사용자 이름이 수정된다.
    $('.loggedin').text(res.name); //네비바 오른쪽 상단에 사용자 이름을 보여주기 위함
    // 3.사용자 리스트에서 변경된 사용자를 찾아 정보를 수정한다.
    var target = $('.table tbody tr:has(td:contains('+res._id+'))');
    //class table에 tbody 안에 td에 response id와 일치하는 값을 가지고 있는 tr을 찾는다.
    target.find('#email').text(res.email);
    //찾은 tr에서 아이디가 email인 td를 찾아 text를 변경해준다.
    target.find('#name').text(res.name);
    //찾은 tr에서 아이디가 name인 td를 찾아 text를 변경해준다.
		target.find('#password').text(res.password);
    //찾은 tr에서 아이디가 password인 td를 찾아 text를 변경해준다.

    // 4.auth의 정보를 수정한다.
    user.auth._id = res._id;
    user.auth.name = res.name;  //auth는 변수
    user.auth.email = res.email;
    user.auth.password = res.password;



  },
  failSaveUserInfoCallback: function(res)
  {

  },

  setEvent: function()
  {
    $('#btn_srch').click(user.findUserByEmail);
    $('#btn_save').click(user.saveUserInfo);

    $('#myModal').on('show.bs.modal', function (e) {

      $('.modal-body').find("#name").val(user.auth.name);
      $('.modal-body').find("#email").val(user.auth.email);
      $('.modal-body').find("#password").val(user.auth.password);

    })

  },
  init: function(){
    user.setEvent(); //set up event to elemnets
    user.onLoadEvent(); //when page onload, triggred
  }
};
