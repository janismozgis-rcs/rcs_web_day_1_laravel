new Vue ({
    el:'#chat',
    data: {
       messages:[
            
        ],
       newMessageUsername: "",
       newMessageText: "",
    },
    created: function(){

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