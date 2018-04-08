new Vue ({
    el:'#chat',
    data: {
       messages:[
            
        ],
       newMessageUsername: "",
       newMessageText: "",
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
            }
        }
   });