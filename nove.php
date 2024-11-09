<?php
    session_start();

    if (isset($_SESSION['uziv']))
        $uziv = $_SESSION['uziv'];
    else{
        header("Location: login.html");
        exit();    
    }
    require_once 'server.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "";

        if (isset($_POST['subOdeslat'])) {
            echo '<script>
                        alert("Žádost byla uspěšně odeslána");
                        window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                  </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systém povolení na práci</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="header">
        <h1>NOVÉ POVOLENÍ</h1>
    </div><br>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Rizikovost</th>
                    <th>Interní</th>
                    <th>Externí</th>
                    <th>Počet osob</th>
                    <th>Od</th>
                    <th>Do</th>
                    <th>Povolení</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="range" name="riziko"></td>
                    <td><input type="text" name="interni"></td>
                    <td><input type="text" name="externi"></td>
                    <td><input type="text" name="pocetOs"></td>
                    <td><input type="date" name="povolOd"></td>
                    <td><input type="date" name="povolDo"></td>
                    <td rowspan="5">
                        <div class="panel">
                            <label class="container">K práci na zařízení
                                <input type="checkbox" name="prace_na_zarizeni" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Ke svařování a práci s otevřeným ohněm
                                <input type="checkbox" name="svarovani_ohen" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Ke vstupu do zařízení nebo pod úroveň terénu
                                <input type="checkbox" name="vstup_zarizeni_teren" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">K práci v prostředí s nebezpečím výbuchu
                                <input type="checkbox" name="prostredi_vybuch" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">K předání a převzetí zařízení do opravy a do provozu
                                <input type="checkbox" name="predani_prevzeti_zarizeni" value="1">
                                <span class="checkbox"></span>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Provoz</th>
                    <td><input type="text" name="provoz"></td>
                    <th>Název(číslo) objektu</th>
                    <td><input type="text" name="objekt"></td>
                    <td><input type="time" name="hodOd"></td>
                    <td><input type="time" name="hodDo"></td>
                </tr>
                <tr>
                    <th>Název zařízení</th>
                    <td colspan="2"><input type="text" name="NZarizeni"></td>
                    <th>Číslo zařízení</th>
                    <td colspan="2"><input type="text" name="CZarizeni"></td>
                </tr>
                <tr>
                    <th>Popis, druh a rozsah práce</th>
                    <td colspan="5"><input type="text" name="prace"></td>
                </tr>
                <tr>
                    <th>Seznámení s riziky pracoviště dle karty č.</th>
                    <td colspan="5"><input type="text" name="rizikaPrac"></td>
                </tr>   
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th colspan="3">1. Příprava zařízení k opravě</th>
                    <th colspan="6">Bližší určení</th>
                </tr>
                <tr>
                    <th colspan="9">Zařízení bylo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="10">
                        <div class="panel">
                            <label class="container">Vyčištění od zbytků
                                <input type="checkbox" name="vycisteni" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Vypařené
                                <input type="checkbox" name="vyparene" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Vypláchnuté vodou
                                <input type="checkbox" name="vyplachnute" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Plyn vytěsnen vodou
                                <input type="checkbox" name="plyn_vytesnen" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Vyvětrané
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Profoukané dusíkem
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Profoukané vzduchem
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Odpojeno od elektrického proudu
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Oddělené záslepkami
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                            <label class="container">Jinak zapezpečené
                                <input type="checkbox" name="vyvetrane" value="1">
                                <span class="checkbox"></span>
                            </label>
                        </div>
                    </td>
                    <td colspan="2"></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>hodin:</td>
                    <td><input type="time" name="" id=""></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>hodin:</td>
                    <td><input type="time" name="" id=""></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>hodin:</td>
                    <td><input type="time" name="" id=""></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>hodin:</td>
                    <td><input type="time" name="" id=""></td>
                    <td colspan="6"><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Kým</td>
                    <td colspan="3"><input type="text" name="" id=""></td>
                    <td>Podpis</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Kým</td>
                    <td colspan="3"><input type="text" name="" id=""></td>
                    <td>Podpis</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>Jak</td>
                    <td colspan="5"><input type="text" name="" id=""></td>
                </tr>
            </tbody>
        </table>
        <div class="submit-container">
            <input type="submit" value="Odeslat" name="subOdeslat">
        </div>
    </form><br><br><br><br><br>
    <div class="footer">
        <p style="margin-left: 1%;">Přihlášený uživatel: <?php echo $uziv ?> </p>
        <img src="Indorama.png" style="margin-right: 5.7%;">
        <a href="login.html">
            <img src="logout_icon.png" width="78%" style="cursor: pointer;">
        </a>
    </div>
    <style>
        body {
            align-items: center;
        }
        .header{
            background-color: #b6c7e2;
            width: 100%;
            padding: 0.5% 0;
            text-align: center;
        }
        table{
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #bcd4ef;
            margin: 0 auto;
            width: 95%;
        }
        td{
            text-align: left;
        }
        th{
            text-align: center;
        }
        td input{
            width: 90%;
            padding: 5px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        .submit-container {
            margin: 10px 50px;
            text-align: right;
        }

        .submit-container input {
            background-color: #003366;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .submit-container input:hover {
            background-color: #d40000;
        }

        .panel {
            padding: 0 18px;
            margin: 10px 0;
        }
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
        }
        .container input {
            display: none;
        }
        .checkbox {
            position: absolute;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }
        .container:hover input ~ .checkbox {
            background-color: #ccc;
        }
        .container input:checked ~ .checkbox {
            background-color: #2196F3;
        }
        .checkbox:after {
            content: "";
            position: absolute;
            display: none;
        }
        .container input:checked ~ .checkbox:after {
            display: block;
        }
        .container .checkbox:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }
    </style>
</body>
</html>