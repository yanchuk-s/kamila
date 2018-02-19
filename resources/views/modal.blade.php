<!-- ANKETA MODAL -->

<div class="modal fade standartModal anketamodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-contact-modal" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Анкета</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input name="name" id="modalContactName" type="text" class="form-control">
                        <label id="inc-modal-name" for="name">Имя</label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input name="email" id="modalContactEmail" type="text" class="form-control">
                        <label id="inc-modal-email" for="email">Электронный адрес</label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input name="phone" id="modalContactPhone" type="text" class="form-control">
                        <label id="inc-modal-phone" for="phone">Номер телефона</label>
                    </div>
                    <div class="btn-wrapper">
                        <button id="modalContactSend" type="submit" class="btn btn-make-app">Отправить</button>
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>

        </div>
    </div>
</div>