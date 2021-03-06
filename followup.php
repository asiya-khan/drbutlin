<?php
include('navbar.php');
if(!isset($_SESSION['id'])){
    echo"<script>
    alert('Please Login in');
    document.location.href = 'login.php';
    </script>
    ";
}
if(!isset($_GET['pid'])){
    echo"<script>
    alert('Please Select Patient');
    document.location.href = 'searchindex.php';
    </script>
    ";
}

$Pid = $_GET['pid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Followup Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        
    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/followup.php?pid=<?php echo $Pid;?>" enctype="multipart/form-data">
                
               
                <h2>
                    <span class="title_text">Follow-up Form</span>
                </h2>
                <h3>
                  <span class="patient_name"><?php echo "Patient Id: " . $Pid; ?></span>
                </h3>                <fieldset>
                  <div class="form-row" style="padding-left: 34px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 34px ;margin-top: 9px;">
                                <label for="DOB" class="form-label">Date</label>
                                <input style="margin-left: 13px;" type="date" name="formDate" id="formDate"/>
                            </div>
                </div>
                      <div class="form-group">
                                <label  class="form-label">Skin Smears</label>
                                 <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                    <tbody>
                                          <tr class="tr-header">
                                            <th>Site</th>
                                            <th>Mi</th>
                                            <th>Bi</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>   
                                          </tr> 
                                          <tr style="padding: 2px;" >
                                            <td><input type="text" name="Site[]" class="valid"></td>
                                            <td><input type="text" name="Mi[]" class="valid"></td>
                                            <td><input type="text" name="Bi[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>                                            
                                          </tr>                                                   
                                    </tbody>
                                    <tr>                                                                            
                                         <td><a href='javascript:void(0);' style="font-size:18px;" id='avg'>Average</a></td>
                                         <input type="hidden" name="Site[]" value="Average">
                                         <td><p id="average">Averages Mi:</p></td>
                                         <input type="hidden" id="avg_mi" name="Mi[]" value="0">
                                         <td><p id="average1">Average Bi:</p></td>
                                         <input type="hidden" id="avg_bi" name="Bi[]" value="0">
                                    </tr>
                                 </table>                                                     
                            </div>

                       

                       <div class="form-textarea">
                            <label  class="form-label">Notes and Prescription</label>
                                <textarea name="Cnotes" class="valid"></textarea>
                             
                        </div>

                       <div class="form-group">
                          <label for="dp" class="form-label" style=" padding-bottom: 6em;">Drug Prescription</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Drug Used</th>
                                            <th>Drug Dosage</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_used[]" class="valid"></td>
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        

                                    </tbody>

                            </table>
                        
                        </div>
                        <div class="form-group">
                                <label for="Examiner" class="form-label">Examiner</label>
                                <input type="text" name="Examiner" id="Examiner" />
                            </div>
                        <div class="form-group">

                                <label  class="form-label">Appointment </label>
                            <table style="padding-left: 34px ;margin-top: 9px;" id="tb4" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Next Appointment For:</th>
                                            <th>Next Appointment Date:</th>
                                            <th>Next Appointment Time:</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore4" title="Add More Appointment"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="appointment_for[]" placeholder="Appointment for..."></td>
                                            <td><input style="margin-left: 16px;" type="date" name="date_of_next_appointment[]"></td>
                                            <td><input type="text" name="appointment_time[]" placeholder="Appointment time"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove4' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>

                                    </tbody>
                            </table>
                        </div>
                    
                </fieldset>
                <div class="fieldset-footer" style="padding: 40px 0px;">
                        <span></span>
                    </div>
                    <input type="submit" name="submit">
            </form>
        <div>
            

        </div>
        <div class="copy w3ls">
               <p>&copy; 2018  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
        
              var data = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
}); 
</script>



<script type="text/javascript">
  $(function(){
    $('#avg').on('click', function() {
      var tbl = document.getElementById('tb6');
      var count = 0;
      var total = 0;
      for(var i = 1; i < tbl.rows.length - 1; i++){
        var num = Number(tbl.rows[i].cells[1].children[0].value);
        total += num;
        count++;
    }
      var count1 = 0;
      var total1 = 0;
      for(var i = 1; i < tbl.rows.length - 1; i++){
        var num1 = Number(tbl.rows[i].cells[2].children[0].value);
        total1 += num1;
        count1++;
    }
    var avgMi = (total / count).toFixed(2);
    var avgBi = (total1 / count1).toFixed(2);
    // console.log(avgMi);
    // console.log(avgBi);
    document.getElementById("average").innerHTML = "Average MI &ensp;" + avgMi;
    document.getElementById("average1").innerHTML = "Average BI &ensp;" + avgBi;
    document.getElementById("avg_mi").value = avgMi;
    document.getElementById("avg_bi").value = avgBi;
  });
});
</script>

<script type="text/javascript">
    
$(function(){
    $('#addMore4').on('click', function() {
              var data = $("#tb4 tr:eq(1)").clone(true).appendTo("#tb4");
              data.find("input").val('');
     });
     $(document).on('click', '.remove4', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
</body>

</html>