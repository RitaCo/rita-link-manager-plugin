<?php
   $this->assign('title','مدیریت / موضوع‌ها');
   $this->assign('note','فهرست تمامی موضوع‌ها');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
					<a class="btn" href="<?= $this->Url->build(['action' => 'add'])?>">	
						<i class="  icon-createfolder"></i>
						<span>جدید</span>
					</a>
					
				</div>
			</div>
		</div>
		<div class="body-splitter"></div>
		<div class="body-container padding-none">

            <div class="ui-dataGrid">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','شناسه') ?></th>
            <th><?= $this->Paginator->sort('category_id','موضوع') ?></th>
            <th><?= $this->Paginator->sort('title','عنوان') ?></th>
            <th><?= $this->Paginator->sort('slug', 'نامک ') ?></th>
            <th><?= $this->Paginator->sort('created','ایجاد') ?></th>
            <th><?= $this->Paginator->sort('modified', 'تغییر') ?></th>
            
            <th class="actions"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Posts as $Post): ?>
        <tr>
            <td><?= $this->Number->format($Post->id) ?></td>
            <td>
                <?= $Post->category->title ?>
            </td>
            <td><?= h($Post->title) ?></td>
            <td><?= h($Post->slug) ?></td>
            <td><?= h($Post->created) ?></td>
            <td><?= h($Post->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('مشاهده', ['action' => 'view', $Post->id],['class' => 'btn']) ?>
                <?= $this->Html->link('ویرایش', ['action' => 'edit', $Post->id],['class' => 'btn btn-green']) ?>
                <?= $this->Form->postLink('حذف', ['action' => 'delete', $Post->id], ['class' => 'btn btn-red','confirm' => __('Are you sure you want to delete # {0}?', $Post->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
    </table>
    
</div>

	</div>

	</div>
</div>

