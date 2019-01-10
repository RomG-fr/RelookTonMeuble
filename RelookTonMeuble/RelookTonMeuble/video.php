<!DOCTYPE html>
<html>
	<head>
		<title>A ajouter</title>
		
		
		
		 <!--
			A ajouter au projet		 
		 -->
		 
		 
		 
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript">
		//permet d'afficher l'infobulle
		$(document).ready(function() {
		 
			// Sélectionner tous les liens ayant l'attribut rel valant tooltip
			$('a[rel=tooltip]').mouseover(function(e) {
		 
				// Récupérer la valeur de l'attribut title et l'assigner à une variable
				var tip = $(this).attr('title');   
		 
				// Supprimer la valeur de l'attribut title pour éviter l'infobulle native
				$(this).attr('title','');
		 
				// Insérer notre infobulle avec son texte dans la page
				$(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    
		 
				// Ajuster les coordonnées de l'infobulle
				$('#tooltip').css('top', e.pageY + 10 );
				$('#tooltip').css('left', e.pageX + 20 );
		 
				// Faire apparaitre l'infobulle avec un effet fadeIn
				$('#tooltip').fadeIn('500');
				$('#tooltip').fadeTo('10',0.8);
		 
			}).mousemove(function(e) {
		 
				// Ajuster la position de l'infobulle au déplacement de la souris
				$('#tooltip').css('top', e.pageY + 10 );
				$('#tooltip').css('left', e.pageX + 20 );
		 
			}).mouseout(function() {
		 
				// Réaffecter la valeur de l'attribut title
				$(this).attr('title',$('.tipBody').html());
		 
				// Supprimer notre infobulle
				$(this).children('div#tooltip').remove();
		 
			});
		 
		});
		
		
		//rend la date du jour
		function date(id)
		{
				date = new Date;
				annee = date.getFullYear();
				moi = date.getMonth()+1;
				j = date.getDate();
				if(j<10)
				{
						j = "0"+j;
				}
				if(moi<10)
				{
						moi = "0"+moi;
				}
				resultat = 'Date du jour : le '+j+'/'+moi+'/'+annee;
				document.getElementById(id).innerHTML = resultat;
				setTimeout('date_heure("'+id+'");','1000');
				return true;
		}
		</script>
		<style>
			/* {
				color:#aaa;text-decoration:none;
				cursor:pointer;
				cursor:hand}
			a:hover {
				color:#000;
				text-decoration:none;}
			 */
			 
			/* Infobulle */
			
			/* style infobulle*/
			 
			#tooltip {
				position:absolute;
				z-index:9999;
				color:#000;
				font-size:20px;
				width:180px;
			 
			}
			 
			#tooltip .tipHeader {
				height:8px;
				background:url(images/tipHeader.gif) no-repeat;
			}
			 
			/* hack IE */
			*html #tooltip .tipHeader {margin-bottom:-6px;}
			 
			#tooltip .tipBody {
				background-color:#fff;
				padding:20px;
			}
			 
			#tooltip .tipFooter {
				height:8px;
				background:url(images/tipFooter.gif) no-repeat;
			}
		</style>
	</head>
	 
	<body>
		<!-- affiche la date -->
		<span id="date"></span>
		<script type="text/javascript">window.onload = date('date');</script>
		<br />
		<br />
		<!--Affiche la vidéo et fait apparaitre une infobulle lorsqu'on la survol-->
		<div id="paragraph">
		<a rel="tooltip" title="exemple de realisation...");>
			<video width="320" height="240" controls>
				<source src='video/relooking_meuble.mp4' type="video/mp4">
				Votre navigateur ne supporte pas la balise vidéo.
			</video>
		</a> 
		</div>
	</body>
</html>