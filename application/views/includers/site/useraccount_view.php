<div class="container pb-0 mb-0" >
    <div class=" mt-20">
        <div class="col-md-10   menu-user-logged" >
            <div class="nav">
                <ul class="list-inline" >
                    <?php foreach ($navtop as $item): ?>
                        <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


        <div class="col-md-2 ">

            <div class="form-group pull-right">
                <?php
                foreach ($btnlogin as $itemlogin):
                    echo $itemlogin;
                endforeach;
                ?>
            </div>


        </div>
        <div class="clearfix mb-20"></div>
    </div>
</div>

<hr class="pb-0 mb-0 mt-0 pt-0"/>

<div class="container">
        <!-- Se usuário estiver logado -->
            <div class="col-md-2">
                    <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand">
                                <a href="#">
                                    Minha conta
                                </a>
                            </li>
                            <li>
                                <a href="#">Perfil</a>
                            </li>
                            <li>
                                <a href="#">Minhas reclamações</a>
                            </li>
                            <li>
                                <a href="#">Dados de Contato</a>
                            </li>
                            <li>
                                <a href="#">Alterar Senha</a>
                            </li>

                        </ul>
                    </div>
                <!-- /#sidebar-wrapper -->
            </div>
        
            <div class="col-md-7 content-user-logged" >

                    <h3>Ultimas Reclamações</h3>
            </div>

</div>


<hr class="mt-0 mb-0 pt-0 pb-0"/>
<div class="clearfix"></div>







