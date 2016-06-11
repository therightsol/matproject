/**
 * Created by Ali Shan on 11/6/2016.
 */

jQuery(document).ready(function (){

    $('#Username').blur(function (){

        //alert();

        var un  = $('#Username').val();
        var url = "./register/checkusername";

        alert(un);

        $.ajax({
            type: "POST",
            url: url,
            data: {'un':un},
            success: function (s){
                $('#usernamestatus').text(s).addClass('red');
            }
        });
    });
});
/*
saad js
 */
function onFormSubmit(e) {
    if (!allFieldsValid()) {
        e.preventDefault();
        return false;
    }
    if (!allFieldset()) {
        e.preventDefault();
        return false;
    }
}
$(function() {
    $('.radio-group label').on('click', function(){
        $(this).removeClass('not-active').siblings().addClass('not-active');
    });
});
$(document).ready(function(){

    $('#loginform').submit(onFormSubmit);
});

