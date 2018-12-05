<html>
	<head>
		<title>Demande de stage</title>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div>
		<h2>Demande de stage</h2>
		<form  enctype="multipart/formdata">
			<table>
				<tr>
					<td><p>Nom*</p></td>
					<td><input type="text" name="nom" size="48"/></td>
				</tr>
				<tr>
					<td><p>Prenom*</p></td>
					<td><input type="text" name="prenom" size="48"/></td>
				</tr>
				<tr>
					<td><p>Adresse Mail*</p></td>
					<td><input type="text" name="adressemail" size="48"/></td>
				</tr>
				<tr>
					<td><p>Date de votre stage*</p></td>
					<td><input type="text" name="datefilter" value="" /></td>
				</tr>
				<tr>
					<td>CV*</td>
					<td>
						<input name="MAX_FILE_SIZE" type="hidden" value="3000" />
						<input name="CV" type="file" />
					</td>
				</tr>
				<tr>
					<td>Lettre de motivation*</td>
					<td>
						<input name="MAX_FILE_SIZE" type="hidden" value="3000" />
						<input name="Lettre de motivation" type="file" />
					</td>
				</tr>
			</table>
			<input type="submit" name="envoyer" value="Envoyer"/>
		</form>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script type="text/javascript">
		$(function() {

		  $('input[name="datefilter"]').daterangepicker({
		      autoUpdateInput: false,
		      locale: {
		          cancelLabel: 'Clear'
		      }
		  });

		  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
		      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
		  });

		  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
		      $(this).val('');
		  });

		});
	</script>
	</body>
</html>