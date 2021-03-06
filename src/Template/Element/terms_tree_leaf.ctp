<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>

<li id="vocabularyTerm_<?= $term->id; ?>">
    <div>
        <span style="cursor:move;"><?= $term->name; ?> (<?= $term->slug; ?>)&nbsp;&nbsp;&nbsp;</span>
        <div class="btn-group">
            <?=
                $this->Html->link('', [
                    'plugin' => 'Taxonomy',
                    'controller' => 'terms',
                    'action' => 'edit',
                    $term->id
                ], [
                    'title' => __d('taxonomy', 'Edit term'),
                    'class' => 'btn btn-default btn-xs glyphicon glyphicon-pencil',
                ]);
            ?>
            <?=
                $this->Html->link('', [
                    'plugin' => 'Taxonomy',
                    'controller' => 'terms',
                    'action' => 'delete',
                    $term->id
                ], [
                    'title' => __d('taxonomy', 'Delete this link'),
                    'confirm' => __d('taxonomy', 'Remove this term? Children terms will be re-assigned to the immediately superior parent term.'),
                    'class' => 'btn btn-default btn-xs glyphicon glyphicon-trash'
                ]);
            ?>
        </div>
    </div>

    <p><?= $info['children']; ?></p>
</li>