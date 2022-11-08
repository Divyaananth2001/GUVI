jQuery('#contactForm').on('submit',function(e){
    jQuery('#btn').val('Please wait...');
    jQuery('#btn').attr('disabled',true);
    jQuery.ajax({
        url:'/guvi/php/profile.php',
        type:'post',
        data:jQuery('#contactForm').serialize(),
        success:function(result){
            jQuery('#text').html('Thank you!');
            jQuery('#contactForm')['0'].reset();
            jQuery('#btn').val('Submit Now');
            jQuery('#btn').attr('disabled',false);
        }
    });
    e.preventDefault();
});