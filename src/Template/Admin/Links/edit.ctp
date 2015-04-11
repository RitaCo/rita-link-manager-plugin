<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $learningPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $learningPost->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Learning Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Learning Categories'), ['controller' => 'LearningCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Learning Category'), ['controller' => 'LearningCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="learningPosts form large-10 medium-9 columns">
    <?= $this->Form->create($learningPost); ?>
    <fieldset>
        <legend><?= __('Edit Learning Post') ?></legend>
        <?php
            echo $this->Form->input('learning_category_id', ['options' => $learningCategories, 'empty' => true]);
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
