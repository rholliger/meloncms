<section id="content">
	<article class="text-container">
		<h1>Artikel
			<a href="articles/new" id="newSiteBtn" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Neuer Artikel</a>
		</h1>
		<hr id="editHr">

		<br>
		<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		<div id="ajaxcontent"></div>
		<table class="cmsTable">
			<tr>
				<th>ID</th>
				<th>Titel</th>
				<th>Inhalt</th>
				<th>Veröffentlichungsdatum</th>
				<th>Änderungsdatum</th>
				<th>Autor</th>
				<th>aktiv</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		 </table>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Löschen einer Seite</h4>
		      </div>
		      <div class="modal-body">
		        <p>Sind Sie sicher, dass Sie diese Seite löschen möchten?</p>
		      </div>
		      <div class="modal-footer">
		        <button class="btn" data-dismiss="modal" aria-hidden="true">Schliessen</button>
		   		<button class="btn btn-danger" id="deleteConfirmed"><span class='glyphicon glyphicon-remove'></span> Löschen</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</article>

</section>

<!--<script>
		var pageID;
		var row;

		$(document).on('click', '.delete', function(){
			pageID = $(this).attr('id');
			row = $(this).parent().parent();

			$('#myModal').modal();
		});

		$(document).on('click', '#deleteConfirmed', function() {

			$.ajax({
				type: 'POST',
				url: '<?= base_url(); ?>admin/pages/delete',
				data: 'id='+pageID,
				beforeSend: function() {
					$('#myModal').modal('hide');
					//row.animate({'backgroundColor': 'red'}, 300);
				},
				success: function(response) {
					row.animate({ height: "5px"}, "slow");
				}
			});
		});
			
</script>-->