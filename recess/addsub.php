         <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div>
						<h2><span class="label label-primary">We would like to know some things about your curricullum!!</span></h3>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			
			<div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div>
						<h3><span class="label" style="color:grey">Tell us what subjects do you study?</span></h3>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			
			<div class="form-group">  
                     <form name="add_sub" id="add_sub">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="sub[]" placeholder="Enter the Subject" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
            </div>  

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="sub[]" placeholder="Enter the Subject" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           console.log("ok");
		   $.ajax({  
		   
                url:"subject.php",  
                method:"POST",  
                data:$('#add_sub').serialize(),  
                success:function(data)  
                {  
                     $('#add_sub')[0].reset();  
					 window.location = "/dash.php";
                }  
           });  
      });  
 });  
 
 
 </script>  