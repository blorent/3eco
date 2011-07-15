<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<title>ECO</title>
<script type='text/javascript' src='js/prototype.js'></script>
<script type='text/javascript' src='js/scriptaculous.js'></script>
<script type='text/javascript' src='js/effects.js'></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<!--<body onload="new Effect.Move('menu', { x: 1000, y: 0, delay : 1 });"> -->
<body>

<!-- Main container - used to center -->
<div id="mainContainer">

	<!-- Header -->
	<div id="header"></div>
	<!-- Fin Header -->

	<!-- Menu -->
	<div id="menu">
		<ul>
			<li><a href="site.php" onClick="Effect.divSwap('logo','swappableContent');return false;">Accueil</a></li>
			<li><a href="site.php?cat=1" onClick="Effect.divSwap('architecture','swappableContent');return false;">Architecture</a></li>
			<li><a href="site.php?cat=2" onClick="Effect.divSwap('audit','swappableContent');return false;">L'audit &eacute;nerg&eacute;tique PAE</a></li>
			<li><a href="site.php?cat=3" onClick="Effect.divSwap('certificat','swappableContent');return false;">Certificat PEB</a></li>
			<li><a href="site.php?cat=4" onClick="Effect.divSwap('primes','swappableContent');return false;">Primes</a></li>
			<li><a href="site.php?cat=5" onClick="Effect.divSwap('equipe','swappableContent');return false;">Equipe</a></li>
			<li><a href="site.php?cat=6" onClick="Effect.divSwap('liens','swappableContent');return false;">Liens</a></li>
			<li><a href="site.php?cat=7" onClick="Effect.divSwap('contact','swappableContent');return false;">Contact</a></li>
		</ul>
	</div>
	<!-- Fin menu -->

	<!-- Swappable content container -->
	<div id="swappableContent">

		<!-- Bloc logo -->
		<?php if($_GET['cat']==''){
        echo '<div id="logo">';
        }
        else { echo '<div id="logo" style="display:none">';}
        ?>
		</div>
		<!-- Fin du bloc logo -->

		<!-- Page architecture -->
		<?php if($_GET['cat']=='1'){
        echo '<div id="architecture">';
        }
        else { echo '<div id="architecture" style="display:none">';}
        ?>
		</div>
		<!-- Fin page architecture -->

		<!-- Page audit -->
		<?php if($_GET['cat']=='2'){
        echo '<div id="audit">';
        }
        else { echo '<div id="audit" style="display:none">';}
        ?>  
        
        
        <h1>L'audit en bref</h1>

        <h2>L'audit &eacute;nerg&eacute;tique, &ccedil;a sert &agrave; quoi ?</h2>         
        <ul>
            <li>conna&icirc;tre les points faibles thermiques de votre logement</li>
            <li>d&eacute;couvrir les solutions &agrave; apporter pour y rem&eacute;dier</li>
            <li>am&eacute;liorer l'isolation de votre logement</li>
            <li>r&eacute;duire vos factures de chauffage</li>
        </ul>
        
        <h2>Comment peut-on vous aider ?</h2>
        <ul>
            <li>nous relevons toutes les donn&eacute;es n&eacute;cessaires pour vous indiquer l'&eacute;tat thermique de votre logement</li>
            <li>nous vous donnons les cl&eacute;s pour rem&eacute;dier aux points faibles dans un soucis de confort et d'int&eacute;gration</li>
            <li>nous vous pr&eacute;cisons la rentabilit&eacute; future de votre habitation,</li>
            <li>nous vous accompagnons du d&eacute;but &agrave; la fin de la proc&eacute;dure.</li>
        </ul>
        <p>En effet, nous ne sommes pas une entreprise qui r&eacute;alise des audits &eacute;nerg&eacute;tiques &agrave; la cha&icirc;ne. Nous sommes architectes, c'est pourquoi nous avons les capacit&eacute;s de vous proposer des solutions &eacute;nerg&eacute;tiques avec une vision globale, esth&eacute;tique et technique du b&acirc;timent.</p>

        <h2>L'audit en d&eacute;tails :</h2>
        <p>L'int&eacute;r&ecirc;t en mati&egrave;re d'isolation et de rendement des syst&egrave;mes de chauffage est apparu apr&egrave;s le premier choc p&eacute;trolier. En r&eacute;gion Wallonne, 70% des logements ont &eacute;t&eacute; construits avant cette date, &agrave; une &eacute;poque o&ugrave; peu de gens se souciaient de la consommation &eacute;nerg&eacute;tique de leur logement. </p>
        <p>Aujourd'hui, la facture &eacute;nerg&eacute;tique de son logement est un soucis majeur pour les citoyens. L'audit &eacute;nerg&eacute;tique est donc un outil mis en place par la R&eacute;gion Wallonne pour permettre aux personnes soucieuses de r&eacute;duire leur empreinte &eacute;cologique.</p>
        <p>Cette proc&eacute;dure est donc volontaire et s'adresse aussi bien aux locataires qu'aux propri&eacute;taires. 
        L'audit porte sur 2 aspects : l'enveloppe du b&acirc;timent et les syst&egrave;me de chauffage et de production d'eau chaude sanitaire. 
        <p>L'audit comporte 2 parties : 
        <ul>
        <li>L'&eacute;valuation ou le bilan &eacute;nerg&eacute;tique du b&acirc;timent existant : un label allant de E pour le plus faible jusque A+ pour le plus performant est attribu&eacute; pour chaque &eacute;l&eacute;ment analys&eacute;. Cela permet de conna&icirc;tre la consommation &eacute;nerg&eacute;tique globale du b&acirc;timent.</li>
        <li>L'avis ou les recommandations pour la situation r&eacute;nov&eacute;e: l'auditeur propose une s&eacute;rie d'am&eacute;liorations possibles &agrave; r&eacute;aliser afin de r&eacute;duire sa consommation &eacute;nerg&eacute;tique. Il indique la priorit&eacute; des travaux &agrave; effectuer, le co&ucirc;t de ces &eacute;ventuels travaux et les &eacute;conomies qu'ils permettront de r&eacute;aliser en tenant compte de l'investissement et des primes octroy&eacute;es.</li>
        </ul>

        <h2>D&eacute;roulement de l'audit :</h2>
        <p>Le premier contact nous permet de prendre rendez-vous avec vous pour notre visite et de vous indiquer les documents que vous devez pr&eacute;parer pour cette visite (plans, fiche d'entretien, factures, documents techniques, etc...)</p>
        <p>La visite : elle nous permet de relever toutes les informations qui nous seront n&eacute;cessaires &agrave; l'encodage des donn&eacute;es dans le logiciel PAE. Nous en profitons pour discuter avec vous des &eacute;ventuelles solutions que vous aimeriez apporter &agrave; votre logement. Nous prenons un rendez-vous pour vous rendre l'avis.</p>
        <p>L'avis : apr&egrave;s l'encodage des donn&eacute;es, nous obtenons les r&eacute;sultats de votre bilan &eacute;nerg&eacute;tique. Nous proposons des am&eacute;liorations que nous chiffrons en comptabilisant l'investissement, les primes et le temps de retour. Nous revenons alors chez vous pour vous expliquer en d&eacute;tails l'&eacute;valuation de votre habitation. Nous vous soumettons les am&eacute;lior&eacute;tions pr&eacute;conis&eacute;es et prenons le temps de discuter de ces solutions avec vous. Nous vous remettons tous les documents officiels et vous expliquons les d&eacute;marches &agrave; suivre concernant les primes.</p>

        <h2>Tarif :</h2>
        <p>Gr&acirc;ce &agrave; la prime octroy&eacute;e par la R&eacute;gion Wallonne et &agrave; la r&eacute;duction fiscale octroy&eacute;e par le f&eacute;d&eacute;ral, le co&ucirc;t de l'audit est quasi nul.</p>
        <p>La prime de la r&eacute;gion wallonne repr&eacute;sente 60% du montant de la facture (avec un maximum de 360 &#8364;).  La r&eacute;duction fiscale s'&eacute;l&egrave;ve &agrave; 40% du montant de la facture.</p>
        <p>Nous demandons 500 &#8364; hTVA pour un audit simple, soit 600 &#8364;. En comptabilisant les primes octroy&eacute;es (60% par la RW, soit 360 &#8364; et 40% de r&eacute;duction fiscale, soit 240 &#8364;), l'audit vous co&ucirc;tera 0 &#8364; (600 &#8364; - (360 &#8364; + 240 &#8364;) = 0 &#8364;).</p>
        <p>Sachez que les provinces de Namur et du Brabant Wallon accordent une prime suppl&eacute;mentaire de 20% allant jusqu'&agrave; 200 euros.</p>
        <p>Pour les audits de b&acirc;timents plus anciens ou tr&egrave;s complexes, le relev&eacute; prend plus de temps, nous demandons donc un suppl&eacute;ment au tarif de base.</p>        
		</div>
		<!-- Fin page audit -->

		<!-- Page certificat -->
		<?php if($_GET['cat']=='3'){
        echo '<div id="certificat">';
        }
        else { echo '<div id="certificat" style="display:none">';}
        ?>
        <h1>Certificat PEB</h1>
        
        <h2>Le certificat PEB, c'est quoi ?</h2>
        <img class="rightFloat" src="images/peb_consommation.jpg" />
        <p>Apr&egrave;s les appareils &eacute;lectrom&eacute;nagers et les voitures... c'est au tour de votre maison d'afficher sa consommation d'&eacute;nergie. La directive europ&eacute;enne relative &agrave; la Performance &eacute;nerg&eacute;tique des b&acirc;timents (PEB) impose en effet aux &eacute;tats membres de mettre en place un syst&egrave;me de certification &eacute;nerg&eacute;tique des b&acirc;timents.</p>
        <p>A partir du 1er Juin 2011, toute personne qui souhaite vendre ou louer un b&acirc;timent r&eacute;sidentiel doit &ecirc;tre en possession d'un Certificat de performance &eacute;nerg&eacute;tique valable.</p>
        
        <h2>Quelle informations y trouver ?</h2>
        <img class="rightFloat" src="images/peb_formulaire.jpg" />
        <p>V&eacute;ritable carte d'identit&eacute; &eacute;nerg&eacute;tique, le Certificat de performance &eacute;nerg&eacute;tique indique la consommation th&eacute;orique d'&eacute;nergie du b&acirc;timent.</p>
        <p>&eacute;labor&eacute; par un certificateur agr&eacute;&eacute; ind&eacute;pendant, le Certificat mentionne pour chaque b&acirc;timent :</p>
        <ul>
            <li>sa consommation d'&eacute;nergie, sous forme de labels (A++ &agrave; G)</li>
            <li>son impact sur l'environnement (&eacute;missions de CO2)</li>
            <li>les performances de l'enveloppe du b&acirc;timent, des syst&egrave;mes de chauffage et de production d'eau chaude sanitaire, ...</li>
            <li>la pr&eacute;sence ou non d'un syst&egrave;me de ventilation</li>
            <li>la pr&eacute;sence &eacute;ventuelle de sources d'&eacute;nergie renouvelables</li>
            <li>des recommandations d'am&eacute;lioration.</li>
        </ul>
        
        
        <h2>En pratique ?</h2>
        <p>Il faut compter  15 jours maximum  entre le premier contact et la r&eacute;ception du certificat PEB.</p>
        <ul>
            <li>Prise de contact avec le certificateur PEB</li>
            <li>Pr&eacute;parer les documents et les preuves (lien)  n&eacute;cessaires &agrave; la proc&eacute;dure</li>
            <li>Collecte des donn&eacute;es sur place par le certificateur : compter de 1h &agrave; 3 heures sur place</li>
            <li>Encodage des donn&eacute;es dans le logiciel et analyse des r&eacute;sultats</li>
            <li>Envoi du certificat sur la base de donn&eacute;es de la R&eacute;gion Wallonne pour  officialisation</li>
            <li>Envoi postal du certificat au demandeur. Celui-ci est valable 10 ans.</li>
         </ul>
         
         <h2>Tarifs</h2>
        <p>Le co&ucirc;t du Certificat n'est pas fixe : il d&eacute;pend du temps n&eacute;cessaire &agrave; son &eacute;laboration et donc de la complexit&eacute; du b&acirc;timent &agrave; certifier. Les tarifs suivant s'appliquent dans la majorit&eacute; des cas. Le prix vous sera confirm&eacute; lors d'une premi&egrave;re prise de contact.</p>
        <img class="rightFloat" src="images/peb_tarifs.jpg" />
        
        <h2>Documents</h2>
        <p>Afin de garantir l'aspect r&eacute;glementaire du certificat PEB, la R&eacute;gion Wallonne a &eacute;tabli une liste de preuves acceptables. Toute information encod&eacute;e doit &ecirc;tre prouv&eacute;e.</h2>
        <p>Les documents mis &agrave; disposition permettront de valoriser le r&eacute;sultat du certificat.</p>
        <ul>
            <li>Plans</li>
            <li>Documents techniques d'installation de chauffage</li>
            <li>Certificat PEB pr&eacute;c&eacute;dent</li>
            <li>Attestation &laquo; Construire avec l'&eacute;nergie (CALE) &raquo;</li>
            <li>Demande de primes + preuves d'attribution</li>
            <li>Dossier complet de chantier (d&eacute;compte, cahier des charges, plans, factures, ...)</li>
            <li>Attestation sign&eacute;e de l'architecte</li>
            <li>Dossier photos localisables</li>
            <li>Rapport de mesure d'&eacute;tanch&eacute;it&eacute; &agrave; l'air</li>
         </ul>

		</div>
		<!-- Fin page certificat -->

		<!-- Page primes -->
		<?php if($_GET['cat']=='4'){
        echo '<div id="primes">';
        }
        else { echo '<div id="primes" style="display:none">';}
        ?>
				<h1>Diminuer les pertes</h1>
				<p class="center"><img src="images/primes_pertes.jpg" alt="Primes pour la diminution des pertes d'&eacute;nergie" /></p>
				<p class="center"><img src="images/primes_pertes_2.jpg" alt="Primes pour la diminution des pertes d'&eacute;nergie" /></p>

				<h1>Audits &eacute;nerg&eacute;tiques PAE</h1>
				<p class="center"><img src="images/primes_audit.jpg" alt="Primes pour audits &eacute;nerg&eacute;tiques" /></p>

				<h1>Am&eacute;liorer le rendement des &eacute;quipements</h1>
				<p class="center"><img src="images/primes_rendement.jpg" alt="Primes pour l'am&eacute;lioratin du rendement des &eacute;quipements" /></p>

				<h1>Formulaires aides et primes</h1>
				<p>Demande de prime pour l'audit  &eacute;nerg&eacute;tique PAE : <a href="docs/formulaire01.pdf">formulaire</a></p>
				<p>Demande de prime pour l'isolation de la toiture: <a href="docs/.pdf">formulaire</a> et <a href="docs/annexe01@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'isolation des murs:<a href="docs/formulaire02.pdf">formulaire</a>  et <a href="docs/annexe02@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'isolation des plancher: <a href="docs/formulaire03.pdf">formulaire</a>  et <a href="docs/annexe03@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'installation d'une Pompe &agrave; chaleur: <a href="docs/formulaire12.pdf">formulaire</a>  et <a href="docs/annexe12@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'installation d'un chauffage biomasse <a href="docs/formulaire13.pdf">formulaire</a>  et <a href="docs/annexe13@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'installation d'une chaudi&egrave;re condensation <a href="docs/formulaire08.pdf">formulaire</a>  et <a href="docs/annexe08@court.pdf">annexe</a></p>
				<p>Demande de prime pour l'installation d'un syst&egrave;me double flux : <a href="docs/formulaire07.pdf">formulaire</a>  et <a href="docs/annexe07@court.pdf">annexe</a></p>

				<h1>Informations</h1>
				<p><a href="http://energie.wallonie.be/fr">L'&eacute;nergie et l'&eacute;cologie en r&eacute;gion Wallonne</a></p>
				<p><a href="http://energie.wallonie.be/fr/audit-energetique.html?IDC=6048">Video explicative de l'audit &eacute;nerg&eacute;tique PAE</a></p>
				<p><a href="http://minfin.fgov.be/portail2/fr/themes/dwelling/energysaving/index.htm">R&eacute;duction d'imp&ocirc;t pour investissements &eacute;conomiseurs d'&eacute;nergie</a></p>
				<h2>Eco-construction</h2>
				<p><a href="http://www.bepassive.be/archives">Magazine sur l'architecture passive</a></p>
				<p><a href="http://www.bois-habitat.com/">La construction en bois</a></p>
				<p><a href="http://energie.wallonie.be/fr/construire-avec-l-energie.html?IDC=6025">Construire avec l'&eacute;nergie</a></p>
		</div>
		<!-- Fin page primes -->

		<!-- Page equipe -->
		<?php if($_GET['cat']=='5'){
        echo '<div id="equipe">';
        }
        else { echo '<div id="equipe" style="display:none">';}
        ?>
            <h1>L'&eacute;quipe</h1>
			<p>
				Nous sommes une &eacute;quipe de 3 architectes sp&eacute;cialis&eacute;s dans le domaine de l'&eacute;cologie. Si vous partagez notre int&eacute;r&ecirc;t pour l'&eacute;coconstruction, nous vous aidons &agrave; concr&eacute;tiser vos projets dans un soucis d'&eacute;conomie d'&eacute;nergie. 
				Notre travail allie passion, analyse et rigueur. Nous nous mettons &agrave; votre service en combinant vos souhaits avec notre cr&eacute;ativit&eacute;. Nous allions les jeux de volume, le traitement de la lumi&egrave;re, l'int&eacute;gration au site, les mati&egrave;res, les couleurs, en tenant compte des contraintes techniques et administratives pour vous proposer des espaces qui r&eacute;pondent &agrave; vos besoins. Pour nous, il n'y a pas de petits projets, nous vous accompagnons &agrave; l'origine de vos id&eacute;es jusqu'&agrave; la finalisation du b&acirc;timent.  
				Notre &eacute;quipe r&eacute;alise &eacute;galement des audits &eacute;nerg&eacute;tiques PAE dans le respect de l'architecture et du confort et des certificats PEB. 
			Nous couvrons une grande partie de la Wallonie. N'h&eacute;sitez pas &agrave; nous contacter &agrave; ce sujet et pour tout projet d'architecture.
			</p>

		    <h2>Anne-Sophie Audrit</h2>
			<p>
				Architecte dipl&ocirc;m&eacute;e de l'ISALL, sp&eacute;cialis&eacute;e en restauration. 
				Formation en expertise immobili&egrave;re. 
				Auditeur agr&eacute;&eacute; pour les audits &eacute;nerg&eacute;tiques PAE en R&eacute;gion Wallonne. 
				Certificateur agr&eacute;&eacute; PEB
				Formation "Physique des b&acirc;timents: efficacit&eacute; &eacute;nerg&eacute;tique des constructions en bois"
				Responsable PEB
			</p>

            <h2>V&eacute;ronique Maes</h2>
			<p>
				Architecte dipl&ocirc;m&eacute;e de l'ISALL, sp&eacute;cialis&eacute;e en architecture organique. 
				M&eacute;moire r&eacute;alis&eacute; sur le confort thermique. 
				Auditeur agr&eacute;&eacute; pour les audits &eacute;nerg&eacute;tiques PAE en R&eacute;gion Wallonne. 
				Certificateur agr&eacute;&eacute; PEB
				Formation "Physique des b&acirc;timents: efficacit&eacute; &eacute;nerg&eacute;tique des constructions en bois"
				Responsable PEB
			</p>

            <h2>Xavier Wolfs</h2>
			<p>
				Architecte dipl&ocirc;m&eacute; de l'ISALL, sp&eacute;cialis&eacute; en restauration. 
				Auditeur agr&eacute;&eacute; pour les audits &eacute;nerg&eacute;tiques PAE en R&eacute;gion Wallonne. 
				Certificateur agr&eacute;&eacute; PEB
				Responsable PEB
				Formation "concept de la maison passive". 
				Formation "Physique des b&acirc;timents: efficacit&eacute; &eacute;nerg&eacute;tique des constructions en bois"
			</p>
		</div>
		<!-- Fin page equipe -->

		<!-- Page liens -->
		<?php if($_GET['cat']=='6'){
        echo '<div id="liens">';
        }
        else { echo '<div id="liens" style="display:none">';}
        ?>
		</div>
		<!-- Fin page liens -->

		<!-- Page contact -->
		<?php if($_GET['cat']=='7'){
        echo '<div id="contact">';
        }
        else { echo '<div id="contact" style="display:none">';}
        ?>
			<div class="cContact">
			<h4>Anne-Sophie Audrit</h4>
			<p>Rue des Vennes, 126-128, 4020 Li&egrave;ge</p>
			<p>T&eacute;l : 0494 90 16 35</p>
			<p>Email : anne-sophie@3eco.be</p>
			<p class="contactDesc">Expertise immboli&egrave;re + num&eacute;ro d'agr&eacute;ment</p>
			</div>

			<div class="cContact">
			<h4>V&eacute;ronique Maes</h4>
			<p>Rue Joseph Wanet, 21, 5020 Vedrin</p>
			<p>T&eacute;l : 0474 33 44 24</p>
			<p>Email : veronique@3eco.be</p>
			<p>TVA : BE0819 013 857</p>
			</div>

			<div class="cContact">
			<h4>Xavier Wolfs</h4>
			<p>Rue des Vennes, 126-128, 4020 Li&egrave;ge</p>
			<p>T&eacute;l : 0486 10 86 46</p>
			<p>Email : xavier@3eco.be</p>
			<p>TVA : BE0809 454 706</p>
			<p class="contactDesc">Audits &eacute;nerg&eacute;tiques PAE RW09/145</p>
			<p class="contactDesc">Certificats PEB</p>
			<p class="contactDesc">Responsable PEB PEB-00017-R</p>
			</div>
		</div>
		<!-- Fin page contact -->

	</div>

</div>
</body>
</html>
