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

    <title>Patient Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" onsubmit="return MdtStartDate(this)" enctype="multipart/form-data">
                <h3>
                    <span class="title_text">Initial Assessment Sheet</span>
                </h3>
                
                <fieldset>

                    <div class="form-row" style="padding-left: 41px ;margin-top: 9px;">
                        <div class="form-group" style="padding-left: 41px ;margin-top: 9px;">
                            <label for="formDate" class="form-label">Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input style="margin-left: 13px;" type="date" name="formDate" id="formDate" />
                        </div>
                        <div class="form-group" style="padding-left: 300px;">
                            <label for="staffName" class="form-label">Staff Name</label>                            
                            <input type="text" name="staffName" id="staffName" placeholder="Staff Name" />
                        </div>
                    </div>

                    <div class="fieldset-content">
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" placeholder="Name"/>
                        </div>

                        <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select class="form-control;valid" name="Sex" id="Sex">
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label form="NOML" class="form-label">Clinic Area</label>
                                <table  id="tb8" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Area Code</th>
                                            <th>ID Number</th>
                                        </tr>

                                        <tr>
                                            <td><select name="Clinic" style="width: 259px">
                                                    <option value="" disabled selected>Clinic Area Code</option>
                                                    <optgroup>
                                                        <option value="BH">BH</option>
                                                        <option value="DH">DH</option> 
                                                        <option value="DHUHC">DHUHC</option>
                                                        <option value="ESIS">ESIS</option>
                                                        <option value="HO">HO</option>
                                                        <option value="JJH">JJH</option>
                                                        <option value="R">R</option>
                                                        <option value="SG">SG</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td><input type="number" name="IDclinic" id="IDclinic" placeholder="ID Number" /></td>
                                        </tr>
                                        
                                    </tbody>

                                </table>
                        </div>

                        <div class="form-textarea">
                            <label for="Add1" class="form-label">Address</label>
                            <textarea name="Add1" id="Add1" placeholder="Address" ></textarea>
                        </div>

                        <div class="form-row">
                           <div class="form-group">
                                <label for="Contact1" class="form-label">Contact No.</label>
                                <table style="padding-left: 41px ;" id="tb7" class="form-label">
                                    <tbody>
                                        <tr class="tr-header">
                                            <th><input type="number" name="Contact[]" id="" /></th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore7" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                            <th>&ensp;   </th>
                                            <th><a href='javascript:void(0);' style="font-size:18px;" class='remove7' title="Remove"><span class='fa fa-minus'></span></a></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  
                        <div class="form-row" style="padding-left: 25px;">
                            <div class="form-group" style="padding-left: 25px;">
                                <label for="dateMDT" class="form-label">Date of starting MDT</label>
                                <input style="margin-left: 0px;" type="date" name="dateMDT" id="dateMDT"/>
                            </div>
                            <div class="form-group" style="padding-left: 275px;">
                                <label for="dateRFT" class="form-label">Date of RFT</label>
                                <input style="margin-left: 0px;" type="date" name="dateRFT" id="dateRFT"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="SmearDiagnosis">Smear at Diagnosis</label>
                            <input type="range" name="SmearDiagnosis" id="SmearDiagnosis" min="0" max="6" value="3" onchange="show_value2(this.value)">
                            <style type="text/css">
                                #SmearDiagnosis{
                                    height:0px ;
                                    -webkit-appearance:none; 
                                    border-radius: 5px; 
                                    background-color: black; 
                                    box-shadow: inset 0 3px 18px rgba(0,0,0,0.6);
                                }

                                #SmearDiagnosis::-webkit-slider-thumb{
                                    -webkit-appearance:none;
                                    width: 40px;
                                    height: 40px;
                                    background-color: white;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    outline: none;
                                }

                                #SmearDiagnosis::-webkit-slider-thumb:hover{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                 }

                                #SmearDiagnosis:active::-webkit-slider-thumb{
                                    box-shadow: 0 0 0 3px black,
                                                0 0 0 6px white;
                                }
                            </style>
                            <span id="slider_value2" style="color:black;font-weight:bold;"></span><br>
                            <span id="slider_value2" style="color:black;font-weight:bold;"></span>
                            <script type="text/javascript">
                                function show_value2(x)
                            {
                                document.getElementById("slider_value2").innerHTML=x;
                            }
                            </script>
                        </div>

                        <div class="form-row" style="padding-left: 27px ;margin-top: 9px;">
                            <div class="form-group" style="padding-left: 27px ;margin-top: 9px;">
                                <label for="SmearDate" class="form-label">Smear Date</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                <input style="margin-left: 13px;" type="date" name="SmearDate" id="SmearDate" />
                            </div>
                        </div>

                        <div class="rows">
                            
                            <label>Eligibility Criteria for Screening:</label>

                            <div class="form-radio">
                                <label for="24m" class="form-label">Withing 24 Months of Diagnosis?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="24mdiag" value="24myes" id="24myes" />
                                    <label for="24myes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="24mdiag" value="24mno" id="24mno" />
                                    <label for="24mno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Age" class="form-label">Age?</label>
                                <input type="text" name="Age" id="Age" placeholder="Age" />
                            </div>

                            <div class="form-group">
                                <label for="Weight" class="form-label">Weight?</label>
                                <input type="text" name="Weight" id="Weight" placeholder="Weight in kilograms" />
                            </div>

                            <div class="form-group">
                                <label for="Height" class="form-label">Height?</label>
                                <input type="text" name="Height" id="Height" placeholder="Height in meters square" />
                            </div>

                            <div class="form-group">
                                <label for="BMI" class="form-label">BMI?</label>
                                <input type="text" name="BMI" id="BMI" placeholder="BMI Score" />
                            </div>

                            <div class="form-radio">
                                <label for="contra" class="form-label">No contra-indications to steroids / to clofa</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="contraster" value="contrayes" id="contrayes" />
                                    <label for="contrayes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="contraster" value="contrano" id="contrano" />
                                    <label for="contrano" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="attend" class="form-label">Able to attend regularly?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="attendreg" value="attendyes" id="attendyes" />
                                    <label for="attendyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="attendreg" value="attendno" id="attendno" />
                                    <label for="attendno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="preg" class="form-label">Pregnant?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="pregnant" value="pregyes" id="pregyes" />
                                    <label for="pregyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="pregnant" value="pregno" id="pregno" />
                                    <label for="pregno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="tb" class="form-label">Tuberculosis?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="tbs" value="tbyes" id="tbyes" />
                                    <label for="tbyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="tbs" value="tbno" id="tbno" />
                                    <label for="tbno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="diab" class="form-label">Diabetes?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="db" value="dbyes" id="dbyes" />
                                    <label for="dbyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="db" value="dbno" id="dbno" />
                                    <label for="dbno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="osi" class="form-label">Other Serious Illness?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="osis" value="osiyes" id="osiyes" />
                                    <label for="osiyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="osis" value="osino" id="osino" />
                                    <label for="osino" style="width:80px;">No</label>
                                </div>
                                <div style="padding-left: 30px;"><textarea rows="4" cols="50" name="osill" id="osill" placeholder="Other Serious Illness"></textarea></div>
                            </div>

                            <div class="form-radio">
                                <label for="consent" class="form-label">Does patient give informed consent?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="cons" value="consyes" id="consyes" />
                                    <label for="consyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="cons" value="consno" id="consno" />
                                    <label for="consno" style="width:80px;">No</label>
                                </div>
                            </div>

                        </div>

                            <label>Enrolment for Observations:</label>
                        
                            <div class="form-group">
                                <label for="sn" class="form-label">Allocate Study Number</label>
                                <input type="text" name="sn" id="sn" placeholder="Study Number" />
                            </div>

                            <div class="form-radio">
                                <label for="hist" class="form-label">History of ENL?</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="history" value="histyes" id="histyes" />
                                    <label for="histyes" style="width:80px;">Yes</label>
    
                                    <input type="radio" name="history" value="histno" id="histno" />
                                    <label for="histno" style="width:80px;">No</label>
                                </div>
                            </div>

                            <input type="submit" value="submit"/>

                    <div class="fieldset-footer">
                        <span>Form 1 of 6</span>
                    </div>

                    </div>
                
                </fieldset>

            </form>

        </div>

        <div class="copy w3ls">
               <p>&copy; 2019  Bombay Leprosy Project  </p>
        </div>

    </div>

    <!-- JS -->
  <!--  <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  -->
    
    <script type="text/javascript">
    
        $(function(){
            $('#addMore').on('click', function() {
                      var data = $("#tb tr:eq(0)").clone(true).appendTo("#tb");
                      var data1 = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                      var data2 = $("#tb tr:eq(2)").clone(true).appendTo("#tb");
                      var data3 = $("#tb tr:eq(3)").clone(true).appendTo("#tb");
                      var data4 = $("#tb tr:eq(4)").clone(true).appendTo("#tb");
                      var data5 = $("#tb tr:eq(5)").clone(true).appendTo("#tb");
                      data5.find("input").val('');
                      data4.find("input").val('');
                      data3.find("input").val('');
                      data2.find("input").val('');
                      data1.find("input").val('');
                      data.find("input").val('');
             });
             $(document).on('click', '.remove', function() {
                 var trIndex1 = $(this).closest("tr").index();
                    if(trIndex1>1) {
                     $(this).closest("tr").remove();
                     document.getElementById("tb").deleteRow(trIndex1);
                     document.getElementById("tb").deleteRow(trIndex1);
                     document.getElementById("tb").deleteRow(trIndex1-1);
                     document.getElementById("tb").deleteRow(trIndex1-2);
                     document.getElementById("tb").deleteRow(trIndex1-3);
                     
                   } else {
                     alert("Sorry!! Can't remove first row!");
                   }
              });
        });  

    </script>

    <script type="text/javascript">
    
        $(function(){
            $('#addMore1').on('click', function() {
                      var data = $("#tb1 tr:eq(0)").clone(true).appendTo("#tb1");
                      var data1 = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
                      var data2 = $("#tb1 tr:eq(2)").clone(true).appendTo("#tb1");
                      var data3 = $("#tb1 tr:eq(3)").clone(true).appendTo("#tb1");
                      var data4 = $("#tb1 tr:eq(4)").clone(true).appendTo("#tb1");
                      var data5 = $("#tb1 tr:eq(5)").clone(true).appendTo("#tb1");
                      data5.find("input").val('');
                      data4.find("input").val('');
                      data3.find("input").val('');
                      data2.find("input").val('');
                      data1.find("input").val('');
                      data.find("input").val('');
             });
             $(document).on('click', '.remove1', function() {
                 var trIndex1 = $(this).closest("tr").index();
                    if(trIndex1>1) {
                     $(this).closest("tr").remove();
                     document.getElementById("tb1").deleteRow(trIndex1);
                     document.getElementById("tb1").deleteRow(trIndex1);
                     document.getElementById("tb1").deleteRow(trIndex1-1);
                     document.getElementById("tb1").deleteRow(trIndex1-2);
                     document.getElementById("tb1").deleteRow(trIndex1-3);
                     
                   } else {
                     alert("Sorry!! Can't remove first row!");
                   }
              });
        });      

    </script>

    <script type="text/javascript">

        $("#Sex").change(function() {
          if ($(this).val() == "female") {
            $('#ObstetricHDiv').show();
           
          } else {
            $('#ObstetricHDiv').hide();
            
          }
        });
        $("#Sex").trigger("change");
            
        $(function(){
            $('#addMore6').on('click', function() {
                      var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
                      var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
                      var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
                      var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
                      var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
                      var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
                      var data6 = $("#tb6 tr:eq(6)").clone(true).appendTo("#tb6");
                      var data7 = $("#tb6 tr:eq(7)").clone(true).appendTo("#tb6");
                      data7.find("input").val('');
                      data6.find("input").val('');
                      data5.find("input").val('');
                      data4.find("input").val('');
                      data3.find("input").val('');
                      data2.find("input").val('');
                      data1.find("input").val('');
                      data.find("input").val('');
             });
             $(document).on('click', '.remove6', function() {
                 var trIndex1 = $(this).closest("tr").index();
                    if(trIndex1>1) {
                     $(this).closest("tr").remove();
                     document.getElementById("tb6").deleteRow(trIndex1);
                     document.getElementById("tb6").deleteRow(trIndex1);
                     document.getElementById("tb6").deleteRow(trIndex1-1);
                     document.getElementById("tb6").deleteRow(trIndex1-2);
                     document.getElementById("tb6").deleteRow(trIndex1-3);
                     document.getElementById("tb6").deleteRow(trIndex1-4);
                     document.getElementById("tb6").deleteRow(trIndex1-5);
                   } else {
                     alert("Sorry!! Can't remove first row!");
                  } 
              });
        });      

    </script>
    
    <script type="text/javascript">
        
        $(function(){
            $('#addMore5').on('click', function() {
                      var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
                      var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
                      var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
                      var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
                      data3.find("input").val('');
                      data2.find("input").val('');
                      data1.find("input").val('');
                      data.find("input").val('');
             });
             $(document).on('click', '.remove5', function() {
                 var trIndex1 = $(this).closest("tr").index();
                    if(trIndex1>1) {
                     $(this).closest("tr").remove();
                     document.getElementById("tb5").deleteRow(trIndex1);
                     document.getElementById("tb5").deleteRow(trIndex1);
                     document.getElementById("tb5").deleteRow(trIndex1-1);
                   } else {
                     alert("Sorry!! Can't remove first row!");
                   }
              });
        });      

    </script>

    <script type="text/javascript">
        
        $(function(){
            $('#addMore7').on('click', function() {
                      var data = $("#tb7 tr:eq(0)").clone(true).appendTo("#tb7");
                      data.find("input").val('');
             });
             $(document).on('click', '.remove7', function() {
                 var trIndex1 = $(this).closest("tr").index();
                    if(trIndex1>0) {
                     $(this).closest("tr").remove();
                     document.getElementById("tb7").deleteRow(trIndex1);
                   } else {
                     alert("Sorry!! Can't remove first row!");
                   }
              });
        });      

    </script>

    <script type="text/javascript">
   function MdtStartDate(thisform)
   {   
        var dateMDT = thisform.dateMDT.value;
        var dateRFT = thisform.dateRFT.value;
        var Age     = thisform.Age.value;
        var Weight  = thisform.Weight.value;
        var Height  = thisform.Height.value;
        var md = new Date();
        var tdate = new Date();
        var rftd =  new Date();
        md  = new Date(dateMDT).getFullYear();
        td  = new Date(tdate).getFullYear();
        rftm = new Date(dateRFT).getMonth();
        rfty = new Date(dateRFT).getFullYear();

        if(td-md == 0 || td-md < 0)
        {
            alert("date should be 24 months less than today");
            thisform.dateMDT.focus();
            return false;
        }
        if(rfty-md <= 0 || rftm > 7)
        {
            alert("date should be 12-18 months after starting date of MDT");
            thisform.dateRFT.focus();
            return false;
        }
        if(Age < 18)
        {
            alert("Age shouls be greater than 18 years");
            thisform.Age.focus();
            return false;
        }
        if(isNaN(Age))
        {
            alert("enter a valid age");
            thisform.Age.focus();
            return false;
        }
        if(Weight < 40)
        {
            alert("Weight should be greater than 40 kilograms");
            thisform.Weight.focus();
            return false;
        }
        if(isNaN(Weight))
        {
            alert("Enter a valid Weight");
            thisform.Weight.focus();
            return false;  
        }
        if(isNaN(Height))
        {
            alert("Enter a valid height");
            thisform.Weight.focus();
            return false;
        }

        return true;
    }

    </script>
    
</body>

</html>