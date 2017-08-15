<!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
<!--<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">-->
<!--<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>-->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#thankyou-popup">
  Thank You modal
</button>
    
<!-- Diseno Modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#diseno-popup">
  Diseño grafico modal
</button>

<!-- promo Modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#promo-popup">
  Promo modal
</button>

<!-- promo Modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#web-popup">
  Web Modal
</button>

<!-- Thank You Modal -->
<div class="container thankyou-modal">
    
    <div class="modal fade" id="thankyou-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    
        <div class="modal-dialog" role="document">
          
            <div class="modal-content" style="border-radius:0px;">
                
                <div class="modal-header" style="border:0px;">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h4 class="modal-title text-center" style="font-size:2em;">Gracias por su compra</h4>
                </div>
              
                <div class="modal-body">
                    
                    <p style="font-size:16px;">¡Listo! En breves minutos nos estaremos comunicando con usted para concretar la compra, si no nos contactamos en más de 30 minutios, 
                    llamenos al número +56 9 999 99 99 que con gusto le atenderemos.</p>
                    
                    <br>
                    
                    <div class="row" style="padding:15px;">
                        
                        <ul class="list-inline list-unstyled">
                            
                            <li class="col-sm-6">
                                
                                <span style="font-size:20px;">Detalles de la compra</span>
                                <br>
                                <br>
                                
                                <div class="factura">
                                    
                                    <ol style="padding-left:15px;">
                                        <li>Impresión 33x48     <span class="price pull-right">$1.000</span></li>
                                        <li>Impresión 22x33     <span class="price pull-right">$1.000</span></li>
                                        <li>Impresión 22x33     <span class="price pull-right">$1.000</span></li>
                                        <li>Impresión 22x33stkr <span class="price pull-right">$550</span></li>
                                    </ol>
                                    
                                    <br>
                                    
                                    <ul class="list-unstyled">
                                        <li><b>Subtotal             <span class="price pull-right">$3.550</span></b></li>
                                        <li><b>IVA 19%              <span class="price pull-right">$674,5</span></b></li>
                                        <li class="total">Total     <span class="price pull-right">$4.224,5</span></li>
                                    </ul>
                                    
                                    <br>
                                    
                                    <p>
                                        Nuestras oficinas -Arturo prat 251 <br>
                                        Teléfono: +56 9 999 99 99 / +56 2 222 22 22 <br>
                                        RUT:5778940218-k
                                    </p>
                                    
                                    
                                </div>
                                
                                <a href="" style="color:black;font-size: 1.5em;margin:1em;" class="pull-right"><span class="glyphicon glyphicon-print"></span>IMPRIMIR</a>
                                
                            </li>
                        
                            <li  class="col-sm-6 form-factura">
                                
                                <span class="col-sm-10" style="padding-left: 0px;">¿Te enviamos la factura? </span>
                                <span class="col-sm-2">
                                    <div class="row press">
                                        <input type="checkbox" id="envio_factura" class="cbx hidden"/>
                                        <label for="envio_factura" class="lbl"></label>    
                                    </div>
                                </span>
                                <br>
                                <br>
                        
                                <ul class="list-unstyled">
                            
                                    <li>Datos de la factura</li>
                                    
                                    <li>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Razón Social</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">RUT</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Teléfono</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Dirección</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">E-Mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Giro</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        
                                        <p>Recuerda que el trabajo no se imprimira sin antes enviar el comprobante de pago a facturas@joint.cl Gracias!</p>
                                        
                                        <br>
                                        
                                        <button>ENVIAR</button>
                                        
                                    </li>
                                    
                                </ul>
                            
                            </li>
                        
                        </ul>
                        
                    </div>
                        
                </div>
        
            </div>

        </div>
  
    </div>

</div>

<!-- Diseno modal-->
<div class="container diseno-modal">
    
    <div class="modal fade" id="diseno-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    
        <div class="modal-dialog" role="document">
          
            <div class="modal-content" style="border-radius:0px;">
                
                <div class="modal-header" style="border:0px;">
                    
                   <img src="/wp-content/themes/joint/images/banner-diseno-popup.jpg" alt="" class="img-responsive">
                    
                </div>
              
                <div class="modal-body">
                    
                    <div class="row" style="padding:15px;">
                            
                        <div class="col-sm-4">
                            
                            <div class="card active">Tarjetas de visita</div>
                            
                        </div>
                        
                        <div class="col-sm-4">
                            
                            <div class="card">Agregar otro diseño</div>
                            
                        </div>
                        
                        <div class="col-sm-4">
                            
                            <div class="card">Cambiar otro tipo de diseño</div>
                            
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Fase del Diseño</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Idea </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="1" class="cbx hidden"/>
                                                    <label for="1" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Boceto </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="2" class="cbx hidden"/>
                                                    <label for="2" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">No sé </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="3" class="cbx hidden"/>
                                                    <label for="3" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Tipo de Diseño</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Básico </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="4" class="cbx hidden"/>
                                                    <label for="4" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Estandar </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="5" class="cbx hidden"/>
                                                    <label for="5" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Excelencia</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="6" class="cbx hidden"/>
                                                    <label for="6" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>¿Cuando lo quieres?</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Lo antes posible </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="7" class="cbx hidden"/>
                                                    <label for="7" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">1 a 2 semanas </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="8" class="cbx hidden"/>
                                                    <label for="8" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Tengo tiempo</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="9" class="cbx hidden"/>
                                                    <label for="9" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                            </div>
                            
                            <div class="clearfix"></div>
                                    
                        </ul>
                       
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Formatos</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">JPG/TIFF "no editable"</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="10" class="cbx hidden"/>
                                                    <label for="10" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">PDF/Ai "editable" </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="11" class="cbx hidden"/>
                                                    <label for="11" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Todos los formatos </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="12" class="cbx hidden"/>
                                                    <label for="12" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Diseño ambas caras</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-4">No </span>
                                            <span class="col-sm-4">
                                                <div class="row press">
                                                    <input type="checkbox" id="13" class="cbx hidden"/>
                                                    <label for="13" class="lbl"></label>    
                                                </div>
                                            </span>
                                            <span class="col-sm-4">Si </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Agregar Impresion</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Si </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="14" class="cbx hidden"/>
                                                    <label for="14" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">No </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="15" class="cbx hidden"/>
                                                    <label for="15" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <br>
                            <br>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Laminado</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Mate </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="16" class="cbx hidden"/>
                                                    <label for="16" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Brillante </span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="17" class="cbx hidden"/>
                                                    <label for="17" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                
                            </div>
                                    
                        </ul>
                        
                        <div class="clearfix"></div>
                        
                        <br>
                        <br>
                        
                        <div class="resultados">
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <small>Mientras mas unidades, menor es el precio.</small>
                            
                        </div>
                        
                        <div class="totales">
                            
                            <div class="total">$45.000 + IVA</div>
                            
                            <br>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">E-Mail</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su correo electrónico">
                            </div>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su nombre">
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-xs-12">
                                
                                <button>ENVIAR</button>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                        
                </div>
        
            </div>

        </div>
  
    </div>

</div>

<!-- Diseno modal-->
<div class="container promo-modal">
    
    <div class="modal fade" id="promo-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    
        <div class="modal-dialog" role="document">
          
            <div class="modal-content" style="border-radius:0px;">
                
                <div class="modal-header" style="border:0px;">
                    
                   <img src="/wp-content/themes/joint/images/banner-promo-popup.jpg" alt="" class="img-responsive">
                    
                </div>
              
                <div class="modal-body">
                    
                    <div class="row" style="padding:15px;">
                            
                        <div class="col-sm-4">
                            
                            <div class="card active">Tarjetas de visita</div>
                            
                        </div>
                        
                        <div class="col-sm-4">
                            
                            <div class="card">Agregar otro diseño</div>
                            
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <Label class="col-sm-9">Tiene el diseño</Label>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="1p" class="cbx hidden"/>
                                                    <label for="1p" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="glyphicon glyphicon-paperclip"></span> Adjuntar archivo
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <Label class="col-sm-9">Envio a domicilio</Label>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="4" class="cbx hidden"/>
                                                    <label for="4" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Laminado</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Mate</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="7" class="cbx hidden"/>
                                                    <label for="7" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Brillante</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="8" class="cbx hidden"/>
                                                    <label for="8" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                            </div>
                            
                            <div class="clearfix"></div>
                                    
                        </ul>
                       
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Diseño ambas caras</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Si</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="10" class="cbx hidden"/>
                                                    <label for="10" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">No</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="11" class="cbx hidden"/>
                                                    <label for="11" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>¿Donde te lo llevamos?</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <textarea name="" id="" class="form-control" style="min-height:45px;"></textarea>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Cuantas Unidades</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <select name="" id="" class="form-control">
                                                <option value="">200</option>
                                            </select>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <br>
                            <br>
                                    
                        </ul>
                        
                        <div class="clearfix"></div>
                        
                        <br>
                        <br>
                        
                        <div class="resultados">
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <small>Mientras mas unidades, menor es el precio.</small>
                            
                        </div>
                        
                        <div class="totales">
                            
                            <div class="total">$32.000 + IVA</div>
                            
                            <br>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">E-Mail</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su correo electrónico">
                            </div>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su nombre">
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-xs-12">
                                
                                <button>ENVIAR</button>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                        
                </div>
        
            </div>

        </div>
  
    </div>

</div>

<!-- Web modal-->
<div class="container web-modal">
    
    <div class="modal fade" id="web-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    
        <div class="modal-dialog" role="document">
          
            <div class="modal-content" style="border-radius:0px;">
                
                <div class="modal-header" style="border:0px;">
                    
                   <img src="/wp-content/themes/joint/images/banner-web-popup.jpg" alt="" class="img-responsive">
                    
                </div>
              
                <div class="modal-body">
                    
                    <div class="row" style="padding:15px;">
                            
                        <div class="col-sm-4">
                            
                            <div class="card active">Tarjetas de visita</div>
                            
                        </div>
                        
                        <div class="col-sm-4">
                            
                            <div class="card">Agregar otro diseño</div>
                            
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <Label class="col-sm-9">Tiene el diseño</Label>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="1p" class="cbx hidden"/>
                                                    <label for="1p" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="glyphicon glyphicon-paperclip"></span> Adjuntar archivo
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <Label class="col-sm-9">Envio a domicilio</Label>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="4" class="cbx hidden"/>
                                                    <label for="4" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Laminado</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Mate</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="7" class="cbx hidden"/>
                                                    <label for="7" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">Brillante</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="8" class="cbx hidden"/>
                                                    <label for="8" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                            </div>
                            
                            <div class="clearfix"></div>
                                    
                        </ul>
                       
                        <ul class="list-inline list-unstyled text-left" style="padding:15px;">
                            
                            <!--fase de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Diseño ambas caras</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <span class="col-sm-9">Si</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="10" class="cbx hidden"/>
                                                    <label for="10" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <span class="col-sm-9">No</span>
                                            <span class="col-sm-3">
                                                <div class="row press">
                                                    <input type="checkbox" id="11" class="cbx hidden"/>
                                                    <label for="11" class="lbl"></label>    
                                                </div>
                                            </span>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                        
                            </div>
                            
                            <!--Tipo de diseño-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>¿Donde te lo llevamos?</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <textarea name="" id="" class="form-control" style="min-height:45px;"></textarea>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                    
                            </div>
                            
                            <!--¿Cuándo lo quieres?-->
                            <div class="col-sm-4">
                                
                                <li>
                                
                                    <Label>Cuantas Unidades</Label>
                                    <!--opciones-->
                                    <ul class="list-unstyled">
                                        
                                        <li>
                                            <select name="" id="" class="form-control">
                                                <option value="">200</option>
                                            </select>
                                        </li>
                                        
                                    </ul>
                                            
                                </li>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <br>
                            <br>
                                    
                        </ul>
                        
                        <div class="clearfix"></div>
                        
                        <br>
                        <br>
                        
                        <div class="resultados">
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <div class="col-sm-4">
                                
                                <div class="item">Diseño estandar $25.000 <span class="glyphicon glyphicon-remove"></span></div>
                            
                            </div>
                            
                            <small>Mientras mas unidades, menor es el precio.</small>
                            
                        </div>
                        
                        <div class="totales">
                            
                            <div class="total">$32.000 + IVA</div>
                            
                            <br>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">E-Mail</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su correo electrónico">
                            </div>
                            
                            <div class="form-group col-sm-4">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="email" class="form-control" id="" placeholder="Ingrese su nombre">
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-xs-12">
                                
                                <button>ENVIAR</button>
                            
                            </div>
                            
                        </div>
                        
                    </div>
                        
                </div>
        
            </div>

        </div>
  
    </div>

</div>