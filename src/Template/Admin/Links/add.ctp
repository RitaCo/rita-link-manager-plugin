<?php
   $this->Rita->setPageCaption('پیوندها')
   ->setPageCaption('پیوندها')->setPageCaption('پیوند جدید')
   ->setPageNote('شماهمکنون تمامی دسته بندی های تعریف شده در افزونه پیوندها را مشاهده می‌نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فرم ثبت پیوند جدید</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($post,['type' => 'file']); ?>

		<div class="body-container padding-none">
          
        <?php
            echo $this->Form->input('category_id', [ 'empty' => true, 'label' => 'موضوع']);
            echo $this->Form->input('title',['label' => 'عنوان']);
            echo $this->Form->input('url',['label' => 'آدرس' , 'dir' => 'ltr']);

        ?>
 
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

