<?php
$text = "Toronto,Ontario
Montreal,Quebec
Vancouver,British Columbia
Calgary,Alberta
Edmonton,Alberta
Ottawa–Gatineau,Ontario/Quebec
Winnipeg,Manitoba
Quebec City,Quebec
Hamilton,Ontario
Kitchener,Ontario
London,Ontario
Victoria,British Columbia
Halifax,Nova Scotia
Oshawa,Ontario
Windsor,Ontario
Saskatoon,Saskatchewan
St. Catharines–Niagara Falls,Ontario
Regina,Saskatchewan
St. John's,Newfoundland and Labrador
Kelowna,British Columbia
Barrie,Ontario
Sherbrooke,Quebec
Guelph,Ontario
Abbotsford,British Columbia
Kingston,Ontario
Kanata,Ontario
Trois-Rivières,Quebec
Moncton,New Brunswick
Chicoutimi–Jonquière,Quebec
Milton,Ontario
Red Deer,Alberta
Brantford,Ontario
Thunder Bay,Ontario
White Rock,British Columbia
Nanaimo,British Columbia
Sudbury,Ontario
Lethbridge,Alberta
Saint-Jean-sur-Richelieu,Quebec
Peterborough,Ontario
Kamloops,British Columbia
Saint-Jérôme,Quebec
Chilliwack,British Columbia
Sarnia,Ontario
Châteauguay,Quebec
Drummondville,Quebec
Belleville,Ontario
Fort McMurray,Alberta
Sault Ste. Marie,Ontario
Prince George,British Columbia
Medicine Hat,Alberta
Welland–Pelham,Ontario
Grande Prairie,Alberta
Airdrie,Alberta
Granby,Quebec
Fredericton,New Brunswick
Saint John,New Brunswick
Beloeil,Quebec
North Bay,Ontario
Saint-Hyacinthe,Quebec
Brandon,Manitoba
Vernon,British Columbia
Cornwall,Ontario
Joliette,Quebec
Courtenay,British Columbia
Charlottetown,Prince Edward Island
Victoriaville,Quebec
Chatham,Ontario
Georgetown,Ontario
St. Thomas,Ontario
Woodstock,Ontario
Bowmanville,Ontario
Salaberry-de-Valleyfield,Quebec
Shawinigan,Quebec
Rimouski,Quebec
Spruce Grove,Alberta
Sorel,Quebec
Campbell River,British Columbia
Prince Albert,Saskatchewan
Penticton,British Columbia
Mission,British Columbia
Leamington,Ontario
Moose Jaw,Saskatchewan
Stouffville,Ontario
Lloydminster,Alberta/Saskatchewan
Orillia,Ontario
Stratford,Ontario
Orangeville,Ontario
Cape Breton–Sydney,Nova Scotia
Bradford,Ontario
Leduc,Alberta
Timmins,Ontario
Okotoks,Alberta
Saint-Georges,Quebec
Keswick–Elmhurst Beach,Ontario
Bolton,Ontario
Val-d'Or,Quebec
Cochrane,Alberta
Quispamsis–Rothesay,New Brunswick
Midland,Ontario
Innisfil,Ontario";
function multiexplode ($delimiters,$string) {
	$ready = str_replace($delimiters, $delimiters[0], $string);
	$launch = explode($delimiters[0], $ready);
	return  $launch;
}
?>
