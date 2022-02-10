
<?php $this->load->view('restrita/layout/navbar'); ?>

<?php $this->load->view('restrita/layout/sidebar'); ?>


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- add content here -->


            <?php if ($message = $this->session->flashdata('sucesso')): ?>

                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                    <div class="alert-icon"><i class="fa fa-check-circle fa-lg"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Perfeito!</div>
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <?php echo $message; ?>
                    </div>
                </div>

            <?php endif; ?>

            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body card-type-3">
                            <div class="row">
                                <div class="col">
                                    <h6 class="text-muted mb-0">Vendas concluídas</h6>
                                    <span class="font-weight-bold mb-0 font-28"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="card-circle bg-success text-white p-4">
                                        <i class="fas fa-shopping-cart fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>

           


        </div>
    </section>

    <?php $this->load->view('restrita/layout/sidebar_settings'); ?>       
</div>

