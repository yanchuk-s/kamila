<!-- ANKETA MODAL -->

<div class="modal fade standartModal orderColl" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal_md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-contact-modal" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{trans('lang.orderCollTitle')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{trans('lang.orderColl-p')}}</p>

                <form method="post">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input name="name" id="orderColl-name" type="text" class="form-control">
                        <label id="inc-orderColl-name" for="name">{{trans('lang.orderCollName')}}</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input name="phone" id="orderColl-phone" type="text" class="form-control">
                        <label id="inc-orderColl-phone" for="phone">{{trans('lang.orderCollPhone')}}</label>
                    </div>
                    <div class="btn-wrapper">

                        <button id="orderCollBtn" type="submit" class="btn btn-make-app modal-btn">
                            <div class="spinner">
                                <div class="bounce1 home"></div>
                                <div class="bounce2 home"></div>
                                <div class="bounce3 home"></div>
                            </div>
                            <span>{{trans('lang.orderCollBtn')}}</span>
                        </button>
                    </div>
                    <div class="clearfix"> </div>
                </form>

            </div>

        </div>
    </div>
</div>