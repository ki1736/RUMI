/**
 * Created by pureumlee on 23/11/16.
 */
var navigation = {

    init:function () {
        navigation.setEvent();
    },

    setEvent:function() {

    }
}

var _trEdit = null;

$(document).ready(function(){
    $('.table tbody tr').click(function(){

        _trEdit=$(this).closest('tr');
        var _id=$(_trEdit).find('td:eq(0)').text();
        var _name=$(_trEdit).find('td:eq(1)').text();
        var _slug=$(_trEdit).find('td:eq(2)').text();
        var _status=$(_trEdit).find('td:eq(3)').text();

        $('input[name="id"]').val(_id);
        $('input[name="name"]').val(_name);
        $('input[name="slug"]').val(_slug);
        $('input[name="status"]').val(_status);

        if( _status == "published") {

            $('#status').prop('checked',true);
        }

            else{

            $('#status').prop('checked',false);
        }




    });

    $('#btn_update').click(function () {

        if(_trEdit)
        {
            var _id=$('input[name="id"]').val();
            var _name=$('input[name="name"]').val();
            var _slug=$('input[name="slug"]').val();
            var _status=$('input[name="status"]').val();

            $(_trEdit).find('td:eq(0)').text(_id);
            $(_trEdit).find('td:eq(1)').text(_name);
            $(_trEdit).find('td:eq(2)').text(_slug);
            $(_trEdit).find('td:eq(3)').text(_status);

            alert("Record has been updated!");

            _trEdit = null;


        }


    });

    $('#btn_new').click(function (){


        $('input[name="id"]').val(" ");
        $('input[name="name"]').val(" ");
        $('input[name="slug"]').val(" ");
        $('#status').prop('checked',false);


    });
});