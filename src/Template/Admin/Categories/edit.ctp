<?php
   $this->Rita->setPageCaption('پیوندها')
   ->setPageCaption('دسته‌بندی')
   ->setPageCaption('ویرایش پیوند')
   ->setPageNote('شما همکنون می‌توانید اصلاحات مورد نظر خود را اعمال و تغییرات را ذخیره نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فرم ثبت پیوند</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Category); ?>
        
		<div class="body-container padding-none">
        <?php
            echo $this->Form->input('title',[ 'label' => 'عنوان موضوع']);
            echo $this->Form->input('note',[ 'label' => 'توضیحات']);
            echo $this->Form->input('slug',[ 'label' => 'نامک']);
        ?>

	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

