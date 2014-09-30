<section id="content">
	<article class="text-container">
		<h1>Seiten
			<a href="new" id="newSiteBtn" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Neue Seite</a>
		</h1>
		<hr id="editHr">

		<!--<?= $this->session->flashdata('success'); ?>-->

		<br>
		<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
		<div id="ajaxcontent"></div>
		<table id="pagesTable" class="cmsTable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Titel</th>
					<th>Inhalt</th>
					<th>Autor</th>
					<th>Erstelldatum</th>
					<th>aktiv</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>

			<?php 
			if ($pages) {
				foreach ($pages as $page) { ?>
					<tr>
						<td><?= $page->pageID; ?></td>
						<td><?= $page->title; ?></td>
						<td style="width: 40%;"><?= word_limiter($page->content, 40); ?></td>
						<td><?= $page->author; ?></td>
						<td><?= mdate("%d.%m.%Y <br> %H:%i", strtotime($page->creationDate)); ?></td>
						<td><?= $page->activeState; ?></td>
						<td><a href="edit/<?= $page->pageID;?>" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"></span> Editieren</a></td>
						<td><button id="<?= $page->pageID;?>" class="btn btn-danger delete"><span class="glyphicon glyphicon-remove"></span> Löschen</button></td>
					</tr>
				<?php
				}
			}
			?>
			
			</tbody>
		 </table>

		 <?php echo $links ?>

		<!-- Modal -->
		<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<script>
		var pageID;
		var row;

		$(document).ready(function() {
			$('#pagesTable').tablesorter({
				headers: {
					6: {
						sorter: false
					},
					7: {
						sorter: false
					}
				}
			});
		});

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
				},
				success: function(response) {
					row.hide();
					//TODO: Seite erfolgreich gelöscht message

				}
			});
		});
			
</script>