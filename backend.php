        <?php
            //var_dump($_GET)
            if (isset($_POST["szemetem"])) {
                $kivSzemet = $_POST["szemetem"];
                if ($kivSzemet == "papir" || $kivSzemet == "tejes doboz") {
                    echo "Kék színű gyüjtő.";
                }
                elseif ($kivSzemet == "bab konzerv" || $kivSzemet == "nylon csomagolás") {
                    echo "Sárga gyüjtő.";
                }
                else {
                    echo "Nem színes kuka.";
                }

            }
        ?>