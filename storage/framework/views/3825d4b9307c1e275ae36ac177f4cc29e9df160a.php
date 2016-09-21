<?php $__env->startSection('body'); ?>
<div id="frm" style="width: 750px;"></div>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
$(function () {
	$().w2destroy('frm');

	$('#frm').w2form({
		name: "form",
		header: "Form Anggota Orari",
		fields:[
			{field: 'test', type: 'text', required: true}
		],
		actions:{
			reset: function(){
				this.clear();
			}
		} 


	});
});
</script>
<?php $__env->appendSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>