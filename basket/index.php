<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $partite = [
          ["squadraCasa" => "Olimpia Milano",
           "squadraOspite" => "Cantù",
           "puntiSquadraCasa" => 55,
           "puntiSquadraOspite" => 60,
          ],
          ["squadraCasa" => "Team1",
           "squadraOspite" => "Team2",
           "puntiSquadraCasa" => 40,
           "puntiSquadraOspite" => 50,
          ],
          ["squadraCasa" => "Team3",
           "squadraOspite" => "Team4",
           "puntiSquadraCasa" => null,
           "puntiSquadraOspite" => 88,
          ],
          ["squadraCasa" => "Team5",
           "squadraOspite" => "Team6",
           "puntiSquadraCasa" => 23,
           "puntiSquadraOspite" => 50,
          ],
          ["squadraCasa" => "Team4",
           "squadraOspite" => "Team633",
         ],
      ];

    ?>

    <ul>
      <?php foreach ($partite as $partita) { ?>
        <li>
          <?php echo $partita["squadraCasa"]; ?>
          -
          <?php echo $partita["squadraOspite"]; ?>
          |
          <?php if (!empty($partita['puntiSquadraCasa']) && !empty($partita['puntiSquadraCasa'])) { ?>
            <?php echo $partita["puntiSquadraCasa"]; ?>
            -
            <?php echo $partita["puntiSquadraOspite"]; ?>
          <?php } else { ?>
            partita non ancora disputata
          <?php } ?>
        </li>
      <?php  } ?>
    </ul>
  </body>
</html>
