<?php

function patikrintiDuomenis($vardas, $pavarde, $komanda, $amzius) {
    if (!preg_match("/^[a-zA-Z]{2,}$/", $vardas)) {
        return false;
    }
    if (!preg_match("/^[a-zA-Z]{2,}$/", $pavarde)) {
        return false;
    }
    if (!preg_match("/^[a-zA-Z0-9 ]+$/", $komanda)) {
        return false;
    }
    if (!preg_match("/^(1[89]|[2-3][0-9]|40)$/", $amzius)) {
        return false;
    }
    return true;
}

function tikrintiArZaidejasYra($vardas, $pavarde, $komanda, $amzius) {
    $failoKelias = "zaidejai.txt";
    if (file_exists($failoKelias)) {
        $zaidejai = file($failoKelias);
        foreach ($zaidejai as $zaidejas) {
            $zaidejoDuomenys = explode(",", $zaidejas);
            if ($zaidejoDuomenys[0] === $vardas && $zaidejoDuomenys[1] === $pavarde && $zaidejoDuomenys[2] === $komanda && $zaidejoDuomenys[3] === $amzius) {
                return true;
            }
        }
    }
    return false;
}

function issaugotiZaidejoDuomenis($vardas, $pavarde, $komanda, $amzius) {
    if (!tikrintiArZaidejasYra($vardas, $pavarde, $komanda, $amzius)) {
        $failoKelias = "zaidejai.txt";
        $duomenys = "$vardas,$pavarde,$komanda,$amzius\n";
        file_put_contents($failoKelias, $duomenys, FILE_APPEND);
    }
}

function rodytiZaidejus() {
    $failoKelias = "zaidejai.txt";
    if (file_exists($failoKelias)) {
        $zaidejai = file($failoKelias);
        foreach ($zaidejai as $zaidejas) {
            $zaidejoDuomenys = explode(",", $zaidejas);
            echo "<tr>";
            echo "<td>$zaidejoDuomenys[0]</td>";
            echo "<td>$zaidejoDuomenys[1]</td>";
            echo "<td>$zaidejoDuomenys[2]</td>";
            echo "<td>$zaidejoDuomenys[3]</td>";
            echo "<td><a href='inc/kortele.php?vardas=$zaidejoDuomenys[0]&pavarde=$zaidejoDuomenys[1]&komanda=$zaidejoDuomenys[2]&amzius=$zaidejoDuomenys[3]' class='btn btn-primary btn-sm rodyti-informacija'>Daugiau..</a></td>";
            echo "</tr>";
        }
    }
}
?>
