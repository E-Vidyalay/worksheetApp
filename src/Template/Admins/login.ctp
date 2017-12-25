<?php 
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout='login';
?>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h4 style="text-align:center">Worksheet App | Admin Login</h4>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create() ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'Email',
                                            'type'=>'text',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('password',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'Password',
                                            'type'=>'password',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <?php
                                    echo $this->Form->input('Login',array(
                                            'type'=>'submit',
                                            'div'=>false,
                                            'label'=>false,
                                            'class'=>'btn btn-lg btn-success btn-block'
                                        ));
                                ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                <?php
                        echo $this->Html->link('Forgot password?',array('controller' => 'Admins', 'action' => 'forgot_password'),array('escape' => false));?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->Html->link('<i class="fa fa-arrow-left fa-fw"></i> Back to Worksheet App',array('controller'=>'pages','action'=>'display'),array('escape'=>false)); ?>
                    </div>
                </div>
                <div class="ev-alert">
                    <?=$this->Flash->render()?>
                </div>
            </div>
        </div>
    </div>
</div>