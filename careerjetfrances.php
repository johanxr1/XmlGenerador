<?php

//Careerjet
include 'lista.php';

$exploded = multiexplode(array(",","|",":","\n"),$text);

$cadena = "
<title>
<![CDATA[ Nous Avons Besoin de 5 personnes d'une façon urgente MAINTENANT !  - (city) - Assistants de recherche de marché! ]]>
</title>
<location>
<![CDATA[ (city) ]]>
</location>
<company>
<![CDATA[ Occupons Quebec ]]>
</company>
<company_url><![CDATA[ https://www.occuponsquebec.org/ ]]></company_url>
<description>
<![CDATA[
<p>Assistants de recherche de marché sont responsables de donner leur opinion en ligne sur une variété de sujets, y compris leurs opinions politiques, leurs habitudes d’achat et leur satisfaction avec le service à la clientèle, ainsi que leurs pensées sur la conception des applications mobiles, l’usabilité de logiciels et d’autres sujets.<br>
Ceci n’est pas un travail de vente, c’est strictement de la recherche de marché. Nous embauchons pour un travail rémunéré par tâche, et chaque tâche est rémunérée à un taux diffèrent et il peut y en avoir plusieurs tâches chaque jour. Chaque tâche constitue de remplir des évaluations que nous vous envoyons en nous donnant votre opinion.<br><br>
Ceci pourrait être un travail pour vous si :<br><br>
-	Vous êtes capables de suivre des instructions et vous avez un lieux de travail silent et privé.<br>
-	Si vous êtes capables d’utiliser un ordinateur ou un téléphone cellulaire.<br>
-	Si vous avez quelques heures par semaine pour réaliser les tâches que nous vous envoyons.<br>
-	Si vous êtes à la recherche d’un travail à domicile avec un horaire flexible débutant a 1400-1500 pendant la semaine ou pendant les fins de semaine.<br>
-	Si vous n’êtes pas dérangés par la réalisation de tâches longues et répétitives sur un ordinateur ou téléphone cellulaire.<br><br> 
Responsabilités :<br><br>
-	Remplir les questionnaires que nous vous envoyons aux fins de recherche.<br>
-	Démontrer de la patience et l’habilité de livrer des travaux même si vous travaillez à domicile.<br>
-	Suivre les instructions que vous sont envoyées et répondre immédiatement aux questionnaires.<br>
-	Répondre directement dans le lien qui vous et envoyé.<br>
-	Vérifier les réponses pour leur précision ainsi que pour la grammaire et l’orthographe.<br><br>
Habilitées et compétences requises :<br><br>
-	Motivation et attitude positive.<br>
-	Excellence en lecture et capacité de bien écouter.<br>
-	Aise en Anglais.<br>
-	Attitude de service à la clientèle professionnelle.<br>
-	Dédication à la tâche.<br>
-	Compréhension des problèmes quotidiens du monsieur tout-le-monde.<br>
-	L’expérience avec le travail à domicile est un atout mais n’est pas obligatoire.<br><br>
Exigences de bureau à domicile :<br><br>
-	Ordinateur fonctionnel avec Microsoft Windows 7, 8 ou 9 ou Apple Mac. L’ordinateur doit comprendre un processeur de 1.1 GHz et un RAM de 512 MO. Ce peut être un portable ou un ordinateur de bureau. Si vous utilisez un téléphone cellulaire, il peut être iPhone ou Android, mais un ordinateur est préféré car il y a certaines tâches qui peuvent seulement être envoyées à des utilisateurs qui ont un ordinateur.<br>
-	Une vitesse d’internet d’au moins 50 MBps pour télécharger vers l’utilisateur et 10 MBps pour télécharger vers un serveur. 
-	Un service anti-virus installé.</p><br>
]]>
</description>
<contracttype>
<![CDATA[ Part-time jobs ]]>
</contracttype>
<salary/>
<contact/>
<postdate>
<![CDATA[ 2020-02-10T11:11:38 ]]>
</postdate>
<expirydate>
<![CDATA[ 2020-02-19T15:21:43 ]]>
</expirydate>
</job>
";

$id = 100000;
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<jobs>";
$a = 0;
$b = 1;
for ($i = 0; $i < 100; $i++) {
	$id++;
     $resultado = str_replace("(city)", $exploded[$a], $cadena, $contador);
     $resultado1 = str_replace("(region)", $exploded[$b], $resultado, $contador);
     $a=$a+2;
     $b=$b+2;
	echo "<job>
<url>
<![CDATA[
 https://www.occuponsquebec.org/assistants-de-recherche-de-marche/?id=$id
]]>
</url>
<apply_url>
<![CDATA[
 https://www.occuponsquebec.org/assistants-de-recherche-de-marche/?id=$id
]]>
</apply_url>";
	echo $resultado1;
    //echo "<br>";
}
echo "</jobs>";

?>