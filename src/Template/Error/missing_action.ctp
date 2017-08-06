<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

if($this->request->session()->read('Auth.User')==null){
	$this->layout='login';
}
else{
	$this->layout='default';	
}
?>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<?php if($this->request->session()->read('Auth.User')!=null){; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Error 404 <small> Page not found</small></h3>
            </div>
        </div>
    </div>
</div>
<?php };?>