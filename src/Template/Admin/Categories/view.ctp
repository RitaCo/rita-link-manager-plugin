<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Learning Category'), ['action' => 'edit', $learningCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Learning Category'), ['action' => 'delete', $learningCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $learningCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Learning Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Learning Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Learning Posts'), ['controller' => 'LearningPosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Learning Post'), ['controller' => 'LearningPosts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="learningCategories view large-10 medium-9 columns">
    <h2><?= h($learningCategory->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($learningCategory->title) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($learningCategory->slug) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($learningCategory->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($learningCategory->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($learningCategory->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Note') ?></h6>
            <?= $this->Text->autoParagraph(h($learningCategory->note)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related LearningPosts') ?></h4>
    <?php if (!empty($learningCategory->learning_posts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Learning Category Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Body') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($learningCategory->learning_posts as $learningPosts): ?>
        <tr>
            <td><?= h($learningPosts->id) ?></td>
            <td><?= h($learningPosts->learning_category_id) ?></td>
            <td><?= h($learningPosts->title) ?></td>
            <td><?= h($learningPosts->body) ?></td>
            <td><?= h($learningPosts->slug) ?></td>
            <td><?= h($learningPosts->created) ?></td>
            <td><?= h($learningPosts->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'LearningPosts', 'action' => 'view', $learningPosts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'LearningPosts', 'action' => 'edit', $learningPosts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LearningPosts', 'action' => 'delete', $learningPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $learningPosts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
