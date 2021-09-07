<!-- Formulário de Registro -->
<form id="arcandius_user_new_account" class="newaccount-form" action="javascript:void(0);" method="POST" accept-charset="utf-8" enctype='multipart/form-data'>

    <input type="hidden" name="user_token" value="<?php echo $_SESSION['user_token'] ?>" />

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group" style="margin-left: 15px;">
                    <div class="input-group-addon mobile-none">
                        <i class="fa fa-puzzle-piece black-color icon-size">*</i>
                    </div>
                    <div class="g-recaptcha g-recaptcha_ar text-center" data-sitekey="6Lde5kYcAAAAAMV7lNuwlDMwPV9qJaO2qXwlk2oG">
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user-o black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_full_name" type="text text-capitalize" class="form-control required input-lg" id="user_name" placeholder="Nome Completo*">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-slack black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_username" type="text" class="form-control required input-lg" id="user_username" placeholder="Username*" data-toggle="tooltip" data-placement="left" data-original-title="Utilizado no Login">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-lock black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_password" type="password" class="form-control pass required input-lg" id="user_password" placeholder="Senha*">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-unlock-alt black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_password_confirmation" type="password" class="form-control pass required input-lg" id="user_password_confirmation" placeholder="Confirme a senha*">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_email" type="text" class="form-control required input-lg text-lowercase" id="user_email" placeholder="@Email*">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-whatsapp black-color icon-size">*</i>
                    </div>
                    <input autocomplete="off" name="user_whatsapp" type="text" class="form-control required input-lg phone_with_ddd" id="user_whatsapp" placeholder="WhatsApp*" data-toggle="tooltip" data-placement="left" data-original-title="WhatsApp ou Telefone">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group error-land">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-key black-color icon-size" data-toggle="tooltip" data-placement="left" data-original-title="Mínimo 6 caracteres">
                            *
                        </i>
                    </div>
                    <input autocomplete="off" name="user_securytitoken" type="text" class="form-control required input-lg text-lowercase" id="user_securytitoken" placeholder="Chave de segurança*" data-toggle="tooltip" data-placement="left" data-original-title="Seu Token(Apenas Letras) min: 6">
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-6 text-center">
            <button type="button" class="btn btn-primary no-bg apply-effect btn-close">
                <span aria-hidden="true">
                    <i class="fa fa-close"></i> Fechar
                </span>
            </button>
        </div>
        <div class="col-xs-6 col-md-6 text-center">
            <button type="submit" class="no-bg apply-effect btn-registro btn btn-primary" data-toggle="tooltip" data-placement="left" data-original-title="Concluir Cadastro">
                <i class="fa fa-user-plus"></i> Criar Conta
            </button>
        </div>
    </div>
</form>