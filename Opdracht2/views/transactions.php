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
                        $bedrag = $row[3];
                        if ($bedrag > 0 ) {
                            $totaalIn += $bedrag;
                            echo '<td class="inkomsten">' . $bedrag . '</td>';
                        }
                        else {
                            $totaalUit += $bedrag;
                            echo '<td class="uitgaven"'. $bedrag . '</td>';
                        }
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Totale Inkomsten:</th>
                    <td class="inkomsten"><?php echo $totaalIn; ?></td>
                </tr>
                <tr>
                    <th colspan="3">Totale Uitgaven:</th>
                    <td class="uitgaven"><?php echo $totaalUit; ?></td>
                </tr>
                <tr>
                    <th colspan="3">Netto totaal:</th>
                    <td><!-- HIER CODE --></td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
