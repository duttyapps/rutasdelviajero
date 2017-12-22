<div class="panel panel-form bounceIn animated">
    <div class="panel-heading">
        Las mejores ofertas de vuelo nacionales e internacionales
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-lg-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="rd_tipo" id="rd_idavuelta" value="1" checked>
                        Ida/Vuelta
                    </label>
                </div>
            </div>
            <div class="col-xs-6 col-lg-6">
                <div class="radio">
                    <label>
                        <input type="radio" name="rd_tipo" id="rd_ida" value="2">
                        Solo Ida
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="input-origen">Origen</label>
                    <input type="text" class="form-control" id="input-origen" placeholder="Ej. Aeropuerto Internacional Jorge Chavez" data-provide="typeahead" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="input-destino">Destino</label>
                    <input type="text" class="form-control" id="input-destino" placeholder="Ej. Aeropuerto Internacional Alejandro Velasco Astete" data-provide="typeahead" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="fecha_ida">Fecha de Ida</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" id="fecha_ida" value="<?php echo date('d/m/Y');?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="fecha_regreso">Fecha de Regreso</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" id="fecha_regreso" value="<?php echo date('d/m/Y', strtotime('tomorrow'));?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pasajeros</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">&nbsp;</label>
                    <button type="submit" class="form-control btn btn-primary">Buscar</button>
                </div>
            </div>
        </div>
    </div>
</div>