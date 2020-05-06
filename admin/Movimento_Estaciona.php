<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include_once '_head-tcc.php';
    ?>

    <body>
        <?php
        include_once '_topo-tcc.php';
        include_once '_menu-tcc.php';
        ?>
        <div id="wrapper">

            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">

                        <div class="col-md-12">
                            <h2> ESTACIONAMENTO - PARKsys </h2>   
                            <hr/>
                            <h3> Movimentações do Estacionamento </h3>
                            <h5> (Aqui você irá realizar as movimentações de Entrada e Saída de Veículos do Estacionamento) </h5>
                            <hr/>
                        </div>


                    </div>

                    <form action="Movimento_Estaciona.php" method="post">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Placa do Veículo: </label>
                                <input type="text" class="form-control" placeholder="Informe a Placa aqui.." />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Marca / Veículo: </label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Data do Movimento: </label>
                                <input type="date" class="form-control" placeholder="Informe a data do movimento" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Hora de Entrada: </label>
                                <input type="time" class="form-control" placeholder="Informe o horário de entrada do veículo" />
                            </div>
                        </div>

                        <br/>

                        <center>
                            <button type="submit" class="btn btn-primary btn-lg"> Gerar Entrada </button>
                        </center>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        Entrada de Veículos encontrados
                                    </div>

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                                <thead>
                                                    <tr>
                                                        <th> Data do movimento </th>
                                                        <th> Placa </th>
                                                        <th> Marca/Veículo </th>
                                                        <th> Hora de Entrada </th>
                                                        <th> Hora da Saída </th>
                                                        
                                                        <th> Ação </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td> (data) </td>
                                                        <td> (placa) </td>
                                                        <td> (marca-veículo) </td>
                                                        <td> (hora de entrada) </td>
                                                        <td> (hora da saída) </td>
                                                        
                                                        <td>  
                                                            <a href="#" class="btn btn-success btn-xs"> Gerar Saída </a>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!--End Advanced Tables -->
                            </div>
                        </div>

                        <hr/>
                        <br/>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Placa do Veículo: </label>
                                <input type="text" class="form-control" placeholder="Informe a Placa aqui.." />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Marca / Veículo: </label>
                                <input type="text" class="form-control" placeholder="Digite aqui..." />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Data do Movimento: </label>
                                <input type="date" class="form-control" placeholder="Informe a data do movimento" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Hora da Saída: </label>
                                <input type="time" class="form-control" placeholder="Informe o horário da saída do veículo" />
                            </div>
                        </div>

                        <br/>

                        <center>
                            <button type="submit" class="btn btn-danger btn-lg"> Gerar Saída </button>
                        </center>

                    </form>

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->

    </body>
</html>
