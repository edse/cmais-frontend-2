        <!-- publicidade -->
        <?php if(isset($displays[0])): ?>
        <div style="width: 728px; height: 90px; overflow: hidden;">
        <?php echo html_entity_decode($displays[0]->getHtml()) ?>
        </div>
        <?php endif; ?>
        <!-- /publicidade -->
