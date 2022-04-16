<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présidentielles 2022</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="secondtour.css">
    <link rel="stylesheet" href="comparateur.css">
    <script src="filter.js"></script>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="128x128" href="img/phone-icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <a name="top"></a>
    <a href="#top">
        <div class="navbar is-fixed-top navbar-brand">
            <img src="img/France.png" id="nav-flag" alt="France">
            <h1 class="title" id="nav-text"> Présidentielles 2022</h1>
        </div>
    </a>
    <div class="container" style="margin-top: 80px;">
        <div class="columns is-mobile">

            <div class="column">
                <a href="secondtour"><button class="french-button retour"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
            </div>

            <div class="column">
                <a href="lepen"><button class="french-button autre-candidat"><img class="autre-candidat-img" src="secondtourassets/lepenPhoto.png" alt="Marine Le Pen"></button></a>
                <a href="macron"><button style="margin-left:10px" class="french-button autre-candidat"><img class="autre-candidat-img" src="secondtourassets/macronPhoto.png" alt="Emmanuel Macron"></button></a>
            </div>

        </div>

        <div class="columns">
            <div class="div-candidat column">

                <div>
                    <img class="photo-candidat is-hidden-touch" src="secondtourassets/lepenPhoto.png" alt="Marine Le Pen">
                    <img class="photo-candidat-mobile is-hidden-desktop" src="secondtourassets/lepenPhoto.png" alt="Marine Le Pen">
                </div>

                <div class="texte-candidat">
                    <h1 class="is-hidden-touch nom-candidat">MARINE LE PEN</h1>
                    <h1 class="is-hidden-desktop nom-candidat nom-candidat-mobile">MARINE LE PEN</h1>
                    <a href="https://rassemblementnational.fr/" class="is-hidden-touch"><div class="parti-div">
                        <div class="parti-icone">
                            <img class="rn" src="secondtourassets/rn.jpg" alt="Rassemblement National">
                        </div>
                        <p class="parti">RASSEMBLEMENT NATIONAL</p>
                    </div></a>
                    <a href="https://mlafrance.fr/programme" class="is-hidden-touch">
                        <div class="programme-div">
                            <p class="programme"><i class="fa fa-book" aria-hidden="true"></i> Lien vers le programme</p>
                        </div>
                    </a>

                    <a href="https://rassemblementnational.fr/" class="is-hidden-desktop">
                        <div class="parti-div center-link">
                            <div class="parti-icone">
                                <img class="rn" src="secondtourassets/rn.jpg" alt="Rassemblement National">
                            </div>
                            <p class="parti">RASSEMBLEMENT NATIONAL</p>
                        </div>
                    </a>
                    <a href="https://mlafrance.fr/programme" class="is-hidden-desktop">
                        <div class="programme-div center-link">
                            <p class="programme"><i class="fa fa-book" aria-hidden="true"></i> Lien vers le programme</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="div-candidat comparateur-candidat column">

            <div>
                <img class="photo-candidat is-hidden-touch" src="secondtourassets/macronPhoto.png" alt="Emmanuel Macron">
                <img class="photo-candidat-mobile is-hidden-desktop" style="margin-top:150px" src="secondtourassets/macronPhoto.png" alt="Emmanuel Macron">
            </div>

            <div class="texte-candidat">
                <h1 class="is-hidden-touch nom-candidat">EMMANUEL MACRON</h1>
                <h1 class="is-hidden-desktop nom-candidat nom-candidat-mobile">EMMANUEL MACRON</h1>
                <a href="https://en-marche.fr/" class="is-hidden-touch"><div class="parti-div">
                    <div class="parti-icone">
                        <img class="rn" src="secondtourassets/lrem.jpg" alt="La République En Marche">
                    </div>
                    <p class="parti">LA RÉPUBLIQUE EN MARCHE</p>
                </div></a>
                <a href="https://avecvous.fr/projet-presidentiel" class="is-hidden-touch">
                    <div class="programme-div">
                        <p class="programme"><i class="fa fa-book" aria-hidden="true"></i> Lien vers le programme</p>
                    </div>
                </a>

                <a href="https://en-marche.fr/" class="is-hidden-desktop">
                    <div class="parti-div center-link">
                        <div class="parti-icone">
                            <img class="rn" src="secondtourassets/lrem.jpg" alt="La République En Marche">
                        </div>
                        <p class="parti">LA RÉPUBLIQUE EN MARCHE</p>
                    </div>
                </a>
                <a href="https://avecvous.fr/projet-presidentiel" class="is-hidden-desktop">
                    <div class="programme-div center-link">
                        <p class="programme"><i class="fa fa-book" aria-hidden="true"></i> Lien vers le programme</p>
                    </div>
                </a>
            </div>
        </div>
        </div>

        <div class="filters is-hidden-touch" style="margin-top:20px">
        <h1 class="title-cat">Filtres</h1>
        <p class="filters-text">Toutes les catégories sont activées au chargement de la page, les mesures qui correspondent sont plus bas. Cliquer sur un bouton désaffiche la catégorie.</p>

            <div class="columns">

                <a class="column">
                    <div onclick="selectInternational()" class="categorie categorie-int categorie-international-selected" style="height: 100%;">
                        <div class="international-icone">
                            <img class="img" src="secondtourassets/international.svg" alt="International">
                        </div>
                        <h1 class="mesure-titre">
                            International
                        </h1>
                        <div class="separateur separateur-int international-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSolidarite()" class="categorie categorie-sol categorie-solidarite-selected" style="height: 100%;">
                        <div class="solidarite-icone">
                            <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                        </div>
                        <h1 class="mesure-titre">
                            Solidarité
                        </h1>
                        <div class="separateur separateur-sol solidarite-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEconomie()" class="categorie categorie-econ categorie-economie-selected" style="height: 100%;">
                        <div class="economie-icone">
                            <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                        </div>
                        <h1 class="mesure-titre">
                            Économie
                        </h1>
                        <div class="separateur separateur-econ economie-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSecurite()" class="categorie categorie-sec categorie-securite-selected" style="height: 100%;">
                        <div class="securite-icone">
                            <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                        </div>
                        <h1 class="mesure-titre">
                            Sécurité
                        </h1>
                        <div class="separateur separateur-sec securite-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectJustice()" class="categorie categorie-jus categorie-justice-selected" style="height: 100%;">
                        <div class="justice-icone">
                            <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                        </div>
                        <h1 class="mesure-titre">
                            Justice
                        </h1>
                        <div class="separateur separateur-jus justice-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEducation()" class="categorie categorie-edu categorie-education-selected" style="height: 100%;">
                        <div class="education-icone">
                            <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                        </div>
                        <h1 class="mesure-titre">
                            Éducation
                        </h1>
                        <div class="separateur separateur-edu education-separateur separateur-selected"></div>
                    </div>
                </a>

            </div>

            <div class="columns">

                <a class="column">
                    <div onclick="selectAdministration()" class="categorie categorie-adm categorie-administration-selected" style="height: 100%;">
                        <div class="administration-icone">
                            <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                        </div>
                        <h1 class="mesure-titre">
                            Administration
                        </h1>
                        <div class="separateur separateur-adm administration-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSante()" class="categorie categorie-san categorie-sante-selected" style="height: 100%;">
                        <div class="sante-icone">
                            <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                        </div>
                        <h1 class="mesure-titre">
                            Santé
                        </h1>
                        <div class="separateur separateur-san sante-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEnergie()" class="categorie categorie-ene categorie-energie-selected" style="height: 100%;">
                        <div class="energie-icone">
                            <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                        </div>
                        <h1 class="mesure-titre">
                            Énergie
                        </h1>
                        <div class="separateur separateur-ene energie-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEcologie()" class="categorie categorie-ecol categorie-ecologie-selected" style="height: 100%;">
                        <div class="ecologie-icone">
                            <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                        </div>
                        <h1 class="mesure-titre">
                            Écologie
                        </h1>
                        <div class="separateur separateur-ecol ecologie-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectLogement()" class="categorie categorie-log categorie-logement-selected" style="height: 100%;">
                        <div class="logement-icone">
                            <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                        </div>
                        <h1 class="mesure-titre">
                            Logement
                        </h1>
                        <div class="separateur separateur-log logement-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectCulture()" class="categorie categorie-cult categorie-culture-selected" style="height: 100%;">
                        <div class="culture-icone">
                            <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                        </div>
                        <h1 class="mesure-titre">
                            Culture
                        </h1>
                        <div class="separateur separateur-cult culture-separateur separateur-selected"></div>
                    </div>
                </a>
            
            </div>
        </div>

        <div class="filters is-hidden-desktop" style="width: 80%;margin:auto; margin-top: 300px;">
        <h1 class="title-cat">Filtres</h1>
        <p class="filters-text">Toutes les catégories sont activées au chargement de la page, les mesures qui correspondent sont plus bas. Cliquer sur un bouton désaffiche la catégorie.</p>

            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectInternational()" class="categorie categorie-int categorie-international-selected" style="height: 100%;">
                        <div class="international-icone">
                            <img class="img" src="secondtourassets/international.svg" alt="International">
                        </div>
                        <h1 class="mesure-titre">
                            International
                        </h1>
                        <div class="separateur separateur-int international-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSolidarite()" class="categorie categorie-sol categorie-solidarite-selected" style="height: 100%;">
                        <div class="solidarite-icone">
                            <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                        </div>
                        <h1 class="mesure-titre">
                            Solidarité
                        </h1>
                        <div class="separateur separateur-sol solidarite-separateur separateur-selected"></div>
                    </div>
                </a>
            
            </div>

            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectEconomie()" class="categorie categorie-econ categorie-economie-selected" style="height: 100%;">
                        <div class="economie-icone">
                            <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                        </div>
                        <h1 class="mesure-titre">
                            Économie
                        </h1>
                        <div class="separateur separateur-econ economie-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSecurite()" class="categorie categorie-sec categorie-securite-selected" style="height: 100%;">
                        <div class="securite-icone">
                            <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                        </div>
                        <h1 class="mesure-titre">
                            Sécurité
                        </h1>
                        <div class="separateur separateur-sec securite-separateur separateur-selected"></div>
                    </div>
                </a>

            </div>
                
            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectJustice()" class="categorie categorie-jus categorie-justice-selected" style="height: 100%;">
                        <div class="justice-icone">
                            <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                        </div>
                        <h1 class="mesure-titre">
                            Justice
                        </h1>
                        <div class="separateur separateur-jus justice-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEducation()" class="categorie categorie-edu categorie-education-selected" style="height: 100%;">
                        <div class="education-icone">
                            <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                        </div>
                        <h1 class="mesure-titre">
                            Éducation
                        </h1>
                        <div class="separateur separateur-edu education-separateur separateur-selected"></div>
                    </div>
                </a>

            </div>

            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectAdministration()" class="categorie categorie-adm categorie-administration-selected" style="height: 100%;">
                        <div class="administration-icone">
                            <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                        </div>
                        <h1 class="mesure-titre">
                            Administration
                        </h1>
                        <div class="separateur separateur-adm administration-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectSante()" class="categorie categorie-san categorie-sante-selected" style="height: 100%;">
                        <div class="sante-icone">
                            <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                        </div>
                        <h1 class="mesure-titre">
                            Santé
                        </h1>
                        <div class="separateur separateur-san sante-separateur separateur-selected"></div>
                    </div>
                </a>

            </div>

            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectEnergie()" class="categorie categorie-ene categorie-energie-selected" style="height: 100%;">
                        <div class="energie-icone">
                            <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                        </div>
                        <h1 class="mesure-titre">
                            Énergie
                        </h1>
                        <div class="separateur separateur-ene energie-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectEcologie()" class="categorie categorie-ecol categorie-ecologie-selected" style="height: 100%;">
                        <div class="ecologie-icone">
                            <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                        </div>
                        <h1 class="mesure-titre">
                            Écologie
                        </h1>
                        <div class="separateur separateur-ecol ecologie-separateur separateur-selected"></div>
                    </div>
                </a>

            </div>

            <div class="columns is-mobile">

                <a class="column">
                    <div onclick="selectLogement()" class="categorie categorie-log categorie-logement-selected" style="height: 100%;">
                        <div class="logement-icone">
                            <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                        </div>
                        <h1 class="mesure-titre">
                            Logement
                        </h1>
                        <div class="separateur separateur-log logement-separateur separateur-selected"></div>
                    </div>
                </a>

                <a class="column">
                    <div onclick="selectCulture()" class="categorie categorie-cult categorie-culture-selected" style="height: 100%;">
                        <div class="culture-icone">
                            <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                        </div>
                        <h1 class="mesure-titre">
                            Culture
                        </h1>
                        <div class="separateur separateur-cult culture-separateur separateur-selected"></div>
                    </div>
                </a>
            
            </div>

        </div>

        <br>
        <a onclick="reverseEverything()"><button class="french-button"><i class="fa fa-refresh" aria-hidden="true"></i>
                Inverser la sélection</button></a>
        <br>
        
        <?php $db= mysqli_connect("localhost","root","","secondtour"); if (session_status() == PHP_SESSION_NONE) {session_start();}$db -> set_charset("utf8");

            // DÉBUT INTERNATIONAL

            echo '<div class="is-hidden-touch">';

            echo '<div class="international-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">International</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'international'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure international" style="height: 100%;">
                            <div class="international-icone">
                                <img class="img" src="secondtourassets/international.svg" alt="International">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur international-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">International</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'international'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure international" style="height: 100%;">
                            <div class="international-icone">
                                <img class="img" src="secondtourassets/international.svg" alt="International">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur international-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE INTERNATIONAL
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="international-columns">';

            echo '<h1 class="title-cat">International</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'international'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure international" style="height: 100%;">
                            <div class="international-icone">
                                <img class="img" src="secondtourassets/international.svg" alt="International">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur international-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'international'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure international" style="height: 100%;">
                            <div class="international-icone">
                                <img class="img" src="secondtourassets/international.svg" alt="International">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur international-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN INTERNATIONAL


            // DÉBUT SOLIDARITE

            echo '<div class="is-hidden-touch">';

            echo '<div class="solidarite-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Solidarité</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'solidarite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure solidarite" style="height: 100%;">
                            <div class="solidarite-icone">
                                <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur solidarite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Solidarité</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'solidarite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure solidarite" style="height: 100%;">
                            <div class="solidarite-icone">
                                <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur solidarite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE SOLIDARITE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="solidarite-columns">';

            echo '<h1 class="title-cat">Solidarité</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'solidarite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure solidarite" style="height: 100%;">
                            <div class="solidarite-icone">
                                <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur solidarite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'solidarite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure solidarite" style="height: 100%;">
                            <div class="solidarite-icone">
                                <img class="img" src="secondtourassets/solidarite.svg" alt="Solidarité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur solidarite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN SOLIDARITE


            // DÉBUT ECONOMIE

            echo '<div class="is-hidden-touch">';

            echo '<div class="economie-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Économie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'economie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure economie" style="height: 100%;">
                            <div class="economie-icone">
                                <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur economie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Économie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'economie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure economie" style="height: 100%;">
                            <div class="economie-icone">
                                <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur economie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE ECONOMIE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="economie-columns">';

            echo '<h1 class="title-cat">Économie</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'economie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure economie" style="height: 100%;">
                            <div class="economie-icone">
                                <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur economie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'economie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure economie" style="height: 100%;">
                            <div class="economie-icone">
                                <img class="img" src="secondtourassets/economie.svg" alt="Économie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur economie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN ECONOMIE


            // DÉBUT SECURITE

            echo '<div class="is-hidden-touch">';

            echo '<div class="securite-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Sécurité</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'securite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure securite" style="height: 100%;">
                            <div class="securite-icone">
                                <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur securite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Sécurité</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'securite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure securite" style="height: 100%;">
                            <div class="securite-icone">
                                <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur securite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE SECURITE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="securite-columns">';

            echo '<h1 class="title-cat">Sécurité</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'securite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure securite" style="height: 100%;">
                            <div class="securite-icone">
                                <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur securite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'securite'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure securite" style="height: 100%;">
                            <div class="securite-icone">
                                <img class="img" src="secondtourassets/securite.svg" alt="Sécurité">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur securite-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN SECURITE

            // DÉBUT JUSTICE

            echo '<div class="is-hidden-touch">';

            echo '<div class="justice-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Justice</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'justice'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure justice" style="height: 100%;">
                            <div class="justice-icone">
                                <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur justice-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Justice</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'justice'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure justice" style="height: 100%;">
                            <div class="justice-icone">
                                <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur justice-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE JUSTICE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="justice-columns">';

            echo '<h1 class="title-cat">Justice</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'justice'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure justice" style="height: 100%;">
                            <div class="justice-icone">
                                <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur justice-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'justice'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure justice" style="height: 100%;">
                            <div class="justice-icone">
                                <img class="img" src="secondtourassets/justice.svg" alt="Justice">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur justice-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN JUSTICE

            // DÉBUT EDUCATION

            echo '<div class="is-hidden-touch">';

            echo '<div class="education-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Éducation</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'education'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure education" style="height: 100%;">
                            <div class="education-icone">
                                <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur education-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Éducation</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'education'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure education" style="height: 100%;">
                            <div class="education-icone">
                                <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur education-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE EDUCATION
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="education-columns">';

            echo '<h1 class="title-cat">Éducation</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'education'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure education" style="height: 100%;">
                            <div class="education-icone">
                                <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur education-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'education'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure education" style="height: 100%;">
                            <div class="education-icone">
                                <img class="img" src="secondtourassets/education.svg" alt="Éducation">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur education-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN EDUCATION

            // DÉBUT ADMINISTRATION

            echo '<div class="is-hidden-touch">';

            echo '<div class="administration-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Administration</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'administration'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure administration" style="height: 100%;">
                            <div class="administration-icone">
                                <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur administration-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Administration</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'administration'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure administration" style="height: 100%;">
                            <div class="administration-icone">
                                <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur administration-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE ADMINISTRATION
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="administration-columns">';

            echo '<h1 class="title-cat">Administration</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'administration'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure administration" style="height: 100%;">
                            <div class="administration-icone">
                                <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur administration-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'administration'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure administration" style="height: 100%;">
                            <div class="administration-icone">
                                <img class="img" src="secondtourassets/administration.svg" alt="Administration">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur administration-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN ADMINISTRATION

            // DÉBUT SANTE

            echo '<div class="is-hidden-touch">';

            echo '<div class="sante-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Santé</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'sante'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure sante" style="height: 100%;">
                            <div class="sante-icone">
                                <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur sante-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Santé</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'sante'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure sante" style="height: 100%;">
                            <div class="sante-icone">
                                <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur sante-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE SANTE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="sante-columns">';

            echo '<h1 class="title-cat">Santé</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'sante'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure sante" style="height: 100%;">
                            <div class="sante-icone">
                                <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur sante-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'sante'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure sante" style="height: 100%;">
                            <div class="sante-icone">
                                <img class="img" src="secondtourassets/sante.svg" alt="Santé">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur sante-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN SANTE

            // DÉBUT ENERGIE

            echo '<div class="is-hidden-touch">';

            echo '<div class="energie-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Énergie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'energie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure energie" style="height: 100%;">
                            <div class="energie-icone">
                                <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur energie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Énergie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'energie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure energie" style="height: 100%;">
                            <div class="energie-icone">
                                <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur energie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE ENERGIE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="energie-columns">';

            echo '<h1 class="title-cat">Énergie</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'energie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure energie" style="height: 100%;">
                            <div class="energie-icone">
                                <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur energie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'energie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure energie" style="height: 100%;">
                            <div class="energie-icone">
                                <img class="img" src="secondtourassets/energie.svg" alt="Énergie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur energie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN ENERGIE

            // DÉBUT ECOLOGIE

            echo '<div class="is-hidden-touch">';

            echo '<div class="ecologie-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Écologie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'ecologie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure ecologie" style="height: 100%;">
                            <div class="ecologie-icone">
                                <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur ecologie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Écologie</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'ecologie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure ecologie" style="height: 100%;">
                            <div class="ecologie-icone">
                                <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur ecologie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE ECOLOGIE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="ecologie-columns">';

            echo '<h1 class="title-cat">Écologie</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'ecologie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure ecologie" style="height: 100%;">
                            <div class="ecologie-icone">
                                <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur ecologie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'ecologie'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure ecologie" style="height: 100%;">
                            <div class="ecologie-icone">
                                <img class="img" src="secondtourassets/ecologie.svg" alt="Écologie">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur ecologie-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN ECOLOGIE

            // DÉBUT LOGEMENT

            echo '<div class="is-hidden-touch">';

            echo '<div class="logement-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Logement</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'logement'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure logement" style="height: 100%;">
                            <div class="logement-icone">
                                <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur logement-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Logement</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'logement'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure logement" style="height: 100%;">
                            <div class="logement-icone">
                                <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur logement-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE LOGEMENT
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="logement-columns">';

            echo '<h1 class="title-cat">Logement</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'logement'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure logement" style="height: 100%;">
                            <div class="logement-icone">
                                <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur logement-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'logement'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure logement" style="height: 100%;">
                            <div class="logement-icone">
                                <img class="img" src="secondtourassets/logement.svg" alt="Logement">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur logement-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN LOGEMENT

            // DÉBUT CULTURE

            echo '<div class="is-hidden-touch">';

            echo '<div class="culture-columns">';

            echo '<div class="columns">';

            echo '<div class="column column-lepen">';

            echo '<h1 class="title-cat">Culture</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Marine Le Pen</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'culture'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure culture" style="height: 100%;">
                            <div class="culture-icone">
                                <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur culture-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '<div class="column column-macron">';

            echo '<h1 class="title-cat">Culture</h1>';

            echo '<h1 class="title-cat candidat-cat desktop-candidat">Emmanuel Macron</h1>';

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'culture'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="columns">';

            $i = 0;

            while($row = $query->fetch_assoc()){
                if($i == 3){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns">';
                }

                echo '<div class="column">
                        <div class="mesure culture" style="height: 100%;">
                            <div class="culture-icone">
                                <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur culture-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 3 - $i;

            if ($remaining != 3){
                for ($n = $remaining; $n > 0; $n--) {
                    echo '<div class="column"></div>';
                }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // MOBILE CULTURE
            echo '<div class="is-hidden-desktop" style="width: 80%;margin:auto;">';

            echo '<div class="culture-columns">';

            echo '<h1 class="title-cat">Culture</h1>';

            echo '<div class="columns is-mobile">';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'lepen' AND thematique LIKE 'culture'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Le Pen</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure culture" style="height: 100%;">
                            <div class="culture-icone">
                                <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur culture-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            $i = 0;

            $statement = $db->prepare("SELECT * FROM mesures WHERE candidat LIKE 'macron' AND thematique LIKE 'culture'");
            $statement->execute();
            $query = $statement->get_result();

            echo '<div class="column">';

            echo '<h1 class="title-cat mobile-names candidat-cat">Macron</h1>';

            echo '<div class="columns is-mobile">';

            while($row = $query->fetch_assoc()){
                if($i == 1){
                    $i = 0;
                    echo '</div>';
                    echo '<div class="columns is-mobile">';
                }

                echo '<div class="column">
                        <div class="mesure culture" style="height: 100%;">
                            <div class="culture-icone">
                                <img class="img" src="secondtourassets/culture.svg" alt="Culture">
                            </div>
                            <h1 class="mesure-titre">
                                '.$row['nom'].'
                            </h1>
                            <div class="separateur culture-separateur"></div>
                            <p class="descriptif">'.$row['descriptif'].'</p>
                        </div>
                    </div>';

                $i+=1;
            }

            $remaining = 1 - $i;

            if ($remaining != 1){
                for ($n = $remaining; $n > 0; $n--) {
                echo '<div class="column"></div>';
            }
            }

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';

            echo '</div>';


            // FIN CULTURE
        ?>
    </div>
    <br><br>
</body>

</html>