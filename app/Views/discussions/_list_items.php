<div class="mt-4 my-6 flex justify-between">
    <?= form_open('discussions', [
        'method' => 'get', 'id' => 'discussion-search',
        'hx-boost' => 'true', 'hx-select' => '#discussion-list',
        'hx-target' => '#discussion-list', 'hx-swap' => 'outerHTML show:window:top'
    ]); ?>
    <?= form_dropdown('search[type]', $table['dropdowns']['type'], set_value('search[type]', $table['search']['type'] ?? ''), [
        'class' => 'select w-auto', 'id' => 'search-type', 'hx-on:change' => 'htmx.trigger("#discussion-search", "submit")'
    ]); ?>
    <?= form_close(); ?>

    <?php if ($threads): ?>
        <div hx-boost="true" hx-select="#discussion-list"
             hx-target="#discussion-list" hx-swap="outerHTML show:window:top"
        >
            <?= $table['pager']->links(); ?>
        </div>
    <?php endif; ?>
</div>

<?php if ($threads): ?>
    <div class="mt-6 p-6 border rounded bg-base-200 border-base-300">
        <?php foreach($threads as $thread) : ?>
            <?= view('discussions/_list_item', ['thread' => $thread]) ?>
        <?php endforeach ?>
    </div>

    <div class="mt-6 text-center"
         hx-boost="true" hx-select="#discussion-list"
         hx-target="#discussion-list" hx-swap="outerHTML show:window:top"
    >
        <?= $table['pager']->links(); ?>
    </div>
<?php else: ?>
    <div class="mt-6 p-6 border rounded bg-base-200 border-base-300">
        <p>Sorry, there are no discussion to display.</p>
    </div>
<?php endif ?>