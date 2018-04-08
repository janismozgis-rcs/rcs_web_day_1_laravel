new Vue ({
    el:'#chat',
    data: {
       messages:[
            
        ],
       newMessageUsername: "",
       newMessageText: "",
    },
    created: function(){
        $.getJSON('/chat/get-messages', function(resp){
            this.messages = resp;
            console.log(resp);
        })
    },
    methods: {
        sendMessage:function(){
            var newAdd = {
                username: this.newMessageUsername,
                text: this.newMessageText,
                date: new Date ()
                
            }
            this.messages.push(newAdd);
            this.newMessageText ='';
            $.post('/chat/save-message', newAdd, function(res){
                console.log(res);
            });
        }
    }
});