Ext.define('Shopware.apps.KSchmidPriceList', {
    extend: 'Enlight.app.SubApplication',
    name:'Shopware.apps.KSchmidPriceList',
    loadPath: '{url action=load}',
    bulkLoad: true,
    controllers: [ 'Main' ],
    views: [
        'list.Window',
        'list.List',
        'detail.Container',
        'detail.Window'
    ],
    models: [ 'PriceList' ],
    stores: [ 'PriceList' ],
    launch: function() {
        return this.getController('Main').mainWindow;
    }
});