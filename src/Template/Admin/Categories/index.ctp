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
            <th><?= $this->Paginator->sort('id','#') ?></th>
            <th><?= $this->Paginator->sort('title','عنوان') ?></th>
            <th><?= $this->Paginator->sort('slug','نامک') ?></th>
            <th><?= $this->Paginator->sort('created','ثبت شده') ?></th>
            
            <th class="actions"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Categories as $learningCategory): ?>
        <tr>
            <td><?= $this->Number->format($learningCategory->id) ?></td>
            <td><?= h($learningCategory->title) ?></td>
            <td><?= h($learningCategory->slug) ?></td>
            <td><?= h($learningCategory->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $learningCategory->id],['class' => 'btn']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $learningCategory->id],['class' => 'btn']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $learningCategory->id], ['class' => 'btn', 'confirm' => __('Are you sure you want to delete # {0}?', $learningCategory->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    
</div>

	</div>

	</div>
</div>

