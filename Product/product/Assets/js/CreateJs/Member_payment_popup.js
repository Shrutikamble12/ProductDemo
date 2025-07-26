
  
    $(document).ready(function(){
        $('#infosave').click(function(){
          //  alert("hii");
            if($('#Member_fullname').val()=='',
                $('#Mobile').val()=='',
               $('#DOB').val()=='',
                $('#Registration_date').val()==''
        )
            {
              swal({
                title:"",
                text:"Please Enter Required Fields!",
                type:"error",
                showConfirmButton: true,
                 width: '1000px',
                
            });
            }
            else
            { 
        
              $.ajax({    
                url:base_path+"Member_payment/insertMember",   
                type:'POST',
                data:{
                  'Member_fullname':$('#Member_fullname').val(),
                  'Mobile':$('#Mobile').val(),
                  'DOB':$('#DOB').val(),
                  'Registration_date':$('#Registration_date').val()
                },
                 success:function(data)
                {
                  // console.log('manu',data);
                
                  swal({
                    title:"",
                    text:"Data Submitted Successfully",
                    type:"success",
                    showCancelButton: false, 
                    showConfirmButton: false,
                     width: '1000px',
                    timer:1000
                });
                  $('#Member_fullname').val('');
                //   $('#Mobile').val('');
                //   $('#DOB').val('');
                //   $('#Registration_date').val('');
                  $('#newmodal').modal('hide');
                  // document.getElementById("StockNm").blur();
                  // document.getElementById('manufactureId').focus();
      
                  // document.getElementById('companyclose').click();
                  // $('#manufactureId').select2('open');
        
        
                 },
                complete:function(){
                  chkFlag=1;
                  Company();
              
                  // document.getElementById("StockNm").blur();
                  // document.getElementById('manufactureId').focus();
      
              
        
                }
        
              }); 
        
              
        
            }
            
          });
      
        
      
          function Company(){
            $.ajax({
              url:base_path+'Member_payment/dropdownshare',
                method: "POST",
                dataType: 'json',
                success:function(data){
            
                  console.log(data);
      
      
                  const lastElement = data.slice(-1)[0];
      
                  const lastcompanyId = lastElement.Mr_Id;
                    console.log("lastcompanyId list data",lastcompanyId);
      
      
                  $('#Fk_MrId').empty();
                   $('select[name="Fk_MrId"]').empty();
                   $('#Fk_MrId').append('<option value="0">  Company List  </option>');
           
                  //  $('#companyid').append('</optgroup><option value="AC" class="btn btn-info" style="margin:auto;">-- Next --</option>');
      
                
      
      
                    $.each(data,function(index,value){
                         
                        $('#Fk_MrId').append('<option value="'+value['Mr_Id']+'">'+value['Member_fullname']+'</option>');
                     
                       
                    });      
                    
                  $('#Fk_MrId').val(lastcompanyId).trigger('change');
                  
             
              }
            });
           
        }
      
      
      
      
      });
  