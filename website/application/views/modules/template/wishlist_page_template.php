<div class="main">
    <section class="login-section">
        <div class="container-fluid ps-0">
            <div class="row">
                
                <div class="col-md-12">
                    <?php if ($this->session->flashdata('successContactMSG')) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('successContactMSG'); ?>
                    </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('errorContactMSG')) { ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('errorContactMSG'); ?>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </section>
</div>