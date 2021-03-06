

<!-- PHP CHECKING INPUTS -->

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- seymanın ekledikleri tag input -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
  <!-- seymanın ekledikleri son-->

  <!-- seymanın ekledikleri multi-select-input -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <!-- seymanın ekledikleri son-->

  <!-- Mervenin ekledikleri-->
  <!-- Import google fonts - Heading first/ text second -->
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="dist/css/icons.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <link rel="stylesheet" href="dist/css/plugins.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Calendar:)) -->
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.min.css">
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.css">
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.print.min.css" media="print">
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <style>
    .error {color: #FF0000;}

  </style>


</head>
<body class="hold-transition skin-blue sidebar-mini">

 <div class="wrapper" >
   <?php include 'header.php'; ?>
   <!-- Left side column. contains the logo and sidebar -->
   <?php include 'personelPageSidebar.php'; ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>Bireysel Eğitim Planı</h1>
      
    </section>
    <!-- Formu yazacağımız ikinci alan -->
    <section class="content" >
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">

             <!-- FORM -->
             <form id="BEPForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

              <!--Content wrapper-->
              <div class="contentwrapper" > 

               <!--ContentPlaceHolder1_pnlgenel-->
               <div id="ContentPlaceHolder1_pnlgenel">

                <!-- Start .panel-1 -->
                <div class="col-lg-16 " >
                 <div class="panel panel-default  toggle panelMove panelRefresh" id="supr0">


                   <div class="panel-heading">
                     <h4 class="panel-title">Bireysel Eğitim Planı Oluştur</h4>
                     <div class="panel-body pt0 pb0">
                      <div class="form-horizontal group-border stripped">

                       <!-- form-group 1 -->
                       <div class="form-group">
                         <div class="row">

                           <label class="col-md-2 control-label"><i class="renk">*&nbsp;</i>Adı:</label>
                           <div class="col-md-3">
                            <input name="studentName" type="text" maxlength="64" id="ContentPlaceHolder1_txtAdi" class="form-control" placeholder="Öğrenci Adı">
                            <span class="error">* <?php echo $_SESSION["nameErr"];?></span>
                            <span id="ContentPlaceHolder1_lblAdi" style="color:Red;font-weight:bold;"></span>
                          </div>

                          <label class="col-md-2 control-label"><i class="renk">*&nbsp;</i>Soyadı:</label>
                          <div class="col-md-3">
                            <input name="studentSurname" type="text" maxlength="64" id="ContentPlaceHolder1_txtSoyadi" class="form-control" placeholder="Öğrenci Soyadı">
                            <span class="error">* <?php echo $_SESSION["surNameErr"];?></span>
                            <span id="ContentPlaceHolder1_lblSoyadi" style="color:Red;font-weight:bold;"></span>
                          </div>

                        </div>
                      </div>
                      <!-- form-group 1 END-->

                      <!-- form-group 2 -->
                      <div class="form-group">
                        <div class="row">

                         <label class="col-md-2 control-label">T.C. No:</label>
                         <div class="col-md-3">
                          <input name="TCNumber" type="text" maxlength="11" id="ContentPlaceHolder1_txtTC" class="form-control" placeholder="T.C. Kimlik No">
                          <span class="error">* <?php echo $_SESSION["TCNumberErr"];?></span>
                          <span id="ContentPlaceHolder1_lblTC" style="color:Red;font-weight:bold;"></span>
                        </div> 

                        <label class="col-md-2 control-label">Sınıfı:</label>
                        <div class="col-md-3">
                         <input name="studentClass" type="text" maxlength="8" id="ContentPlaceHolder1_txtSinif" class="form-control" placeholder="Sınıfı">
                       </div>

                     </div>
                   </div>
                   <!-- form-group 2 END-->

                   <!-- form-group 3 -->
                   <div class="form-group">
                    <div class="row">

                      <label class="col-md-2 control-label" for="">Eğitim Başlama Tarihi:</label>
                      <div class="col-md-3">
                       <div class=" input-group">
                         <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                         <input name="donemBitisTarihi" class="form-control"  type="date" data-date-inline-picker="false" data-date-open-on-focus="false"/>
                       </div>
                     </div>

                     <label class="col-md-2 control-label" for="">Eğitim Bitiş Tarihi:</label>
                     <div class="col-md-3">
                       <div class=" input-group">
                         <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                         <input name="donemBitisTarihi" class="form-control"  type="date" data-date-inline-picker="false" data-date-open-on-focus="false"/>
                       </div>
                     </div>

                   </div>
                 </div>
                 <!-- form-group 3 END-->      

                 <!--form-group 4 -->
                 <div class="form-group">
                  <div class="row">

                    <label class="col-md-2 control-label" for="">Bep Komisyonu:</label>
                    <div class=" input-group">
                     <span id="ContentPlaceHolder1_lbldegerlendiren" style="color:Red;font-weight:bold;width: "></span>
                     <input type="text" name="bepKomisyonu" id="teachName" class="form-control"  placeholder="Seçiniz..."  />
                   </div>

                 </div>
               </div>
               <!-- form-group 4 END-->

               <!--form-group 5 -->
               <div class="form-group">
                 <div class="row">

                   <label class="col-md-2 control-label" for="">Değerlendirme Tarihi:</label>
                   <div class="col-md-3">
                     <div class=" input-group" >
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                       <input name="donemBitisTarihi" class="form-control"  type="date" data-date-inline-picker="false" data-date-open-on-focus="false"/>
                     </div>
                   </div>

                 </div>
               </div>
               <!-- form-group 5 END-->

               <!--form-group 6 -->
               <div class="form-group">
                 <div class="row">

                   <label class="col-md-2 control-label" for="">Dersler</label>
                   <div class="col-md-3">
                     <div class=" input-group">
                       <select id="framework" name="framework[]" multiple class="form-control" >
                        <option value="Codeigniter">Mat</option>
                        <option value="CakePHP">Fen</option>
                        <option value="Laravel">Edebiyat</option>
                        <option value="YII">Müzik</option>
                        <option value="Zend">Beden</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>
              <!-- form-group 6 END-->

            </div>
          </div>
        </div>
        

        <i class="renk">*</i> ile işaretli alanların doldurulması zorunludur!
      </div>
    </div>
    <!-- .panel-1 END-->

    <!-- Start .panel-2 -->
    <div class="col-lg-16 " >
     <div class="panel panel-default  toggle panelMove panelRefresh" id="supr2">
      <div class="panel-body">
        <div class="col-lg-16">
          <div class="tabs mb20">

            <ul id="myTab" class="nav nav-tabs">
              <li class="active">
                <a href="#home1" data-toggle="tab" aria-expanded="true"><b>BİREYSEL EĞİTİM DEĞERLENDİRMELERİ</b></a>
              </li>
              <li class="">
                <a href="#profile1" data-toggle="tab" aria-expanded="false"><b>EĞİTSEL PERFORMANSLAR</b></a>
              </li>
            </ul>

            <div id="myTabContent2" class="tab-content">
              <div class="tab-pane fade active in" id="home1">
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .panel-2 END-->

  <input type="submit" name="submit" id="sub" value="BEP Oluştur" class="btn btn-success mr5 mb10">  
</div>
<!--ContentPlaceHolder1_pnlgenel END-->

<div class="control-sidebar-bg"></div>
</div>
<!--Content wrapper END-->

</form>
<!-- FORM END-->
</div>
</div>
</div>
</div>
</section><!-- Formu yazacağımız ikinci alan son -->

</div><!-- class: content-wrapper son -->
</div> <!-- class: wrapper son -->



<?php 
session_unset(); ?>
</body>
</html>

<!-- seymanın ekledikleri tag-input-->
<script>
  $(document).ready(function(){

   $('#teachName').tokenfield({
    autocomplete:{
     source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
     delay:100
       },

   showAutocompleteOnFocus: true
 });

    $('#teachName').on('tokenfield:createtoken', function (e) {
      setTimeout(function() {
          $('#teachName-tokenfield').blur();
        $('#teachName-tokenfield').focus()
      }, 0)
    });

   $('#BEPform').on('submit', function(event){
    event.preventDefault();

    if($.trim($('#teachName').val()).length == 0)
    {
     alert("Please Enter Atleast one teachName");
     return false;
   }
   else
   {
     var form_data = $(this).serialize();
     $('#sub').attr("disabled","disabled");
     $.ajax({
      url:"insert.php",
      method:"POST",
      data:form_data,
      beforeSend:function(){
       $('#sub').val('BEP Oluşturuluyor...');
     },
     success:function(data){
       if(data != '')
       {
        $('#name').val('');
        $('#teachName').tokenfield('setTokens',[]);
        $('#success_message').html(data);
        $('#sub').attr("disabled", false);
        $('#sub').val('BEP Oluştur');
      }
    }
  });
     setInterval(function(){
      $('#success_message').html('');
    }, 5000);
   }
 });

 });
</script>
<!-- seymanın ekledikleri son-->

<!-- seymanın ekledikleri multi-select-input-->
<script>
  $(document).ready(function(){
   $('#framework').multiselect({
    nonSelectedText: 'Ders Seçiniz',
    enableFiltering: true,
    enableCaseInsensitiveFiltering: true,
    buttonWidth:'400px'
  });

   $('#BEPForm').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:form_data,
     success:function(data)
     {
      $('#framework option:selected').each(function(){
       $(this).prop('selected', false);
     });
      $('#framework').multiselect('refresh');
      alert(data);
    }
  });
  });


 });
</script>
<!-- seymanın ekledikleri son-->