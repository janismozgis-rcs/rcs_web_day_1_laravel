$(document).ready(function(){
    $('.images-col a').fancybox();
    // $('#reg-form').submit(function(){
    //     var errors = [];
    //     $('.errors ul').html('');
    //     $('.has-error').removeClass('has-error');
    
    //     if ($('input[name="username"]').val() == '') {
    //         errors.push('Please enter username');
    //         $('input[name="username"]').addClass('has-error');
    //     }
    //     if ($('input[name="password"]').val() == '') {
    //         errors.push('Please enter password');
    //         $('input[name="password"]').addClass('has-error');
    //     }
    //     if ($('input[name="password"]').val().length < 8) {
    //         errors.push('Password must be at least 8 symold');
    //         $('input[name="password"]').addClass('has-error');
    //     }
    //     if ($('input[name="password2"]').val() == '') {
    //         errors.push('Please retype the password');
    //         $('input[name="password2"]').addClass('has-error');
    //     }
    //     if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
    //         errors.push('Passwords must match');
    //         $('input[name="password"]').addClass('has-error');
    //         $('input[name="password2"]').addClass('has-error');
    //     }
    //     if ($('input[name="first_name"]').val() == '') {
    //         errors.push('Please enter first name');
    //         $('input[name="first_name"]').addClass('has-error');
    //     }
    //     if (errors.length > 0) {
    //         // handle errors
    //         for (var index = 0; index < errors.length; index++) {
    //             var element = errors[index];
    //             $('.errors ul').append('<li>' + element + '</li>');
    //         }
    //         $('.errors').show();
    //         return false;
    //     }
    // });

});

var app = new Vue({
    el: '#chat',
    data: {
        messages: [
        ],
        newMessageUsername: "",
        newMessageText: "",
    },
    methods: {
        sendMessage: function(){
            var newStuffToAdd = {
                username: this.newMessageUsername, // Peteris
                text: this.newMessageText, // some text
                date: new Date()
            }
            
            this.messages.push(newStuffToAdd);
            this.newMessageText = '';
        }
    }
})
