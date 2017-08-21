<?php 
header("Content_type: application/rss+xml");
try {
$bdd= new PDO('mysql:host=localhost;dbname=simplonSite;charset=utf8', 'root', 'azerty');

	}
	catch (Exception $e) {
		die('Erreur : ' .$e->getMessage());
	}
// Récupère les 10 derniers articles écrits
$flux= $bdd->query('SELECT * FROM blog ORDER BY created_at DESC ');
// $flux= DB::select('SELECT * FROM blog ORDER BY created_at DESC LIMIT 0,25');
//dd($flux);
$last= $bdd->query('SELECT created_at FROM blog ORDER BY created_at DESC LIMIT 0,1');
	
$date= $last->fetch()['created_at'];

 ?>

<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>Promotion Simplon AUCH</title>
        <description>Flux RSS du blog</description>
        <lastBuildDate><?= date(DATE_RSS, strtotime($date))?></lastBuildDate>
        <link>http://127.0.0.1:8000/blog</link>
        <?php while($info = $flux->fetch()){ ?>               	
        
        <item>   	
            <title><?= $info['titre'] ?></title>
            <description><?=$info['article']?></description>
            <description><?= $info['auteur']?></description>
            <pubDate><?= date(DATE_RSS, strtotime($info['created_at'])) ?></pubDate>
            <link>http://127.0.0.1:8000/blog</link>
        </item>
        
        <?php } ?>
    </channel>
</rss>