<?php

//jobisjob
include 'lista.php';

$exploded = multiexplode(array(",","|",":","\n"),$text);

$cadena = "
<title>
<![CDATA[ Market Research / Surveyor - Work from Home - Part-time jobs - (city) ]]>
</title>
<location>
<city>
<![CDATA[ (city) ]]>
</city>
<country>
<![CDATA[ Canada ]]>
</country>
</location>
<company-name>
<![CDATA[ Occupons Quebec ]]>
</company-name>
<description>
<full-text>
<![CDATA[
<p>Apply here NOW!: https://www.occuponsquebec.org/market-research-assistant/<br><br>We desperately need 3 of you! - Market Research / Surveyor - Home work - Part-time jobs - (city)<br><br>Apply Here<br><br>The Market Research Assistants are responsible for giving online feedback on a variety of (city) topics including their political views, buying habits and opinions on consumer satisfaction, app reviews, software usability and other issues.<br>This is not a sales job, it is strictly market research, We are hiring for this position on a performance base per task, each task has a different rate and they may be several tasks on the same day, basically a new task would be when you fill out the evaluations we will send you giving us your opinion.<br><br>This Might Be The Right Job For You<br>If you are comfortable following instructions and have a quiet and private workspace.<br>If you are able to use a computer or a cell phone.<br>If you have a few hours per week to realize the tasks we send you.<br>If you are looking to work from home with flexible scheduling starting at 2pm/3pm weekdays or just working on weekends.<br>If you are not bothered by the realization of long and repetitive tasks on the computer/cell phone.<br>If you know pretty well the (city)’s culture and environment.<br><br>We desperately need 3 of you! - Market Research / Surveyor - Home work - Part-time jobs - (city)<br><br>Responsibilities<br><br>Fill out the questionnaires we sent you, this will be for research purposes only.<br>Demonstrate patience and ability to deliver the tasks even if you are working from home.<br>Follow the instructions that are sent to you and answer the questionnaires immediately.<br>Record answers directly in to the link that it is sent to you.<br>Check all responses for accuracy, spelling and grammar.<br><br>Required Skills And Abilities<br><br>Self-motivated, positive attitude.<br>Excellent reading and listening skills.<br>Fluent in English<br>Professional customer service attitude<br>Commitment to the task.<br>To have a lot of experience in the day to day issues in (city).<br><br>Previous work from home experience it is an asset but it is not required.<br><br>Home Office Requirements<br><br>A fully functional computer with Microsoft Windows 7, 8 or 9 operating system or any Mac/Apple desktop or laptop; minimum computer requirements are 1.1 GHz and 512 MB ram. It can be a desktop or laptop if you are using mobile it can be Iphone or Android it does not matter BUT working on a desktop computer it is prefered since there are some tasks that can only be sent to users who have desktop or laptop computers.<br>At least east 50 Mbps for downloads and 10 Mbps for uploads.<br>Antivirus software installed.<br><br>How to apply?<br><br>Interested in this opportunity? Please apply on the button provided below and you will be contacted immediately if you are chosen.<br><br>We are committed to equity in employment and in providing a workplace environment that treats all employees with respect and dignity. We are committed to providing equal opportunity to all staff and applicants.<br><br>We thank all applicants; however, due to the volume of applications, only those short-listed for an interview will be contacted. No phone calls, please.<br><br>Job Location<br><br>Only Canada and United States<br><br>Position Type<br><br>Part-Time.<br><br>Apply here NOW!: https://www.occuponsquebec.org/market-research-assistant/<br><br>We desperately need 3 of you! - Market Research / Surveyor - Home work - Part-time jobs - (city)</p><br>
]]>
</full-text>
</description>
<job-type>
<![CDATA[ Part-time jobs ]]>
</job-type>
<categories>
<category>
<![CDATA[
Administration
]]>
</category></categories>
<insert-date>
<![CDATA[ 2019-11-16T11:11:38 ]]>
</insert-date>
<update-date>
<![CDATA[ 2019-11-24T15:21:43 ]]>
</update-date>
<contract_time><![CDATA[ part_time ]]></contract_time>
</job>
";

$id = 100000;
echo "<data xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:noNamespaceSchemaLocation=\"http://static.jobisjob.com/feed/jobs.xsd\">
<jobs>";
$a = 0;
$b = 1;
for ($i = 0; $i < 100; $i++) {
	$id++;
     $resultado = str_replace("(city)", $exploded[$a], $cadena, $contador);
     $resultado1 = str_replace("(region)", $exploded[$b], $resultado, $contador);
     $a=$a+2;
     $b=$b+2;
	echo "
<job>
<job-id>
<![CDATA[$id]]>
</job-id> 
<url>
<![CDATA[
 https://www.occuponsquebec.org/market-research-assistant/?id=$id
]]>
</url>";
	echo $resultado1;
    //echo "<br>";
}
echo "</jobs>
</data>";

?>