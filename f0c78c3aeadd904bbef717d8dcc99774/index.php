<?php
$files = array(
	'01_revolta_punk_72.pdf',
	'02_manifestele_underground_72.pdf',
	'03_clipa_anarhiei_72.pdf',
	'04_slogan_72.pdf',
	'05_apararea-civila_72.pdf',
	'06_pick_it_up_72.pdf',
	'07_eco_soc_72.pdf',
	'08_buletin_diy_72.pdf',
	'09_el_cabraret_72.pdf',
	'10_les_mauvais_jours_72.pdf',
	'11_in_league_with_32_72.pdf',
	'12_gluga_neagra_72.pdf',
	'13_oldscul_zine_72.pdf',
	'14_lehia_leuzii_72.pdf',
	'15_glitch_72.pdf',
	'16_scrisori_de_la_livia_sura_72.pdf',
	'17_ghid_pank_2_72.pdf',
	'18_start_the_noise_72.pdf',
	'19_love_kills_72.pdf',
	'20_sloganul_si_revolta_72.pdf',
);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>AntroPong</title>
	
	<link rel='stylesheet' href='../css/style.css'>
	
</head>

<body>

	<article>
		
		<ul>
			<?php foreach ($files as $file) {
				echo "<li><a href=\"{$file}\" target=\"_blank\">{$file}</a></li>";
			}
			?>
		</ul>

	</article>
	
</body>

</html>
