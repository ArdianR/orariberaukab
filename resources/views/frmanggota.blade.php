@extends('layouts.plane')
@section('body')
<div id="frm" style="width: 750px;"></div>
@push('scripts')
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
@endpush
@stop