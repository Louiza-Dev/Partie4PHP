<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PhP - Partie 4</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <div class="row">
         <h1 class="col-12 text-center border border-dark">Part2</h1>
<!-- EXoooooooooooooo111111111111111111111111111111111111111111111 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo1</h2>
            <p>1ér Method</p>
            <?php
            function moiMars() {
              // ont crée un tableau classique
              $mois = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
            // je stock la languer de mon tab dans une variable
              $moiIndex = count($mois);
              // tantque je dépasse pas la longueur de mon tableau
              for($i = 0; $i < $moiIndex; $i++){
                // je retourne une chain de caract suivi de la troisèime val de mon tab
              return 'Le mois à afficher est: '. $mois[2];
              }
            }
            // j'affiche ma fonction en l'applant dans un echo
            echo moiMars();
            ?>
            <p>2èm Method</p>
            <?php
            $mois = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
            $moiIndex = $mois[2];
            function moisMars($tab, $tabLong) {
              $tab[] = array();
              $tabLong = $tab[2];
                return 'Le mois à afficher est: '. $tabLong;
            }
            echo moisMars($mois, $moiIndex);
            ?>
         </div>
<!-- EXoooooooooo22222222222222222222222222222222222222222222222222 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo2</h2>
            <p>Method1</p>
            <?php
            $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
            $langLong = count($lang);
            for ($i =0; $i < $langLong; $i++) {
              ?>
              <ul>
              <li><?= $lang[$i] ?></li>
              </ul>
              <?php
            }
            ?>
            <p>Method2</p>
            <?php
            $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
            foreach ($lang as $key => $value) {
              echo $key. ' => ' .$value. ',';
            }
            ?>
         </div>
<!-- EXoooooooooooooooooooooo333333333333333333333333333333 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo3</h2>
            <p>Method1</p>
            <?php
            $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
                // $langLong = count($lang);
               echo $lang[2];
            // }
            ?>
            <p>Method2</p>
            <?php
            $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
            $cles = array_keys($lang);
              echo $lang[$cles[2]];

            ?>
         </div>
<!-- EXooooooooooo44444444444444444444444444444444444444444 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo4</h2>
            <p>Method1</p>
            <?php
            $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
            $result = array_pad($lang, 6, 'C++');
               echo $result[5];
            // }
            ?>
            <p>Method2</p>
            <?php
            // $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
            // $cles = array_keys($lang);
            //   echo $lang[$cles[2]];

            ?>
         </div>
<!-- EXoooooooooooooo555555555555555555555555555555555 -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo5</h2>
          <p>Method1</p>
          <?php
          $depart = array(15 => "TiziOuzou" ,75 => "Paris",69 => "Lyon", 13 => "Marseille",21 => "Dijon");
            foreach($depart as $cle=>$valeur){
            echo $cle." : ".$valeur."<br>";
            }
          ?>
          <p>Method2</p>
          <?php
          // $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          // $cles = array_keys($lang);
          //   echo $lang[$cles[2]];

          ?>
         </div>
         <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo++</h2>
          <p>Method1</p>
          <?php
          $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          $result = array_pad($lang, 6, 'C++');
             echo $result[5];
          // }
          ?>
          <p>Method2</p>
          <?php
          // $lang = array(0 => "HTML",1 => "CSS", 2 => "JS",3 => "PHP", 4 => "SQL");
          // $cles = array_keys($lang);
          //   echo $lang[$cles[2]];

          ?>
         </div>

      </div>
   </div>
</body>
</html>
