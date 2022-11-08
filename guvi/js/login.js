jQuery('#loginForm').on('submit',function(e){
    jQuery('#btn1').val('Please wait...');
    jQuery('#btn1').attr('disabled',true);
    jQuery.ajax({
        url:'/guvi/php/login.php',
        type:'post',
        data:jQuery('#loginForm').serialize(),
        success:function(result){
            jQuery('#text').html('Login successfull!');
            jQuery('#loginForm')['0'].reset();
            jQuery('#btn1').val('Submit Now');
            jQuery('#btn1').attr('disabled',false);
        }
    });
    e.preventDefault();
});