<section id="content">
	<!--<div class="success message">
		 <h5>Success</h5>
		 <p>This is just a success notification message.</p>
	</div>-->
	<article class="text-container">
		<h1 id="pageHeader"><?= $pageTitle ?></h1>
		<?= validation_errors(); ?>
		<hr id="editHr">
		<div id="formWrapper">
			<div id="mainFormDiv">
				<?php echo form_open($this->uri->uri_string()) ?>
					<label for="pageTitle">Seitentitel</label>
					<input type="text" id="titleInput" class="textInput" name="pageTitle" value="<?php if(isset($page->title)) echo $page->title; ?>"/>
					
					<label for="pageContent">Seiteninhalt</label>
					<br>
					<textarea id="contentInput" name="pageContent"><?php if(isset($page->content)) echo $page->content; ?></textarea>
					
					<label for="metaKw">Schlüsselwörter</label>
					<input id="metaKwInput" class="textInput" name="metaKw" value="<?php if(isset($page->metaKeywords)) echo $page->metaKeywords; ?>"/>
					
					<label for="metaDesc">Seitenbeschreibung</label>
					<textarea id="metaDescInput" name="metaDesc"><?php if(isset($page->metaDescription)) echo $page->metaDescription; ?></textarea>
					
					<input type="submit" name="submit" value="Abschicken" class="btn btn-success"/>
					<a href="<?= site_url('admin/pages/') ?>" class="btn btn-default">Abbrechen</a>
				</form>
			</div>
			<div id="sideFormDiv">
				<div id="sideFormHeader">
					<h4>Sidebar</h4>
				</div>
				<div id="sideFormContent">
					Dies ist der Content
				</div>
			</div>
			<div class="clear">
			</div>
		</div>
	</article>

</section>

<script type="text/javascript" src="<?= assets_url().'plugins/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript">
	CKEDITOR.replace('contentInput');

	$('#metaKwInput').tagsInput({
		height: "75px",
		width: "100%",
		'defaulttext': ''
	});

</script>

<!--<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'contentInput' );
	
	$('#metaKwInput').tagsInput({
		height: "75px",
		width: "100%",
		'defaultText': ''
	});
	
	var pageID = getQueryVariable('id');
	var pageAction = getQueryVariable('action');
	
	if(pageAction == 'editpage') {
		$("#pageHeader").text("Seite editieren");
		showPage();
	} else if(pageAction == 'newpage') {
		$("#pageHeader").text("Neue Seite");
	}
	
	function showPage() {
		makeRequest('action=getpage&id='+pageID).done(function(response) {
			$("#titleInput").val(response.title);
			$("#contentInput").val(response.content);
			$("#metaKwInput").importTags(response.metaKeywords);
			$("#metaDescInput").val(response.metaDescription);
		});
	}
	
	$(document).on('click', '#submitPage', function()  {
		var title = $("#titleInput").val();
		var content = CKEDITOR.instances['contentInput'].getData();
		alert(content);
		var metaKeywords = $("#metaKwInput").val();
		var metaDescription = $("#metaDescInput").val();
		
		
		var valueUrl = '&id='+pageID+'&title='+title+'&content='+content+'&metaKeywords='+metaKeywords+'&metaDescription='+metaDescription;
		
		alert(valueUrl);

		switch(pageAction) {
			case 'editpage':
				makeRequest('action='+pageAction+valueUrl).done(function() {

				/*showMessage('success');
				setTimeout(function() {
				    $('.success').animate({top: -$(this).outerHeight()}, 7000);
				}, 6000);*/
				
					showSuccess();
				});
			break;
			
			case 'newpage':
				makeRequest('action='+pageAction+valueUrl).done(function() {
					showSuccess();
				});
			break;
		}
		
	});
	
	var myMessages = ['info','warning','error','success'];
	
	hideAllMessages();
	
	function hideAllMessages() {
		 var messagesHeights = new Array(); // this array will store height for each
	 
		 for (i=0; i<myMessages.length; i++)
		 {
				  messagesHeights[i] = $('.' + myMessages[i]).outerHeight(); // fill array
				  $('.' + myMessages[i]).css('top', -messagesHeights[i]); //move element outside viewport	  
		 }
	}
	
	function showMessage(type) {
		  hideAllMessages();				  
		  $('.'+type).animate({top:"0"}, 500);
	}

</script>-->