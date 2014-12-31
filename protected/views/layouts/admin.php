<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    
    <div class="span-4 last">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>