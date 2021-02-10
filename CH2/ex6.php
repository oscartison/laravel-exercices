<?php
function afficherTitre($mois, $annee) {
    $mois--;
        $noms = array(
            "", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", 
            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
        );
        echo "<tr><th colspan=7>$noms[$mois] $annee</th></tr>";
    }

   
    function afficherEntete() {
        $jours = ["Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di"];
        echo '<tr>';
        foreach ($jours as $jour) {
            echo "<td>$jour</td>";
        }
        echo '</tr>';
    
    }

    function afficherMois($décalage, $nombreJours) {
        $décalage++;
    echo '<tr>';
    for ($i = 0; $i < $décalage; $i++) {
        echo '<td></td>';
    }

    $jourActuel = 1;
    while ($jourActuel <= $nombreJours) {
        echo "<td class='day'>$jourActuel</td>";
        if (($jourActuel + $décalage) % 7 == 0) {
            echo '</tr><tr>';
        }
        $jourActuel++;
    }
    echo '</tr>';
}


    function estBissextile($année) {
        return ((($année % 4) == 0) && (($année % 100 != 0) || ($année % 400 == 0)));
    }

    function nombreJours($mois, $année) {
        $nbJours = 31;
        if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) {
            $nbJours = 30;
        } else if ($mois == 2) {
            if (estBissextile($année)) {
                $nbJours = 29;
            } else {
                $nbJours = 28;
            }
        }
        return $nbJours;
    }

    function numéroJour($jour, $mois, $année) {
        //Calcul basé sur la congruence de Zeller
        // https://en.wikipedia.org/wiki/Zeller's_congruence

        
        $annéeCorrigée = $année;
        $m = $mois;
        $q = $jour;

        if ($mois == 1 || $mois == 2) {
            $annéeCorrigée = $année - 1;
            $m = $mois + 12;
        }

        $j = $annéeCorrigée / 100;
        $k = $annéeCorrigée % 100;

        return ($q + (($m + 1) * 13) / 5 + $k + $k / 4 + $j / 4 + 5 * $j + 5) % 7;
    }

    function afficherCalendrier
                            ($mois, $année) {
        echo '<table>';
        afficherTitre($mois, $année);
        afficherEntete();
        $nbJours = nombreJours($mois, $année);
        $décalage = numéroJour(1, $mois, $année);
        afficherMois($décalage, $nbJours);
        echo '</table>';
    }
    
    afficherCalendrier(5,2021);
    
    