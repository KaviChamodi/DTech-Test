jQuery("#formValidation").validate({
  rules:{
    mobile:{
      minlength:10,
      maxlength:10,
      number:true
    }
  },
    messages:{
      name:{
        required: 'Please Enter your name'
      },
      email:'Please Enter your Email Address',
      
      mobile:'Please Enter your Contact Number',
      pwd:'Please Enter Valid Password'

      
  },

  
  


  submitHandler: function(form) {
    form.submit();
    
  }
 });


 jQuery('#formValidation').on('submit',function(e){
  jQuery.ajax({
    
    url:'savedata.php',
    type:'post',
    data:jQuery('#formValidation').serialize(),
    
    success:function(result){
      jQuery('#submitted').html('Data submitted successfully!');
     
      //jQuery('formValidation')['0'].reset();

    }

  });

  e.preventDefault();

 });

