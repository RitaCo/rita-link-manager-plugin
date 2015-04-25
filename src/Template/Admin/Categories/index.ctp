<?php
   $this->Rita->setPageCaption('پیوندها')
   ->setPageCaption('دسته‌بندی')
   ->setPageNote('شماهمکنون تمامی دسته بندی های تعریف شده در افزونه پیوندها را مشاهده می‌نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
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
            <th><?= $this->Paginator->sort('title','عنوان') ?></th>
            <th><?= $this->Paginator->sort('slug','نامک') ?></th>
            <th width="95px"><?= $this->Paginator->sort('created','ایجاد') ?></th>
            <th width="95px"><?= $this->Paginator->sort('modified','ایجاد') ?></th>
            
            <th width="160px" class="actions"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Categories as $learningCategory): ?>
        <tr>
            <td><?= $this->Number->format($learningCategory->id) ?></td>
            <td><?= p($learningCategory->title) ?></td>
            <td><?= p($learningCategory->slug) ?></td>
            <td><?= p($learningCategory->created) ?></td>
            <td><?= p($learningCategory->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('ویرایش'), ['action' => 'edit', $learningCategory->id],['class' => 'btn btn-green']) ?>
                <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $learningCategory->id], ['class' => 'btn btn-red', 'confirm' => __('Are you sure you want to delete # {0}?', $learningCategory->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    
</div>

	</div>

	</div>
</div>

