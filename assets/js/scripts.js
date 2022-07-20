$(document).ready(function(){
    
    $("#register").click(function(){
        $('#ModalLabel').text('Register')
        $('.nama_lengkap').show()
        $('.password1').show()
        $('.modal-footer button').text('Register')
        $('.modal-footer button').attr('name', 'register')
        $('.modal-footer button').attr('id', 'btn-register')
    });
    
    $("#login").click(function(){
        $('#ModalLabel').text('Login')
        $('.nama_lengkap').hide()
        $('.password1').hide()
        $('.modal-footer button').text('Login')
        $('.modal-footer button').attr('name', 'login')
        $('.modal-footer button').attr('id', 'btn-login')
    });

    $('#input').keyup(function() {
        var input = $('#input').val();
        var bahasa1 = $('.title1').text();
        var bahasa2 = $('.title2').text();
        $.ajax({
            url: 'terjemahkan.php',
            data: {input : input, bahasa1 : bahasa1, bahasa2 : bahasa2},
            method: 'post',
            // dataType: 'json',
            success: function(data) {
                $('#output').text(data);
            }
        });
    });

    $('#tukar').click(function(){
        if($('.title1').text() == 'ambon'){
            $('.title1').text('indonesia');
            $('.title2').text('ambon');
        }else{
            $('.title1').text('ambon');
            $('.title2').text('indonesia');
        }
        var inp = $('#input').val();
        var out = $('#output').text();
        $('#input').val(out);
        $('#output').val(inp);
        $('#input').keyup();
    });

});