<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <?php
        $Title = "RDF";
        $Header = "Home";
        $FName = "Reymond";
        $LName = "Ferrero";
        echo "<title>" .$Title. "</title>";
        ?>
    </head>
    <body bgcolor = #1F1F1F>
        <div class = 'pgmargin'>
            <div>
                <img class = 'logo' id = 'logo1' src = "Images/gemini.png">
            </div>
            <?php
            echo "<h2 id = 'sideTitle'>" . $Title . "</h2>"
            ?>
            <div id = "boxTit">
                <?php
                echo "<h1 class = 'title'>" . $FName . "<br>" . $LName. "</h1>";
                ?>
                <div class = 'line' id = 'line1'>
                <a href="https://www.facebook.com/reymond.ferrero.2024/" target="_blank" rel="noopener noreferrer">
                    <img class = 'logo' id = 'logo2' src = "Images/fb.png">
                <a href="https://www.linkedin.com/in/reymond-ferrero-6419a526b/" target="_blank" rel="noopener noreferrer">
                    <img class = 'logo' id = 'logo3' src = "Images/linkedin.png">
                <a href="https://github.com/Reymond12345" target="_blank" rel="noopener noreferrer">
                    <img class = 'logo' id = 'logo4' src = "Images/github.png">
                </div>
            </div>
            <img class = 'logo' id = 'pic1' src = "Images/ako.png">
            <div class = 'box' id="box1">
                <?php
                echo "<p class='ctext1' id = 'text1'> Background </p>";
                ?>
            </div>
            <div class = 'box' id="box2">
                <?php    
                echo "<p class = 'ctext1' id = 'text2'> Data Analyst and Web Developer, based in the Philippines.</p>";
                ?>
            </div>
            <div class = 'box' id="box3">
                <?php
                echo "<p class = 'ctext1' id = 'text3'> A student at the 
                University of St. La Salle pursuing a Bachelor of Science in Computer Science, majoring in Game Development, with a strong passion for technology and innovation.</p>";
                ?>
            </div>
        </div>
        <div id = 'graySect'>
            
        </div>
    </body>
</html>