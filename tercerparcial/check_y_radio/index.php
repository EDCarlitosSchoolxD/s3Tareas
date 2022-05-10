<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
</head>


<body>
    <style>
        form {
            display: flex;
            justify-content: center;
            gap: 100px;
            }
    </style>

    <?php
    $datosRadio = (empty($_POST['radio']) || empty($_POST['valorRadio']));

    $euroRadio = 0;
    $dolarRadio = 0;
    $yuanRadio = 0;
    if (!$datosRadio) {
        $radioSelect = $_POST['radio'];
        $valueRadio = $_POST['valorRadio'];

        if ($radioSelect == "euro") {
            $euroRadio = $valueRadio *  0.045;
        } elseif ($radioSelect == "dolar") {
            $dolarRadio = $valueRadio *  0.050;
        } elseif ($radioSelect == "yuan") {
            $yuanRadio = $valueRadio * 0.32;
        }
    } else {
        $radioSelect = "";
        $valueRadio = "";
        $salida = "";
    }

    if(isset($_POST['valorCheck'])){
        $valorCheck = $_POST['valorCheck'];
    }else{
        $valorCheck = 0;
    }


    function checkBox($post, $valorMoneda)
    {
        if (isset($_POST[$post]) && isset($_POST['valorCheck'])) {
            $valorCheck = $_POST['valorCheck'];
            $total = $valorCheck *  $valorMoneda;
        } else {
            $total = 0;
            $valorCheck = 0;
        }
        return $total;
    }

    function checkBoxChecked($post){
        if (isset($_POST[$post])){
            $checked = $_POST[$post];
        } else {
            $checked = "";
        }
        return (($checked == "$post"?"checked":""));
    }

    ?>

    
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <div>
                <input value="<?=$valueRadio?>" type="number" required name="valorRadio" placeholder="Valor">

                <div>
                    <label for="">Dolar</label>
                    <input <?=(($radioSelect == "dolar"?"checked":""));?>  type="radio" name="radio" value="dolar">
                    <input type="text" value="<?= $dolarRadio ?>">

                </div>



                <div>
                    <label for="">Euro</label>
                    <input <?=(($radioSelect == "euro"?"checked":""));?>  type="radio" name="radio" value="euro">
                    <input type="text" value="<?= $euroRadio ?>">

                </div>


                <div>
                    <label for="">Yuan</label>
                    <input <?=(($radioSelect == "yuan"?"checked":""));?>  type="radio" name="radio" value="yuan">
                    <input type="text" value="<?= $yuanRadio ?>">

                </div>


            </div>

                <input type="submit" value="Enviar" style="display: inline-block;width: 100px;"">

            <div>
                <input value="<?=$valorCheck?>" type="number" required name="valorCheck" placeholder="Valor">

                <div>
                    <label for="">Dolar</label>
                    <input <?=checkBoxChecked('dolar')?> type="checkbox" name="dolar" value="dolar">
                    <input type="text" value="<?= checkBox('dolar', 0.050) ?>">
                </div>



                <div>
                    <label for="">Euro</label>
                    <input <?=checkBoxChecked('euro')?> type="checkbox" name="euro" value="euro">
                    <input type="text" value="<?= checkBox('euro', 0.45) ?>">
                </div>


                <div>
                    <label for="">Yuan</label>
                    <input <?=checkBoxChecked('yuan')?> type="checkbox" name="yuan" value="yuan">
                    <input type="text" value="<?= checkBox('yuan', 0.32) ?>">
                </div>

            </div>



        </form>
    

</body>

</html>