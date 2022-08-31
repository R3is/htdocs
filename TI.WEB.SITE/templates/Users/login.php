<div class="row" style="--bs-gutter-x: 0 rem;">
    <div class="col-md-6 col-sm-12" style="background: #fe3e01; height: 100vh;">
        <div class="text-center p-t-12 cadastre_se" style=" padding-top: 20px;">
            <span class="txt3" style="color: white">
                Não tem conta?
            </span>
            <a><?= $this->Html->link('Cadastre-se', ['controller' => 'Users', 'action' => 'cadastro'], ['class' => 'txt3']); ?></a>

        </div>
        <center>
            <div class='log' style="color: white; padding-top: 80px;">
                <h4 style="font-size: 50px;"> Login </h4>
            </div>
        </center>
        <div class="formulario " style="margin: 50px;align-items: center;justify-content: center;margin-bottom: 6%;">
            <?= $this->Form->create() ?>
            <div class="form-group">
                <label for="email" style="font-size: x-large; font-weight: bolder; color: white">
                    E-mail:
                </label>
                <?= $this->Form->control('email', ['id' => 'EmailLogin', 'class' => 'col-12 form-control inputLogin', 'label' => false]) ?>
            </div>
            <div class="form-group">
                <label for="senha" style="font-size: x-large; font-weight: bolder; color: white">
                    Senha:
                </label>
                <?= $this->Form->control('password', ['id' => 'PasswordLogin', 'class' => 'col-12 form-control inputLogin', 'label' => false]) ?>
            </div>
            <div class="form-group-bt" style="text-align: center; margin-bottom: 10px;">
                <center style="padding-top: 20px"><?= $this->Flash->render() ?></center>
                <center
                    style="padding-top: 20px"><?= $this->Form->button(__('Entrar'), ['id' => 'btnSubmit', 'class' => 'btn', 'style' => 'background: #FFA21F;margin: 20px;border-radius: 20px; width: 150px;']); ?></center>
                <?= $this->Html->link('Direto ao site', ['controller' => 'Web', 'action' => 'index'], ['id' => 'btnSubmit', 'class' => 'btn', 'style' => 'background: #FFA21F;margin: 20px;border-radius: 20px; width: 150px;']); ?>
            </div>
            <div style="text-align: center" )><br></div>
            <div id="feedBackLogin" style="margin-left: 50px; margin-right: 50px;">

            </div>
            <div class="text-center p-t-12">
                <!--                <span class="txt3" style="color: white">-->
                <!--                    Esqueceu sua-->
                <!--                </span>-->
                <!--                <a class="txt3" href="#">-->
                <!--                    Senha?-->
                <!--                </a>-->
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="col-md-6">
        <?= $this->Html->image('igreja/capa_inicial.png', ['alt' => 'CakePHP', 'class' => 'img-fluid', 'style' => 'height: 100vh']); ?>
    </div>
</div>

