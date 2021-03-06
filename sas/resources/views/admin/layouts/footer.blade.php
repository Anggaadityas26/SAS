n    <!-- jQuery -->
    <script src="{{ url('public/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Jquery Form --> 
    <script src="{{ url('public/js/jquery.form.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('public/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('public/assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('public/assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ url('public/assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ url('public/assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('public/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('public/assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ url('public/assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ url('public/assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ url('public/assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('public/assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('public/assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('public/assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ url('public/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ url('public/assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ url('public/assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('public/assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ url('public/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('public/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('public/assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- validator -->
    <script src="{{ url('public/assets/vendors/validator/validator.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ url('public/assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <!--
    <script src="{{ url('public/js/jquery.dataTables.rowReordering.js') }}"></script>
    <script src="{{ url('public/js/jquery.mockjax.min.js') }}"></script>
    <script src="{{ url('public/js/jquery-ui.min.js') }}"></script> 
    -->
    <script src="{{ url('public/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ url('public/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ url('public/assets/build/js/custom.js') }}"></script>
    <script src="{{ url('public/assets/vendors/ckeditor/style.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/assets/vendors/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script type="text/javascript">


       function CKupdate(){
          for ( instance in CKEDITOR.instances ){
              CKEDITOR.instances[instance].updateElement();
              CKEDITOR.instances[instance].setData('');
          }
      }


     // Datatables Slider

           $(function() {
            var table = $(".dataslider").DataTable({
                processing: true,
                serverSide: true,   
                sScrollY : "500",
                sScrollX : "100%",
                lengthMenu: [
                    [5,10, -1],
                    [5,10, "All"]
                ],
                ajax: "{{ url('DataSlider') }}",
                columns: [
                  { data: 'nama_slider' },
                  { data: 'images' },
                  { data: 'sort_slider' },
                  { data: 'active_slider' },
                  { data: 'create_slider' },
                  { data: 'modif_slider' },
                  { data: 'nama_user' },
                  { data: 'action',
                          'searchable': false, 
                          'orderable':false }
               ]

            });

        // table.rowReordering(); 
            

        });
      
    // Show Images Slider

       function ShowImagesSlider(input) {

          if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function (e) {
                $('#imgSlider').show().attr('src', e.target.result);
                $('#UploadFileSlider').fadeOut('fast');
              }   

              reader.readAsDataURL(input.files[0]);

          }
      }

      function clearImageSlider(){

        $("#UploadFileSlider").show();
        $("#clearSlider").hide();   
        $("#imgSlider").hide(); 
        localStorage.clear(); 

      }


      $(document).ready(function(){
        $("#ChooseImageSlider").on('change', function(){

        ShowImagesSlider(this);
        $("#img").show();
        $("#clearSlider").show();

        });
      });


    // Edit Slider

    function EditShowImagesSlider(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#EditShowimgSlider').attr('src', e.target.result);
                $('#EditUploadfileSlider').fadeOut('fast');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#EditChooseImageSlider").change(function(){
        EditShowImagesSlider(this);
        $("#EditShowimgSlider").show();
        $("#EditClearSlider").show();
        $("#images_slider").hide();
        $("#EditUploadfileSlider").hide();
    });

    function EditClearImageSlider(){

        $("#EditUploadfileSlider").show();
        $("#EditClearSlider").hide();   
        $("#EditShowimgSlider").hide(); 
        localStorage.clear(); 

      }

    // Insert Upload Slider

        $("body").on("click",".upload-imageslider",function(e){

            $(this).parents("form").ajaxForm(optionsslider);

        });


      var optionsslider = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='nama_slider']").val('');
            $("input[name='sort_slider']").val('');
            $("select[name='active_slider']").val('');  
            $("#uploadfile").show();
            $("#clearSlider").hide();   
            $("#img").hide(); 
            localStorage.clear();     
            $('.dataslider').DataTable().ajax.reload();

            alert('Data Slider Berhasl Ditambahkan');

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }
   
    // Edit Data Slider (Modal and function edit data)
      
           $(document).on('click', '.edit-modalslider', function() {

            $('#footer_action_button').text("Update");
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('editslider');
            $('.modal-title').text('Edit ' + $(this).data('name'));

            $('#id_slider').val($(this).data('id'));
            $('#nama_slider').val($(this).data('name'));
            $('#images_slider').attr('src',$(this).attr('data-img-url'));
            $('#sort_slider').val($(this).data('sort'));
            $('#active_slider options:selected').val($(this).data('active')).attr("selected");

            $('#ModalEditSlider').modal('show');
          });
            
          $('.modal-footer').on('click', '.editslider', function(){

           

        var formdata = new FormData();      
        var image = $('#EditChooseImageSlider')[0].files[0];
          
          formdata.append('EditChooseImageSlider', image);
          $.each($('#myFormSlider').serializeArray(), function(a, b){
            formdata.append(b.name, b.value);
          });
          console.log(formdata);

          $.ajax({
                url:'{{ URL("EditSlider") }}',
                data:formdata,
                  async: false,
                  cache: false,
                  contentType: false,
                  processData: false,
                type:'POST',
              success: function(data) {
                $("input[name='nama_slider']").val('');
                $("input[name='sort_slider']").val('');
                $("select[name='active_slider']").val('');
                $("#images_slider").show();  
                $("#EditUploadfileSlider").show();
                $("#EditClearSlider").hide();   
                $("#EditShowimgSlider").hide(); 
                localStorage.clear();
                $('.dataslider').DataTable().ajax.reload();
              }
          });

        });

    $(document).on('click', '.hapus_slider', function() {

            var id = $(this).attr('data-id');

               $.ajax({
                    url:'{{ URL("DestroySlider") }}' + '/' + id,
                    type:'GET',
                    dataType:'text',
                success:function(data){

                    $('.dataslider').DataTable().ajax.reload();
                    alert('Data Slider Berhasil Dihapus')
                }
               }); 

          });

        // Datatables Galery

           $(function() {
            var table = $(".datagaleri").DataTable({
                processing: true,
                serverSide: true,   
                sScrollY : "500",
                sScrollX : "100%",
                lengthMenu: [
                    [5,10, -1],
                    [5,10, "All"]
                ],
                ajax: "{{ url('DataGalery') }}",
                columns: [
                  { data: 'nama_galery' },
                  { data: 'images' },
                  { data: 'sort_galery' },
                  { data: 'active_galery' },               
                  { data: 'id_kategori' },
                  { data: 'create_galery' },
                  { data: 'modif_galery' },
                  { data: 'nama_user' },
                  { data: 'action',
                          'searchable': false, 
                          'orderable':false }
               ]

            });

        // table.rowReordering(); 
            

        });


    // Show Images Galery

       function ShowImagesGalery(input) {

          if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function (e) {
                $('#imgGalery').show().attr('src', e.target.result);
                $('#uploadfileGalery').fadeOut('fast');
              }   

              reader.readAsDataURL(input.files[0]);

          }
      }

      function clearImageGalery(){

        $("#uploadfileGalery").show();
        $("#ClearImagesGalery").hide();   
        $("#imgGalery").hide(); 
        localStorage.clear(); 

      }


      $(document).ready(function(){
        $("#ChooseImageGalery").on('change', function(){

        ShowImagesGalery(this);
        $("#imgGalery").show();
        $("#ClearImagesGalery").show();

        });
      });

    // Edit Galery

    function EditShowImagesGalery(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#EditShowimgGalery').attr('src', e.target.result);
                $('#EditUploadfileGalery').fadeOut('fast');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#EditChooseImageGalery").change(function(){
        EditShowImagesGalery(this);
        $("#EditShowimgGalery").show();
        $("#EditClearGalery").show();
        $("#images_galery").hide();
        $("#EditUploadfileGalery").hide();
    });

    function EditclearImageGalery(){

        $("#EditUploadfileGalery").show();
        $("#EditClearGalery").hide();   
        $("#EditShowimgGalery").hide(); 
        localStorage.clear(); 

      }

      // Insert Upload Galery

        $("body").on("click",".upload-imagegalery",function(e){

            $(this).parents("form").ajaxForm(optionsgalery);

        });


      var optionsgalery = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='nama_galery']").val('');
            $("input[name='sort_galery']").val('');
            $("select[name='id_kategori']").val(''); 
            $("select[name='active_slider']").val('');  
            $("#uploadfileGalery").show();
            $("#ClearImagesGalery").hide();   
            $("#imgGalery").hide(); 
            localStorage.clear();     
            $('.datagaleri').DataTable().ajax.reload();

            alert('Data Galery Berhasl Ditambahkan');

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }

     // Edit Data Galery (Modal and function edit data)
      
           $(document).on('click', '.edit-modalgalery', function() {

            $('#footer_action_button').text("Update");
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('editgalery');
            $('.modal-title').text('Edit ' + $(this).data('name'));

            $('#id_galery').val($(this).data('id'));
            $('#nama_galery').val($(this).data('name'));
            $('#images_galery').attr('src',$(this).attr('data-img-url'));
            $('#sort_galery').val($(this).data('sort'));
            $('#active_galery options:selected').val($(this).data('active')).attr("selected");

            $('#ModalEditGalery').modal('show');
          });
            
          $('.modal-footer').on('click', '.editgalery', function(){

           

        var formdatagalery = new FormData();      
        var imagegalery = $('#EditChooseImageGalery')[0].files[0];
          
          formdatagalery.append('EditChooseImageGalery', imagegalery);
          $.each($('#myFormGalery').serializeArray(), function(a, b){
            formdatagalery.append(b.name, b.value);
          });
          console.log(formdatagalery);

          $.ajax({
                url:'{{ URL("EditGalery") }}',
                data:formdatagalery,
                  async: false,
                  cache: false,
                  contentType: false,
                  processData: false,
                type:'POST',
              success: function(data) {
                $("input[name='nama_galery']").val('');
                $("input[name='sort_galery']").val('');
                $("select[name='id_kategori']").val('');
                $("select[name='active_galery']").val('');
                $("#images_galery").show();  
                $("#EditUploadfileGalery").show();
                $("#EditClearGalery").hide();   
                $("#EditShowimgGalery").hide(); 
                localStorage.clear();
                $('.datagaleri').DataTable().ajax.reload();
              }
          });

        });

        $(document).on('click', '.hapus_galery', function() {

            var id = $(this).attr('data-id');

               $.ajax({
                    url:'{{ URL("DestroyGalery") }}' + '/' + id,
                    type:'GET',
                    dataType:'text',
                success:function(data){

                    $('.datagaleri').DataTable().ajax.reload();
                    alert('Data Slider Berhasil Dihapus')
                }
               }); 

          });


             // Datatables Slider

           $(function() {
            var table = $(".dataartikel").DataTable({
                processing: true,
                serverSide: true,   
                sScrollY : "500",
                sScrollX : "100%",
                lengthMenu: [
                    [5,10, -1],
                    [5,10, "All"]
                ],
                ajax: "{{ url('DataArtikel') }}",
                columns: [
                  { data: 'nama_artikel' },         
                  { data: 'isi_artikel' },
                  { data: 'images' },
                  { data: 'active_artikel' },
                  { data: 'id_kategori' },
                  { data: 'create_artikel' },
                  { data: 'modif_artikel' },
                  { data: 'nama_user' },
                  { data: 'action',
                          'searchable': false, 
                          'orderable':false }
               ]

            });

        // table.rowReordering(); 
            

        });

    // Show Images Artikel

       function ShowImagesArtikel(input) {

          if (input.files && input.files[0]) {

              var reader = new FileReader();

              reader.onload = function (e) {
                $('#imgArtikel').show().attr('src', e.target.result);
                $('#uploadfileArtikel').fadeOut('fast');
              }   

              reader.readAsDataURL(input.files[0]);

          }
      }

      function clearImageArtikel(){

        $("#uploadfileArtikel").show();
        $("#ClearImagesArtikel").hide();   
        $("#imgArtikel").hide(); 
        localStorage.clear(); 

      }


      $(document).ready(function(){
        $("#ChooseImageArtikel").on('change', function(){

        ShowImagesArtikel(this);
        $("#imgArtikel").show();
        $("#ClearImagesArtikel").show();

        });
      });

      // Insert Upload Artikel

        $("body").on("click",".upload-imageartikel",function(e){

            $(this).parents("form").ajaxForm(optionsartikel);

        });


      var optionsartikel = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='nama_artikel']").val('');
            $("select[name='id_kategori']").val(''); 
            $("select[name='active_artikel']").val('');  
            $("#uploadfileArtikel").show();
            $("#ClearImagesArtikel").hide();   
            $("#imgArtikel").hide(); 
            localStorage.clear();     
            $('.dataartikel').DataTable().ajax.reload();  

            alert('Data Artikel Berhasl Ditambahkan');

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }


      $(document).on('click','.showeditartikel', function(){

        $('.editartikel').toggle('slide');
        $('.editartikel').show();
        $('.backartikel').show();
        $('.insertartikel').hide();
        $('.showeditartikel').hide();

         $('#id_artikel').val($(this).data('id'));
         $('#nama_artikel').val($(this).data('name'));
         $('#images_artikel').attr('src',$(this).attr('data-img-url'));

      });

        $(document).on('click','.backartikel', function(){

        $('.insertartikel').slideDown('slow');
        $('.editartikel').hide();
        $('.backartikel').hide();
        $('.insertartikel').show();
        $('.showeditartikel').show();

      });

      // Edit Upload Artikel

        $("body").on("click",".upload-imageeditartikel",function(e){

            $(this).parents("form").ajaxForm(optionseditartikel);

        });


      var optionseditartikel = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='nama_artikel']").val('');
            $("select[name='id_kategori']").val(''); 
            $("select[name='active_artikel']").val('');  
            $("#uploadfileArtikel").show();
            $("#ClearImagesArtikel").hide();   
            $("#imgArtikel").hide();
            $('#images_artikel').hide(); 
            localStorage.clear();     
            $('.dataartikel').DataTable().ajax.reload();  

            alert('Data Artikel Berhasl Di Update');

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }


    // Edit Artikel

    function EditShowImagesArtikel(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#EditShowimgArtikel').attr('src', e.target.result);
                $('#EditUploadfileArtikel').fadeOut('fast');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#EditChooseImageArtikel").change(function(){
        EditShowImagesArtikel(this);
        $("#EditShowimgArtikel").show();
        $("#EditClearArtikel").show();
        $("#images_artikel").hide();
        $("#EditUploadfileArtikel").hide();
    });

    function EditclearImageArtikel(){

        $("#EditUploadfileArtikel").show();
        $("#EditClearArtikel").hide();   
        $("#EditShowimgArtikel").hide(); 
        localStorage.clear(); 

      }

           $(document).on('click', '.hapus_artikel', function() {

            var id = $(this).attr('data-id');

               $.ajax({
                    url:'{{ URL("DestroyArtikel") }}' + '/' + id,
                    type:'GET',
                    dataType:'text',
                success:function(data){

                    $('.dataartikel').DataTable().ajax.reload();
                    alert('Data Artikel Berhasil Dihapus')
                }
               }); 

          });


             // Datatables Loker

           $(function() {
            var table = $(".dataloker").DataTable({
                processing: true,
                serverSide: true,   
                sScrollY : "500",
                sScrollX : "100%",
                lengthMenu: [
                    [5,10, -1],
                    [5,10, "All"]
                ],
                ajax: "{{ url('DataLoker') }}",
                columns: [
                  { data: 'judul_loker' },         
                  { data: 'id_kategori' },
                  { data: 'job_description' },
                  { data: 'requirements' },
                  { data: 'salary_loker' },
                  { data: 'area_loker' },
                  { data: 'minpengalaman_loker' },
                  { data: 'create_loker' },
                  { data: 'modif_loker' },
                  { data: 'nama_user' },
                  { data: 'action',
                          'searchable': false, 
                          'orderable':false }
               ]

            });

        // table.rowReordering(); 
            

        });

        // Insert Update Loker

        $("body").on("click",".sloker",function(e){

            $(this).parents("form").ajaxForm(optionsloker);

        });


      var optionsloker = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='judul_loker']").val('');
            $("select[name='id_kategori']").val('');
            $("select[name='minpengalaman_loker']").val('');
            $("input[name='job_description']").text('');
             $("input[name='requirements']").text('');
             $("input[name='salary_loker']").text('');  
            localStorage.clear();     
            $('.dataloker').DataTable().ajax.reload();

            alert('Data Loker Berhasl Ditambahkan');

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }

      $(document).on('click','.showeditloker', function(){

        $('.editloker').toggle('slide');
        $('.editloker').show();
        $('.backloker').show();
        $('.insertloker').hide();
        $('.showeditloker').hide();

        $('#id_loker').val($(this).data('id'));
        $('#judul_loker').val($(this).data('judul'));
        $('#area_loker').val($(this).data('area'));
        $('#job_description').val($(this).data('jobdesc'));
        $('#requirements').val($(this).data('requirements'));
        $('#salary_loker').val($(this).data('salary'));


      });

        $(document).on('click','.backloker', function(){

        $('.insertloker').slideDown('slow');
        $('.editloker').hide();
        $('.backloker').hide();
        $('.insertloker').show();
        $('.showeditloker').show();

      });

        // Edit Upload Loker

        $("body").on("click",".uloker",function(e){

            $(this).parents("form").ajaxForm(optionseditloker);

        });


      var optionseditloker = { 

        complete: function(response) 

        {

          if($.isEmptyObject(response.responseJSON.error)){

            $("input[name='judul_loker']").val('');
            $("select[name='id_kategori']").val('');
            $("select[name='minpengalaman_loker']").val('');
            $("input[name='job_description']").text('');
            $("input[name='requirements']").text('');
            $("input[name='salary_loker']").text('');  
            localStorage.clear();     
            $('.dataloker').DataTable().ajax.reload();

            alert('Data Loker Berhasl Diupdate');
            $('.insertloker').toggle('slide');
            $('.editloker').hide();
            $('.back').hide();
            $('.insertloker').show();
            $('.showeditloker').show();

          }else{

            printErrorMsg(response.responseJSON.error);

          }

        }

      };


      function printErrorMsg (msg) {

      $(".print-error-msg").find("ul").html('');

      $(".print-error-msg").css('display','block');

      $.each( msg, function( key, value ) {

        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

      });

      }

       $(document).on('click', '.hapus_loker', function() {

            var id = $(this).attr('data-id');

               $.ajax({
                    url:'{{ URL("DestroyLoker") }}' + '/' + id,
                    type:'GET',
                    dataType:'text',
                success:function(data){

                    $('.dataloker').DataTable().ajax.reload();
                    alert('Data Loker Berhasil Dihapus')
                }
               }); 

          });


    </script>
    
  </body>
</html>
