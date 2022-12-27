<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center><img src="images/download.png" style="height:100px;width:20%;"></center>
    <div class="main">
	
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <center><h1><i>Old Gayatri Infotech</i></h1></center>
                    <img src="images/1397081_175169432675506_288771414_o.jpg" alt="" style="margin-top:0%;height:300px;margin-left:15%;">
                    <center><h1><i>New Gayatri Infotech</i></h1></center>
                    <img src="images/WhatsApp Image 2022-09-16 at 12.24.08.jpeg" alt="" style="width:455px;height:300px;margin-left:15%;">
                </div>
                <div class="signup-form">
                    <form  class="register-form" id="register-form" action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Email :</label>
                                <input type="text" name="email" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="address">Mobile :</label>
                            <input type="text" name="mobile" id="address" required maxlength="10" pattern="[0-9]{10}" title="Enter Valid Number"/>
                        </div>
                        <div class="form-group">
                            <label for="address">Completed Degree :</label>
                            <input type="text" name="degree" id="address" required/>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="address">Working In (Company) :</label>
                                <input type="text" name="working_company" id="address" required/>
                            </div>
                            <div class="form-group">
                                <label for="address">Working As (Designation) :</label>
                                <input type="text" name="working_designation" id="address" required/>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="address">Happy To Here Package :</label>
                                    <input type="text" name="here_package" id="address" required/>
                                </div>
                                <div class="form-group">
                                    <label for="address">Batch Year:</label>
                                    <input type="year" name="batch_year" id="address" required/>
                                </div>
                                </div>
                        <div class="form-group">
                            <label for="birth_date">Profile :</label>
                            <input type="file" name="profile" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Teacher You Most Like In Gayatri :</label>
                            <textarea name="teacher_like" class="form-group" id="pincode" rows="10" cols="88"></textarea>
                        </div>
                        
                        <label for="address">Batch Meets: <button type="button" id="addallot" style="height:35px;width:30px;margin-top:0px;margin-left:30px;"><i class="fa fa-plus" aria-hidden="true"></i></button></label>
                            <div class="form-group">
                                <table border=1 id="rowallot" style="width:100%;border-collapse:collapse;">
                                    <tr><th>Name</th><th>Contact</th><th>Delete</th></tr>
                                </table>
                                <br><br>
                                <input type="hidden" id="rowcount" name="rowcount" value="<?php echo 0;?>">
                                <div class="form-group" style="height:150px;border:1px solid black;border:none;">
                                <label for="address"></label><br>
                            
                            <div class="form-submit">
                            <input type="reset" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var rowval=parseInt($("#rowcount").val());
		  
		  var i=rowval + 1;
		   
		   $("#addallot").on("click",function(){
            var markup="<tr><td class='jilla"+i+"'><input type='text' name='namemeets"+i+"' value='' required></td><td class='gram"+i+"'><input type='text' name='contactmeets"+i+"' value='' maxlength='10' pattern='[0-9]{10}' required></td> <td><button type='button' class='btn btn-danger btnDelete'>x</button></td></tr>";
    		$("#rowallot").append(markup);
            i++;
            var rowCount = $("#rowallot tr").length;
            var rowCount=rowCount-1;
            $("#rowcount").val(rowCount);
            
		        
		   });
		   $("#rowallot").on('click','.btnDelete',function(){
         $(this).closest('tr').remove();
         var rt=$("#rowcount").val();
         var mins=rt-1;
         $("#rowcount").val(mins);
         
        
      });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>