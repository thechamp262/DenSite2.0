$(function() {
    // Get the form.
    var form = $('#contact_form');

    // Get the messages div.
    var formMessages = $('#message_form');

    $(form).submit(function(event) {
    // Stop the browser from submitting the form.
    
    event.preventDefault();
    var formData = $(form).serialize();
    //console.log('This console log' + formData);
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
    }).done(function(response) {
        if(response == 'Please Enter Your Name' || response == 'Please Enter Your Email Address' || response == 'Please Enter Your Message' || response == 'Please Enter Your Name and Email Address'
                || response == 'Please Enter Your Name and Message' || response == 'Please Enter Your Email Address and Message' || response == 'Please Enter Your Name, Email Address, and Message'){
                $(formMessages).addClass('error');
                }else{
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');
                    $('#name').val(''); 
                    $('#email').val('');
                    $('#textarea').val('');
                }
    // Make sure that the formMessages div has the 'success' class.
//    $(formMessages).removeClass('error');
//    

    // Set the message text.
    $(formMessages).text(response);

    // Clear the form.
    
});
    // TODO
    });
    
    
    // TODO: The rest of the code will go here...
});