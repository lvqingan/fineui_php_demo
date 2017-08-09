(function (F) {
    // F.Label
    $.extend(F.Label.prototype, {

        // FineUIMvc 专用
        f_setEnabled: function (enabled) {
            var me = this;
            me.setEnabled(enabled);

            var targetEl = me.getAttrEl();

            if(enabled) {
                targetEl.removeAttr('disabled');
                targetEl.attr('onclick', targetEl.data('onclick'));
            } else {
                targetEl.removeAttr('onclick');
                targetEl.attr('disabled', 'disabled');
            }
        }

    });
})(F);



