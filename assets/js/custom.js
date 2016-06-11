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