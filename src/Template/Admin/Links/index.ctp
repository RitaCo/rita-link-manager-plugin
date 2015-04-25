<?php
   $this->Rita->setPageCaption('پیوندها')
   ->setPageCaption('پیوند');

?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست پیوند ها</div>
	</div>
	<div class="panel-body padding-none ">
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
					<?= $this->Html->bottunIcon('پیوند جدید', 'mdi-plus-circle',['action' => 'add'] ); ?>
					
				</div>
			</div>
		</div>
		<div class="body-splitter"></div>
		<div class="body-container padding-none">

            <div class="ui-dataGrid">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th width="25px"><?= $this->Paginator->sort('id','#') ?></th>
            <th width="15%"><?= $this->Paginator->sort('category_id','موضوع') ?></th>
            <th width=""><?= $this->Paginator->sort('title','عنوان') ?></th>
            <th width=""><?= $this->Paginator->sort('url', 'آدرس') ?></th>
            <th width="70px"><?= $this->Paginator->sort('created','ایجاد') ?></th>
            <th width="70px"><?= $this->Paginator->sort('modified', 'تغییر') ?></th>
            
            <th width="138px" class="actions"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Links as $Post): ?>
        <tr>
            <td><?= $this->Number->format($Post->id) ?></td>
            <td>
                <?= $Post->category->title ?>
            </td>
            <td><?= h($Post->title) ?></td>
            <td><?= h($Post->url) ?></td>
            <td><?= h($Post->created->i18nFormat("YY/MM/dd")) ?></td>
            <td><?= h($Post->modified->i18nFormat("YY/MM/dd")) ?></td>
            <td class="actions">
                <div class="btn-group">
              
                <?= $this->Html->link('ویرایش', ['action' => 'edit', $Post->id],['class' => 'btn btn-green']) ?>
                <?= $this->Form->postLink('حذف', ['action' => 'delete', $Post->id], ['class' => 'btn btn-red','confirm' => __('Are you sure you want to delete # {0}?', $Post->id)]) ?>
                </div>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
    </table>
    


