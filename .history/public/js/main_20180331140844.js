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
            for (var index = 0; index < resp.length; index++) {
                var element = resp[index];
                console.log(element);
                var newAdd = {
                    username: element.username,
                    text: element.text,
                    date: element.created_at
                    
                }
                this.messages.push(newAdd);
            }
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