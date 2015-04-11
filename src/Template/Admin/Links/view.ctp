<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Learning Post'), ['action' => 'edit', $learningPost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Learning Post'), ['action' => 'delete', $learningPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $learningPost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Learning Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Learning Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Learning Categories'), ['controller' => 'LearningCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Learning Category'), ['controller' => 'LearningCategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="learningPosts view large-10 medium-9 columns">
    <h2><?= h($learningPost->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Learning Category') ?></h6>
            <p><?= $learningPost->has('learning_category') ? $this->Html->link($learningPost->learning_category->title, ['controller' => 'LearningCategories', 'action' => 'view', $learningPost->learning_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($learningPost->title) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($learningPost->slug) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($learningPost->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($learningPost->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($learningPost->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Body') ?></h6>
            <?= $this->Text->autoParagraph(h($learningPost->body)); ?>

        </div>
    </div>
</div>
