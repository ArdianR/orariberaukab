<?php $__env->startSection('body'); ?>
<div id="grid" style="width: 100%; height: 695px"></div>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
$(function () {
	$().w2destroy('grid');

    $('#grid').w2grid({ 
        name    : 'grid',     
        method	: 'GET',
        header	: 'Daftar Keanggotan ORARI Lokal Berau',
        recid   : 'id',
        show	:{
        	toolbar: true, footer: true,toolbarAdd: true, toolbarDelete: true, toolbarEdit: true,lineNumbers: true, header: true, selectColumn: true
        }, 
        searches:[
        	{field: 'callsign', caption: 'Callsign', type: 'text'}
        ],           
        columns: [
        	{field: 'recid', caption: 'ID', type: 'int',size:'5px', sortable: true},
        	{field: 'callsign', caption: 'Callsign', type: 'text',size:'60px', sortable: true},
        	{field: 'nama', caption: 'Nama', type: 'text',size:'120px', sortable: true},
        	{field: 'nri', caption: 'NRI', type: 'text',size:'70px', sortable: true},
        	{field: 'kta', caption: 'KTA Berlaku', type: 'date',size:'70px', sortable: true},
        	{field: 'noktp', caption: 'No. KTP', type: 'text',size:'80px', sortable: true},
        	{field: 'sex', caption: 'Jenis Kelamin', type: 'text',size:'60px', sortable: true},
        	{field: 'idlokasi', caption: 'Tempat Lahir', type: 'text',size:'100px', sortable: true},
        	{field: 'tgllahir', caption: 'Tanggal Lahir', type: 'date',size:'70px', sortable: true},
        	{field: 'alamat', caption: 'Alamat', type: 'text',size:'200px', sortable: true},
        	{field: 'agama', caption: 'Agama', type: 'text',size:'60px', sortable: true},
        	{field: 'goldarah', caption: 'Gol. Darah', type: 'text',size:'10px', sortable: true},
        	{field: 'idprofesi', caption: 'Profesi', type: 'text',size:'120px', sortable: true},
        	{field: 'telepon', caption: 'Telepon', type: 'text',size:'70px', sortable: true},
        	{field: 'email', caption: 'Email', type: 'text',size:'100px', sortable: true},
        	{field: 'noskar', caption: 'No. SKAR', type: 'text',size:'150px', sortable: true},
        	{field: 'tglskar', caption: 'Tgl Terbit SKAR', type: 'date',size:'70px', sortable: true},
        	{field: 'noiar', caption: 'No. IAR', type: 'text',size:'100px', sortable: true},
        	{field: 'tgliar', caption: 'IAR Berlaku', type: 'date',size:'70px', sortable: true}
        ],
        onAdd: function(event){
        	 frmAnggota();
        }
    });

    w2ui['grid'].load('<?php echo e(url("ajaxdaftaranggota")); ?>');
});

function frmAnggota(){
   if(!w2ui.frm){
        $().w2form({
            name: "frm",
            formHTML: 
              '<div class="w2ui-page page-0">'+
              '    <div class="w2ui-field">'+
              '        <label>Callsign</label>'+
              '        <div>'+
              '              <input name="callsign" type="text" maxlength="100" size="10"/>'+
              '        </div>'+
              '    </div>'+
              '    <div class="w2ui-field">'+
              '       <label>Nama</label>'+
              '       <div>'+
              '         <input name="nama" type="text" maxlength="100" size="30"/>'+
              '       </div>'+
              '    </div>'+
              '    <div class="w2ui-field">'+
              '        <label>NRI</label>'+
              '        <div>'+
              '            <input name="nri" type="text" maxlength="100" size="20"/>'+
              '        </div>'+
              '    </div>'+
              '    <div class="w2ui-field">'+
              '        <label>KTA Berlaku</label>'+
              '        <div>'+
              '            <input name="tglkta" type="text" maxlength="100" size="20"/>'+
              '        </div>'+
              '    </div>'+
              '    <div class="w2ui-field">'+
              '        <label>No. KTP</label>'+
              '        <div>'+
              '            <input name="noktp" type="text" maxlength="100" size="30"/>'+
              '        </div>'+
              '    </div>'+
              '</div>'+
              '<div class="w2ui-buttons">'+
              '    <button class="btn" name="reset">Reset</button>'+
              '    <button class="btn btn-green" name="save">Save</button>'+
              '</div>',
            fields:[
                {field: 'callsign', type: 'text', required: true},
                {field: 'nama', type: 'text', required: true},
                {field: 'nri', type: 'text', required: true},
                {field: 'tglkta', type: 'date', required: true},
                {field: 'noktp', type: 'text', required: true}
            ],
            actions: {
                'save': function(){this.validate();},
                'reset': function(){this.clear();},
            }
        });
   }

   $().w2popup('open',{
        title: "Form Anggota ORARI", 
        body: '<div id="form" style="width: 100%; height: 100%;"></div>', 
        style: 'padding: 15px 0px 0px 0px',
        width: 600,
        height: 300,
        showMax: true,
        onToggle: function(event){
            $(w2ui.frm.box).hide();
            event.onComplete = function(){
                $(w2ui.frm.box).show();
                w2ui.frm.resize();
            }
        },
        onOpen: function(event){
            event.onComplete = function(){
                $('#w2ui-popup #form').w2render('frm');
            }
        }
   });
}
</script>
<?php $__env->appendSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>