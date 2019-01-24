<html>
	<head>
	</head>
	<body>
	<?xml version="1.0" encoding="UTF-8"?>
	<?php 
		/*
			Crée un fichier xml detaillant les meubles par type puis design
			avec leurs caractéristiques générales	
		*/
		
		include'connection_bd.php';
		
		/*$xml contien le contenue du document xml*/
		$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
		$xml .='<!DOCTYPE note[
			<!ELEMENT meubles (type)>
			<!ELEMENT type (ecurie)>
			<!ELEMENT design (design)>
			<!ELEMENT meuble EMPTY>
			<!ATTLIST meuble nom CDATA #REQUIRED
							description CDATA #IMPLIED>
			<!ATTLIST type type_meuble CDATA #REQUIRED>
			<!ATTLIST design design_meuble CDATA #REQUIRED> 
			]>';
			
		$requete= $bdd -> query('SELECT type FROM images GROUP BY type')or exit(mysql_error());
		
		//racine, ensemble des meubles
		$xml.='<meubles>';
		while ($donnees = $requete -> fetch()) {
			$xml .= '<type type_meuble = "'.$donnees['type'].'" >';
			$requete2 = $bdd -> query("SELECT * FROM images WHERE`type`='".$donnees['type']."'GROUP BY design")or exit(mysql_error());
			//les meubles du type ...
			while ($donnees2 = $requete2 -> fetch()) {
				$xml .='<design design_meuble="'.$donnees2['design'].'">';
				$requete3 = $bdd -> query("SELECT * FROM images WHERE`design`='".$donnees2['design']."' and `type`='".$donnees['type']."'")or exit(mysql_error());
				//les véhicule de type ... et design ...
				while ($donnees3 = $requete3 -> fetch()) {
					//les meubles correspondant aux critères précédent avec leurs noms et descriptions
					$xml.='<meuble nom="'.$donnees3['nom'].'" description="'.$donnees3['description'].'">';
					$xml.='</meuble>';
				}
				$xml .='</design>';
			}
			$xml .= '</type>';
		}
		$xml.='</meubles>';
		$fp = fopen("meublesMysqlToXml.xml", "w+");
		fputs($fp, $xml);
		fclose($fp);
		header('location:meublesMysqlToXml.xml');
	?>
	</body>
</html>