@extends('layouts.plane')

@section('body')
<div id="app" style="width: 100%; height: 760px"></div>

@push('scripts')
<script type="text/javascript">
    var pstyle = 'background-color: #D7E0E6; border-right: 1px solid silver;';
    var config = {
        layout: {
            name: 'layout',
            panels: [
                { type: 'top',size: 40 },
                { type: 'left', size: '180px', minSize: 100, resizable: true, style: pstyle },
                { type: 'main', overflow: 'hidden', style: 'padding-top: 5px;', content: '' },
                { type: 'bottom', size: 20 }
            ] 
        },
        toolbar:{
            name: 'toolbar',
            style: 'padding: 4px; border: 1px solid silver; border-radius: 3px',
            items:[
                 { type: 'menu',   id: 'item2', caption: 'Menu', icon: 'fa fa-table', items: [
                    { text: 'Item 1', icon: 'fa-camera', count: 5 }, 
                    { text: 'Item 2', icon: 'fa-picture', disabled: true }, 
                    { type: 'spacer' },
                    { text: 'Logout', icon: 'fa fa-user' }
                ]},               
                { type: 'spacer' },
                { type: 'button',   id: 'logout', text: 'Logout', icon: 'fa fa-user'}
               
            ]
        },
        footer:{
            name: 'footer',
            style: 'padding: 4px; border: 1px solid silver; border-radius: 3px',
            items:[
                 { type: 'menu',   id: 'item2', caption: 'Menu', icon: 'fa fa-table', items: [
                    { text: 'Item 1', icon: 'fa-camera', count: 5 }, 
                    { text: 'Item 2', icon: 'fa-picture', disabled: true }, 
                    { type: 'spacer' },
                    { text: 'Logout', icon: 'fa fa-user' }
                ]},               
                { type: 'spacer' },
                { type: 'button',   id: 'logout', text: 'Logout', icon: 'fa fa-user'}
               
            ]
        },
        sidebar:{
            name: 'sidebar',
            nodes: [ 
                { id: 'menu1', text: 'Keanggotan ORARI', icon: 'fa fa-square', expanded: true, group: true,
                  nodes: [ 
                            { id: 'mnAnggota', text: 'Daftar Anggota', icon: 'fa fa-users' }
                         ]
                },
                { id: 'menu2', text: 'Administrator', icon: 'fa fa-wrench', expanded: true, group: true,
                  nodes: [ { id: 'mnUser', text: 'Daftar User', icon: 'fa fa-user-secret' }]                 
                }
            ],        
            onClick: function(event){
                w2ui.sidebar.select(event.target);
                switch(event.target){
                    case 'mnAnggota': 
                        w2ui.layout.load('main','{{url("daftaranggota")}}');    
                    break;
                    default:

                    break;
                    }
                }
            }      
    }

	$(function () {		
	    $("#app").w2layout(config.layout);
        w2ui.layout.content('top',$().w2toolbar(config.toolbar));
        w2ui.layout.content('left',$().w2sidebar(config.sidebar));
        w2ui.layout.content('bottom',$().w2sidebar(config.footer));
        w2ui.layout.load('main','{{url("daftaranggota")}}');
	});
</script>
@endpush

@stop