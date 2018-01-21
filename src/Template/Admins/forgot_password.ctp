<?php 
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout='login';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <?php echo $this->Html->image('ev-logo.png',array('style'=>'display: block;margin-left: auto;margin-right: auto;')); ?>
                        <h4 style="text-align:center">E-vidyalay | Worksheet Admin</h4>
                    </div>
                    <div class="panel-body">
                        <blockquote>
                            <p>Please enter your username. You will receive a new password to your registered Email address.</p>
                        </blockquote>
                        <?php echo $this->Form->create() ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'Username',
                                            'type'=>'text',
                                            'required',
                                            'autofocus',
                                            'label'=>'Username'
                                        ));
                                    ?>
                                </div>
                                <?php
                                    echo $this->Form->input('Forgot Password',array(
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
                        echo $this->Html->link('Login',array('controller' => 'admins', 'action' => 'login'),array('escape' => false));?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://worksheet.evidyalay.net"><i class="fa fa-arrow-left fa-fw"></i> Back to WorksheetApp</a>
                    </div>
                </div>
                <br/>
                <div class="ev-alert">
                <?=$this->Flash->render()?>
                </div>
            </div>
        </div>
    </div>