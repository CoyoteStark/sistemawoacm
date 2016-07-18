<a type="button" class="btn btn-default" href="{{ URL::route('rol.edit', [$rol->id]) }}"><i class="fa fa-pencil-square fa-2x"></i></a>

<a type="button" class="formConfirm" data-form="#frmDelete-{{$rol-edit}}"><i class="formConfirm fa fa-trash fa-2x btn btn-default" href=""></i></a>

<!-- Permisos Rol queda pendiente-->






<!-- termina permisos rol-->

{!! Form::open(array('route' => array('rol.destroy', $rol->id), 'method' => 'delete','id' => 'frmDelete-' . $rol->id))  !!}

{!! Form::close() !!}

<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="frm_title">Eliminar elemento</h4>
		</div>
		<div class="modal-body" id="frm_body">
			¿Estas seguro de eliminar este usuario?
		</div>
		<div class="modal-footer">
		<button style='margin-left:10px;' type="button" class="btn btn-primary col-sm-2 pull-right" id="frm_submit">Confirmar</button>
		<button type="button" class="btn btn-danger col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">Cerrar</button>
		</div>
	</div>
</div>
</div>
@include('comun.script')