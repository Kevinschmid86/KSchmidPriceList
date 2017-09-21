/**
 * Created by kevin.schmid on 21.09.2017.
 */
Ext.define('Shopware.apps.KSchmidPriceList.controller.Main', {
    extend: 'Enlight.app.Controller',
    init: function() {
        var me = this;
        me.mainWindow = me.getView('list.Window').create({ }).show();
    }
});