<h1>Contato</h1>
<?php
if (isset($_POST['hidden']) && is_string($_POST['hidden'])):

    // Inicializa o array
    $empty = [];

    if (empty(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING))):

        $empty[] = 'Preencha o Campo Nome';

    else:

        $Name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    endif;

    if (empty(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING))):

        $empty[] = 'Preencha o Campo Email';

    else:

        $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    endif;

    if (empty(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING))):

        $empty[] = 'Preencha o Campo Assunto';

    else:

        $Subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);

    endif;

    if (empty(filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING))):

        $empty[] = 'Preencha o Campo Mensagem';

    else:

        $Msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);

    endif;

    if (empty($empty)):

        echo "<h3 class='text-center'>Recebemos seu contato com sucesso!</h3>" . '<p>Dados:</p>' . $Name . '<br>' . $Email . '<br>' . $Subject . '<br>' . $Msg;

    else:

        foreach ($empty as $key => $value) {

            echo "<p class='text-center'>{$value}</p>";
        }

    endif;

endif;
?>

<form class="form-horizontal" method="POST" id="frmcontato">
    <div class="form-group">
        <label for="nome" class="col-sm-2 control-label">Nome:</label>
        <div class="col-sm-10">
            <input type="text" name="name"  class="form-control" id="name"  placeholder="Nome">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
        </div>
    </div>
    <div class="form-group">
        <label for="assunto" class="col-sm-2 control-label">Assunto</label>
        <div class="col-sm-10">
            <input type="text" name="subject" class="form-control" id="subject"  placeholder="Assunto">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <textarea name="msg" id="msg" class="form-control" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Contato</button>
            <input type="hidden" name="hidden" value = "submited" id="hidden"/>
        </div>
    </div>
</form>