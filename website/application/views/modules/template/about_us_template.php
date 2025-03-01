
    <section class="page-header border-bottom-0 border-width-2">
        <div class="container">
            <div class="row">
                <div class="col align-self-center p-static">
                    <ul class="breadcrumb d-block">
                        <li><a href="<?=front_base_url();?>">Home</a></li>
                        <li class="active"><?=$PAGE_DETAILS[0]['page_title'];?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0 support-form">
        <div class="container">
            <div class="container-spacing bg-white rounded-3">
                <div class="sec-title">
                    <h2 class="text-center"><?=$PAGE_DETAILS[0]['page_title'];?></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <?=$PAGE_DETAILS[0]['page_details'];?>
                    </div>
                </div>
            </div>
        </div>
    </section>
