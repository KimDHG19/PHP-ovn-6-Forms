
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulär övning</title>

    <link rel="stylesheet" href="form_ovn.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="dist/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div id="container">

    <header>
        <h1>Reservering</h1>
    </header>

    <div id="content">

        <aside>
            <h3>Kontakta oss:</h3>
            <ul>
                <li>kontaktuppgifter</li>
            </ul>
        </aside>

        <article id="main_content">

            <form id="ex_form" action="" method="post">
                <fieldset>
                    <legend>Kontaktuppgifter</legend>
                    <p><label for="fnamn">Förnamn <em>*</em></label>
                        <input type="text" name="fnamn" id="fnamn" >
                        <label for="enamn">Efternamn <em>*</em></label>
                        <input type="text" name="enamn" id="enamn" ></p>


                    <p class="clear"><label for="epost">E-post <em>*</em></label>
                        <input type="email" name="epost" id="epost" >
                        <label for="tel">Telefonnummer <em>*</em></label>
                        <input type="text" name="tel" id="tel" placeholder="+XXX XXXXXXX" ></p>
                </fieldset>
                <fieldset>
                    <legend>Rum</legend>
                    <p><label for="adults">Fullvuxna <em>*</em></label>
                        <select name="adults" id="adults" >
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="children">Barn <em>*</em></label>
                        <select name="children" id="children" >
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="room">Rumtyp <em>*</em></label>
                        <select name="room" id="room" >
                            <option value="0">Standard</option>
                            <option value="1">Deluxe</option>
                            <option value="2">Luxury</option>
                        </select></p>

                    <p class="clear">
                        <label for="arrival">Ankomst <em>*</em></label>
                        <input type="date" min="2013-12-12" max="2015-01-01" name="arrival" id="arrival" >

                        <label for="departure">Avgång <em>*</em></label>
                        <input type="date" min="2013-12-12" max="2015-01-01" name="departure" id="departure" >

                    </p>

                </fieldset>
                <fieldset>
                    <legend>Info</legend>
                    <p><label for="msg">Meddelande</label>
                        <textarea name="msg" id="msg"></textarea></p>
                    <p><input type="checkbox" name="newsletter" id="newsletter">
                        <label for="newsletter">Ja tack, jag vill ha nyhetsbrev!</label></p>
                </fieldset>
                <p><input type="submit" name="reserve" value="Reservera!"></p>
            </form>
			<?php require ('index.php') ?>
        </article> <!-- end #main_content -->

    </div> <!-- end #content -->


</div> <!-- end #container -->

</body>
</html>

