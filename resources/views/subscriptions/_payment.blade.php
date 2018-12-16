<div class="row">
  <div class="col-md-12">
    <div class="panel no-border">
      <div class="panel-title">
        <div class="panel-head font-size-20">Introduzca los detalles del pago.</div>
      </div>

      <div class="panel-body">
        <div class="row">
         <div class="col-sm-3">
          <div class="form-group">
            {!! Form::label('payment_amount','Cantidad recibida') !!}
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-inr"></i></div>
              {!! Form::text('payment_amount',null,['class'=>'form-control', 'id' => 'payment_amount', 'data-amounttotal' => '0']) !!}
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            {!! Form::label('payment_amount_pending','Cantidad pendiente') !!}
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-inr"></i></div>
              {!! Form::text('payment_amount_pending',null,['class'=>'form-control', 'id' => 'payment_amount_pending', 'readonly']) !!}
            </div>
          </div>
        </div>


        <div class="col-sm-6">
          <div class="form-group">
           {!! Form::label('mode','Modo de pago') !!}
           {!! Form::select('mode',array('1' => 'Efectivo', '0' => 'Cheque'),1,['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'mode']) !!}
         </div>
       </div>

       <div id="chequeDetails">
         <div class="col-sm-6">
          <div class="form-group">
           {!! Form::label('number','Numero de Cheque') !!}
           {!! Form::text('number',null,['class'=>'form-control', 'id' => 'number']) !!}
         </div>
       </div>

       <div class="col-sm-6">
        <div class="form-group">
         {!! Form::label('date','Fecha del Cheque') !!}
         {!! Form::text('date',null,['class'=>'form-control datepicker-default', 'id' => 'date']) !!}
       </div>
     </div>
   </div>
 </div> <!-- /Row -->

</div> <!-- /Box-body -->

</div> <!-- /Box -->
</div> <!-- /Main Column -->
</div> <!-- /Main Row -->
