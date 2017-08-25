<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('common/css');?>
  </head>
  <body>
    <?php $this->load->view('common/header');?>
    <div class="container">
    <div class="col-md-12" style="height:600px;">
      <div class="blog-header">
        <h1 class="blog-title text-center">Upload File</h1>
      </div>
      <div class="row">
        <div class="col-sm-12 blog-main">
			<div class="successmsg" style="display:none;">
				<div class="text-success text-center" style="padding: 20px 0px;">Your file has been processed.</div>
			</div>
			<form class="fileuploadform"  method="POST" enctype="multipart/form-data">
				<input type="file" name="file" id="file" class="file" style="display:none;"/>
				<button type="button" class="btn btn-primary" id="addfile">Add File</button>				
			</form>
			<div class="col-sm-12">
				<div class="progress" style="height:10px;margin-top:5px;display:none;">
					<div id="progress" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
					  <span class="sr-only">Upload Progress</span>
					</div>
				</div>
			</div>
			<div class="loading" style="display:none;">
				<div class="text-success text-center" style="padding: 100px 0px;">Uploading File ...</div>
			</div>
			<div class="loading2" style="display:none;">
				<div class="text-success text-center" style="padding: 100px 0px;">Processing File ...</div>
			</div>
      </div>

    </div>
    </div>
    </div>
    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php $this->load->view('common/footer'); ?>
	<script>
    function loadphotolib(){
        var nurl = '<?php echo SITE_URL;?>' + 'processfile/';
        var _this = $('.fileuploadform');
        var _this1 = $('.fileuploadform');
            _this.fileupload({
                url: nurl,
                dropZone:_this1,
                dataType: 'json',
                //replaceFileInput:false,
                autoUpload: false,
                maxFileSize: 999000,
                progressInterval:100,
                previewMaxWidth: 100,
                previewMaxHeight: 100,
                previewCrop: true,
                add: function(e, data){
					//data.files[0] = file;
					//data.formData = {'index':index,'filename':filename};
					
					console.log('file added');
						
					$('.fileuploadform').hide();
					$('.loading').show();
					data.submit();
                },
            }).on('fileuploadprocessalways', function (e, data) {

            }).on('fileuploadprogress', function(e, data){
                $('.progress').show();
				var progress = parseInt(data.loaded / data.total * 100, 10);
				console.log('progress == '+progress);
                $('#progress').css(
					'width',
					progress + '%'
				);
				if(parseInt(progress) > 99){
					$(".progress").hide();
					$('.loading').hide();
					$('.loading2').show();
				}
            }).on('fileuploaddone', function(e, data) {
                _this1.removeClass('lsdragged');
				$(".progress").hide();
				$('.loading2').hide();
				$('.fileuploadform').show();				
				$('.successmsg').show();
					
            }).on('fileuploadfail', function (e, data) {
                $.each(data.files, function (index) {

                });
                _this1.removeClass('lsdragged');
            }).on('fileuploaddragover', function (e, data) {
                _this1.addClass('lsdragged');
            }).on('fileuploaddragleave', function (e) {
                _this1.removeClass('lsdragged');
            }).on('fileuploadstop', function (e) {
                _this1.removeClass('lsdragged');
            });
    }
	$(document).ready(function(){
		loadphotolib();
		$('#addfile').click(function(){
			$('#file').trigger('click');
		});
	})
	</script>
  </body>
</html>
	