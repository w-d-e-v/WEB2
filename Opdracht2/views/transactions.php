<!DOCTYPE html>
<html>
    <head>
        <title>Transacties</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
            .inkomsten {
                color: green;
            }
            .uitgaven {
                color: red;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>Check #</th>
                    <th>Beschrijving</th>
                    <th>Bedrag</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $totaalIn = 0; //zet de counters op 0
                    $totaalUit = 0; //uit ook


                    foreach ($data as $row){
                        echo '<tr>';
                        foreach ($row as $cell){
                            echo '<td>' . $cell . '</td>';
                        }
                        $bedrag = $row[3]; //pak waarde 3 uit het array
                        if ($bedrag > 0 ) { //check of het boven of onder 0 is
                            $totaalIn += $bedrag; //tel bij totaal op
                            echo '<td class="inkomsten">' . $bedrag . '</td>'; //plak het in de cel
                        }
                        else {  //anders
                            $totaalUit += $bedrag; //tel het negatieve bedrag op
                            echo '<td class="uitgaven">'. $bedrag . '</td>'; //plak het dan rood in de cel
                        }
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Totale Inkomsten:</th>
                    <td class="inkomsten"><?php echo $totaalIn; ?></td> <!---dit is altijd groen :)--> 
                </tr>
                <tr>
                    <th colspan="3">Totale Uitgaven:</th>
                    <td class="uitgaven"><?php echo $totaalUit; ?></td> <!---dit is altijd rood-->
                </tr>
                <tr>
                    <th colspan="3">Netto totaal:</th>
                    <td>
                        <?php 
                            $eindTotaal = $totaalIn + $totaalUit; //tel de totalen op
                                if ($eindTotaal > 0) { //als het positief is willen we een groen kleurtje
                                    echo '<div class="inkomsten">' . $eindTotaal . '</div>';
                            }
                            else { //en anders een rode
                                echo '<div class="uitgaven">' . $eindTotaal . '</div>';
                            } 
                    ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
